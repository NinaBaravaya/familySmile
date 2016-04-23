var win = $(window),
    nav = $('#fixmenu'),

    pos = nav.offset().top,//ф-ция устанавливает коордиаты top div-а
    sticky = function(){
        win.scrollTop() > pos ?
            nav.addClass('sticky')
            : nav.removeClass('sticky')
    };

win.scroll(sticky);

var win2 = $(window),
    img = $('header'),

    pos2 = img.offset().top,//ф-ция устанавливает коордиаты top div-а
    size = function(){
        win2.scrollTop() > pos2 ?
            img.addClass('size')
            : img.removeClass('size')
    };

win2.scroll(size);




var win3 = $(window),
    img1 = $('header img'),

    pos3 = img1.offset().top,//ф-ция устанавливает коордиаты top div-а
    display = function(){
        win3.scrollTop() > pos3 ?
            img1.addClass('display')
            : img1.removeClass('display')
    };

win3.scroll(display);