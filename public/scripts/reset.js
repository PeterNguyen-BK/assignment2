$(document).ready(function() {
    $("#loading-image").hide();
    $("#layer").hide();
    $("#btnSendCode").click(function() {
        let email = $("#InputEmail").val();
        $('#loading-image').show();
        $("#layer").show();
        $.ajax({
            url: "/assignment2/ResetPassword/sendCode/",
            method: "POST",
            data: {email: email},
            success: function(data) {
                if (data == "") {
                    $("#loading-image").hide();
                    $("#layer").hide();
                    swal({
                        title: "Reset mật khẩu!",
                        text: "Chúng tôi đã gửi mã xác nhận đến email của bạn. Vui lòng truy cập email để lấy mã",
                        icon: "success",
                        button: true
                    });
                } else {
                    $("#loading-image").hide();
                    $("#layer").hide();
                    swal({
                        title: "Reset mật khẩu!",
                        text: "Email không hợp lệ",
                        icon: "error",
                        button: true
                    });
                }
            }
        });
    });
    
    $("#btnSubmitCode").click(function() {
        let code = $("#InputCode").val();
        $.ajax({
            url: "/assignment2/ResetPassword/confirmCode/",
            method: "POST",
            data: {code: code},
            success: function(data) {
                if (data == "Fail") {
                    swal({
                        title: "Reset mật khẩu!",
                        text: "Mã xác nhận không chính xác!",
                        icon: "error",
                        button: true
                    });
                } else {
                    swal({
                        title: "Reset mật khẩu!",
                        text: "Xác nhận thành công!",
                        icon: "success",
                        button: true
                    });
                    $(".form-reset").html(data);
                }
            }
        });
    })
});