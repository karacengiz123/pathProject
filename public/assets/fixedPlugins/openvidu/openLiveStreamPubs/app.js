var OV;
var session;
var app;
var styleChat = "";
var timerInterval1 = null;
var timerInterval2 = null;
var videoElmTimer;
var vElmTimerId;
var videoTimer;
var videoElmTimer2;
var vElmTimerId2;
var videoTimer2;

var user = {
    name: "",
    avatar: "",
    sessionId: ""
};

/* İzleyici sayısı */
Object.size = function (obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }
    return size;
};
/* İzleyici sayısı bitiş */

/* Publisher */
function joinSession() {
    publishVue.inLiveLink = "https://onlinecontract.maxithings.com/subs/open/live/stream/"+publishVue.sessionId;
    publishVue.interview = 1;
    if (publishVue.pub == 1) {
        Swal.fire({
            title: 'Yayın Başlatılıyor.',
            timerProgressBar: true,
            allowOutsideClick: false,
            closeOnClickOutside: false,
            onBeforeOpen: () => {
                Swal.showLoading()
            },
        }).then((result) => {
        });
    } else {
        Swal.fire({
            title: 'Yayına Katılıyorsunuz.',
            timerProgressBar: true,
            allowOutsideClick: false,
            closeOnClickOutside: false,
            onBeforeOpen: () => {
                Swal.showLoading()
            },
        }).then((result) => {
        });
    }
    setTimeout(function () {
        let sessionId = publishVue.sessionId;
        user = {
            name: publishVue.username,
            avatar: publishVue.profileImage,
            sessionId: publishVue.sessionId
        };

        OV = new OpenVidu();
        session = OV.initSession();

        session.on("streamCreated", function (event) {
            session.subscribe(event.stream, "subscriber");
        });

        getToken(sessionId).then(token => {
            session.connect(token)
                .then(() => {
                    OV.getDevices().then(devices => {
                        // Getting only the video devices
                        var videoDevices = devices.filter(device => device.kind === 'videoinput');

                        // console.log(videoDevices);

                        if (videoDevices && videoDevices.length > 0) {
                            app = OV.initPublisher('publisher', {
                                videoSource: publishVue.isFrontCamera ? videoDevices[0].deviceId : videoDevices[1].deviceId,
                                publishAudio: true,
                                publishVideo: true,
                                mirror: publishVue.isFrontCamera,
                                resolution: resolutionDataHeight+"x"+resolutionDataWidth,
                            });
                            session.publish(app);
                            timerInterval1 = setInterval(function () {
                                // $("video").css({
                                //     "margin": "0",
                                //     "padding": "0",
                                //     "position": "fixed",
                                //     "width": "310%",
                                //     "min-width": "310%",
                                //     "max-width": "310%",
                                //     "height": "100%",
                                //     "min-height": "100%",
                                //     "max-height": "100%",
                                //     "top": "5vh",
                                //     "left": "-60vh",
                                //     "z-index": "-100",
                                //     "overflow": "hidden",
                                // });
                            }, 500);
                            setTimeout(function () {
                                publishVue.buttonShow = true;
                                if (publishVue.pub == 1) {
                                    // TOPLAM İZLEYİCİ HESAPLANACAK
                                    timerInterval2 = setInterval(function () {
                                        publishVue.subsCount = Object.keys(session.remoteConnections).length;
                                        session.signal({
                                            data: publishVue.subsCount,
                                            to: [],
                                            type: 'totalSub'
                                        })
                                            .then(() => {
                                            })
                                            .catch(error => {
                                                console.log(error);
                                            });
                                        timerTick();
                                    }, 1000);
                                    /* Bitiş */
                                    $.ajax({
                                        method: 'POST',
                                        url: '/pubs/live-stream-session-rec-db-save-publisher',
                                        async: false,
                                        data: {
                                            'sessionId': user.sessionId,
                                            'userId': publishVue.userId
                                        },
                                        success: function (data) {
                                            console.log(data);
                                            if (data.status == 200) {
                                                publishVue.liveStreamHistory = data.history;
                                                swal.close();
                                                publishVue.interview = 2;
                                            } else {
                                                Swal.fire({
                                                    type: 'error',
                                                    title: 'HATA',
                                                    text: 'Yayın Açılamadı.',
                                                    button: 'Tamam'
                                                }).then(function () {
                                                    leaveSession();
                                                });
                                            }
                                        },
                                        error: function (data) {
                                            console.log(data);
                                            Swal.fire({
                                                type: 'error',
                                                title: 'HATA',
                                                text: 'Yayın Açılamadı.',
                                                button: 'Tamam'
                                            }).then(function () {
                                                leaveSession();
                                            });
                                        }
                                    });
                                } else {
                                    timerInterval2 = setInterval(function () {
                                        videoElmTimer = $("#subscriber video");
                                        vElmTimerId = videoElmTimer.attr("id");
                                        videoTimer = $("#"+vElmTimerId);

                                        videoTimer.removeAttr('autoplay');
                                        videoTimer.attr('controls', '');

                                        videoElmTimer2 = $("#publisher video");
                                        vElmTimerId2 = videoElmTimer2.attr("id");
                                        videoTimer2 = $("#"+vElmTimerId2);

                                        videoTimer2.removeAttr('autoplay');
                                        videoTimer2.attr('controls', '');
                                    },500);
                                    swal.close();
                                    setTimeout(function () {
                                        Swal.fire({
                                            type: 'success',
                                            title: 'Görüşme Hazır.',
                                            confirmButtonText: 'Tamam',
                                        }).then(function () {
                                            $("#playButton").click();
                                        });
                                    }, 500);
                                }
                            }, 5000);
                        }
                    });

                })
                .catch(error => {
                    console.log("There was an error connecting to the session:", error.code, error.message);
                });
        });

        /* Chat için sinyal takibini yapıyor. */
        session.on('signal:chat', (event) => {
            // console.log("avatar: " + event.data.userAvatar);
            styleChat = "background-color: rgba(173, 168, 168, 0.2)!important;";
            if (JSON.parse(event.data).message == " Kullanıcısı yayına katıldı.") {
                styleChat = "background-color: rgba(31,255,0,0.3)!important;";
            }
            if (JSON.parse(event.data).message == " Kullanıcısı yayından ayrıldı.") {
                styleChat = "background-color: rgba(255,0,0,0.3)!important;";
            }
            $('#chat').append("<div class='bubbleWrapper'>" +
                "<div class='inlineContainer col-sm-12' style='" + styleChat + " display: flex!important; align-items: center!important;'>" +
                "<div class='col-sm-1' style='margin: 0!important; padding: 0!important; float: left!important;'>" +
                "<img class='inlineIcon col-sm-12' style='float: left!important; width: 45px!important; max-width: 45px!important; min-width: 45px!important; height: 45px!important; max-height: 45px!important; min-height: 45px!important; border-radius: 25px!important; padding: 0px!important; margin: 0px!important; margin-right: 10px!important;' " +
                "src='" + JSON.parse(event.data).userAvatar + "'>" +
                "</div>" +
                "<div class='col-sm-11' style='margin: 0!important; padding: 0!important; vertical-align: middle!important; display: block!important; word-break: break-all!important;'>" +
                "<div class='col-sm-12' style='margin: 0!important; padding: 0!important;'>" +
                "<b>" + JSON.parse(event.data).username + "</b> <br>" + JSON.parse(event.data).message + "" +
                "</div>" +
                "</div>" +
                "</div>" +
                "</div>");

            var elem = document.getElementById('chat');
            elem.scrollTop = elem.scrollHeight;
        });
        if (publishVue.pub == 2) {

            session.on('signal:totalSub', (event) => {
                publishVue.subsCount = event.data;
            });

            session.on('signal:timer', (event) => {
                publishVue.timer = event.data;
            });

            /* Publisher Çıkış yapınca sinyal  */
            session.on('signal:exit', (event) => {
                Swal.fire({
                    type: 'error',
                    title: 'Yayın bitti',
                    text: event.data + ' yayını bitirdi!',
                    button: 'Tamam'
                }).then(function () {
                    window.open('https://www.google.com.tr', '_self');
                });
            });
            /* Bitiş */
        }
    }, 500);
}

/* Publisher bitiş */

function leaveSession() {
    Swal.fire({
        title: 'Yayın Kapatılıyor.',
        timerProgressBar: true,
        allowOutsideClick: false,
        closeOnClickOutside: false,
        onBeforeOpen: () => {
            Swal.showLoading()
        },
    }).then((result) => {
    });
    setTimeout(function () {
        if (publishVue.pub == 1) {
            publishVue.leaveSession = true;
            if (timerInterval1 != null) {
                clearInterval(timerInterval1);
            }
            if (timerInterval2 != null) {
                clearInterval(timerInterval2);
            }
            session.signal({
                data: user.name,
                to: [],
                type: 'exit'
            })
                .then(() => {
                })
                .catch(error => {
                    console.log(error);
                });
            $.ajax({
                method: 'POST',
                url: '/pubs/live-stream-session-delete-publisher',
                async: false,
                data: {
                    'userId': publishVue.userId,
                    'sessionId': user.sessionId,
                    'streamSecond': publishVue.totalSecond
                },
                success: function (data) {
                    if (publishVue.pub == 1) {
                        window.open('/pubs/open/live/stream', '_self');
                    } else {
                        window.open('https://www.google.com.tr', '_self');
                    }
                },
                error: function (data) {
                    publishVue.leaveSession = false;
                    Swal.fire({
                        type: 'error',
                        title: 'HATA',
                        text: 'Yayın Kapatılamadı.',
                        button: 'Tamam'
                    }).then(function () {
                    });
                }
            });
        } else {
            if (session) {
                session.disconnect();
            }
            if (publishVue.pub == 1) {
                window.open('/pubs/open/live/stream', '_self');
            } else {
                window.open('https://www.google.com.tr', '_self');
            }
        }
    }, 500);
}

window.onbeforeunload = function () {
    if (!publishVue.leaveSession) {
        if (session) {
            leaveSession();
        }
    }
};

function getToken(sessionId) {
    return createSession(sessionId).then(sessionId => createToken(sessionId));
}

function createSession(sessionId) {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "POST",
            url: "/pubs/live-stream-add-session",
            data: {
                "sessionId": user.sessionId
            },
            success: function (data) {
                console.log(data);
                if (data.status == 200) {
                    resolve(user.sessionId);
                } else {
                    if (data.status == 409) {
                        resolve(user.sessionId);
                    } else {
                        Swal.fire({
                            type: 'error',
                            title: 'Yayın bitti',
                            text: 'Kullanıcı Yayını Açılamadı.',
                            button: 'Tamam'
                        }).then(function () {
                            if (publishVue.pub == 1) {
                                window.open('/pubs/open/live/stream', '_self');
                            } else {
                                window.open('https://www.google.com.tr', '_self');
                            }
                        });
                    }
                }
            },
            error: function (data) {
                Swal.fire({
                    type: 'error',
                    title: 'Yayın bitti',
                    text: 'Kullanıcı Yayını Açılamadı.',
                    button: 'Tamam'
                }).then(function () {
                    if (publishVue.pub == 1) {
                        window.open('/pubs/open/live/stream', '_self');
                    } else {
                        window.open('https://www.google.com.tr', '_self');
                    }
                });
            }
        });
    });
}

function createToken(sessionId) {
    console.log(user.sessionId);
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "POST",
            url: "/pubs/live-stream-session-add-token-publisher",
            data: {
                "sessionId": user.sessionId
            },
            success: function (data) {
                console.log(data);
                if (data.status == 200) {
                    // console.log(data.data);
                    resolve(data.data.token);
                } else {
                    Swal.fire({
                        type: 'error',
                        title: 'Yayın Hatası',
                        text: 'Yayına Giriş Yapılamadı.',
                        button: 'Tamam'
                    }).then(function () {
                        if (publishVue.pub == 1) {
                            window.open('/pubs/open/live/stream', '_self');
                        } else {
                            window.open('https://www.google.com.tr', '_self');
                        }
                    });
                }
            },
            error: function (data) {
                Swal.fire({
                    type: 'error',
                    title: 'Yayın Hatası',
                    text: 'Yayına Giriş Yapılamadı.',
                    button: 'Tamam'
                }).then(function () {
                    if (publishVue.pub == 1) {
                        window.open('/pubs/open/live/stream', '_self');
                    } else {
                        window.open('https://www.google.com.tr', '_self');
                    }
                });
            }
        });
    });
}

function toggleCamera() {
    OV.getDevices().then(devices => {
        // Getting only the video devices
        var videoDevices = devices.filter(device => device.kind === 'videoinput');

        // console.log(videoDevices);

        if (videoDevices && videoDevices.length > 1) {

            // Creating a new publisher with specific videoSource
            // In mobile devices the default and first camera is the front one
            var newPublisher = OV.initPublisher('publisher', {
                videoSource: publishVue.isFrontCamera ? videoDevices[1].deviceId : videoDevices[0].deviceId,
                publishAudio: true,
                publishVideo: true,
                mirror: !publishVue.isFrontCamera,
                resolution: resolutionDataHeight+"x"+resolutionDataWidth,
            });

            // Changing isFrontCamera value
            publishVue.isFrontCamera = !publishVue.isFrontCamera;

            // Unpublishing the old publisher
            session.unpublish(app);

            // Assigning the new publisher to our global variable 'publisher'
            app = newPublisher;

            // Publishing the new publisher
            session.publish(app);
        }
    });
}

function micStatusChange() {
    publishVue.isPublishAudio = !publishVue.isPublishAudio;
    app.publishAudio(publishVue.isPublishAudio);
}

function videoStatusChange() {
    publishVue.isPublishVideo = !publishVue.isPublishVideo;
    app.publishVideo(publishVue.isPublishVideo);
}

function timerTick() {
    if (publishVue.totalSecond === parseInt(publishVue.packetLimit)) {
        leaveSession();
    } else {
        publishVue.totalSecond++;
        if (publishVue.second <= 59) {
            publishVue.second++;
            if (publishVue.second === 59) {
                publishVue.minute += 1;
                publishVue.second = 0;
                if (publishVue.minute === 59) {
                    publishVue.hour += 1;
                    publishVue.minute = 0;
                }
            }
        }
        publishVue.timer = publishVue.hour + ':' + publishVue.minute + ':' + publishVue.second;
        session.signal({
            data: publishVue.timer,
            to: [],
            type: 'timer'
        });
    }
}

// Trigger photo take
function snap(canvasId,photoId,photoNo){
    Swal.fire({
        title: 'Fotoğraf Kayıt Ediliyor.',
        timerProgressBar: true,
        allowOutsideClick: false,
        closeOnClickOutside: false,
        onBeforeOpen: () => {
            Swal.showLoading()
        },
    }).then((result) => {
    });
    setTimeout(function () {
        let videoElm = $("#subscriber video");
        if (videoElm.length == 0){
            alert("Müşteri Vidyosu Bulunamadı.")
        }else {
            let vElmId = videoElm.attr("id");
            let canvas = $(canvasId)[0];
            let context = canvas.getContext('2d');
            let video = document.getElementById(vElmId);
            context.drawImage(video, 0, 0, 487, 680);
            let base64img = canvas.toDataURL("image/png");
            console.log(base64img);
            $.ajax({
                method: 'POST',
                url: '/pubs/live-stream-save-photo',
                async: false,
                data: {
                    'historyId': publishVue.liveStreamHistory.id,
                    'photoNo': photoNo,
                    'image': base64img,
                },
                success: function (data) {
                    console.log(data);
                    if (data){
                        Swal.fire({
                            type: 'success',
                            title: 'BAŞARILI',
                            text: 'Fotoğraf Kaydı Yapıldı',
                            button: 'Tamam'
                        }).then(function () {
                            $(photoId).attr({"src":base64img});
                        });
                    }else {
                        Swal.fire({
                            type: 'error',
                            title: 'HATA',
                            text: 'Fotoğraf Kaydı Yapılamadı',
                            button: 'Tamam'
                        }).then(function () {
                        });
                    }
                },
                error: function (data) {
                    Swal.fire({
                        type: 'error',
                        title: 'HATA',
                        text: 'Fotoğraf Kaydı Yapılamadı',
                        button: 'Tamam'
                    }).then(function () {
                    });
                }
            });
        }
    }, 500)
}

function playVideo() {
    if (timerInterval2 != null){
        clearInterval(timerInterval2);
        timerInterval2 = null;
    }
    videoElmTimer[0].play().then(()=>{
        videoElmTimer2[0].play().then(()=>{
            videoTimer.removeAttr('controls');
            videoTimer2.removeAttr('controls');
        });
    });
}

function sendMessage(message) {
    Swal.fire({
        title: 'Mesaj Gönderiliyor.',
        timerProgressBar: true,
        allowOutsideClick: false,
        closeOnClickOutside: false,
        onBeforeOpen: () => {
            Swal.showLoading()
        },
    }).then((result) => {
    });
    setTimeout(function () {
        $.ajax({
            method: 'POST',
            url: '/pubs/live-stream-send-message',
            async: false,
            data: {
                'historyId': publishVue.liveStreamHistory.id,
                'message': message,
                'phone': [$("#phone").val()]
            },
            success: function (data) {
                console.log(data);
                if (data.status == 200){
                    Swal.fire({
                        type: 'success',
                        title: 'BAŞARILI',
                        text: 'Mesaj Gönderildi.',
                        button: 'Tamam'
                    }).then(function () {
                    });
                }else {
                    Swal.fire({
                        type: 'error',
                        title: 'HATA',
                        text: 'Mesaj Gönderilemedi.',
                        button: 'Tamam'
                    }).then(function () {
                    });
                }
            },
            error: function (data) {
                Swal.fire({
                    type: 'error',
                    title: 'HATA',
                    text: 'Mesaj Gönderilemedi.',
                    button: 'Tamam'
                }).then(function () {
                });
            }
        });
    }, 500)
}
