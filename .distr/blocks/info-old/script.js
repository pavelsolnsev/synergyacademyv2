$(function () {
	initProgram();
	initProgramSlider();
	initPopupForm();

	function initProgram(){
		/* логика по клику на Форму обучения */
		let allLinks = document.querySelectorAll('.program__block-nav-link');
		
		for (let currentLink of allLinks){
			currentLink.addEventListener('click', function(){				
				let clearAllLinks = document.querySelector('.program__block-nav'),
				currentLinkText = document.querySelector('.program__block-info-text');

				/* замена текста */
				currentLinkText.textContent = this.textContent;
				
				/* убираю active у всех кнопок */
				for(let i = 0; i<clearAllLinks.children.length; i++){
					clearAllLinks.children[i].classList.remove('active');
				}

				/* добавляю active текущей кнопке + смотрю значение атрибута */
				this.classList.add('active');
				let currentSelect = this.getAttribute('data-link');

				/* проверяю значения атрибута -> если совпадает -> показываю */
				let sublinkAll = document.querySelectorAll('.program__block-sub-link');

				for (let sublinkCurrent of sublinkAll){
					let sublinkCurrentValue = sublinkCurrent.getAttribute('data-course')
					sublinkCurrent.classList.remove('active')
										
					if (sublinkCurrentValue == currentSelect){
						sublinkCurrent.classList.add('active')
					}
					
				}

				/* вывод карточек из других направлений по клику на формы обучения */
				let currentProgram = document.querySelector('.program__block-sub-link.program__block-sub-link-active.active').getAttribute('data-identification');
				let allItemsClear = document.querySelector('.program__block-content');
				for(let i = 0; i<allItemsClear.children.length; i++){
					allItemsClear.children[i].classList.remove('active');
				}

				let progItemAllCards = document.querySelectorAll('.program__item');

				for (let progItemCurrentItem of progItemAllCards){
					let progItemCurrentItemValue = progItemCurrentItem.getAttribute('data-target')
					progItemCurrentItem.classList.remove('active')					
					if (progItemCurrentItemValue == currentProgram){
						progItemCurrentItem.classList.add('active')
					}
				}

			})			
		}

		/* логика по клику на Нарпавление обучения */
		let allSubs = document.querySelectorAll('.program__block-sub-link');
		for(let currentSubGroup of allSubs) {
			currentSubGroup.addEventListener('click', function(){
				let fatherSub = document.querySelector('.program__block-sub');
				for(let i = 0; i < fatherSub.children.length; i++){
					let curentChild = fatherSub.children[i]
					if(curentChild.classList.contains('active')){
						curentChild.classList.remove('program__block-sub-link-active')
					}						
				}

				if(this.classList.contains('active')){
					this.classList.add('program__block-sub-link-active')
				}


				let currentSubLink = this.getAttribute('data-identification');
				console.log(currentSubLink)

				/* проверяю значения атрибута -> если совпадает -> показываю */
				let progItemAll = document.querySelectorAll('.program__item');

				for (let progItemCurrent of progItemAll){
					let progItemCurrentValue = progItemCurrent.getAttribute('data-target')
					progItemCurrent.classList.remove('active')					
					if (progItemCurrentValue == currentSubLink){
						progItemCurrent.classList.add('active')
					}
				}
			})				
		}		
	}
	
	function initProgramSlider(){
		var swiper = new Swiper('.program__item-swiper-01, .program__item-swiper-02, .program__item-swiper-03, .program__item-swiper-04, .program__item-swiper-05, .program__item-swiper-06, .program__item-swiper-07, .program__item-swiper-08, .program__item-swiper-09, .program__item-swiper-10, .program__item-swiper-11, .program__item-swiper-12, .program__item-swiper-13, .program__item-swiper-14, .program__item-swiper-15, .program__item-swiper-16, .program__item-swiper-17, .program__item-swiper-18, .program__item-swiper-19, .program__item-swiper-20, .program__item-swiper-21, .program__item-swiper-22, .program__item-swiper-23, .program__item-swiper-24, .program__item-swiper-25, .program__item-swiper-26, .program__item-swiper-27, .program__item-swiper-28, .program__item-swiper-29, .program__item-swiper-30', {
			slidesPerView: 1,
			spaceBetween: 20,
			grabCursor: true,
			loop: false,
			pagination: {
				el: '.program__item-swiper-nav-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.program__item-swiper-nav-next',
				prevEl: '.program__item-swiper-nav-prev',
			  },
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 15,
				},
				768:{
					slidesPerView: 2,
					spaceBetween: 10,
				},
				1200: {
					slidesPerView: 4,
					spaceBetween: 15,
				},
			}
    	});

	}



	function initPopupForm() {
		$(document).on('click', '[data-fancybox][data-form]', function () {
			var
			$button = $(this),
			$card = $(this).closest('.program__card'),
			href = $button.attr('data-src') || $button.attr('href'),
			$popup = $(href),
			form = $button.attr('data-form') || '',
			title = $('[data-title]', $card).text() || ''
			;

			$('[name="form"]', $popup).val( form );
			$('[name="lidforma"]', $popup).val( title );

		});
	}


});
