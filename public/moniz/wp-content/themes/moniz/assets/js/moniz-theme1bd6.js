(function ($) {
    "use strict";

    if ($('.listing-details__contact-info-phone').length) {
        $('.listing-details__contact-info-phone').on('click', function (e) {
            e.preventDefault();
            var textElement = $(this).find('.text h5');
            var mainText = textElement.data('number');
            var toggleText = textElement.data('toggle-number');
            if (textElement.text() == mainText) {
                textElement.text(toggleText)
            } else {
                textElement.text(mainText);
            }
        });
    }

    if ($('.listing-top__map-show-hide').length) {
        $('.listing-top__map-show-hide').on('click', function () {
            $(this).toggleClass('hidden');
            var textElement = $(this).find('.listing-top__map-show-hide-text span');
            if (textElement.text() == textElement.data('text')) {
                textElement.text(textElement.data('toggle-text'))
            } else {
                textElement.text(textElement.data('text'));
            }
            $('.listing__map').toggleClass('hidden');
            $('.listing__content').toggleClass('hidden');
        });
    }

    if ($('#datepicker').length) {
        $('#datepicker').datepicker();
    };

    if ($('#datepicker2').length) {
        $('#datepicker2').datepicker();
    };


    if ($('#datepicker-inline').length) {
        $('#datepicker-inline').datepicker();
    };


    if ($(".banner-bg-slide").length) {
        $(".banner-bg-slide").each(function () {
            var Self = $(this);
            var bgSlideOptions = Self.data("options");
            var bannerTwoSlides = Self.vegas(bgSlideOptions);
        });
    }

    //Pricing Tabs
    if ($('.pricing-tabs').length) {
        $('.pricing-tabs .tab-btns .tab-btn').on('click', function (e) {
            e.preventDefault();
            var target = $($(this).attr('data-tab'));

            if ($(target).hasClass('actve-tab')) {
                return false;
            } else {
                $('.pricing-tabs .tab-btns .tab-btn').removeClass('active-btn');
                $(this).addClass('active-btn');
                $('.pricing-tabs .pr-content .pr-tab').removeClass('active-tab');
                $(target).addClass('active-tab');
            }
        });
    }



    //Fact Counter + Text Count
    if ($(".count-box").length) {
        $(".count-box").appear(
            function () {
                var $t = $(this),
                    n = $t.find(".count-text").attr("data-stop"),
                    r = parseInt($t.find(".count-text").attr("data-speed"), 10);

                if (!$t.hasClass("counted")) {
                    $t.addClass("counted");
                    $({
                        countNum: $t.find(".count-text").text(),
                    }).animate({
                        countNum: n,
                    }, {
                        duration: r,
                        easing: "linear",
                        step: function () {
                            $t.find(".count-text").text(
                                Math.floor(this.countNum)
                            );
                        },
                        complete: function () {
                            $t.find(".count-text").text(this.countNum);
                        },
                    });
                }
            }, {
                accY: 0
            }
        );
    }






    if ($(".scroll-to-target").length) {
        $(".scroll-to-target").on("click", function () {
            var target = $(this).attr("data-target");
            // animate
            $("html, body").animate({
                    scrollTop: $(target).offset().top,
                },
                1000
            );

            return false;
        });
    }


    if ($('.footer-widget__newsletter-bottom').length) {
        $('.mc-form button[type=submit]').attr('disabled', 'disabled');
        $('.footer-widget__newsletter-bottom').find('.footer-widget__newsletter-bottom-text').on('click', function () {
            $(this).parent().find('.footer-widget__newsletter-bottom-icon i').toggleClass('fa-check fa-circle');
            if ($(this).parent().find('.footer-widget__newsletter-bottom-icon i').hasClass('fa-check')) {
                $('.mc-form button[type=submit]').removeAttr('disabled');
            } else {
                $('.mc-form button[type=submit]').attr('disabled', 'disabled');
            }
        });
    }

    // Accrodion
    if ($(".accrodion-grp").length) {
        var accrodionGrp = $(".accrodion-grp");
        accrodionGrp.each(function () {
            var accrodionName = $(this).data("grp-name");
            var Self = $(this);
            var accordion = Self.find(".accrodion");
            Self.addClass(accrodionName);
            Self.find(".accrodion .accrodion-content").hide();
            Self.find(".accrodion.active").find(".accrodion-content").show();
            accordion.each(function () {
                $(this)
                    .find(".accrodion-title")
                    .on("click", function () {
                        if ($(this).parent().hasClass("active") === false) {
                            $(".accrodion-grp." + accrodionName)
                                .find(".accrodion")
                                .removeClass("active");
                            $(".accrodion-grp." + accrodionName)
                                .find(".accrodion")
                                .find(".accrodion-content")
                                .slideUp();
                            $(this).parent().addClass("active");
                            $(this)
                                .parent()
                                .find(".accrodion-content")
                                .slideDown();
                        }
                    });
            });
        });
    }

    if ($('.thm-accordion').length) {
        let accordionWrapper = $('.thm-accordion');
        accordionWrapper.each(function () {
            let $this = $(this);
            let accordionID = $this.attr('id');
            let accordionTitle = $this.find('.thm-accordion__title');
            $this.addClass(accordionID);
            // default hide
            let mainAccordionContent = $this.find('.thm-accordion__content').hide();
            $this.find('.active-item .thm-accordion__content').show();
            // on title click
            accordionTitle.on('click', function (e) {
                e.preventDefault();
                let $this = $(this);
                let accordionItem = $(this).parent();
                if (false === accordionItem.hasClass('active-item')) {
                    $('#' + accordionID).find('.thm-accordion__item').removeClass('active-item');
                    accordionItem.addClass('active-item');
                    mainAccordionContent.slideUp();
                    accordionItem.find('.thm-accordion__content').slideDown();
                }
            });
        })
    }


    if ($(".main-menu__list").length && $(".mobile-nav__container").length) {
        let navContent = document.querySelector(".main-menu__list").outerHTML;
        let mobileNavContainer = document.querySelector(".mobile-nav__container");
        mobileNavContainer.innerHTML = navContent;
    }
    if ($(".sticky-header__content").length) {
        let navContent = document.querySelector(".main-menu").innerHTML;
        let mobileNavContainer = document.querySelector(".sticky-header__content");
        mobileNavContainer.innerHTML = navContent;
    }

    if ($(".mobile-nav__container .main-menu__list").length) {
        let dropdownAnchor = $(
            ".mobile-nav__container .main-menu__list .menu-item-has-children > a"
        );
        dropdownAnchor.each(function () {
            let self = $(this);
            let toggleBtn = document.createElement("BUTTON");
            toggleBtn.setAttribute("aria-label", "dropdown toggler");
            toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";
            self.append(function () {
                return toggleBtn;
            });
            self.find("button").on("click", function (e) {
                e.preventDefault();
                let self = $(this);
                self.toggleClass("expanded");
                self.parent().toggleClass("expanded");
                self.parent().parent().children("ul").slideToggle();
            });
        });
    }

    if ($(".mobile-nav__toggler").length) {
        $(".mobile-nav__toggler").on("click", function (e) {
            e.preventDefault();
            $(".mobile-nav__wrapper").toggleClass("expanded");
            $("body").toggleClass("locked");
        });
    }

    if ($(".search-toggler").length) {
        $(".search-toggler").on("click", function (e) {
            e.preventDefault();
            $(".search-popup").toggleClass("active");
            $(".mobile-nav__wrapper").removeClass("expanded");
            $("body").toggleClass("locked");
        });
    }



    function SmoothMenuScroll() {
        var anchor = $(".scrollToLink");
        if (anchor.length) {
            $(".scrollToLink > a").on("click", function (event) {
                event.preventDefault();
                console.log($(this));
                if ($(window).scrollTop() > 10) {
                    var headerH = "0";
                } else {
                    var headerH = "0";
                }
                var target = $(this);
                $("html, body")
                    .stop()
                    .animate({
                            scrollTop: $(target.attr("href")).offset().top - headerH + "px"
                        },
                        1200,
                        "easeInOutExpo"
                    );
                anchor.removeClass("current");
                anchor.removeClass("current-menu-ancestor");
                anchor.removeClass("current-page-parent");
                anchor.removeClass("current-menu-parent");
                anchor.removeClass("current_page_item");
                target.parent().addClass("current");
                if ($(window).width() <= 1199) {
                    $(".mobile-nav__wrapper").toggleClass("expanded");
                    $("body").toggleClass("locked");
                }
            });
        }
    }
    SmoothMenuScroll();

    function OnePageMenuScroll() {
        var windscroll = $(window).scrollTop();
        if (windscroll >= 117) {
            var menuAnchor = $(".one-page-scroll-menu .scrollToLink").children("a");
            menuAnchor.each(function () {
                // grabing section id dynamically
                var sections = $(this).attr("href");
                $(sections).each(function () {
                    // checking is scroll bar are in section
                    if ($(this).offset().top <= windscroll + 100) {
                        // grabing the dynamic id of section
                        var Sectionid = $(sections).attr("id");
                        // removing current class from others
                        $(".one-page-scroll-menu").find("li").removeClass("current");
                        $(".one-page-scroll-menu").find("li").removeClass("current-menu-ancestor");
                        $(".one-page-scroll-menu").find("li").removeClass("current-page-parent");
                        $(".one-page-scroll-menu").find("li").removeClass("current-menu-parent");
                        // adding current class to related navigation
                        $(".one-page-scroll-menu")
                            .find("a[href*=\\#" + Sectionid + "]")
                            .parent()
                            .addClass("current");
                    }
                });
            });
        } else {
            $(".one-page-scroll-menu li.current").removeClass("current");
            $(".one-page-scroll-menu li.current-menu-ancestor").removeClass("current-menu-ancestor");
            $(".one-page-scroll-menu li.current-page-parent").removeClass("current-page-parent");
            $(".one-page-scroll-menu li.current-menu-parent").removeClass("current-menu-parent");
            $(".one-page-scroll-menu li.current_page_item").removeClass("current_page_item");
            $(".one-page-scroll-menu li:first").addClass("current");
        }
    }


    if ($(".dynamic-year").length) {
        let date = new Date();
        $(".dynamic-year").html(date.getFullYear());
    }

    if ($(".wow").length) {
        var wow = new WOW({
            boxClass: "wow", // animated element css class (default is wow)
            animateClass: "animated", // animation css class (default is animated)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true, // act on asynchronously loaded content (default is true)
        });
        wow.init();
    }

    if ($("#donate-amount__predefined").length) {
        let donateInput = $("#donate-amount");
        $("#donate-amount__predefined")
            .find("li")
            .on("click", function (e) {
                e.preventDefault();
                let amount = $(this).find("a").text();
                donateInput.val(amount);
                $("#donate-amount__predefined").find("li").removeClass("active");
                $(this).addClass("active");
            });
    }


    if ($(".add").length) {
        $(document).on("click", '.add', function () {
            if ($(this).prev().val() < 999) {
                $(this)
                    .prev()
                    .val(+$(this).prev().val() + 1);
            }
            $(this).prev().trigger('change');
        });
    }

    if ($(".sub").length) {
        $(document).on("click", '.sub', function () {
            if ($(this).next().val() > 1) {
                if ($(this).next().val() > 1)
                    $(this)
                    .next()
                    .val(+$(this).next().val() - 1);
            }
            $(this).next().trigger('change');
        });
    }



    if ($(".range-slider-price").length) {
        var priceRange = document.getElementById("range-slider-price");

        noUiSlider.create(priceRange, {
            start: [30, 150],
            limit: 200,
            behaviour: "drag",
            connect: true,
            range: {
                min: 10,
                max: 200,
            },
        });

        var limitFieldMin = document.getElementById("min-value-rangeslider");
        var limitFieldMax = document.getElementById("max-value-rangeslider");

        priceRange.noUiSlider.on("update", function (values, handle) {
            (handle ? $(limitFieldMax) : $(limitFieldMin)).text(values[handle]);
        });
    }

    function thmSwiperInit() {
        // swiper slider
        const swiperElm = document.querySelectorAll(".thm-swiper__slider");
        swiperElm.forEach(function (swiperelm) {
            const swiperOptions = JSON.parse(swiperelm.dataset.swiperOptions);
            let thmSwiperSlider = new Swiper(swiperelm, swiperOptions);
        });
    }



    // window load event

    $(window).on("load", function () {
        if ($(".preloader").length) {
            $(".preloader").fadeOut();
        }
        thmSwiperInit();


        if ($(".circle-progress").length) {
            $(".circle-progress").appear(function () {
                let circleProgress = $(".circle-progress");
                circleProgress.each(function () {
                    let progress = $(this);
                    let progressOptions = progress.data("options");
                    progress.circleProgress(progressOptions);
                });
            });
        }


    });

    // window scroll event

    $(window).on("scroll", function () {
        OnePageMenuScroll();
        if ($(".stricked-menu").length) {
            var headerScrollPos = 130;
            var stricky = $(".stricked-menu");
            if ($(window).scrollTop() > headerScrollPos) {
                stricky.addClass("stricky-fixed");
            } else if ($(this).scrollTop() <= headerScrollPos) {
                stricky.removeClass("stricky-fixed");
            }
        }
        if ($(".scroll-to-top").length) {
            var strickyScrollPos = 100;
            if ($(window).scrollTop() > strickyScrollPos) {
                $(".scroll-to-top").fadeIn(500);
            } else if ($(this).scrollTop() <= strickyScrollPos) {
                $(".scroll-to-top").fadeOut(500);
            }
        }
    });

    $(document).on('click', '.shop-one__cart.moniz_ajax ', function (e) {
        $(".moniz-overlay").fadeIn(300);
    });

    $(document.body).on('added_to_cart', function (event, fragments, cart_hash, $button) {
        $(".moniz-overlay").fadeOut(300);

    });

})(jQuery);