$(function () {
	initProgram();
	initPopupForm();
	initTitle();

	function initProgram() {

		/* логика по клику на Нарпавление обучения */
		let allSubs = document.querySelectorAll('.program__block-sub-link');
		for (let currentSubGroup of allSubs) {
			currentSubGroup.addEventListener('click', function () {
				let fatherSub = document.querySelector('.program__block-sub');
				for (let i = 0; i < fatherSub.children.length; i++) {
					let curentChild = fatherSub.children[i]
					if (curentChild.classList.contains('active')) {
						curentChild.classList.remove('program__block-sub-link-active')
					}
				}

				if (this.classList.contains('active')) {
					this.classList.add('program__block-sub-link-active')
				}


				let currentSubLink = this.getAttribute('data-identification');
				// console.log(currentSubLink)

				/* проверяю значения атрибута -> если совпадает -> показываю */
				let progItemAll = document.querySelectorAll('.program__item');

				for (let progItemCurrent of progItemAll) {
					let progItemCurrentValue = progItemCurrent.getAttribute('data-target')
					progItemCurrent.classList.remove('active')
					if (progItemCurrentValue == currentSubLink) {
						progItemCurrent.classList.add('active')
					}
				}
				$(programSlider).slick('setPosition');
			})
		}
	}

	var programSlider = $('.program__item-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: true,
		responsive: [
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});


	function initPopupForm() {
		$(document).on('click', '[data-fancybox][data-form]', function () {
			var
				$button = $(this),
				$card = $(this).closest('.program__card'),
				href = $button.attr('data-src') || $button.attr('href'),
				$popup = $(href),
				form = $button.attr('data-form') || '',
				title = $('[data-title]', $card).text() || '',
				format= $('[data-format]',$card).text() || ''
				;

			$('[name="form"]', $popup).val(form);
			$('[name="lidforma"]', $popup).val(title + '(' + format +')');

		});
	}

	function initTitle() {
		let allTabs = document.querySelectorAll('.program__block-sub-link');
		for (let currentChoice of allTabs) {
			let currentSubLink = currentChoice.getAttribute('data-identification');
			switch (currentSubLink){ 
				case "block_college":  
					let allItems01 = document.querySelectorAll('.program__item')
					for (let progItemCurrent of allItems01) {
						let progItemCurrentValue = progItemCurrent.getAttribute('data-target')
						let titleCurrent = progItemCurrent.querySelector('.program__item-title-dnone')
						if (progItemCurrentValue == currentSubLink) {
							titleCurrent.textContent='';
						}
					}
				break;
				case "block_undergraduate":  
					let allItems02 = document.querySelectorAll('.program__item')
					for (let progItemCurrent of allItems02) {
						let progItemCurrentValue = progItemCurrent.getAttribute('data-target')
						let titleCurrent = progItemCurrent.querySelector('.program__item-title-dnone')
						if (progItemCurrentValue == currentSubLink) {
							titleCurrent.textContent='';
						}
					}
				break;
				case "block_magistracy":  
				let allItems03 = document.querySelectorAll('.program__item')
				for (let progItemCurrent of allItems03) {
					let progItemCurrentValue = progItemCurrent.getAttribute('data-target')
					let titleCurrent = progItemCurrent.querySelector('.program__item-title-dnone')
					if (progItemCurrentValue == currentSubLink) {
						titleCurrent.textContent='';
					}
				}
			break;
			}
		}
	}


});


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

