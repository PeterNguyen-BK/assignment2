$(document).ready(function() {
    $("#btnSendCode").click(function() {
        let email = $("#InputEmail").val();
        $.ajax({
            url: "/assignment2/ResetPassword/sendCode/",
            method: "POST",
            data: {email: email},
            success: function(data) {
                alert(data);
                if (data == "") {
                    swal({
                        title: "Reset mật khẩu!",
                        text: "Chúng tôi đã gửi mã xác nhận đến email của bạn. Vui lòng truy cập email để lấy mã",
                        icon: "success",
                        button: true
                    });
                } else {
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
        let code = $("#InputEmail").val();
        $.ajax({
            url: "/assignment2/ResetPassword/confirmCode/",
            method: "POST",
            data: {code: code},
            success: function(data) {
                alert(data);
                if (data == "") {
                    swal({
                        title: "Reset mật khẩu!",
                        text: "Chúng tôi đã gửi mã xác nhận đến email của bạn. Vui lòng truy cập email để lấy mã",
                        icon: "success",
                        button: true
                    });
                } else {
                    swal({
                        title: "Reset mật khẩu!",
                        text: "Email không hợp lệ",
                        icon: "error",
                        button: true
                    });
                }
            }
        });
    })
});