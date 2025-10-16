(function ($) {
  "use strict";

  // mobile dropdown

  jQuery(".dropdown-icon").on("click", function () {
    // alert()
    // $(this).next('.mob-submenu').slideToggle();
    jQuery(this).toggleClass("active").next("ul, .mega-menu, .mega-menu2").slideToggle();
    jQuery(this).parent().siblings().children("ul, .mega-menu, .mega-menu2").slideUp();
    jQuery(this).parent().siblings().children(".active").removeClass("active");
  });
  // sticky header

  window.addEventListener('scroll', function () {
    const header = document.querySelector('header.header-area');
    header.classList.toggle("sticky", window.scrollY > 0);
  });
  // popup on load
  $(document).ready(function () {
    setTimeout(function () {
      $("#myModal").modal("show");
    }, 500);
  });


  // img hover zoom in
  $(".product-img--main")
    // tile mouse actions
    .on("mouseover", function () {
      $(this)
        .children(".product-img--main__image")
        .css({ transform: "scale(" + $(this).attr("data-scale") + ")" });
    })
    .on("mouseout", function () {
      $(this)
        .children(".product-img--main__image")
        .css({ transform: "scale(1)" });
    })
    .on("mousemove", function (e) {
      $(this)
        .children(".product-img--main__image")
        .css({
          "transform-origin":
            ((e.pageX - $(this).offset().left) / $(this).width()) * 100 +
            "% " +
            ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +
            "%",
        });
    })
    .each(function () {
      $(this)
        // add a image container
        .append('<div class="product-img--main__image"></div>')
        // set up a background image for each tile based on data-image attribute
        .children(".product-img--main__image")
        .css({ "background-image": "url(" + $(this).attr("data-image") + ")" });
    });

  //list grid view
  $(".grid-view li").on("click", function () {
    // Get the class of the clicked li element
    var clickedClass = $(this).attr("class");
    // Extract the class name without "item-" prefix
    var className = clickedClass.replace("item-", "");
    // Add a new class to the target div and remove old classes
    var targetDiv = $(".all-products");
    targetDiv.removeClass().addClass("all-products list-grid-product-wrap " + className + "-wrapper");
    // Remove the 'selected' class from siblings and add it to the clicked element
    $(this).siblings().removeClass("active");
    $(this).addClass("active");
  });
 
  // sidebar
  $(".filter").on("click", function (e) {
    e.stopPropagation();
    $(".filter-sidebar, .filter-top").toggleClass("slide");
  });

  // password-hide and show
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');
  if(togglePassword){
  togglePassword.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  // toggle the eye / eye slash icon
  this.classList.toggle('bi-eye');
  });
  }
  // confirm-password
  const togglePassword2= document.getElementById('togglePassword2');
  const password2 = document.querySelector('#password2');
  if (togglePassword2){
  togglePassword2.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
  password2.setAttribute('type', type);
  // toggle the eye / eye slash icon
  this.classList.toggle('bi-eye');
  });
  }
  // confirm-password
  const togglePassword3= document.getElementById('togglePassword3');
  const password3 = document.querySelector('#password3');
  if (togglePassword3){
  togglePassword3.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password3.getAttribute('type') === 'password' ? 'text' : 'password';
  password3.setAttribute('type', type);
  // toggle the eye / eye slash icon
  this.classList.toggle('bi-eye');
  });
  }
  // confirm-password
  const togglePassword4= document.getElementById('togglePassword4');
  const password4 = document.querySelector('#password4');
  if (togglePassword4){
  togglePassword4.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password4.getAttribute('type') === 'password' ? 'text' : 'password';
  password4.setAttribute('type', type);
  // toggle the eye / eye slash icon
  this.classList.toggle('bi-eye');
  });
  }
  // confirm-password
  const togglePassword5= document.getElementById('togglePassword5');
  const password5 = document.querySelector('#password5');
  if (togglePassword5){
  togglePassword5.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password5.getAttribute('type') === 'password' ? 'text' : 'password';
  password5.setAttribute('type', type);
  // toggle the eye / eye slash icon
  this.classList.toggle('bi-eye');
  });
  }


  $(document).on("click", function (e) {
    if (!$(e.target).closest(".filter-sidebar, .filter-top, .filter").length) {
      $(".filter-sidebar, .filter-top").removeClass("slide");
    }
  });

  $(".price-selector").on("click", function (e) {
    e.stopPropagation();
    $(".range-wrap.style-2, .price-selector").toggleClass("slide");
  });

  $(document).on("click", function (e) {
    if (!$(e.target).closest(".range-wrap.style-2, .price-selector").length) {
      $(".range-wrap.style-2, .price-selector").removeClass("slide");
    }
  });
  /* ---------------------------------------------
     NiceSelect
--------------------------------------------- */
  
  $("select").niceSelect();
  // cart menu

  $(".header-cart-btn, .search-btn").on("click", function (e) {
         
        let parent  = $(this).parent();

        parent.find(".cart-menu, .search-input").toggleClass("active");

    e.stopPropagation();
    // $(".cart-menu, .search-input").toggleClass("active");



  });




  $(document).on("click", function (e) {
    if (!$(e.target).closest(".cart-menu, .header-cart-btn, .search-input, .search-btn" ).length) {
      $(".cart-menu, .search-input").removeClass("active");
    }
  });



  //category menu
  $(".category-button").on("click", function (e) {
    e.stopPropagation();
    $(".category-menu").toggleClass("active");
  });
  $(document).on("click", function (e) {
    if (!$(e.target).closest(".category-menu, .category-button").length) {
      $(".category-menu").removeClass("active");
    }
  });
  $(".serch-close").on("click", function (e) {
      $(".search-input").removeClass("active");
  });

  var swiper = new Swiper(".banner1-slider", {
    slidesPerView: "auto",
    speed: 1500,
    loop: true,
    autoplay: true,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    pagination: {
      el: ".swiper-pagination1",
      clickable: true,
    },
  });

  var swiper = new Swiper(".banner2-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    speed: 2000,
    loop: true,
    autoplay: true,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    pagination: {
      el: ".swiper-pagination2",
      clickable: true,
    },
  });

  var swiper = new Swiper(".product-banner-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    speed: 1500,
    autoplay: true,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    navigation: {
      nextEl: ".pd-banner-next-btn",
      prevEl: ".pd-banner-prev-btn",
    },
  });
  var swiper = new Swiper(".newest-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".next-btn",
      prevEl: ".prev-btn",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      386: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 4,
      },
    },
  });
  var swiper = new Swiper(".face-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    draggable: true,
    navigation: {
      nextEl: ".face-next",
      prevEl: ".face-prev",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      386: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 4,
      },
    },
  });
  var swiper = new Swiper(".body-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    draggable: true,
    navigation: {
      nextEl: ".body-next",
      prevEl: ".body-prev",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      386: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 4,
      },
    },
  });
  var swiper = new Swiper(".hair-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    draggable: true,
    navigation: {
      nextEl: ".hair-next",
      prevEl: ".hair-prev",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      386: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 4,
      },
    },
  });
  var swiper = new Swiper(".makeup-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    draggable: true,
    navigation: {
      nextEl: ".makeup-next",
      prevEl: ".makeup-prev",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      386: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 4,
      },
    },
  });
  var swiper = new Swiper(".category-top-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".ct-top-next-btn",
      prevEl: ".ct-top-prev-btn",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      350: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      500: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 5,
      },
      1400: {
        slidesPerView: 6,
      },
    },
  });
  var swiper = new Swiper(".pt-thumb-bottom-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".ct-top-next-btn",
      prevEl: ".ct-top-prev-btn",
    },
  });
  var swiper = new Swiper(".product-full-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".pt-full-next-btn",
      prevEl: ".pt-full-prev-btn",
    },
    autoplay: {
      delay: 2500,
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      380: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      576: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 15,
      },
      992: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 4,
      },
    },
  });
  //home 2 Suggest slider
  var swiper = new Swiper(".sg-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    speed: 1000,
    loop: true,
    navigation: {
      nextEl: ".sg-next-btn",
      prevEl: ".sg-prev-btn",
    },
  });
  //home 2 Top Sell slider
  var swiper = new Swiper(".top-selling-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".top-sell-next-btn",
      prevEl: ".top-sell-prev-btn",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      386: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 4,
      },
    },
  });
  //home 2 Testimonial slide
  var swiper = new Swiper(".testimonial-slider", {
    loop: true,
    spaceBetween: 30,
    speed: 2000,
    centeredSlides: true,
    navigation: {
      nextEl: ".testimonial-next-btn",
      prevEl: ".testimonial-prev-btn",
    },
    autoplay: {
      delay: 5000,
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
      },
      386: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1.5,
      },
      992: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 2,
      },
      1400: {
        slidesPerView: 2,
      },
    },
  });


  $("#slick2").slick({
    rows: 2,
    dots: false,
    arrows: true,
    arrows: true,
    infinite: true,
    speed: 2000,
    slidesToShow: 3,
    slidesToScroll: 2,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 991,
        settings: {
          arrows: true,
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          arrows: false,
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 350,
        settings: {
          arrows: false,
          slidesToShow: 1,
        },
      },
    ],
  });
  var swiper = new Swiper(".exclusive-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    speed: 1000,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    navigation: {
      nextEl: ".exclusive-next-btn",
      prevEl: ".exclusive-prev-btn",
    },
  });
  var swiper = new Swiper(".brand-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    speed: 2500,
    autoplay: {
      delay: 2000,
    },
    breakpoints: {
      280: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      386: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      576: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 6,
      },
      1400: {
        slidesPerView: 7,
      },
    },
  });

  var swiper = new Swiper(".say-about-slider", {
    slidesPerView: 1,
    spaceBetween: 40,
    loop: true,
    navigation: {
      nextEl: ".about-next-btn",
      prevEl: ".about-prev-btn",
    },
    pagination: {
      el: ".swiper-pagination2",
      clickable: true,
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      386: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      576: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
      1400: {
        slidesPerView: 3,
      },
    },
  });
  var swiper = new Swiper(".instagram-slider", {
    spaceBetween: 15,
    loop: true,
    speed: 2500,
    autoplay: {
      delay: 2000,
      disableOnInteraction: true,
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      386: {
        slidesPerView: 2,
      },
      576: {
        slidesPerView: 4,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 5,
        spaceBetween: 15,
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 15,
      },
      1200: {
        slidesPerView: 7,
      },
      1400: {
        slidesPerView: 8,
      },
    },
  });

 /// active sidebar item added active class
 
/// active  slider item
$(".swiper-slide .nav-item .nav-link ").on("click",function(){  
  $('.swiper-slide .nav-item .nav-link').removeClass('active');
    $(this).addClass("active");
})



  //Video popup
  $('[data-fancybox="popup-video"]').fancybox({
    buttons: [
      //   "slideShow",
      //   "thumbs",
      //   "zoom",
      //   "fullScreen",
      //   "share",
      "close",
    ],
    loop: false,
    protect: true,
  });

  $(".sidebar-button").on("click", function () {
    $(this).toggleClass("active");
  });
  document
    .querySelector(".sidebar-button")
    .addEventListener("click", () =>
      document
        .querySelector(".main-menu, .sidebar-menu")
        .classList.toggle("show-menu")
    );

  $(".menu-close-btn").on("click", function () {
    $(".sidebar-menu").removeClass("show-menu");
  });
  //Quantity
  $(".quantity__minus").on("click", function (e) {
    e.preventDefault();
    var input = $(this).siblings(".quantity__input");
    var value = parseInt(input.val());
    if (value > 1) {
      value--;
    }
    input.val(value.toString().padStart(2, "0"));
  });
  $(".quantity__plus").on("click", function (e) {
    e.preventDefault();
    var input = $(this).siblings(".quantity__input");
    var value = parseInt(input.val());
    value++;
    input.val(value.toString().padStart(2, "0"));
  });

  $(function() {
    $('.payment-methods .payment-list li').on('click', function() {
      $('.payment-methods .payment-list li').removeClass('active'); // Remove active class from all list items
      if ($(this).hasClass('check-payment')) {
        $('#strip-payment').hide();
        $(this).addClass('active'); // Add active class to the clicked list item
      }
      else if ($(this).hasClass('cash-delivary')) {
        $('#strip-payment').hide();
        $(this).addClass('active'); // Add active class to the clicked list item
      }
      else if ($(this).hasClass('paypal')) {
        $('#strip-payment').hide();
        $(this).addClass('active'); // Add active class to the clicked list item
      }
      else if ($(this).hasClass('stripe')) {
        $('#strip-payment').show();
        $(this).addClass('active'); // Add active class to the clicked list item
      }
      else {
        $('#strip-payment').hide();
      }
    });
  });
  
  //Select wrap
  $(".select-wrap").on("click", function () {
    $(this).addClass("selected").siblings().removeClass("selected");
  });

  // timer start
  $("[data-countdown]").each(function () {
    var $deadline = new Date($(this).data("countdown")).getTime();
    var $dataDays = $(this).children("[data-days]");
    var $dataHours = $(this).children("[data-hours]");
    var $dataMinutes = $(this).children("[data-minutes]");
    var $dataSeconds = $(this).children("[data-seconds]");
    var x = setInterval(function () {
      var now = new Date().getTime();
      var t = $deadline - now;
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((t % (1000 * 60)) / 1000);
      $dataDays.html(`${days} <span>Days</span> <span>D</span>`);
      $dataHours.html(`${hours} <span>Hours</span> <span>H</span>`);
      $dataMinutes.html(`${minutes} <span>Minutes</span> <span>M</span>`);
      $dataSeconds.html(`${seconds} <span>Seconds</span> <span>S</span>`);
      if (t <= 0) {
        clearInterval(x);
        $dataDays.html("00 <span>Days</span> <span>D</span>");
        $dataHours.html("00 <span>Hours</span> <span>H</span>");
        $dataMinutes.html("00 <span>Minutes</span> <span>M</span>");
        $dataSeconds.html("00 <span>Seconds</span> <span>S</span>");
      }
    }, 1000);
  });
})(jQuery);
