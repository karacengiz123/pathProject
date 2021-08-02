var OV;
var session;
var publisher;
var styleChat = "";
var timerInterval1 = null;
var timerInterval2 = null;
var streamVideoElement;


var user = {
    name: "",
    avatar: "",
    sessionId: "",
    connectionId: ""
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
function joinSession(sessionId, username, userAvatar, connectionId) {
    user = {
        name: username,
        avatar: userAvatar,
        sessionId: sessionId,
        connectionId: connectionId
    };

    OV = new OpenVidu();
    session = OV.initSession();

    session.on("streamCreated", function (event) {
        session.subscribe(event.stream, "subscriber");
    });

    getToken(sessionId).then(token => {
        session.connect(token)
            .then(() => {
                /* İzleyici katıldı bilgisi sinyali */
                var messageData = {
                    username: user.name,
                    message: " Kullanıcısı yayına katıldı.",
                    userAvatar: user.avatar
                };
                session.signal({
                    data: JSON.stringify(messageData),
                    to: [],
                    type: 'chat'
                })
                .then(() => {
                    // console.log('yayına katıldınız.');
                })
                .catch(error => {
                    console.log(error);
                });
                /* Bitiş */
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
                    // $(".swal2-container").css({
                    //     "z-index": "9999999999999999999999999",
                    // })
                },500);
                timerInterval2 = setInterval(function () {
                    streamVideoElement = $("video");
                    streamVideoElement.removeAttr('autoplay');
                    streamVideoElement.attr('controls', '');
                    streamVideoElement.on('play', function () {
                        if (timerInterval2 != null){
                            clearInterval(timerInterval2);
                        }
                        streamVideoElement.removeAttr('controls');
                    });
                },500);

                setTimeout(function () {
                    publishVue.buttonShow = true;
                    // TOPLAM İZLEYİCİ HESAPLANACAK
                    swal.close();
                    setTimeout(function () {
                        Swal.fire({
                            type: 'success',
                            title: 'Yayın İzlemeye Hazır.',
                            confirmButtonText: 'İzle',
                        }).then(function () {
                            $("#playButton").click();
                        });
                    }, 1000);
                }, 5000);

            })
            .catch(error => {
                console.log("error");
            });
    });

    /* Chat için sinyal takibini yapıyor. */
    session.on('signal:chat', (event) => {
        // console.log("avatar: " + event.data.userAvatar);
        styleChat = "background-color: rgba(173, 168, 168, 0.2)!important;";
        if(JSON.parse(event.data).message == " Kullanıcısı yayına katıldı."){
            styleChat = "background-color: rgba(31,255,0,0.3)!important;";
        }
        if (JSON.parse(event.data).message == " Kullanıcısı yayından ayrıldı."){
            styleChat = "background-color: rgba(255,0,0,0.3)!important;";
        }
        $('#chat').append("<div class='bubbleWrapper'>" +
            "<div class='inlineContainer col-sm-12' style='"+styleChat+" display: flex!important; align-items: center!important;'>" +
                "<div class='col-sm-1' style='margin: 0!important; padding: 0!important; float: left!important;'>"+
                    "<img class='inlineIcon col-sm-12' style='float: left!important; width: 45px!important; max-width: 45px!important; min-width: 45px!important; height: 45px!important; max-height: 45px!important; min-height: 45px!important; border-radius: 25px!important; padding: 0px!important; margin: 0px!important; margin-right: 10px!important;' " +
                    "src='" + JSON.parse(event.data).userAvatar + "'>" +
                "</div>"+
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
            window.open('/closed-stream', '_self');
        });
    });
    /* Bitiş */
}
/* Publisher bitiş */

function sendMessage() {
    var messageData = {
        message: $('#message').val(),
        username: user.name,
        userAvatar: user.avatar
    };
    session.signal({
        data: JSON.stringify(messageData),  // Any string (optional)
        to: [],                     // Array of Connection objects (optional. Broadcast to everyone if empty)
        type: 'chat'             // The type of message (optional)
    })
    .then(() => {
        // console.log('Message successfully sent');
    })
    .catch(error => {
        console.error(error);
    });
    $('#message').val("");
}

function leaveSession() {
    Swal.fire({
        title: 'Yayından Ayrılıyorsunuz.',
        timerProgressBar: true,
        allowOutsideClick: false,
        closeOnClickOutside: false,
        onBeforeOpen: () => {
            Swal.showLoading()
        },
    }).then((result) => {
    });
    setTimeout(function () {
        publishVue.leaveSession = true;
        if (timerInterval1 != null){
            clearInterval(timerInterval1);
        }
        if (timerInterval2 != null){
            clearInterval(timerInterval2);
        }
        /* İzleyici ayrıldı bilgisi sinyali */
        var messageData = {
            username: user.name,
            message: " Kullanıcısı yayından ayrıldı.",
            userAvatar: user.avatar
        };
        session.signal({
            data: JSON.stringify(messageData),
            to: [],
            type: 'chat'
        })
        .then(() => {
            // console.log('yayından ayrıldı.');
        })
        .catch(error => {
            console.log(error);
        });
        /* Bitiş */

        session.disconnect();
        window.open('/closed-stream', '_self');
        publishVue.leaveSession = false;
    }, 500);
}

window.onbeforeunload = function () {
    if (!publishVue.leaveSession){
        if (session){
            leaveSession();
        }
    }
};

function getToken(mySessionId) {
    return createSession(mySessionId).then(sessionId => createToken(sessionId));
}

function createSession(sessionId) {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "POST",
            url: "/subs/get-live-stream-session-subscriber",
            data: {
                "sessionId": sessionId
            },
            success: function (data) {
                if (data.status == 200) {
                    console.log(data);
                    publishVue.streamOwner = (data.data.sessionId).substr(0,15)+"..";
                    resolve(data.data.sessionId);
                } else {
                    Swal.fire({
                        type: 'error',
                        title: 'Yayın bitti',
                        text: 'Bu Yayın Aktif Değildir.',
                        button: 'Tamam'
                    }).then(function () {
                        window.open('/closed-stream', '_self');
                    });
                }
            },
            error: function (data) {
                Swal.fire({
                    type: 'error',
                    title: 'Yayın bitti',
                    text: 'Kullanıcı Yayını Açılamadı.',
                    button: 'Tamam'
                }).then(function () {
                    window.open('/closed-stream', '_self');
                });
            }
        });
    });
}

function createToken(sessionId) {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "POST",
            url: "/subs/live-stream-session-add-token-subscriber",
            data:{
                "sessionId": sessionId
            },
            success: function (data) {
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
                        window.open('/closed-stream', '_self');
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
                    window.open('/closed-stream', '_self');
                });
            }
        });
    });
}
