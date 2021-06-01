$(document).ready(function() {
    $("#inputEmail").change(function() {
        let email = $("#inputEmail").val();
        let atSign = email.indexOf("@");
        let dot = email.indexOf(".");
        if (email.length == 0) {
            $("#invalidEmailRegister").text("Vui lòng nhập email");
        } else if (atSign == -1 || dot == -1 || dot - atSign <= 1) {
            $("#invalidEmailRegister").text("Email không hợp lệ");
        } else {
            $("#invalidEmailRegister").text("");
        }
    });

    $("#password").change(function() {
        let password = $("#password").val();
        if (password.length < 6 && password.length > 0) {
            $("#invalidPassword").text("Mật khẩu không hợp lệ");
        } else if (password.length == 0) {
            $("#invalidPassword").text("Vui lòng nhập mật khẩu")
        } else {
            $("#invalidPassword").text("");
        }
    });
    
    $("#confirmPassword").change(function() {
        let confirmPassword = $("#confirmPassword").val();
        let password = $("#password").val();
        if (confirmPassword != password) {
            $("#invalidPassword").text("Xác nhận mật khẩu không hợp lệ");
        } else if (password.length == 0) {
            $("#invalidPassword").text("Vui lòng xác nhận mật khẩu")
        } else {
            $("#invalidPassword").text("");
        }
    });

    function checkNumber(myString) {
        return /\d/.test(myString);
    }

    $("#firstName").change(function() {
        let fname = $("#firstName").val();
        if (fname.length == 0) {
            $("#invalidFname").text("Vui lòng nhập họ tên của bạn");
        } else if (checkNumber(fname)) {
            $("#invalidFname").text("Họ tên không hợp lệ");
        } else {
            $("#invalidFname").text("");
        }
    });
    
    $("#lastName").change(function() {
        let lname = $("#lastName").val();
        if (lname.length == 0) {
            $("#invalidLname").text("Vui lòng nhập họ tên của bạn");
        } else if (checkNumber(lname)) {
            $("#invalidLname").text("Họ tên không hợp lệ");
        } else {
            $("#invalidLname").text("");
        }
    });
    
    $("#phone").change(function() {
        let phone = $("#phone").val();
        if (phone.length == 0) {
            $("#invalidPhone").text("Vui lòng nhập số điện thoại");
        } else if (phone.length != 10) {
            $("#invalidPhone").text("Số điện thoại không hợp lệ");
        } else {
            $("#invalidPhone").text("");
        }
    });
})