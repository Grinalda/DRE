/**
 * Created by Grinalda Soares on 07/09/2017.
 */

//********** Control pessoa Singular/colectiva - Registro

$('.controls button').click(function () {
    $('.controls button').removeClass('selected');
    $(this).addClass('selected');

});


$('#coletive').bind('click', PessoaColetive);
$('#single').bind('click', PessoaSing);


function PessoaSing() {
    $('#tipoPess').val('1');
    $('.dvNome label').html('Nome Completo');
    $('.dvMorada label').html('Morada');
    $('.dvNomeRepres').addClass('out').find('input').addClass('noObrigatory');
    $('.dvNDiario').addClass('out').find('input').addClass('noObrigatory');
    $('.dvDocIdent').removeClass('out').find('select').removeClass('noObrigatory');
    $('.dvNumDoc').removeClass('out').find('input').removeClass('noObrigatory');
    $('.dvNacionalidade').removeClass('out').find('select').removeClass('noObrigatory');
    $('.dvProfissao').removeClass('out').find('input').removeClass('noObrigatory');
}
function PessoaColetive() {
    $('#tipoPess').val('2');
    $('.dvNome label').html('Denominação Social');
    $('.dvMorada label').html('Sede');
    $('.dvNomeRepres').removeClass('out').find('input').removeClass('noObrigatory');
    $('.dvNDiario').removeClass('out').find('input').removeClass('noObrigatory');
    $('.dvDocIdent').addClass('out').find('select').addClass('noObrigatory');
    $('.dvNumDoc').addClass('out').find('input').addClass('noObrigatory');
    $('.dvNacionalidade').addClass('out').find('select').addClass('noObrigatory');
    $('.dvProfissao').addClass('out').find('input').addClass('noObrigatory');
}
//****************** Fim Control pessoa Singular/colectiva


//****************** Fechar Alert ******************

$('.closed').click(function () {
    $('#alerttopright').removeClass('show');
});

// Participação data picker


// Drop Zone -- Participação

