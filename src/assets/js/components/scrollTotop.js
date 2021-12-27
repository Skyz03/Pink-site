import $ from "jquery";

const scrollToTop = () => {
    $("#js-scrollToTop").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1200);
        return false;
    });
};

export {
    scrollToTop
};