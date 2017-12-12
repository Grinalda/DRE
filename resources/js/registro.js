/**
 * Created by Grinalda Soares on 04/09/2017.
 */

$(document).ready(function () {

    function carregarDistrito() {

        $.ajax({
            url: "php/controler/registro.php",
            method: "POST",
            data: "distrito",
            type: "json",
            success: function (data) {
                $('#distrito').html(data);
            }
        });
    }
    function carregarPais() {

        $.ajax({
            url: "php/controler/registro.php",
            method: "POST",
            data: "pais",
            type: "json",
            success: function (data) {
                $('#pais').html(data);
            }
        });
    }
    function carregarDoc() {

        $.ajax({
            url: "php/controler/registro.php",
            method: "POST",
            data: "doc",

            success: function (data) {
                $('#doc').html(data);
            }
        });
    }

    carregarDistrito();
    carregarPais();
    carregarDoc();
});


$('#save').on('click',function () {

    if (validation1($('#formReg input:text, #formReg select, #formReg input:password, #formReg #txtemail, #formReg #txtfhone'))){
        var email = $('#formReg #txtemail').val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        // Validar email
        if (!filter.test(email)) {
            $('#formReg #txtemail').closest('.form-group').addClass('has-error');
            $('#alerttopright')
                .addClass('show')
                .find('.textAlert').html('<h4>Erro!</h4> introduza um email válido');

        }
        // Validar Senha mínimo 6 caracteres
        else if(($('#formReg #txtPass').val().length < 6) || ($('#formReg #txtConfirmPass').val().length < 6)){
            $('.dvConfPass .form-group, .dvPass .form-group').addClass('has-error');
            $('#alerttopright')
                .addClass('show')
                .find('.textAlert').html('<h4>Erro!</h4> Senha no mínimo 6 caracteres.');
        }
        // Validar Senha se coincide com confirmar Srnha
        else if(($('#formReg #txtPass').val() != $('#formReg #txtConfirmPass').val())){

            $('.dvConfPass .form-group, .dvPass .form-group').addClass('has-error');
            $('#alerttopright')
                .addClass('show')
                .find('.textAlert').html('<h4>Erro!</h4> Senha e Confirmar Senha não coincidem.');

        }
        // Validar Termos de uso selecionado
        else if($('#politics').is(':checked')== false){
            $('#alerttopright')
                .addClass('show')
                .find('.textAlert').html('<h4>Erro!</h4> Deve concordar com os Termos de uso e Políticas de Privacidade.');
        }
        // Confirmação de registro
        else{

            var dados = $('#formReg').serialize();

            $.ajax({
                url: "php/controler/send.php",
                method: "POST",
                data: dados,
                type: "json",
                success: function (data) {
                    $('#formReg')[0].reset();

                    $('#alerttopright')
                        .addClass('show')
                        .removeClass('alert-danger')
                        .addClass('alert-success')
                        .find('.textAlert').html(data);
                    /*setTimeout(function(){
                        location.href = "login.php";
                    }, 3000);*/
                },
                error: function (data) {
                    console.log('erro' +data);
                }
            });

        }
    }
});

