//BARRA DE ARRIBA
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

//Funcion para ir arriba
$(document).ready(function(){

	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});

});
//FORMULARIO
var inputs = document.getElementsByClassName('input');
for (var i = 0; i < inputs.length;  i++) {
	inputs[i].addEventListener('keyup', function() {
		if (this.value.length >= 1) {
			this.nextElementSibling.classList.add('dejarFijo');
		}
		else{
			this.nextElementSibling.classList.remove('dejarFijo');
		}

	});
}