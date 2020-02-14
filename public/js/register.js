$(document).ready(function(){
    $(".form2").hide();
    $(".form3").hide();

    $("#next1").click(function(){
         $( ".form1" ).animate({
            left: "+=50",
            height: "toggle"
            }, 130, function() {
                $(".form2").show();
            });
    });

    $("#back1").click(function(){
         $( ".form2" ).animate({
            left: "+=50",
            height: "toggle"
            }, 1000, function() {
                $(".form1").show();
            });
    });

    $("#next2").click(function(){
         $( ".form2" ).animate({
            left: "+=50",
            height: "toggle"
            }, 1000, function() {
                $(".form3").show();
            });
    });

    $("#back2").click(function(){
         $( ".form3" ).animate({
            left: "+=50",
            height: "toggle"
            }, 1000, function() {
                $(".form2").show();
            });
    });

});