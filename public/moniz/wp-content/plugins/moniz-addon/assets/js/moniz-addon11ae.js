(function ($) {
    "use strict";

    var WidgetCountdownHandler = function () {

        if ($(".mc-form").length) {
            $(".mc-form").each(function () {
                var Self = $(this);
                var mcURL = Self.data("url");
                var mcResp = Self.parent().find(".mc-form__response");

                Self.ajaxChimp({
                    url: mcURL,
                    callback: function (resp) {
                        // appending response
                        mcResp.append(function () {
                            return '<p class="mc-message">' + resp.msg + "</p>";
                        });
                        // making things based on response
                        if (resp.result === "success") {
                            // Do stuff
                            Self.removeClass("errored").addClass("successed");
                            mcResp.removeClass("errored").addClass("successed");
                            Self.find("input").val("");

                            mcResp.find("p").fadeOut(1000);
                        }
                        if (resp.result === "error") {
                            Self.removeClass("successed").addClass("errored");
                            mcResp.removeClass("successed").addClass("errored");
                            Self.find("input").val("");

                            mcResp.find("p").fadeOut(3000);
                        }
                    }
                });
            });
        }

        if ($(".countdown-one__list").length) {
            let mainDate = $('.countdown-one__list').data('deadline-date');
            let yearsCondition = $('.countdown-one__list').data('enable-years');
            let leadingZeros = $('.countdown-one__list').data('leading-zeros');

            let deadLine = ('dynamicDate' == mainDate) ? new Date(Date.parse(new Date()) + 31 * 24 * 60 * 60 * 1000) : mainDate;

            $(".countdown-one__list").countdown({
                date: deadLine,
                leadingZeros: true,
                render: function (date) {
                    this.el.innerHTML =
                        (true == yearsCondition ? "<li> <span class='years'> " + (true == leadingZeros ? this.leadingZeros(date.years) : date.years) + " <i> Years </i> </span> </li>" : " ") +
                        "<li> <span class='days'> " + (true == leadingZeros ? this.leadingZeros(date.days) : date.days) + " <i> Days </i> </span> </li>" +
                        "<li> <span class='hours'>" + (true == leadingZeros ? this.leadingZeros(date.hours) : date.hours) + " <i> Hours </i> </span> </li>" +
                        "<li> <span class='minutes'> " + (true == leadingZeros ? this.leadingZeros(date.min) : date.min) + " <i> Minutes </i> </span> </li>" +
                        "<li> <span class='seconds'>" + (true == leadingZeros ? this.leadingZeros(date.sec) : date.sec) + " <i> Seconds </i> </span> </li>";
                }
            });
        }

    };

    var WidgetMainSliderHandler = function () {
        //Main Slider / Banner Carousel
        if ($(".banner-carousel").length) {
            $(".banner-carousel").owlCarousel({
                loop: true,
                animateOut: "fadeOut",
                animateIn: "fadeIn",
                margin: 0,
                nav: true,
                smartSpeed: 500,
                autoplay: 6000,
                autoplayTimeout: 7000,
                autoplayHoverPause: true,
                navText: [
                    '<span class="icon fa fa-angle-left"></span>',
                    '<span class="icon fa fa-angle-right"></span>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    800: {
                        items: 1
                    },
                    992: {
                        items: 1
                    }
                }
            });
        }

    };

    var WidgetMailchimpHandler = function () {
        if ($(".mc-form").length) {
            $(".mc-form").each(function () {
                var Self = $(this);
                var mcURL = Self.data("url");
                var mcResp = Self.parent().find(".mc-form__response");

                Self.ajaxChimp({
                    url: mcURL,
                    callback: function (resp) {
                        // appending response
                        mcResp.append(function () {
                            return '<p class="mc-message">' + resp.msg + "</p>";
                        });
                        // making things based on response
                        if (resp.result === "success") {
                            // Do stuff
                            Self.removeClass("errored").addClass("successed");
                            mcResp.removeClass("errored").addClass("successed");
                            Self.find("input").val("");

                            mcResp.find("p").fadeOut(10000);
                        }
                        if (resp.result === "error") {
                            Self.removeClass("successed").addClass("errored");
                            mcResp.removeClass("successed").addClass("errored");
                            Self.find("input").val("");

                            mcResp.find("p").fadeOut(10000);
                        }
                    }
                });
            });
        }
    };

    var WidgetDefaultHandler = function () {

        // swiper slider
        const swiperElm = document.querySelectorAll(".thm-swiper__slider");
        swiperElm.forEach(function (swiperelm) {
            const swiperOptions = JSON.parse(swiperelm.dataset.swiperOptions);
            let thmSwiperSlider = new Swiper(swiperelm, swiperOptions);
        });


        //Single Item Carousel
        if ($(".service-two__carousel").length) {
            $(".service-two__carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                smartSpeed: 500,
                autoplay: 5000,
                autoplayHoverPause: true,
                autoplayTimeout: 5000,
                navText: [
                    '<span class="icon-left-arrow"></span>',
                    '<span class="icon-right-arrow"></span>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
        }

        //Single Item Carousel
        if ($(".single-item-carousel").length) {
            $(".single-item-carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                smartSpeed: 500,
                autoplay: 5000,
                autoplayHoverPause: true,
                autoplayTimeout: 5000,
                navText: [
                    '<span class="icon fa fa-angle-left"></span>',
                    '<span class="icon fa fa-angle-right"></span>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    800: {
                        items: 1
                    },
                    1024: {
                        items: 1
                    }
                }
            });
        }


        // News Two Carousel
        if ($(".blog-two__carousel").length) {
            var blogCarousel = $(".blog-two__carousel");
            var nextBtn = $('.blog-two__carousel__custom-nav .left-btn');
            var prevBtn = $('.blog-two__carousel__custom-nav .right-btn');
            blogCarousel.owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                smartSpeed: 500,
                autoHeight: false,
                autoplay: true,
                dots: false,
                autoplayTimeout: 10000,
                navText: [
                    '<span class="icon-left-arrow"></span>',
                    '<span class="icon-right-arrow"></span>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    992: {
                        items: 3,
                    },
                    1024: {
                        items: 3,
                    },
                    1200: {
                        items: 3,
                    },
                },
            });
            nextBtn.on('click', function (e) {
                e.preventDefault();
                blogCarousel.trigger('next.owl.carousel', [500]);
            });
            prevBtn.on('click', function (e) {
                e.preventDefault();
                blogCarousel.trigger('prev.owl.carousel', [500]);
            });
        }


        if ($(".video-popup").length) {
            $(".video-popup").magnificPopup({
                type: "iframe",
                mainClass: "mfp-fade",
                removalDelay: 160,
                preloader: true,

                fixedContentPos: false,
            });
        }

        if ($(".img-popup").length) {
            var groups = {};
            $(".img-popup").each(function () {
                var id = parseInt($(this).attr("data-group"), 10);

                if (!groups[id]) {
                    groups[id] = [];
                }

                groups[id].push(this);
            });

            $.each(groups, function () {
                $(this).magnificPopup({
                    type: "image",
                    closeOnContentClick: true,
                    closeBtnInside: false,
                    gallery: {
                        enabled: true,
                    },
                });
            });
        }

        // Popular Causes Progress Bar
        if ($('.count-bar').length) {
            $('.count-bar').appear(function () {
                var el = $(this);
                var percent = el.data('percent');
                $(el).css('width', percent).addClass('counted');
            }, {
                accY: -50
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
                            countNum: $t.find(".count-text").text()
                        }).animate({
                            countNum: n
                        }, {
                            duration: r,
                            easing: "linear",
                            step: function () {
                                $t.find(".count-text").text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                $t.find(".count-text").text(this.countNum);
                            }
                        });
                    }
                }, {
                    accY: 0
                }
            );
        }

        //Jquery Knob animation
        if ($(".dial").length) {
            $(".dial").appear(
                function () {
                    var elm = $(this);
                    var color = elm.attr("data-fgColor");
                    var perc = elm.attr("value");
                    var thickness = elm.attr("data-thickness");

                    elm.knob({
                        value: 0,
                        min: 0,
                        max: 100,
                        skin: "tron",
                        readOnly: true,
                        thickness: thickness,
                        dynamicDraw: true,
                        displayInput: false
                    });

                    $({
                        value: 0
                    }).animate({
                        value: perc
                    }, {
                        duration: 2000,
                        easing: "swing",
                        progress: function () {
                            elm.val(Math.ceil(this.value)).trigger("change");
                        }
                    });
                }, {
                    accY: 0
                }
            );
        }


        if ($(".odometer").length) {
            var odo = $(".odometer");
            odo.each(function () {
                $(this).appear(function () {
                    var countNumber = $(this).attr("data-count");
                    $(this).html(countNumber);
                });
            });
        }
    }

    var WidgetAccordionHandler = function () {

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

    }

    var WidgetPortfolioHandler = function () {
        if ($(".masonary-layout").length) {
            $(".masonary-layout").isotope({
                layoutMode: "masonry"
            });
        }
        if ($(".post-filter").length) {
            $(".post-filter li")
                .children(".filter-text")
                .on("click", function () {
                    var Self = $(this);
                    var selector = Self.parent().attr("data-filter");
                    $(".post-filter li").removeClass("active");
                    Self.parent().addClass("active");
                    $(".filter-layout").isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 500,
                            easing: "linear",
                            queue: false
                        }
                    });
                    return false;
                });
        }

        if ($(".post-filter.has-dynamic-filters-counter").length) {
            // var allItem = $('.single-filter-item').length;
            var activeFilterItem = $(".post-filter.has-dynamic-filters-counter").find(
                "li"
            );
            activeFilterItem.each(function () {
                var filterElement = $(this).data("filter");
                var count = $(".filter-layout").find(filterElement).length;
                $(this)
                    .children(".filter-text")
                    .append('<span class="count">(' + count + ")</span>");
            });
        }


        // Portfolio Two Carousel
        if ($(".portfolio-two__carousel").length) {
            $(".portfolio-two__carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                smartSpeed: 500,
                autoHeight: false,
                autoplay: true,
                dots: false,
                autoplayTimeout: 10000,
                navText: [
                    '<span class="icon-left-arrow"></span>',
                    '<span class="icon-right-arrow"></span>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    800: {
                        items: 1,
                    },
                    1024: {
                        items: 1,
                    },
                    1200: {
                        items: 1,
                    },
                },
            });
        }
    }

    var WidgetTeamHandler = function () {

        //Team Carousel
        if ($(".team-carousel").length) {
            $(".team-carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                smartSpeed: 700,
                autoplay: 5000,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                navText: [
                    '<span class="icon fa fa-angle-left"></span>',
                    '<span class="icon fa fa-angle-right"></span>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    },
                    1500: {
                        items: 4
                    },
                    1600: {
                        items: 5
                    }
                }
            });
        }

        //Team Carousel
        if ($(".team-carousel__one-page").length) {
            $(".team-carousel__one-page").owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                smartSpeed: 700,
                autoplay: 5000,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                navText: [
                    '<span class="icon fa fa-angle-left"></span>',
                    '<span class="icon fa fa-angle-right"></span>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 3
                    },
                    1500: {
                        items: 3
                    },
                    1600: {
                        items: 3
                    }
                }
            });
        }
    }

    var WidgetSponsorsHandler = function () {
        //Sponsors Carousel
        if ($(".sponsors-carousel").length) {
            $(".sponsors-carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                smartSpeed: 700,
                autoplay: 5000,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                navText: [
                    '<span class="icon fa fa-angle-left"></span>',
                    '<span class="icon fa fa-angle-right"></span>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    },
                    1200: {
                        items: 5
                    }
                }
            });
        }
    }

    var WidgetTestimonialsHandler = function () {
        if ($("#testimonials-one__thumb").length) {
            let testimonialsThumb = new Swiper("#testimonials-one__thumb", {
                slidesPerView: 3,
                spaceBetween: 0,
                speed: 1400,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                autoplay: {
                    delay: 5000
                }
            });

            let testimonialsCarousel = new Swiper("#testimonials-one__carousel", {
                observer: true,
                observeParents: true,
                speed: 1400,
                slidesPerView: 1,
                autoplay: {
                    delay: 5000
                },
                thumbs: {
                    swiper: testimonialsThumb
                }
            });
        }
    }

    var WidgetContactFormHandler = function () {
        //Custom Seclect Box
        if ($(".custom-select-box").length) {
            $(".custom-select-box")
                .selectmenu()
                .selectmenu("menuWidget")
                .addClass("overflow");
        }
    }

    var WidgetTabsHandler = function () {
        if ($(".tabs-box").length) {
            $(".tabs-box .tab-buttons .tab-btn").on("click", function (e) {
                e.preventDefault();
                var target = $($(this).attr("data-tab"));

                if ($(target).is(":visible")) {
                    return false;
                } else {
                    target
                        .parents(".tabs-box")
                        .find(".tab-buttons")
                        .find(".tab-btn")
                        .removeClass("active-btn");
                    $(this).addClass("active-btn");
                    target
                        .parents(".tabs-box")
                        .find(".tabs-content")
                        .find(".tab")
                        .fadeOut(0);
                    target
                        .parents(".tabs-box")
                        .find(".tabs-content")
                        .find(".tab")
                        .removeClass("active-tab");
                    $(target).fadeIn(300);
                    $(target).addClass("active-tab");
                }
            });
        }



    }

    var WidgetContactInfoHandler = function () {

        // Get In Touch Loactions Carousel
        if ($(".get-in-touch__locations-carousel").length) {
            $(".get-in-touch__locations-carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                smartSpeed: 500,
                autoHeight: false,
                autoplay: true,
                dots: true,
                autoplayTimeout: 10000,
                navText: [
                    '<span class="icon-left-arrow"></span>',
                    '<span class="icon-right-arrow"></span>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    800: {
                        items: 1,
                    },
                    1024: {
                        items: 1,
                    },
                    1200: {
                        items: 1,
                    },
                },
            });
        }

    }

    var thmOwlInit = function () {
        // owl slider
        const owlElm = document.querySelectorAll(".thm-owl__carousel");
        owlElm.forEach(function (owlelm) {
            const owlOptions = JSON.parse(owlelm.dataset.owlOptions);
            let thmOwlCarousel = $(owlelm).owlCarousel(owlOptions);
        });
    }

    //elementor front start
    $(window).on("elementor/frontend/init", function () {
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/moniz-main-slider.default",
            WidgetMainSliderHandler
        );
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/widget",
            WidgetDefaultHandler
        );
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/widget",
            thmOwlInit
        );
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/footer-subscribe.default",
            WidgetMailchimpHandler
        );
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/moniz-accordion.default",
            WidgetAccordionHandler
        );
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/moniz-portfolio.default",
            WidgetPortfolioHandler
        );
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/moniz-team.default",
            WidgetTeamHandler
        );
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/moniz-sponsors.default",
            WidgetSponsorsHandler
        );
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/moniz-testimonials.default",
            WidgetTestimonialsHandler
        );
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/moniz-contact-form.default",
            WidgetContactFormHandler
        );
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/moniz-tabs.default",
            WidgetTabsHandler
        );
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/moniz-contact-info.default",
            WidgetContactInfoHandler
        );
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/moniz-coming-soon.default",
            WidgetCountdownHandler
        );
    });
})(jQuery);