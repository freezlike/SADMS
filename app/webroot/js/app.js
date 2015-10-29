$(document).on('ready', function () {
    $("select").select2();
    //Ajout des symptômes en liste
    $("#addSymptome").on('click', function (e) {
        e.preventDefault();
        if ($("#symptome_id :selected").val() === '') {
            $.simplyToast("Veuillez Choisir les Symptômes, merci.","error");
        } else {
            var text = $("#symptome_id :selected").text();
            var id = $("#symptome_id :selected").val();
            $(".select2-chosen").text("Choisir les Symptômes...");
            $("#listSymptome").append("<li data-id='" + id + "'><label class='label label-success'>" + text + " <i style='cursor:pointer;' class='glyphicon glyphicon-remove' id='removeSymptome'></i></label></li>");
            $("#symptome_id :selected").remove();
        }
    });
    //Suppression des symptômes en cas d'erreur
    $("#listSymptome").on("click", "#removeSymptome", function () {
        var currentNode = $(this).parent().parent();
        var id = $(currentNode).data('id');
        var text = $(currentNode).text();
        $("#symptome_id").append("<option value='" + id + "'>" + text + "</option>");
        $(this).parent().parent().remove();
    });
    //Lancement de la simulation
    $("#runSimulation").on('click', function () {
        if ($("#listSymptome li").length === 0) {
            $.simplyToast("Veuillez Choisir les symptômes avant, merci.","danger");
        } else {
            //chargement des id symptômes
            var symtpomeId = [];
            $("#listSymptome li").each(function (i, v) {
                symtpomeId.push(parseInt($(v).data('id')));
            });
            var FinalId = {
                Symptome: symtpomeId
            };
            //envoi des données au controller
            $.ajax({
                url: appUrl() + "maladies/run_simulation",
                type: "POST",
                data: FinalId,
                beforeSend: function () {
                    $("#result").html("<img class='center-block' src='" + appUrl() + "img/loader.gif' />");
                },
                success: function (result) {
                    var obj = $.parseJSON(result);
                    var all = obj.All;
                    var deduction = obj.Deduction;
//                  console.log(obj);
//                  console.log(all);
//                  console.log(deduction);
                    if (obj[0].text === 'isNotSeason') {
                        $("#result").html("<br clear='both' /><p>d'après vos symptômes vous avez la maladie : <b>" + deduction + "</b>, mais <b>" + obj[0].origin + "</b>, néanmoins voici une liste trié des probabilités : </p><p><ul class='nav' id='proba'></ul></p>");
                        $.each(all, function (i, v) {
                            $("#result #proba").append("<li><b>" + i + "</b> avec un score de : <b>" + v + "</b></li>")
                        });
                    } else {
                        $("#result").html("<br clear='both' /><p>d'après vos symptômes vous avez <b>" + deduction + "</b></p><p><ul class='nav' id='proba'></ul></p>");
                        $.each(all, function (i, v) {
                            $("#result #proba").append("<li><b>" + i + "</b> avec un score de : <b>" + v + "</b></li>")
                        });
                    }
                }
            });
        }
    });
});