$(document).ready(function(){
$("#contact-form").on("submit_form",function(e){
    e.preventDefault();
    if($("#contact-form [name='name']").val() === '')
    {
    $("#contact-form [name='name']").css("border","1px solid red");
    }
    else if ($("#contact-form [name='email']").val() === '')
    {
    $("#contact-form [name='email']").css("border","1px solid red");
    }
    else
    {
    $("#loading-img").css("display","block");
    var sendData = $( this ).serialize();
        $.ajax({
        type: "POST",
        url: "/assignment2/src/views/get_response.php",
        data: sendData,
        success: function(data){
    $("#loading-img").css("display","none");
    $(".response_msg").text(data);
    $(".response_msg").slideDown().fadeOut(3000);
    $("#contact-form").find("input[type=text], input[type=email], textarea").val("");
    }
    });
    }
});
$("#contact-form input").blur(function(){
    var checkValue = $(this).val();
    if(checkValue != '')
    {
        $(this).css("border","1px solid #eeeeee");
    }
    });
});
