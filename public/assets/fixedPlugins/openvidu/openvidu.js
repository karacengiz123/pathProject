function getSessions() {
    $.ajax({
        url: "https://stream.guvercinsepetim.com:4443/api/sessions",
        headers: {
            Authorization: 'Basic ' + window.btoa('OPENVIDUAPP:Aa00155421'),
            'Content-Type': 'application/json',
        },
        method: "GET",
        success: function (data) {
            console.log(data.content);
        }
    });
}

function getSession(sessionId) {
    console.log("https://stream.guvercinsepetim.com:4443/api/sessions/"+sessionId);
    $.ajax({
        url: "https://stream.guvercinsepetim.com:4443/api/sessions/"+sessionId,
        headers: {
            Authorization: 'Basic ' + window.btoa('OPENVIDUAPP:Aa00155421'),
            'Content-Type': 'application/json',
        },
        method: "GET",
        success: function (data) {
            console.log(data);
            // var dataPost = {
            //     "session": "deneme",
            //     "role": "SUBSCRIBER"
            // };
            // $.ajax({
            //     url: "https://stream.guvercinsepetim.com:4443/api/tokens",
            //     headers: {
            //         Authorization: 'Basic ' + window.btoa('OPENVIDUAPP:Aa00155421'),
            //         'Content-Type': 'application/json',
            //     },
            //     method: "POST",
            //     data:dataPost,
            //     success: function (data) {
            //         console.log(data);
            //     },
            //     error: function (data) {
            //         console.log(data);
            //     }
            // });
        }
    });
}

function deleteSession(sessionId) {
    $.ajax({
        url: "https://stream.guvercinsepetim.com:4443/api/sessions/"+sessionId,
        headers: {
            Authorization: 'Basic ' + window.btoa('OPENVIDUAPP:Aa00155421'),
            'Content-Type': 'application/json',
        },
        method: "DELETE",
        success: function (data) {
            console.log(data);
        }
    });
}

function removeSub(sessionId,connectionId) {
    $.ajax({
        url: "https://stream.guvercinsepetim.com:4443/api/sessions/" + sessionId + "/connection/" + connectionId,
        headers: {
            Authorization: 'Basic ' + window.btoa('OPENVIDUAPP:Aa00155421'),
            'Content-Type': 'application/json',
        },
        method: 'DELETE',
        success: function (data) {
            console.log(data);
            console.log(this.session.sessionId + 'Adlı Session Silindi');
        }
    });
}

function getRecordings() {
    $.ajax({
        url: "https://stream.guvercinsepetim.com:4443/api/recordings",
        headers: {
            Authorization: 'Basic ' + window.btoa('OPENVIDUAPP:Aa00155421'),
            'Content-Type': 'application/json',
        },
        method: 'GET',
        success: function (data) {
            console.log(data);
        }
    });
}
