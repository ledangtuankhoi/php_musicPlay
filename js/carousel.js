

// document.getElementById("carousel").getElementsByClassName("owl-next").innerText   = "<span aria-label='Next'><i class='fas fa-arrow-circle-right'></i></span>"
// document.getElementById("carousel").getElementsByClassName("owl-next").innerHTML   = "<span aria-label='Next'><i class='fas fa-arrow-circle-right'></i></span>"


// var buttom_next = document.getElementById("carousel").getElementsByClassName("owl-next");
// console.log(buttom)
// buttom_next.addEventListener("load", function () {
  
//     audioPlayPause.innerHTML = "<i class='fas fa-arrow-circle-right'></i>";
  
// });

// var buttom_prev = document.getElementById("carousel").getElementsByClassName("owl-prev");
// console.log(buttom)
// buttom_prev.addEventListener("load", function () {
  
//     audioPlayPause.innerHTML = "<i class='fas fa-arrow-circle-left'></i>";
  
// });







var owl = $(".list_song");

owl.owlCarousel({
  loop: false,
  // nav:true,
  margin: 40,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,

  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    960: {
      items: 5,
    },
    1200: {
      items: 6,
    },
  },
});

$(".next").click(function () {
  owl.trigger("next.carousel");
  console.log("1a");
});

$(".back").click(function () {
  console.log("3");

  owl.trigger("prev.carousel", [300]);
});




// _cates
var owl1_cates = $(".list_cates, .list_singer, .list_song_by_cate");

owl1_cates.owlCarousel({
  loop: false,
  // nav:true,
  margin: 40,
  nav:true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    960: {
      items: 5,
    },
    1200: {
      items: 6,
    },
    1400: {
      items: 8,
    },

    
  },
});

$(".next__cates").click(function () {
  owl1_cates.trigger("next.owl1_cates.carousel");
  console.log("next");
});

$(".back__cates").click(function () {
  owl1_cates.trigger("prev.owl1_cates.carousel", [300]);
  console.log("back");
});

owl1_cates.on("drag.owl1_cates.carousel", function (event) {
  $("body").css("overflow", "hidden");
});

owl1_cates.on("dragged.owl1_cates.carousel", function (event) {
  $("body").css("overflow", "auto");
});
//cates end



// _yeuthich
var owl1_yeuthich = $(".list_song_by_cate");

owl1_yeuthich.owlCarousel({
  loop: false,
  // nav:true,
  margin: 40,
  nav:true,
  items: 3,
});

//cates end





// _ROCK
var owl1_ROCK = $(".list_ROCK");

owl1_ROCK.owlCarousel({
  loop: false,
  // nav:true,
  margin: 40,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    960: {
      items: 5,
    },
    1200: {
      items: 6,
    },
  },
});

$(".next_cate").click(function () {
  owl1_ROCK.trigger("next.owl1_ROCK.carousel");
  console.log("next");
});

$(".back_cate").click(function () {
  owl1_ROCK.trigger("prev.owl1_ROCK.carousel", [300]);
  console.log("back");
});

owl1_ROCK.on("drag.owl1_ROCK.carousel", function (event) {
  $("body").css("overflow", "hidden");
});

owl1_ROCK.on("dragged.owl1_ROCK.carousel", function (event) {
  $("body").css("overflow", "auto");
});

// _RAP
var owl_RAP = $(".list_RAP");

owl_RAP.owlCarousel({
  loop: false,
  // nav:true,
  margin: 40,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    960: {
      items: 5,
    },
    1200: {
      items: 6,
    },
  },
});

owl_RAP.on("drag.owl_RAP.carousel", function (event) {
  $("body").css("overflow", "hidden");
});

owl_RAP.on("dragged.owl_RAP.carousel", function (event) {
  $("body").css("overflow", "auto");
});

$(".next_cate").click(function () {
  owl_RAP.trigger("next.owl_RAP.carousel");
  // console.log("asfasdfa")
});

$(".back_cate").click(function () {
  // console.log("asfasdfa")

  owl_RAP.trigger("prev.owl_RAP.carousel", [300]);
});

// _ACOUSTIC
var owl_ACOUSTIC = $(".list_ACOUSTIC");

owl_ACOUSTIC.owlCarousel({
  loop: false,
  // nav:true,
  margin: 40,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    960: {
      items: 5,
    },
    1200: {
      items: 6,
    },
  },
});

owl_ACOUSTIC.on("drag.owl_ACOUSTIC.carousel", function (event) {
  $("body").css("overflow", "hidden");
});

owl_ACOUSTIC.on("dragged.owl_ACOUSTIC.carousel", function (event) {
  $("body").css("overflow", "auto");
});

$(".next_cate").click(function () {
  owl_ACOUSTIC.trigger("next.owl_ACOUSTIC.carousel");
  // console.log("asfasdfa")
});

$(".back_cate").click(function () {
  // console.log("asfasdfa")

  owl_ACOUSTIC.trigger("prev.owl_ACOUSTIC.carousel", [300]);
});

// _ALTERNATIVE
var owl_ALTERNATIVE = $(".list_ALTERNATIVE");

owl_ALTERNATIVE.owlCarousel({
  loop: false,
  // nav:true,
  margin: 40,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    960: {
      items: 5,
    },
    1200: {
      items: 6,
    },
  },
});

owl_ALTERNATIVE.on("drag.owl_ALTERNATIVE.carousel", function (event) {
  $("body").css("overflow", "hidden");
});

owl_ALTERNATIVE.on("dragged.owl_ALTERNATIVE.carousel", function (event) {
  $("body").css("overflow", "auto");
});

$(".next_cate").click(function () {
  owl_ALTERNATIVE.trigger("next.owl_ALTERNATIVE.carousel");
  // console.log("asfasdfa")
});

$(".back_cate").click(function () {
  // console.log("asfasdfa")

  owl_ALTERNATIVE.trigger("prev.owl_ALTERNATIVE.carousel", [300]);
});

// _HIPHOP  start
var owl_HIPHOP = $(".list_HIPHOP");

owl_HIPHOP.owlCarousel({
  loop: false,
  // nav:true,
  margin: 40,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    960: {
      items: 5,
    },
    1200: {
      items: 6,
    },
  },
});

owl_HIPHOP.on("drag.owl_HIPHOP.carousel", function (event) {
  $("body").css("overflow", "hidden");
});

owl_HIPHOP.on("dragged.owl_HIPHOP.carousel", function (event) {
  $("body").css("overflow", "auto");
});

$(".next_cate").click(function () {
  owl_HIPHOP.trigger("next.owl_HIPHOP.carousel");
  // console.log("asfasdfa")
});

$(".back_cate").click(function () {
  // console.log("asfasdfa")

  owl_HIPHOP.trigger("prev.owl_HIPHOP.carousel", [300]);
});
// _HIPHOP   end

// _RNB  start
var owl_RNB = $(".list_RNB");

owl_RNB.owlCarousel({
  loop: false,
  // nav:true,
  margin: 40,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    960: {
      items: 5,
    },
    1200: {
      items: 6,
    },
  },
});

owl_RNB.on("drag.owl_RNB.carousel", function (event) {
  $("body").css("overflow", "hidden");
});

owl_RNB.on("dragged.owl_RNB.carousel", function (event) {
  $("body").css("overflow", "auto");
});

$(".next_cate").click(function () {
  owl_RNB.trigger("next.owl_RNB.carousel");
  // console.log("asfasdfa")
});

$(".back_cate").click(function () {
  // console.log("asfasdfa")

  owl_RNB.trigger("prev.owl_RNB.carousel", [300]);
});
// _RNB   end

// _ACOUSTIC  start
var owl_ACOUSTIC = $(".list_ACOUSTIC");

owl_ACOUSTIC.owlCarousel({
  loop: false,
  // nav:true,
  margin: 40,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    960: {
      items: 5,
    },
    1200: {
      items: 6,
    },
  },
});

owl_ACOUSTIC.on("drag.owl_ACOUSTIC.carousel", function (event) {
  $("body").css("overflow", "hidden");
});

owl_ACOUSTIC.on("dragged.owl_ACOUSTIC.carousel", function (event) {
  $("body").css("overflow", "auto");
});

$(".next_cate").click(function () {
  owl_ACOUSTIC.trigger("next.owl_ACOUSTIC.carousel");
  // console.log("asfasdfa")
});

$(".back_cate").click(function () {
  // console.log("asfasdfa")

  owl_ACOUSTIC.trigger("prev.owl_ACOUSTIC.carousel", [300]);
});
// _ACOUSTIC   end

// _OPM  start
var owl_OPM = $(".list_OPM");

owl_OPM.owlCarousel({
  loop: false,
  // nav:true,
  margin: 40,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    960: {
      items: 5,
    },
    1200: {
      items: 6,
    },
  },
});

owl_OPM.on("drag.owl_OPM.carousel", function (event) {
  $("body").css("overflow", "hidden");
});

owl_OPM.on("dragged.owl_OPM.carousel", function (event) {
  $("body").css("overflow", "auto");
});

$(".next_cate").click(function () {
  owl_OPM.trigger("next.owl_OPM.carousel");
  // console.log("asfasdfa")
});

$(".back_cate").click(function () {
  // console.log("asfasdfa")

  owl_OPM.trigger("prev.owl_OPM.carousel", [300]);
});
// _OPM   end
