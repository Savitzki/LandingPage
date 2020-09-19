$(document).ready(function() {
    $('#btnSubmit').on("click", function(event) {
        event.preventDefault();

        var dados = $("#formUser").serialize();

        $.ajax({
            url: "listUser.php",
            data: dados,
            dataType: "HTML",
            method: "POST"
        }).done(function(retorno) {
            //retorno se bem sucedido
            alert(retorno);
        }).fail(function(retorno) {
            //retorno se mal sucedido
            alert(retorno);
        });

    });
});