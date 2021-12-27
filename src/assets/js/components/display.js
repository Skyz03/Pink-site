import $ from "jquery";

function hiddeni() {

  $("#item").hover(function (e) {
    $(".dropdown-item").toggleClass("dropdown-item-visible", e.type === "mouseenter");
  });


}

export {
  hiddeni
};