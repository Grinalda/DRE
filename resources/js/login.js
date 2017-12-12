/**
 * Created by Grinalda Soares on 26/09/2017.
 */


$('#btOk').on('click', function () {

    if (validation1($('#email, #password'))){

        var email = $('#email').val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        // Validar email
        if (!filter.test(email)) {
            $('#email').closest('.form-group').addClass('has-error'); // Adiciona border vermelha
            $('#alerttopright')
                .addClass('show')
                .find('.textAlert').html('<h4>Erro!</h4> introduza um email válido');
        }
        else{

            var dados = $('#formLogin').serialize();

            $.ajax({
                url: "php/controler/sendLogin.php",
                method: "POST",
                data: dados,
                type: "json",
                success: function (data) {

                    if (data){
                        // Esvazia o formulário
                        $('#formLogin')[0].reset();
                        // Mostra mensagem de Sucesso
                        $('#alerttopright')
                            .addClass('show')
                            .removeClass('alert-danger')
                            .addClass('alert-success')
                            .find('.textAlert').html('Autenticação Feita com sucesso!');
                        // Reedmensiona para página Participação depois de e seg
                        setTimeout(function(){
                            location.href = "participacao.php";
                        }, 3000)
                    }
                    else{
                        $('#alerttopright')
                            .addClass('show')
                            .removeClass('alert-success')
                            .addClass('alert-danger')
                            .find('.textAlert').html('Email e/ou palavra pass não existem');
                    }

                },
                error: function (data) {
                    console.log('erro' +data);
                }
            });
        }
    }

});
