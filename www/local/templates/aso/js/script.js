jQuery(document).ready(function($) {

	mapInit();

	// $('.course_detail .programs_list .title').click(function(event) {
	// 	$('.course_detail .programs_list').toggleClass('active');
	// });

	$('.small_menu_btn').click(function() {
		$('.small_menu').addClass('opened');
	});
	$('.small_menu_btn--close').click(function() {
		$('.small_menu').removeClass('opened');
	});


	$('#main_slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		autoplay: false,
	});
	$('#promo__slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
	});
	$('#reviews__slider').slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 2,
		dots: true,
		arrows: false,
		responsive: [{
			breakpoint: 900,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				swipe: true,
			}
		}],
	});
	$('#emblems__slider').slick({
		infinite: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		responsive: [{
			breakpoint: 1100,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 4,
				swipe: true,
				arrows: true,
			}
		},
		{
			breakpoint: 800,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				swipe: true,
				arrows: true,
			},
		},
		{
			breakpoint: 700,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				swipe: true,
				arrows: true,
			},
		},
		{
			breakpoint: 430,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				swipe: true,
				arrows: true,
			},
		},
		],
	});
	$('#license__slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: false,
		arrows: true,
		responsive: [
		{
			breakpoint: 1001,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				swipe: true,
			}
		},
		{
			breakpoint: 701,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				swipe: true,
			}
		},
		],
	});

$.fn.setCursorPosition = function(pos) {
    if ($(this).get(0).setSelectionRange) {
      $(this).get(0).setSelectionRange(pos, pos);
    } else if ($(this).get(0).createTextRange) {
      var range = $(this).get(0).createTextRange();
      range.collapse(true);
      range.moveEnd('character', pos);
      range.moveStart('character', pos);
      range.select();
    }
  };
  $('.number_phone').click(function(){
    $(this).setCursorPosition(3);  // set position number
  });

	$(function(){
		$(".number_phone").mask("+7(999) 999-9999");
	});

	//СКРОЛЛИНГ-МЕНЮ
	// function scrollToAnchor(aid){
	// 	let aTag = $("a[name='"+ aid +"']");
		
	// 	$('html,body').animate({scrollTop: aTag.offset().top},'slow');
		
	// }

	// // $(".main_slider--link").click(function() {
	// // 	event.preventDefault();
	// // 	scrollToAnchor('main_slider--anchor');
	// // 	$('.small_menu').removeClass('opened');
	// // });
	// $(".services--link").click(function() {
	// 	event.preventDefault();
	// 	scrollToAnchor('services--anchor');
	// 	$('.small_menu').removeClass('opened');
	// });
	// $(".advantages--link").click(function() {
	// 	event.preventDefault();
	// 	scrollToAnchor('advantages--anchor');
	// 	$('.small_menu').removeClass('opened');
	// });
	// $(".promo--link").click(function() {
	// 	event.preventDefault();
	// 	scrollToAnchor('promo--anchor');
	// 	$('.small_menu').removeClass('opened');
	// });
	// $(".reviews--link").click(function() {
	// 	event.preventDefault();
	// 	scrollToAnchor('reviews--anchor');
	// 	$('.small_menu').removeClass('opened');
	// });
	// $(".contacts--link").click(function() {
	// 	event.preventDefault();
	// 	scrollToAnchor('contacts--anchor');
	// 	$('.small_menu').removeClass('opened');
	// });
	// $(".request--link").click(function() {
	// 	event.preventDefault();
	// 	scrollToAnchor('request--anchor');
	// 	$('.small_menu').removeClass('opened');
	// });





	var myHash = location.hash; //получаем значение хеша
	location.hash = ''; //очищаем хеш
	if(myHash[1] != undefined) { //проверяем, есть ли в хеше какое-то значение

	if (myHash) {
		$('html, body').animate(
		{scrollTop: $(myHash).offset().top}
		, 2000); //скроллим за полсекунды
		location.hash = myHash; //возвращаем хеш
		};
	}





	//СКРИПТ ПОКАЗА 6 ПЕРВЫХ КУРСОВ
	const services = $('#services');
	const serv_btn = $(services).find('.view_all');
	const serv_list = $(services).find('ul');

	$(function(){
	  $(serv_btn).click(function(){
	  	event.preventDefault();
	    $(serv_list).addClass('view_all_list');
	    $(serv_btn).css('display', 'none');


	    //длина элементов курсов
		var courses_length = $('.services__item').length;

		//цикл ищет каждый каждый 4й элемент из массива курсов [0, 1, 2 - 3й]
		for (var counter = 3; counter < courses_length; counter = counter + 3) {
			//console.log('courses_length - ', courses_length);
			//console.log('counter - ', counter);

			//здесь каждый 4й элемент записывается в переменную forth
			var forth = $('.services__item')[counter];

			//так как в массиве исчисление идет с нуля, добавляем единицу
			//и проверяем, последний ли это элемент массива, и добавляем ему класс .forth
			if (counter + 1 == courses_length) {
				$(forth).addClass('forth');
				var firstWidth = $('.services__item').outerWidth();
				//console.log(firstWidth);
				$(forth).css('width', firstWidth + 'px');
			}
		}

	  });
	});

}); //end of doc ready

//СКРОЛЛИНГ-МЕНЮ
$(function(){
	$('a[href^="#"]').on('click', function(event) {  
	    var src = $(this).attr("href"),
	    sectionPosition = $(src).offset().top;
	    $('html, body').animate({scrollTop: sectionPosition}, 1000);
	    $('.small_menu').removeClass('opened');
	});
});
function smoothToBlock() {
	// if (location.pathname == '/') {
	// 	event.preventDefault();
	// }
	var src = '#' + $(event.target).attr("href").split('#')[1];
	console.log(src);
	var sectionPos = $(src).offset().top;
	$('html, body').animate({scrollTop: sectionPos}, 1000);
	$('.small_menu').removeClass('opened');
}


// submit forms
$('.request__form').submit(function (e) {
	var $form = $(this);
	$.ajax({
		type: 'post',
		url: '/ajax/send.php',
		data: $form.serialize()
	}).done(function (event) {
		if (event == 1) {
			$('#modal-form-container').removeClass('animate_modal');
			$('body').removeClass('modal-form-active');
			//Модалка успеха
			$('#modal-success-container').addClass('animate_modal');
			$('body').addClass('modal-success-active');
			$('.request__form')[0].reset();
		}
	}).fail(function () {
		console.log('fail submit form');
	});
	e.preventDefault();
});


// 
// Map
// 
function mapInit() {
	"use strict";

if (jQuery('#map').length) {

	ymaps.ready(function () {
		// Создание экземпляра карты и его привязка к созданному контейнеру.
		var myMap = new ymaps.Map('map', {
				center: [54.9833239400714, 73.39777359325404],
				zoom: 17,
				controls: []
			}, {
				// searchControlProvider: 'yandex#search'
			}),

			// Создание макета балуна на основе Twitter Bootstrap.
			MyBalloonLayout = ymaps.templateLayoutFactory.createClass(
				'<div class="map__baloon">' +
				'<a class="close" href="#">&times;</a>' +
				'<div class="arrow"></div>' +
				'<div class="map__content">' +
				'$[[options.contentLayout observeSize minWidth=235 maxWidth=235 maxHeight=350]]' +
				'</div>' +
				'</div>', {
					/**
					 * Строит экземпляр макета на основе шаблона и добавляет его в родительский HTML-элемент.
					 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#build
					 * @function
					 * @name build
					 */
					build: function () {
						this.constructor.superclass.build.call(this);

						this._$element = $('.map__baloon', this.getParentElement());

						this.applyElementOffset();

						this._$element.find('.close')
							.on('click', $.proxy(this.onCloseClick, this));
					},

					/**
					 * Удаляет содержимое макета из DOM.
					 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#clear
					 * @function
					 * @name clear
					 */
					clear: function () {
						this._$element.find('.close')
							.off('click');

						this.constructor.superclass.clear.call(this);
					},

					/**
					 * Метод будет вызван системой шаблонов АПИ при изменении размеров вложенного макета.
					 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
					 * @function
					 * @name onSublayoutSizeChange
					 */
					onSublayoutSizeChange: function () {
						MyBalloonLayout.superclass.onSublayoutSizeChange.apply(this, arguments);

						if (!this._isElement(this._$element)) {
							return;
						}

						this.applyElementOffset();

						this.events.fire('shapechange');
					},

					/**
					 * Сдвигаем балун, чтобы "хвостик" указывал на точку привязки.
					 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
					 * @function
					 * @name applyElementOffset
					 */
					applyElementOffset: function () {
						this._$element.css({
							left: -(this._$element[0].offsetWidth / 2),
							top: -(this._$element[0].offsetHeight + this._$element.find('.arrow')[0].offsetHeight)
						});
					},

					/**
					 * Закрывает балун при клике на крестик, кидая событие "userclose" на макете.
					 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
					 * @function
					 * @name onCloseClick
					 */
					onCloseClick: function (e) {
						e.preventDefault();

						this.events.fire('userclose');
					},

					/**
					 * Используется для автопозиционирования (balloonAutoPan).
					 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/ILayout.xml#getClientBounds
					 * @function
					 * @name getClientBounds
					 * @returns {Number[][]} Координаты левого верхнего и правого нижнего углов шаблона относительно точки привязки.
					 */
					getShape: function () {
						if (!this._isElement(this._$element)) {
							return MyBalloonLayout.superclass.getShape.call(this);
						}

						var position = this._$element.position();

						return new ymaps.shape.Rectangle(new ymaps.geometry.pixel.Rectangle([
							[position.left, position.top], [
								position.left + this._$element[0].offsetWidth,
								// position.top + this._$element[0].offsetHeight
							]
						]));
					},

					/**
					 * Проверяем наличие элемента (в ИЕ и Опере его еще может не быть).
					 * @function
					 * @private
					 * @name _isElement
					 * @param {jQuery} [element] Элемент.
					 * @returns {Boolean} Флаг наличия.
					 */
					_isElement: function (element) {
						return element && element[0] && element.find('.arrow')[0];
					}
				}),

			// Создание вложенного макета содержимого балуна.
			MyBalloonContentLayout = ymaps.templateLayoutFactory.createClass(
				'<div class="map__content__txt">$[properties.balloonContent]</div>'
			),

			// Создание метки с пользовательским макетом балуна.
			myPlacemark = window.myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
				id: '1',
				//balloonHeader: 'Заголовок балуна',
				balloonContent: '<span>Омск, ул.Куйбышева,<br>д.43, офис 410б</span>' +
					'<a href="tel:+73812591555">+7 (3812) 59-15-55</a>'
			}, {
				// Опции.
				balloonShadow: true,
				balloonLayout: MyBalloonLayout,
				balloonContentLayout: MyBalloonContentLayout,
				balloonPanelMaxMapArea: 0,
				// Не скрываем иконку при открытом балуне.
				hideIconOnBalloonOpen: false,
				// И дополнительно смещаем балун, для открытия над иконкой.
				// balloonOffset: [3, -40]
				// Необходимо указать данный тип макета.
				iconLayout: 'default#image',
				// Своё изображение иконки метки.

				iconImageHref: '/local/templates/aso/img/point_map.png',
				// Размеры метки.
				iconImageSize: [28, 38],
				// Смещение левого верхнего угла иконки относительно
				// её "ножки" (точки привязки).
				iconImageOffset: [-14, -38]
			});

		//on mobile disable touch
		if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
			//... отключаем перетаскивание карты
			myMap.behaviors.disable('drag');
		}

		myMap.geoObjects.add(myPlacemark);
		myMap.behaviors.disable('scrollZoom');
		myMap.behaviors.disable('multiTouch');
		myMap.controls.add(new ymaps.control.ZoomControl(
			{
				options:
					{
						position:
							{right: 10, top: 50}
					}
			}
		));

	})}};