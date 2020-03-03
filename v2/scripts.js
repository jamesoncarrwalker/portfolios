function change(x) {
    var z = x.id;
    var y = document.getElementById(z).getElementsByTagName('div')[1];
    var span = document.getElementById(z).getElementsByTagName('span')[1];
    var head = document.getElementById(z).getElementsByTagName('h4')[1];


if (y.classList.contains('hidden')){
    y.classList.remove('hidden');

}else{
    y.classList.add('hidden');

}

    if(span.classList.contains('hidden')){
        span.classList.remove('hidden');
    }else{
        span.classList+=(' hidden');
    }

    if(head.classList.contains('hidden')){
        head.classList.remove('hidden');
    }else{
        head.classList+=(' hidden');
    }

}
function flip(x){
    setTimeout(flip,3000);
    x.classList.toggle('flipped');


}


$(function () {
    $('[data-toggle="popover"]').popover()
});



jQuery(window).scroll(function(){
    var fromTopPx = 900; // distance to trigger
    var trig2 = 900;
    var scrolledFromtop = jQuery(window).scrollTop();
    if(scrolledFromtop > fromTopPx){
        jQuery('body').addClass('scroll');
    }else if(scrolledFromtop > trig2) {
        jQuery('body').removeClass('scroll');

    }else{
        jQuery('body').removeClass('scroll');
    }
});




function isScrolledIntoView($elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $elem.offset().top;
    var elemMiddle = elemTop + $elem.height()/2;
    return docViewBottom >= elemMiddle && docViewTop <= elemMiddle;
}


$(window).scroll(function(){
    $elem = $("#skills"); //or what element you like
    $elem2 = $("#personal"); //or what element you like
    if(isScrolledIntoView($elem)){
        $elem.addClass('console');
        $elem2.removeClass('hidden');

    }
});