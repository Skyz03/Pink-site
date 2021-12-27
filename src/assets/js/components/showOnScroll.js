function showOnScroll() {
  const scrollToTop = document.getElementById("js-scrollToTop");
  // const fixedBottomNav = document.getElementById("js-fixedBottomNav");

  const footerbot = document.getElementById("footer");
  var footerHeight = footerbot.offsetHeight;

  window.addEventListener("scroll", function () {
    var windowScroll = window.pageYOffset;
    let windowHeight = window.innerHeight;

    // if (windowScroll > 300) {
    // scrollToTop.style.display = "flex";
    // fixedBottomNav.style.display = "flex";
    // } else {
    // scrollToTop.style.display = "none";
    // fixedBottomNav.style.display = "none";
    // }

    if (windowScroll > 500) {
      scrollToTop.style.display = "flex";
      // fixedBottomNav.style.display = "flex";
    } else {
      scrollToTop.style.display = "none";
      // fixedBottomNav.style.display = "none";
    }

    var width = window.innerWidth;
    if ((width >= 768)) {
      //do something
      if (windowHeight + windowScroll + (footerHeight) >= document.body.offsetHeight) {
        scrollToTop.classList.add("scroll-show");
      } else {
        scrollToTop.classList.remove("scroll-show");
      }
    } else {
      //do something else
      if (windowHeight + windowScroll + (footerHeight - 100) >= document.body.offsetHeight) {
        scrollToTop.classList.add("scroll-show");
      } else {
        scrollToTop.classList.remove("scroll-show");
      }
    }


    if (windowHeight + windowScroll + 80 >= document.body.offsetHeight) {
      scrollToTop.classList.add("scroll-show");
    } else {
      scrollToTop.classList.remove("scroll-show");
    }
  });
}

export { showOnScroll };

