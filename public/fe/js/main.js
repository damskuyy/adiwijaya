(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 45,
        dots: false,
        loop: true,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:2
            },
            576:{
                items:4
            },
            768:{
                items:6
            },
            992:{
                items:8
            }
        }
    });
    
    // Client carousel top - geser otomatis ke kanan, pause on hover, drag manual
    // Nonaktifkan Owl Carousel untuk client carousel karena menggunakan animasi CSS
    // Hapus atau komentari kode inisialisasi berikut jika ada
    // $('.client-carousel-top').owlCarousel(...);
    // $('.client-carousel-bottom').owlCarousel(...);

    // Tambah event handler untuk pause animasi CSS saat hover dan resume saat mouse leave
    $('.client-carousel-top .scrolling-wrapper, .client-carousel-bottom .scrolling-wrapper').hover(
        function() {
            $(this).css('animation-play-state', 'paused');
        },
        function() {
            $(this).css('animation-play-state', 'running');
        }
    );
})(jQuery);

(function ($) {
    "use strict";

    // Existing code unchanged above...

    // Enable manual drag on client carousels with CSS animation
    function enableManualDrag(selector) {
        const container = document.querySelector(selector);
        if (!container) return;

        let isDown = false;
        let startX;
        let scrollLeft;

        container.addEventListener('mousedown', (e) => {
            isDown = true;
            container.style.cursor = 'grabbing';
            startX = e.pageX - container.offsetLeft;
            scrollLeft = container.scrollLeft;
            // Pause CSS animation
            container.querySelector('.scrolling-wrapper').style.animationPlayState = 'paused';
        });

        container.addEventListener('mouseleave', () => {
            if (isDown) {
                isDown = false;
                container.style.cursor = 'grab';
                // Resume CSS animation
                container.querySelector('.scrolling-wrapper').style.animationPlayState = 'running';
            }
        });

        container.addEventListener('mouseup', () => {
            if (isDown) {
                isDown = false;
                container.style.cursor = 'grab';
                // Resume CSS animation
                container.querySelector('.scrolling-wrapper').style.animationPlayState = 'running';
            }
        });

        container.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - container.offsetLeft;
            const walk = (x - startX) * 1; // scroll lebih lambat
            container.scrollLeft = scrollLeft - walk;
        });

        // Touch events for mobile
        container.addEventListener('touchstart', (e) => {
            isDown = true;
            startX = e.touches[0].pageX - container.offsetLeft;
            scrollLeft = container.scrollLeft;
            container.querySelector('.scrolling-wrapper').style.animationPlayState = 'paused';
        });

        container.addEventListener('touchend', () => {
            isDown = false;
            container.querySelector('.scrolling-wrapper').style.animationPlayState = 'running';
        });

        container.addEventListener('touchmove', (e) => {
            if (!isDown) return;
            const x = e.touches[0].pageX - container.offsetLeft;
            const walk = (x - startX) * 2;
            container.scrollLeft = scrollLeft - walk;
        });
    }

    // Initialize manual drag on client-carousel-top and client-carousel-bottom
    $(document).ready(function () {
        enableManualDrag('.client-carousel-top');
        enableManualDrag('.client-carousel-bottom');
    });

    // Disable CSS animation for manual scrolling and enable infinite scroll effect
    function enableInfiniteScroll(selector) {
        const container = document.querySelector(selector);
        if (!container) return;

        const scrollingContent = container.querySelector('.scrolling-content');
        const scrollWidth = scrollingContent.scrollWidth / 2;

        container.addEventListener('scroll', () => {
            if (container.scrollLeft >= scrollWidth) {
                container.scrollLeft -= scrollWidth;
            } else if (container.scrollLeft <= 1) {
                container.scrollLeft += scrollWidth;
            }
        });

        // Initialize scroll position to middle for seamless scroll
        container.scrollLeft = scrollWidth;
    }

})(jQuery);

