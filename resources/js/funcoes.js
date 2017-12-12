/**
 * Created by Grinalda Soares on 08/09/2017.
 */


function isEmpty(element) {
    if (element.attr('type') === 'password')
        return (element.val().length < 1);
    else
        return (element.val().replace(/\s/g, '') === '' || (element.val() === '0' && element[0]["localName"] === "select") );
}

function validation1(_element) {
    var validation;
    _element.each(function () {
        if (isEmpty($(this)) && !$(this).hasClass("noObrigatory")) {

            $(this).closest('.form-group').addClass('has-error');
            $('#alerttopright')
                .addClass('show')
                .find('.textAlert').html('<h4>Erro!</h4> Preenha os campos corretamente');

            validation = false;
        } else {
            $(this).closest('.form-group').removeClass('has-error');
            validation = true;
        }
    });
    _element.on("keyup change", function () {
        $(this).closest('.form-group').removeClass('has-error');
    });

    return validation;
}

