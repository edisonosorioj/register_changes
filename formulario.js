//FORMULARIO PRINCIPAL

$(document).ready(function(){
    $('input, textArea').focus(function(){
        $(this).css('outline-color','#023958');
        });
    });

$("#show_form").click(function(evento){
                        evento.preventDefault();
                        $("#destino").load("form_add.html");
                    });