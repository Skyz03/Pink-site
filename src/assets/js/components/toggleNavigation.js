// const navIcon = document.getElementById("js-navIcon");
// const nav = document.getElementById("js-nav");
// const headerbtm = document.getElementById("header");
// const navLinks = document.querySelectorAll(".js-navLink");

// const toggleNavigation = () => {
//     navIcon.addEventListener("click", () => {
//         navIcon.classList.toggle("is-opened");
//         nav.classList.toggle("is-opened");
//         headerbtm.classList.toggle("is-opened");
//     });

//     navLinks.forEach((navLink) => {
//         navLink.addEventListener("click", () => {
//             navIcon.classList.remove("is-opened");
//             nav.classList.remove("is-opened");
//             headerbtm.classList.remove("is-opened");
//         });
//     });
// };
import $ from "jquery";
function toggleNavigation() {
  $(window).ready(function () {
    var nav = $(".header__bottom");
    //   var nav2 = $(".header__bottom");
    var navicon = $(".nav-icon");

    $(".nav-icon").on("click", function (e) {
      e.preventDefault();
      nav.toggleClass("shown");
      // nav2.toggleClass("shown");
      navicon.toggleClass("is-opened");
      $("body").toggleClass("overflow");
    });
    // $(".nav_itm").on("click", function (e) {
    //   e.preventDefault();
    //   nav.toggleClass("shown");
    //   $("body").toggleClass("overflow");
    //   navicon.toggleClass("is-opened");
    // });
  });

  $(".dropdown").on("click", () => {
    console.log("hello");
    $("body").removeClass("overflow");
    $(".nav-icon").removeClass("is-opened");
    $(".header__bottom").removeClass("shown");
  });
}


export {
  toggleNavigation
};