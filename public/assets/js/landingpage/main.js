(function () {
    //===== Prealoder

    window.onload = function () {
        window.setTimeout(fadeout, 500);
    };

    function fadeout() {
        document.querySelector(".preloader").style.opacity = "0";
        document.querySelector(".preloader").style.display = "none";
    }

    /*=====================================
    Sticky
    ======================================= */
    window.onscroll = function () {
        var header_navbar = document.querySelector(".navbar-area");
        var sticky = header_navbar.offsetTop;
        var logo = document.querySelector(".navbar-brand img");

        if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
            logo.src = "assets/img/landingpage/logo/logo-2.svg";
        } else {
            header_navbar.classList.remove("sticky");
            logo.src = "assets/img/landingpage/logo/logo.svg";
        }

        // show or hide the back-top-top button
        var backToTo = document.querySelector(".scroll-top");
        if (
            document.body.scrollTop > 50 ||
            document.documentElement.scrollTop > 50
        ) {
            backToTo.style.display = "flex";
        } else {
            backToTo.style.display = "none";
        }
    };

    // Get the navbar

    // for menu scroll
    var pageLink = document.querySelectorAll(".page-scroll");

    pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
            e.preventDefault();
            document.querySelector(elem.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
                offsetTop: 1 - 60,
            });
        });
    });

    //===== close navbar-collapse when a  clicked
    let navbarToggler = document.querySelector(".navbar-toggler");
    var navbarCollapse = document.querySelector(".navbar-collapse");

    document.querySelectorAll(".page-scroll").forEach((e) =>
        e.addEventListener("click", () => {
            navbarToggler.classList.remove("active");
            navbarCollapse.classList.remove("show");
        })
    );
    navbarToggler.addEventListener("click", function () {
        navbarToggler.classList.toggle("active");
    });

    // WOW active
    new WOW().init();

    //======== tiny slider
    tns({
        container: ".testimonial-active",
        slideBy: "page",
        mode: "gallery",
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        nav: false,
        controls: true,
        controlsText: [
            '<i class="lni lni-chevron-left prev"></i>',
            '<i class="lni lni-chevron-right next"></i>',
        ],
        items: 1,

        // responsive: {
        //     0: {
        //         nav: true,
        //         controls: false,
        //     },

        //     992: {
        //         nav: false,
        //         controls: true,
        //     }
        // }
    });
})();
