new WOW().init();
console.log(document.scrollingElement.scrollTop)



$(document).scroll(function(){
    if ($(document).scrollTop()>900)
    {
        $(".menu").addClass("anim")
        setTimeout(function() {$(".menu").addClass("fixed")}, 200);
        $(".about").addClass("fixed")

    }
    else
    {

        $(".menu").removeClass("fixed")
        $(".about").removeClass("fixed")
        $(".menu").removeClass("anim")
    }
})


