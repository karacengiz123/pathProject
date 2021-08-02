var tableClassName = "";
var tableLang = "";

function tableSearchDataReplace(string) {
    let _div2 = document.createElement('div');
    _div2.innerHTML = string;
    return _div2.textContent ?
        _div2.textContent
            .replace(/[áÁàÀâÂäÄãÃåÅæÆ]/g, 'a')
            .replace(/[çÇ]/g, 'c')
            .replace(/[ğĞ]/g, 'g')
            .replace(/[éÉèÈêÊëË]/g, 'e')
            .replace(/[íÍìÌîÎïÏîĩĨĬĭıIİ]/g, 'i')
            .replace(/[ñÑ]/g, 'n')
            .replace(/[óÓòÒôÔöÖœŒ]/g, 'o')
            .replace(/[ßşŞ]/g, 's')
            .replace(/[úÚùÙûÛüÜ]/g, 'u')
            .replace(/[ýÝŷŶŸÿ]/g, 'n') :
        _div2.innerText
            .replace(/[áÁàÀâÂäÄãÃåÅæÆ]/g, 'a')
            .replace(/[çÇ]/g, 'c')
            .replace(/[ğĞ]/g, 'g')
            .replace(/[éÉèÈêÊëË]/g, 'e')
            .replace(/[íÍìÌîÎïÏîĩĨĬĭıIİ]/g, 'i')
            .replace(/[ñÑ]/g, 'n')
            .replace(/[óÓòÒôÔöÖœŒ]/g, 'o')
            .replace(/[ßşŞ]/g, 's')
            .replace(/[úÚùÙûÛüÜ]/g, 'u')
            .replace(/[ýÝŷŶŸÿ]/g, 'n');
};
(function () {
    jQuery.fn.dataTable.ext.type.search.html = function (string) {
        let _div = document.createElement('div');
        _div.innerHTML = string;
        return _div.textContent ?
            _div.textContent
                .replace(/[áÁàÀâÂäÄãÃåÅæÆ]/g, 'a')
                .replace(/[çÇ]/g, 'c')
                .replace(/[ğĞ]/g, 'g')
                .replace(/[éÉèÈêÊëË]/g, 'e')
                .replace(/[íÍìÌîÎïÏîĩĨĬĭıIİ]/g, 'i')
                .replace(/[ñÑ]/g, 'n')
                .replace(/[óÓòÒôÔöÖœŒ]/g, 'o')
                .replace(/[ßşŞ]/g, 's')
                .replace(/[úÚùÙûÛüÜ]/g, 'u')
                .replace(/[ýÝŷŶŸÿ]/g, 'n') :
            _div.innerText
                .replace(/[áÁàÀâÂäÄãÃåÅæÆ]/g, 'a')
                .replace(/[çÇ]/g, 'c')
                .replace(/[ğĞ]/g, 'g')
                .replace(/[éÉèÈêÊëË]/g, 'e')
                .replace(/[íÍìÌîÎïÏîĩĨĬĭıIİ]/g, 'i')
                .replace(/[ñÑ]/g, 'n')
                .replace(/[óÓòÒôÔöÖœŒ]/g, 'o')
                .replace(/[ßşŞ]/g, 's')
                .replace(/[úÚùÙûÛüÜ]/g, 'u')
                .replace(/[ýÝŷŶŸÿ]/g, 'n');
    };
})();

function createTable(className = "", lang = "", searchColumns = false, showSearchColumns = []) {
    if (className != "") {
        if (lang != "") {
            $('.' + className).DataTable({
                dom: 'lBfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                "language": {
                    url: '/assets/datatable_language/' + lang + '.json'
                },
                order: [],
                "columnDefs": [{
                    "type": "html",
                    "targets": '_all'
                }],
                initComplete: function () {
                    if (searchColumns) {
                        $('tfoot').each(function () {
                            $(this).insertAfter($(this).siblings('thead'));
                        });
                        this.api().columns(showSearchColumns).every(function () {
                            var column = this;
                            var select = $('<select class="form-control selectedDatatableSearchColumn"><option value=""></option></select>')
                                .appendTo($(column.footer()).empty())
                                .on('change', function () {
                                    let val = tableSearchDataReplace($(this).val())
                                    column
                                        .search(val ? '^' + val + '$' : '', true, false)
                                        .draw();
                                });
                            column.data().unique().sort().each(function (d, j) {
                                select.append('<option value="' + d + '">' + d + '</option>')
                            });
                        });
                    }
                }

            });
            tableClassName = className;
            tableLang = lang;
        }
    }
};
$(document).ready(function () {
    $(".btn-danger ").css({"margin": "3px 6px 1px 1px"});
    $(".btn-danger ").css({"width": "100%"});
    $(".btn-warning ").css({"width": "100%"});

    $("#crudFormDiv .form-group").addClass("col-sm-6");
    $("#crudFormDiv fieldset").removeClass("col-sm-6");
    $("#crudFormDiv fieldset").addClass("col-sm-12");
    $("#crudFormDiv fieldset fieldset").removeClass("col-sm-6");
    $("#crudFormDiv fieldset fieldset").addClass("col-sm-12");
    $("#crudFormDiv fieldset fieldset fieldset").removeClass("col-sm-12");
    $("#crudFormDiv fieldset fieldset fieldset").addClass("col-sm-10");
    $("#crudFormDiv fieldset fieldset fieldset").css({
        "float":"right",
    })
    $("#crudFormDiv fieldset > div > fieldset > div > fieldset > div > fieldset").removeClass("col-sm-10");
    $("#crudFormDiv fieldset > div > fieldset > div > fieldset > div > fieldset").addClass("col-sm-6");
    $("#crudFormDiv fieldset > div > fieldset > div > fieldset > div > fieldset").css({
        "float":"left"
    })
    $("#crudFormDiv fieldset div fieldset legend").css({
        "display":"none",
    })
    $("#crudFormDiv fieldset > div > fieldset > div > fieldset > legend").css({
        "display":"block",
    })
    $("#crudFormDiv fieldset > div > fieldset > div > fieldset > div > fieldset > legend").css({
        "display":"none",
    })


    $('#crudFormDiv fieldset fieldset > div').each(function () {
        let i = 1;
        $('#' + $(this).attr("id") + "> div").each(function () {
            if (i === 1) {
                $(this).removeClass("col-sm-6");
                $(this).addClass("col-sm-2");
                $(this).css({"float": "left"});
            } else {
                $(this).removeClass("col-sm-6");
                $(this).addClass("col-sm-10");
                $(this).css({"float": "right"});
            }
            i++;
        });
    });

    let a = 1;
    $('#crudFormDiv fieldset fieldset fieldset fieldset > div').each(function () {
        let i = 1;
        $('#' + $(this).attr("id") + "> div").each(function () {
            if (i === 1) {
                $(this).removeClass("col-sm-2");
                $(this).addClass("col-sm-6");
                $(this).css({"float": "left"});
            } else {
                $(this).removeClass("col-sm-10");
                $(this).addClass("col-sm-6");
                $(this).css({"float": "left"});
            }
            i++;
        });
        if (a % 2 === 0){
            $(this).parent().css({"border-left": "1px solid black"});
        }
        a++;
    });

    $('form ').submit(function () {
        // TODO: BURADAKİ UYARI MESAJI DİLE GÖRE DEĞİŞECEK
        swal.fire({
            title: '!!..Please wait..!!',
            html: 'Your transaction is in progress...',
            timer: 999999999,
            allowOutsideClick: false,
            closeOnClickOutside: false,
            allowEscapeKey: false,
            onBeforeOpen: () => {
                Swal.showLoading();
            }
        });
    });

    function liCount() {
        $("nav > ul > li").each(function (index, value) {
            $(value).find("ul").each(function (index, value) {
                let child = $(value).children().length;
                $(value).parent().find("a").find("span").find("span").each(function (i, v) {
                    $(v).html(child)
                })
            });
        })
    }liCount();

    function activeA() {
        // let per = $("a[href$='.org']");
        let per = $('.sidebar-nav a[href="' + window.location.pathname + '"]');
        per.addClass("active");
        per.parent().parent().parent().parent().addClass("in");
        per.parent().parent().parent().parent().parent().addClass("active");
        per.parent().parent().parent().parent().parent().children("a").addClass("active");
    }activeA();

    $(".dataTables_length > label > select").append('<option value="1000">1000</option>');

    setTimeout(function () {
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').removeClass('dt-button');
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-sm btn-success mr-1');
        $('.dataTables_filter > label > input').addClass('border border-success');
        $('.dataTables_filter > label > input[type=search]').keyup(function () {
            if (tableClassName != "") {
                var table = $('.' + tableClassName).DataTable();
                table.search(
                    jQuery.fn.DataTable.ext.type.search.html(this.value)
                ).draw();
            }
        });
    }, 100)
    $(".maskMoney").maskMoney({thousands:',', decimal:'.', allowZero:true, suffix: ' ₺'});
    let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    $('.js-switch').each(function () {
        new Switchery($(this)[0], $(this).data());
    });
    let sDate = moment().format("DD-MM-YYYY");
    let eDate = moment().add(1, 'days').format("DD-MM-YYYY");
    $('.daterange').daterangepicker({
        minDate: sDate,
        startDate: sDate,
        endDate: eDate,
        drops: 'auto',
        locale: {
            format: 'DD-MM-YYYY'
        }
    });

    $('#discountedStartAndEndDate').daterangepicker({
        minDate: sDate,
        startDate: sDate,
        endDate: eDate,
        drops: 'up',
        locale: {
            format: 'DD-MM-YYYY'
        }
    });
    $('#discountedPrice').attr({"disabled":"disabled"})
    $('#discountedStock').attr({"disabled":"disabled"})
    $('#discountedStartAndEndDate').attr({"disabled":"disabled"})
    $('#beforeDiscountedPrice').attr({"disabled":"disabled"})
    $(".daterange").focus(function() {
        $( this ).blur();
    });

    $("#product_productImages fieldset").removeClass("col-sm-12")
    $("#product_productImages fieldset").addClass("col-sm-2")
    $("#product_productImages fieldset div div").removeClass("col-sm-2")
    $("#product_productImages fieldset div div").addClass("col-sm-12")
    $("#product_productImages fieldset div div input").removeClass("custom-file-input")
    $("#product_productImages fieldset div div input").css({
        "height":"100%",
        "min-height":"100%",
        "max-height":"100%",
    })
    $("#product_productImages fieldset div div div label").remove();

    $(".js-switch").parent().parent(".form-group").css({
        "height":"69px",
        "min-height":"69px",
        "max-height":"69px",
        "display": "flex",
        "align-items": "center"
    })
    $(".js-switch").parent().css({
        "height":"69px",
        "min-height":"69px",
        "max-height":"69px",
        "display": "flex",
        "align-items": "center",
        "padding": "0"
    })
    $($(".js-switch").parent().children(".form-check-label")).removeClass("form-check-label")
    $($(".js-switch").parent().children(".form-check-label")).css({
        "padding": "0",
        "margin": "0",
    })
    $($(".js-switch").parent().children("span")).css({
        "width": "78px",
        "margin-right": "10px"
    })
    $('input[type="file"]').parent().parent(".form-group").css({
        "height":"69px",
        "min-height":"69px",
        "max-height":"69px",
    })
    $(".js-switch-div").css({
        "margin": "0",
        "padding": "0",
        "display": "flex",
        "align-items": "center",
        "margin-top": "15px",
        "margin-bottom": "15px"
    })
    $(".js-switch-div label").css({
        "margin": "0",
        "padding": "0",
        "margin-left": "10px"
    })
    $(".js-switch-div").children("span").css({
        "width": "51px",
        "margin-right": "10px"
    })
    $(".js-switch-div-mini").css({
        "margin": "0",
        "padding": "0",
        "display": "flex",
        "align-items": "center",
        "margin-top": "15px",
        "margin-bottom": "15px",
        "height":"24px",
        "min-height":"24px",
        "max-height":"24px",
    })
    $(".js-switch-div-mini label").css({
        "margin": "0",
        "padding": "0",
        "margin-left": "10px"
    })
    $(".js-switch-div-mini").children("span").css({
        "width": "40px",
        "margin-right": "3px"
    })
    $('.dropify').parent().parent(".form-group").css({
        "height":"100%",
        "min-height":"100%",
        "max-height":"100%",
    })

    //BURASI IMAGE MOUSE HOWER İLE ZOOM  YAOMAYI SAGLIYOR
    $(function () {
        var venderTransform = ($.browser.webkit)  ? 'WebkitTransform' :
            ($.browser.mozilla) ? 'MozTransform' :
                ($.browser.msie)    ? 'MsTransform' :
                    ($.browser.opera)   ? 'OTransform' : 'transform'


        $('.square').each(function () {
            $.data(this, 'scale', 3);
        }).bind('mousewheel', function (event, delta) {
            event.preventDefault();

            var sc = $.data(this, 'scale');

            if ((delta == 1 && sc < 5) || (delta == -1 && sc > 1)) {
                sc += delta;
                $.data(this, 'scale', sc);
                $(this).children('img').css(venderTransform, 'scale(' + sc + ')');
            }
        }).bind('mousemove', function (event) {
            var sc = $.data(this, 'scale') || 1;//scale
            if (sc > 1) {
                var $this = $(this),
                    X  = (typeof(event.offsetX) == 'undefined') ? (event.pageX - $this.offset().left) : (event.offsetX),//current cursor X position in bullet element
                    Y  = (typeof(event.offsetY) == 'undefined') ? (event.pageY - $this.offset().top) : (event.offsetY),//current cursor Y position in bullet element
                    w  = 400,//width of thumbnail
                    h  = 400,//height of a thumbnail
                    nX = ((w / 2) - X),//new X
                    nY = ((h / 2) - Y),//new Y
                    tf = 'translate(' + (nX * (sc - 1)) + 'px, ' + (nY * (sc - 1)) + 'px) scale(' + sc + ')';//transform string
                $this.children('img').css(venderTransform, tf);
            }
        }).bind('mouseleave', function () {

            //reset .has-thumb element on mouseleave
            $.data(this, 'scale', 3);
            $(this).children('img').css(venderTransform, 'translate(0, 0) scale(1)');
        });
    });
    //    ZOOM SON
    $('input[name=filterValue]').parent().children("button").css({
        "display":"none",
    })
    $('input[name=filterValue]').addClass("form-control")
    $('input[name=filterValue]').css({
        "background-position": "10px 12px",
        "background-repeat": "no-repeat",
        "width": "100%",
        "font-size": "16px",
        "padding": "12px",
        "border": "1px solid #aaa",
        "margin-bottom": "5px",
        "height": "35px",
        "min-height": "35px",
        "max-height": "35px",
        "border-radius": "5px",
    })

    $(".formGroupTreeSelect").removeClass("col-sm-6");
    $(".formGroupTreeSelect").addClass("col-sm-12");
})
