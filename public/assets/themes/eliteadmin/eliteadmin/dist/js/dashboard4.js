$(function () {
    "use strict";
    var sparklineLogin = function () {
        $('#sales1').sparkline([20, 40, 30], {
            type: 'pie'
            , height: '130'
            , resize: true
            , sliceColors: ['#808f8f', '#fecd36', '#f1f2f7']
        });
        $('#sales2').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar'
            , height: '154'
            , barWidth: '4'
            , resize: true
            , barSpacing: '10'
            , barColor: '#25a6f7'
        });
        $('#sparklinedash').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar'
            , height: '30'
            , barWidth: '4'
            , resize: true
            , barSpacing: '5'
            , barColor: '#4caf50'
        });
        $('#sparklinedash2').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar'
            , height: '30'
            , barWidth: '4'
            , resize: true
            , barSpacing: '5'
            , barColor: '#9675ce'
        });
        $('#sparklinedash3').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar'
            , height: '30'
            , barWidth: '4'
            , resize: true
            , barSpacing: '5'
            , barColor: '#03a9f3'
        });
        $('#sparklinedash4').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar'
            , height: '30'
            , barWidth: '4'
            , resize: true
            , barSpacing: '5'
            , barColor: '#f96262'
        });
    }
    var sparkResize;
    $(window).resize(function (e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();
});

// Sky Icons
var icons = new Skycons({
        "color": "#ff6849"
    })
    , list = [
        "clear-day", "clear-night", "partly-cloudy-day"
        , "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind"
        , "fog"
      ]
    , i;
for (i = list.length; i--;) {
    var weatherType = list[i]
        , elements = document.getElementsByClassName(weatherType);
    for (e = elements.length; e--;) {
        icons.set(elements[e], weatherType);
    }
}
icons.play();
