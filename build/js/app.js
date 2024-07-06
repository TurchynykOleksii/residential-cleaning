// JS fragment import example
import * as functions from './modules/functions.js';
functions.isWebp();
/* Добавление loaded для HTML после полной загрузки страницы */
functions.addLoadedClass();

const pricesBtnTabEls = document.querySelectorAll('.prices__radio-offer');
const pricesResidentialEls = document.querySelector('.prices__residential');
const pricesCommercialEls = document.querySelector('.prices__commercial');

const inputs = document.querySelectorAll('.feetback__label input');

inputs.forEach((input) => {
	input.addEventListener('focus', function () {
		input.nextElementSibling.classList.add('active__input');
	});

	input.addEventListener('blur', function () {
		if (input.value === '') {
			input.nextElementSibling.classList.remove('active__input');
		}
	});
});

pricesBtnTabEls.forEach((btn) => {
	btn.addEventListener('click', (e) => {
		const currentBtnValue = e.currentTarget.value;

		if (!pricesResidentialEls.classList.contains(currentBtnValue)) {
			pricesCommercialEls.classList.remove('prices__hide');
			pricesResidentialEls.classList.add('prices__hide');
		} else {
			pricesCommercialEls.classList.add('prices__hide');
			pricesResidentialEls.classList.remove('prices__hide');
		}
		console.log(pricesResidentialEls.classList.contains(currentBtnValue));
	});
});

const swiper = new Swiper('.clean', {
	slidesPerView: 'auto',
	watchOverflow: true,
	loop: true,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	spaceBetween: 20,
	autoHeight: true,
});

const revitalize = new Swiper('.revitalize__swiper', {
	slidesPerView: 'auto',
	watchOverflow: true,
	loop: true,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	spaceBetween: 20,
	autoHeight: true,
});
