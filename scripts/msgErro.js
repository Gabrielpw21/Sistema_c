function showAlert(type, message) {
    if (message !== '') {
        if (type === '') {
            type = 'success';
        }
        $('#alert').removeClass();
        $('#alert').addClass('alert-' + type).html(message).slideDown();
        setTimeout("closeAlert()", 15000); // 15 segundos
    }
}

//chama a função para fechar o alerta quando clicado.
$(function () {
    $('#alert').click(function () {
        closeAlert();
    });
});
//
function closeAlert() {
    $('#alert').slideUp();
    $('#alert').removeClass();
}