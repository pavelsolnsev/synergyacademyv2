//=require info/script.js

$(function () {
    /* Inits */
    initLazy();
    initMenu();
    initFaq();
    initScroll();

    // initPopupExit();
    
    function initPopupExit(){
	   setTimeout(() => {
			$.fancybox.open({
				src: '#popup-exit'
			})
		}, 4500);
    };

    function initMenu() {
        $('.ham').on('click', function () {
            $.fancybox.open({
                src: '#mobile-menu',
                type: 'inline',
                beforeClose: function () {
                    $('.ham').removeClass('active')
                }
            });
        })

        $('.mobile-menu').find('a').on('click', function () {
            $.fancybox.close();
            $('.ham').removeClass('active')
        })
    }

    function initScroll() {
        if (!$('.scroll').length) return;

        $(document).on('click scroll.init', '.scroll', function (event) {
            event.preventDefault();
            $.fancybox.close();

            var
                hrefId = $(this).attr('href') || $(this).data('href'),
                posTop = $(hrefId).offset().top - $('.header').height() + 0.5
                ;
            $('html, body').animate({ scrollTop: posTop }, 1000);
        });
    }

    function initFaq() {
        let faqs = $('.faq__acco-item')
        faqs.each(function (i, el) {
            let faq = $(el)
            let faqHeader = faq.find('.faq__acco-trigger')
            let faqContent = faq.find('.faq__acco-text')
            faqHeader.on('click', function () {
                if (faq.hasClass('open')) {
                    faqContent.slideUp()
                    faq.removeClass('open')
                } else {
                    faqContent.slideDown()
                    faq.addClass('open')
                }
            })
        })
    }

    function initScrollHeader() {
        const header = $('.header');
        const scroll = $(window).scrollTop();
        if (scroll >= 20) {
            header.addClass('active');

        } else {
            header.removeClass('active');
        }
    }

    $(window).scroll(() => initScrollHeader())

    /* Lazy */

    function initLazy() {

        let
            lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
            active = false,
            threshold = 200;

        const lazyLoad = function (e) {
            if (active === false) {
                active = true;

                setTimeout(function () {
                    lazyArr.forEach(function (lazyObj) {
                        if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

                            if (lazyObj.dataset.src) {
                                let
                                    img = new Image(),
                                    src = lazyObj.dataset.src;
                                img.src = src;
                                img.onload = function () {
                                    if (!!lazyObj.parent) {
                                        lazyObj.parent.replaceChild(img, lazyObj);
                                    } else {
                                        lazyObj.src = src;
                                    }
                                }
                                lazyObj.removeAttribute('data-src');
                            }

                            if (lazyObj.dataset.srcset) {
                                lazyObj.srcset = lazyObj.dataset.srcset;
                                lazyObj.removeAttribute('data-srcset');
                            }

                            lazyObj.classList.remove('lazy');
                            lazyObj.classList.add('lazy-loaded');

                            lazyArr = lazyArr.filter(function (obj) {
                                return obj !== lazyObj;
                            });

                            if (lazyArr.length === 0) {
                                document.removeEventListener('scroll', lazyLoad);
                                window.removeEventListener('resize', lazyLoad);
                                window.removeEventListener('orientationchange', lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        lazyLoad();

        document.addEventListener('scroll', lazyLoad);
        window.addEventListener('resize', lazyLoad);
        window.addEventListener('orientationchange', lazyLoad);
    }

    // INFO SLIDER
    let infoSlider = $('.info__slider').slick({
        dots: true,
        slidesToShow: 4,
        focusOnSelect: false,
        responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        }
        ]
    });

    $('.cards').click(function (e) {
        e.preventDefault();
        var tab_id = $(this).attr('data-tab');
        $(tab_id).slideToggle('slow');
        $(infoSlider).slick('setPosition');
    });


    let $reviews_slider = $('.reviews__slider'),
        settingsReviews = {
            mobileFirst: true,
            arrows: false,
            dots: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 767,
                    settings: "unslick"
                }
            ]
        }


    $reviews_slider.slick(settingsReviews);

    $(window).on('resize', function () {
        if (!$reviews_slider.hasClass('slick-initialized')) {
            return $reviews_slider.slick(settingsReviews);
        }
    });

    $('.reviews__list li').on('click', function (evt) {
        evt.preventDefault();
        $('.reviews__list li').removeClass('current');
        $(this).addClass('current');
        var sel = this.getAttribute('data-tab');
        $('.reviews__content').removeClass('current').filter(sel).addClass('current');
    });

});

