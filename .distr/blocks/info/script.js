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
