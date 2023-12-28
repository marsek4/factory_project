$(document).ready(function(){
    $("#btn").click(function(){
        var word1 = $("#login").val();
        $.ajax({
            type: "POST",
            url: "main_test.php",
            data: {word1: word1},
            success: function(response){
                $("#result").text(response);
            }
        });
    });
});