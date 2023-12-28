$(document).ready(function(){
    $("#registrationForm").submit(function(event){
        event.preventDefault(); // Предотвращаем стандартное поведение отправки формы
        var login = $("#login").val();
        $.ajax({
            type: "POST",
            url: "register_ajax.php",
            data: {login: login}, // Используем правильное имя параметра
            success: function(response){
                $("#result1").text(response);
            }
        });
    });
});
