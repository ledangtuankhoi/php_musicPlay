// jQuery.fn.load = function(callback){ $(window).on("load", callback) };
// $(window).on('load', function(){

var owl = $(".list_song");

owl.owlCarousel({
    loop: true,
    // nav:true,
    margin: 10,
    autoplay: true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,

    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3
        },
        960: {
            items: 5
        },
        1200: {
            items: 6
        }
    }
});
owl.on("mousewheel", ".owl-stage", function(e) {
    if (e.deltaY > 0) {
        owl.trigger("next.owl");
    } else {
        owl.trigger("prev.owl");
    }
    e.preventDefault();
});

$(".next_cate").click(function() {
    owl.trigger("next.owl.carousel");
    // console.log("asfasdfa")
});

$(".back_cate").click(function() {
    // console.log("asfasdfa")

    owl.trigger("prev.owl.carousel", [300]);
});



var owl = $(".list_cate");

owl.owlCarousel({
    loop: true,
    // nav:true,
    margin: 10,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3
        },
        960: {
            items: 5
        },
        1200: {
            items: 6
        }
    }
});
owl.on("mousewheel", ".owl-stage", function(e) {
    if (e.deltaY > 0) {
        owl.trigger("next.owl");
    } else {
        owl.trigger("prev.owl");
    }
    e.preventDefault();
});

$(".next_cate").click(function() {
    owl.trigger("next.owl.carousel");
    // console.log("asfasdfa")
});

$(".back_cate").click(function() {
    // console.log("asfasdfa")

    owl.trigger("prev.owl.carousel", [300]);
});


