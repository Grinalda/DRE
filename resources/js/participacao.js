/**
 * Created by Grinalda Soares on 28/09/2017.
 */
$('#dataOcorencia').datepicker({
    format: "yyyy-mm-dd"
});

var image = undefined;

/*$("#fileParticipacao").on("change", function () {

    if(!window.File || !window.FileReader || !window.FileList || !window.Blob)
    { return ; }

    if(this.files.length === 0)
    { return ;}

    var file = this.files[0];

    var formData = new FormData();
    formData.append("intent", "uploadFile");
    formData.append("file", file);

    $.ajax({
        url: "php/controler/sendParticipacao.php",
        type: "POST",
        processData: false,
        contentType: false,
        dataType: "json",
        data: formData,
        success: function (e) {
            $('.fileinput-filename').text(e.fileName);
            image = e.newFileName;
        }
    });

});*/

$('#btSave').on('click', function () {
    if (validation1($('input[name=fileType]:checked, #quem, #dataOcorencia, #local, #descricao, #testemunha, #file'))){

        var dados = {
                      "intent" : "RegistroParticipacao",
                      "nomePessoa" : $("#quem").val(),
                      "tipoParticipacao" : $("input:radio[name='tipoParticipacao']:checked").val(),
                      "pessoaLogada"  : $("#pessoa").val(),
                      "dataOcorencia" : $("#dataOcorencia").val(),
                      "local" : $("#local").val(),
                      "descricao" : $("#descricao").val(),
                      "testemunha" : $("#testemunha").val(),
                      "pessoa" : $('#pessoa').val()
                      // "ficheiro" : image
                };

        $.ajax({
            url: "php/controler/sendParticipacao.php",
            type: "POST",
            data: dados,
            dataType: "json",
            success: function () {
                $('#formParticipacao')[0].reset();

                $('#alerttopright')
                    .addClass('show')
                    .removeClass('alert-danger')
                    .addClass('alert-success')
                    .find('.textAlert').html("<h4>Sucesso!</h4> O seu registro foi efetuado com sucesso, <br> Verifique o seu email, enviamos uma mensagem pra si.");
            },
            error: function (data) {
                $('#formParticipacao')[0].reset();

                $('#alerttopright')
                    .addClass('show')
                    .removeClass('alert-danger')
                    .addClass('alert-success')
                    .find('.textAlert').html("<h4>Sucesso!</h4> O seu registro foi efetuado com sucesso, <br> Verifique o seu email, enviamos uma mensagem pra si.");
            }
        });
    }
});