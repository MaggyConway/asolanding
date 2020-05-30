// $('.services__item__btn-arrow, .services__item__title').click(function () {
// 	event.preventDefault();
// 	var thisContent = $(this).parent().attr('data-content');
// 	$('#modal-service-container').addClass('animate_modal');
// 	$('body').addClass('modal-active');
// 	$('#modal-service-container').find('.modal .content').html(' ').append(thisContent);
// });


$('.license__slider__item').click(function() {
	$('#modal-license-container').addClass('animate_modal');
	$('body').addClass('modal-active');
});

$('.header__top-panel--callback, .receive > .btn').click(function() {
	$('#modal-form-container').addClass('animate_modal');
	$('body').addClass('modal-active');
});

$('#main_slider .btn').click(function() {
	event.preventDefault();
	$('#modal-form-container').addClass('animate_modal');
	$('body').addClass('modal-active');
});


//Close function
$('.modal--background, .modal-close').click(function(){
	// $('#modal-service-container').removeClass('animate_modal');

	$('#modal-success-container').removeClass('animate_modal');

	$('#modal-form-container').removeClass('animate_modal');

	$('#modal-svedenia-container').removeClass('animate_modal');

	$('body').removeClass('modal-active');
});