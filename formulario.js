//FORMULARIO PRINCIPAL
var $form = $('#formulario'),
	$button = $('#mostrar-form');
	

function mostrarFormulario(){ //Permite mostrar y ocultar el formulario
	$form.slideToggle();
}

$button.click( mostrarFormulario );

//FORMULARIO ACTUALIZAR

// var $form2 = $('#form2'),
// 	$button2 = $('#update');

// function mostrarForm2(){
// 	$form2.slideToggle();
// }

// $button2.click( mostrarForm2 );

//REMOVE REGISTER

//JQuery

$(document).ready(function(){
    $('input, textArea').focus(function(){
        $(this).css('outline-color','#023958');
        });
    });