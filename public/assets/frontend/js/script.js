AOS.init({
    duration: 1200,
});

jQuery(document).ready(function ($) {
    $("#example_1").whatsappChatSupport();
});

$(document).ready(function () {
    var owl = $("#relatedcourse");
    owl.owlCarousel({
        margin: 15,
        nav: false,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1.1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 4,
            },
        },
        navText: [
            '<i class="fa-solid fa-angle-left"></i>',
            '<i class="fa-solid fa-angle-right"></i>',
        ], // Add this line
    });
});

$(document).ready(function () {
    var owl = $("#book_slider");
    owl.owlCarousel({
        margin: 20,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 2.2,
            },
        },
        navText: [
            '<i class="fa-solid fa-angle-left"></i>',
            '<i class="fa-solid fa-angle-right"></i>',
        ], // Add this line
    });
});

$(document).ready(function () {
    var owl = $("#testimonial");
    owl.owlCarousel({
        margin: 12,
        nav: true,
        loop: true,
        // autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
        },
    });
});

// Slider | Testimonial
$(document).ready(function () {
    var owl = $("#awards_slider");
    owl.owlCarousel({
        margin: 15,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 4,
            },
        },
    });
});
// Slider | Testimonial
$(document).ready(function () {
    var owl = $("#course");
    owl.owlCarousel({
        margin: 15,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1.1,
            },
            600: {
                items: 2.1,
            },
            1000: {
                items: 4,
            },
        },
        navText: [
            '<i class="fa-solid fa-angle-left"></i>',
            '<i class="fa-solid fa-angle-right"></i>',
        ], // Add this line
    });
});

// Counter | About
var a = 0;
$(window).scroll(function () {
    var oTop = $("#counter").offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $(".counter-value").each(function () {
            var $this = $(this),
                countTo = $this.attr("data-count");
            $({
                countNum: $this.text(),
            }).animate(
                {
                    countNum: countTo,
                },

                {
                    duration: 2000,
                    easing: "swing",
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                    },
                }
            );
        });
        a = 1;
    }
});

// Fancybox Config
$(document).ready(function () {
    $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            "slideShow",
            "thumbs",
            "zoom",
            "fullScreen",
            "share",
            "close",
        ],
        loop: false,
        protect: true,
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var rightWrapper = document.querySelector(".course_content .right_wrapper");

    function handleScroll() {
        var scrollPosition = window.scrollY;

        if (scrollPosition > 200) {
            rightWrapper.style.marginTop = "";
            rightWrapper.classList.remove("courseTop");
        } else {
            rightWrapper.style.marginTop = "-255px";
        }
    }

    window.addEventListener("scroll", handleScroll);
});

function googleTranslateElementInit() {
    new google.translate.TranslateElement(
        {
            pageLanguage: "en",
        },
        "google_translate_element"
    );
    var $googleDiv = $("#google_translate_element .skiptranslate");
    var $googleDivChild = $("#google_translate_element .skiptranslate div");
    $googleDivChild.next().remove();
    $googleDiv
        .contents()
        .filter(function () {
            return this.nodeType === 3 && $.trim(this.nodeValue) !== "";
        })
        .remove();
}

$(function () {
    $(".img-gallery1").slice(0, 4).show();
    if ($(".img-gallery1").length > 4) {
        $(".load-more1").show();
    } else {
        $(".load-more1").hide();
    }
    $("body").on("click touchstart", ".load-more1", function (e) {
        e.preventDefault();
        $(".img-gallery1:hidden").slice(0, 4).slideDown();
        if ($(".img-gallery1:hidden").length == 0) {
            $(".load-more1").remove();
        }
    });
});

$(function () {
    $(".img-gallery2").slice(0, 4).show();
    if ($(".img-gallery2").length > 4) {
        $(".load-more2").show();
    } else {
        $(".load-more2").hide();
    }
    $("body").on("click touchstart", ".load-more2", function (e) {
        e.preventDefault();
        $(".img-gallery2:hidden").slice(0, 4).slideDown();
        if ($(".img-gallery2:hidden").length == 0) {
            $(".load-more2").remove();
        }
    });
});

$(function () {
    $(".img-gallery3").slice(0, 4).show();
    if ($(".img-gallery3").length > 4) {
        $(".load-more3").show();
    } else {
        $(".load-more3").hide();
    }
    $("body").on("click touchstart", ".load-more3", function (e) {
        e.preventDefault();
        $(".img-gallery3:hidden").slice(0, 4).slideDown();
        if ($(".img-gallery3:hidden").length == 0) {
            $(".load-more3").remove();
        }
    });
});

$(function () {
    $(".img-gallery4").slice(0, 4).show();
    if ($(".img-gallery4").length > 4) {
        $(".load-more4").show();
    } else {
        $(".load-more4").hide();
    }
    $("body").on("click touchstart", ".load-more4", function (e) {
        e.preventDefault();
        $(".img-gallery4:hidden").slice(0, 4).slideDown();
        if ($(".img-gallery4:hidden").length == 0) {
            $(".load-more4").remove();
        }
    });
});

$(function () {
    $(".img-gallery5").slice(0, 4).show();
    if ($(".img-gallery5").length > 4) {
        $(".load-more5").show();
    } else {
        $(".load-more5").hide();
    }
    $("body").on("click touchstart", ".load-more5", function (e) {
        e.preventDefault();
        $(".img-gallery5:hidden").slice(0, 4).slideDown();
        if ($(".img-gallery5:hidden").length == 0) {
            $(".load-more5").remove();
        }
    });
});

$(function () {
    $(".img-gallery6").slice(0, 4).show();
    if ($(".img-gallery6").length > 4) {
        $(".load-more6").show();
    } else {
        $(".load-more6").hide();
    }
    $("body").on("click touchstart", ".load-more6", function (e) {
        e.preventDefault();
        $(".img-gallery6:hidden").slice(0, 4).slideDown();
        if ($(".img-gallery6:hidden").length == 0) {
            $(".load-more6").remove();
        }
    });
});

$(function () {
    $(".img-gallery7").slice(0, 4).show();
    if ($(".img-gallery7").length > 4) {
        $(".load-more7").show();
    } else {
        $(".load-more7").hide();
    }
    $("body").on("click touchstart", ".load-more7", function (e) {
        e.preventDefault();
        $(".img-gallery7:hidden").slice(0, 4).slideDown();
        if ($(".img-gallery7:hidden").length == 0) {
            $(".load-more7").remove();
        }
    });
});

$(function () {
    $(".img-gallery8").slice(0, 4).show();
    if ($(".img-gallery8").length > 4) {
        $(".load-more8").show();
    } else {
        $(".load-more8").hide();
    }
    $("body").on("click touchstart", ".load-more8", function (e) {
        e.preventDefault();
        $(".img-gallery8:hidden").slice(0, 4).slideDown();
        if ($(".img-gallery8:hidden").length == 0) {
            $(".load-more8").remove();
        }
    });
});

$(function () {
    $(".img-gallery9").slice(0, 4).show();
    if ($(".img-gallery9").length > 4) {
        $(".load-more9").show();
    } else {
        $(".load-more9").hide();
    }
    $("body").on("click touchstart", ".load-more9", function (e) {
        e.preventDefault();
        $(".img-gallery9:hidden").slice(0, 4).slideDown();
        if ($(".img-gallery9:hidden").length == 0) {
            $(".load-more9").remove();
        }
    });
});

$(function () {
    $(".img-gallery10").slice(0, 4).show();
    if ($(".img-gallery10").length > 4) {
        $(".load-more10").show();
    } else {
        $(".load-more10").hide();
    }
    $("body").on("click touchstart", ".load-more10", function (e) {
        e.preventDefault();
        $(".img-gallery10:hidden").slice(0, 4).slideDown();
        if ($(".img-gallery10:hidden").length == 0) {
            $(".load-more10").remove();
        }
    });
});
