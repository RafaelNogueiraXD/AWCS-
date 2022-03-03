$("#tabelas").hide();
$("section").hide();
$("section").fadeToggle(1000);

$("footer").hide();
$("footer").fadeToggle(4000);

// Pesquisa, funciona em todos os arquivo :)
$(function(){
    $("form#formP").submit(function(){
    $.ajax({
        type: 'POST',
        url: 'pesquisa.php',
        data: {
            pesquisa:  $('input#palavra').val() // $('input#pesquisa').val()
        }
    }).done(function(e){
        $("#tabelas").show(),
        $("#tbodi").empty().html(e),
        $("#tabelap").hide();
    });
        return false;
    })
});

