"use strict";
//=================================== Типы анимаций =================================//
//===========  Демо анимации    http://daneden.github.io/animate.css/   ============//
//===========  $('#i481 - Номер блока').addClass('wow animated infinite tada - "Последняя фраза тип анимации" ');   ============//
// bounce
// flash
// pulse
// rubberBand
// shake
// swing
// tada
// wobble
// bounceIn
// bounceInDown
// bounceInLeft
// bounceInRight
// bounceInUp
// bounceOut
// bounceOutDown
// bounceOutLeft
// bounceOutRight
// bounceOutUp
// fadeIn
// fadeInDown
// fadeInDownBig
// fadeInLeft
// fadeInLeftBig
// fadeInRight
// fadeInRightBig
// fadeInUp
// fadeInUpBig
// fadeOut
// fadeOutDown
// fadeOutDownBig
// fadeOutLeft
// fadeOutLeftBig
// fadeOutRight
// fadeOutRightBig
// fadeOutUp
// fadeOutUpBig
// flipInX
// flipInY
// flipOutX
// flipOutY
// lightSpeedIn
// lightSpeedOut
// rotateIn
// rotateInDownLeft
// rotateInDownRight
// rotateInUpLeft
// rotateInUpRight
// rotateOut
// rotateOutDownLeft
// rotateOutDownRight
// rotateOutUpLeft
// rotateOutUpRight
// hinge
// rollIn
// rollOut
// zoomIn
// zoomInDown
// zoomInLeft
// zoomInRight
// zoomInUp
// zoomOut
// zoomOutDown
// zoomOutLeft
// zoomOutRight
// zoomOutUp
// slideInDown
// slideInLeft
// slideInRight
// slideInUp
// slideOutDown
// slideOutLeft
// slideOutRight
// slideOutUp
//
//=================================== Анимация при загрузки  =================================//
$('#').addClass('wow animated tada');



//=================================== Анимация при наведении =================================//
$('#').hover(function() { $(this).toggleClass('animated shake');});



//=================================== Постояная анимация   =================================//
$('#').addClass('wow animated infinite tada');



//=================================== Анимация при скролинге =================================//
$('#').addClass('wow animated fadeIn');

let qty = 1;
let form = document.querySelector(".variations_form");
let tableForm = form.querySelector(".variations");
let selectTable = tableForm.querySelector("select");
let priceProduct ;
function changeQty(){
	qty = $('input.qty').val();
	if(qty < 1){
		qty = 1;
		$('input.qty').val('1');
	}
	recalc();
}
function isNumeric(n) {
	return !isNaN(parseFloat(n)) && isFinite(n);
}
function recalc(){
	qty = isNumeric(qty) ? qty : 1;
	changeTable();
}
function changeTable(){
	$('.woocommerce-Price-amount').text(priceProduct * qty + ".00 грн.");
	//
}
$('input.qty').change(function(){
	if (priceProduct == undefined){
		let price = document.querySelector(".woocommerce-Price-amount");
		priceProduct = parseFloat(price.innerHTML.replace(/\s/g, "").replace(",", ""));
	}
	changeQty();
});
document.addEventListener('DOMContentLoaded', function() {
	selectTable.addEventListener("input", e => {
			document.querySelector("input.qty").value = "1";
			priceProduct = undefined;
	});
});