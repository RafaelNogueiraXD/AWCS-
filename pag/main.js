$(".btoes").hide();
$(".div5").hide();

$("section").hide();
$("section").fadeToggle(1000);

$("footer").hide();
$("footer").show(1500);

$("#muda1").click(function(){
    $(".acoes").show(2000),
    $(".btoes").hide(500);
})
$("#muda2").click(function(){
    $(".btoes").show(2000),
    $(".acoes").fadeOut(500);
})

$("#bt4").click(function(){
    $(".div4").show(1000),
    $(".div5").hide();
});

$("#bt5").click(function(){
    $(".div5").slideDown(1000),
    $(".div4").hide();
});