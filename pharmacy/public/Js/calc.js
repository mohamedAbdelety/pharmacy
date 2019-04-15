

$(document).ready(function () {

	// simple calc
    
    $(".calculator ul li").click(function () {
       
        $(".screen").text($(".screen").text() + $(this).attr("data-class"));
    });
    
    $(".calculator .equal").click(function () {
       
        $(".screen").text(eval($(".screen").text()));
    });
    
    $(".calculator .clear").click(function () {
       
        $(".screen").text("");
    });
    
    $(".calculator .clearlast").click(function () {
       
        var mo =  $(".screen").text().slice(0,-1);
        $(".screen").text(mo);
    });





});

