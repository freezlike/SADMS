$(document).ready(function () {
    $("#submitLogin").on('click', function (e) {
        e.preventDefault();
        var data = {
            User: {
                username: $("#UserUsername").val(),
                password: $("#UserPassword").val()
            }
        };
        $.ajax({
            url: appUrl() + 'login',
            type: "POST",
            data: data,
            beforeSend: function () {
                $("#loader").html("<img class='center-block' src='" + appUrl() + "img/dna.gif' />");
            },
            success: function (result) {
                if (result) {
                    document.location.replace(appUrl());
                }
            },
            error: function (result) {
                var obj = $.parseJSON(result.responseText);
                $("#loader").html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>  <strong>Erreur!</strong> ' + obj.text + '</div>');
            }
        });
    });
});