// Index of jQuery Active Code

// :: 1.0 PRELOADER ACTIVE CODE
// :: 2.0 NAVIGATION MENU ACTIVE CODE
// :: 3.0 STICKY HEADER ACTIVE CODE
// :: 4.0 SCROLL TO TOP ACTIVE CODE
// :: 5.0 SCROLL LINK ACTIVE CODE
// :: 6.0 SMOOTH SCROLLING ACTIVE CODE
// :: 7.0 AOS ACTIVE CODE
// :: 8.0 WOW ACTIVE CODE
// :: 9.0 PREVENT DEFAULT ACTIVE CODE
// :: 10.0 COUNTERUP ACTIVE CODE
// :: 11.0 CIRCLE ANIMATION ACTIVE CODE
// :: 12.0 CONTACT FORM ACTIVE CODE
// :: 13.0 PAGINATION PORTFOLIO CODE
// :: 14.0 PAGINATION REVIEWS PORTFOLIO CODE
// :: 15.0 IMAGE GALLERY ACTIVE CODE
// :: 16.0 IMAGE GALLERY ACTIVE CODE

(function ($) {
    'use strict';

    var $window = $(window);
    var zero = 0;

    // :: 1.0 PRELOADER ACTIVE CODE
    $(window).on("load", function () {
        $("#digimax-preloader").addClass("loaded");

        if ($("#digimax-preloader").hasClass("loaded")) {
            $("#preloader").delay(900).queue(function () {
                $(this).remove();
            });
        }
    });

    // :: 2.0 NAVIGATION MENU ACTIVE CODE
    jQuery(function ($) {
        'use strict';

        // RESPONSIVE NAVIGATION
        function navResponsive() {

            let navbar = $('.navbar .items');
            let menu = $('#menu .items');

            menu.html('');
            navbar.clone().appendTo(menu);

            $('.menu .fa-angle-right').removeClass('fa-angle-right').addClass('fa-angle-down');
        }

        navResponsive();

        $(window).on('resize', function () {
            navResponsive();
        })

        // PREVENT DROPDOWN
        $('.menu .dropdown-menu').each(function () {
            var children = $(this).children('.dropdown').length;
            $(this).addClass('children-' + children);
        })

        $('.menu .nav-item.dropdown').each(function () {
            var children = $(this).children('.nav-link');
            children.addClass('prevent');
        })

        $(document).on('click', '#menu .nav-item .nav-link', function (e) {

            if ($(this).hasClass('prevent')) {
                e.preventDefault();
            }

            var nav_link = $(this);

            nav_link.next().toggleClass('show');

            if (nav_link.hasClass('smooth-anchor')) {
                $('#menu').modal('hide');
            }
        })
    });

    // :: 3.0 STICKY HEADER ACTIVE CODE
    $window.on('scroll', function () {
        if ($(window).scrollTop() > 100) {
            $('.navbar').addClass('navbar-sticky');
            $('.navbar .navbar-nav.action .btn').addClass('btn-bordered');
            $('.navbar .navbar-nav.action .btn').removeClass('btn-bordered-white');
        } else {
            $('.navbar').removeClass('navbar-sticky');
            $('.navbar .navbar-nav.action .btn').removeClass('btn-bordered');
            $('.navbar .navbar-nav.action .btn').addClass('btn-bordered-white');
        }
    });

    $window.on('scroll', function () {
        $('.navbar-sticky').toggleClass('hide', $(window).scrollTop() > zero);
        zero = $(window).scrollTop();
    });

    // :: 4.0 SCROLL TO TOP ACTIVE CODE
    var offset = 300;
    var duration = 500;

    $window.on('scroll', function () {
        if ($(this).scrollTop() > offset) {
            $("#scrollUp").fadeIn(duration);
        } else {
            $("#scrollUp").fadeOut(duration);
        }
    });

    $("#scrollUp").on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, duration);
    });

    // :: 5.0 SCROLL LINK ACTIVE CODE
    var scrollLink = $('.scroll');

    // :: 6.0 SMOOTH SCROLLING ACTIVE CODE
    scrollLink.on('click', function (e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000);
    });

    // :: 7.0 AOS ACTIVE CODE
    AOS.init();

    // :: 8.0 WOW ACTIVE CODE
    new WOW().init();

    // :: 9.0 PREVENT DEFAULT ACTIVE CODE
    $("a[href='#']").on('click', function ($) {
        $.preventDefault();
    });

    // :: 10.0 COUNTERUP ACTIVE CODE
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    // :: 11.0 CIRCLE ANIMATION ACTIVE CODE
    $(window).on("load", function () {
        $('.profile-circle-wrapper').addClass('circle-animation');
        $('.profile-icon').fadeIn();
    });

    // :: 12.0 CONTACT FORM ACTIVE CODE
    // Get the form.
    var form = $('#contact-form');
    // Get the messages div.
    var formMessages = $('.form-message');
    // Set up an event listener for the contact form.
    $(form).submit(function (e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
        // Serialize the form data.
        var formData = $(form).serialize();
        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
            .done(function (response) {
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');

                // Set the message text.
                $(formMessages).text(response);

                // Clear the form.
                $('#contact-form input,#contact-form textarea').val('');
            })
            .fail(function (data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
            });
    });

    // :: 13.0 PAGINATION PORTFOLIO CODE

    document.addEventListener('DOMContentLoaded', function () {
        let currentPage = 1;
        const totalPages = 2; // จำนวนหน้าทั้งหมด
        const pageItems = document.querySelectorAll('.news-page');
        const paginationItems = document.querySelectorAll('.page-item');

        function showPage(pageNumber) {
            pageItems.forEach(page => {
                page.classList.remove('active');
            });

            const targetPage = document.getElementById(`page${pageNumber}`);
            if (targetPage) {
                targetPage.classList.add('active');
            }

            paginationItems.forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('data-page') == pageNumber) {
                    item.classList.add('active');
                }
            });

            document.getElementById('prevPage').classList.toggle('disabled', pageNumber === 1);
            document.getElementById('nextPage').classList.toggle('disabled', pageNumber === totalPages);

            currentPage = pageNumber;
        }

        document.querySelectorAll('.page-item').forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault();

                if (this.id === 'prevPage') {
                    if (currentPage > 1) showPage(currentPage - 1);
                } else if (this.id === 'nextPage') {
                    if (currentPage < totalPages) showPage(currentPage + 1);
                } else if (this.getAttribute('data-page')) {
                    const pageNum = parseInt(this.getAttribute('data-page'));
                    showPage(pageNum);
                }
            });
        });

        showPage(1);
    });

    // :: 14.0 PAGINATION REVIEWS PORTFOLIO CODE
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'slide',
            speed: 600,
        });

        // เพิ่มการ hover pause สำหรับ autoplay
        const swiperContainer = document.querySelector('.swiper-container');
        swiperContainer.addEventListener('mouseenter', function () {
            swiper.autoplay.stop();
        });

        swiperContainer.addEventListener('mouseleave', function () {
            swiper.autoplay.start();
        });
    });

}(jQuery));

// :: 16.0 IMAGE GALLERY ACTIVE CODE
window.changeImage = function (thumbnail) {
    // Update the featured image source
    const featuredImage = document.getElementById('featured-image');
    featuredImage.src = thumbnail.src;

    // Highlight the selected thumbnail
    const thumbnails = document.querySelectorAll('.thumbnail');
    thumbnails.forEach(thumb => thumb.style.border = '2px solid transparent');
    thumbnail.style.border = '2px solid #FFB87A';
};