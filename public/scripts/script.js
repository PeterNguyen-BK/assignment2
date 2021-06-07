$(document).ready(function() {
    $("#Email").change(function() {
        let email = $("#Email").val();
        let atSign = email.indexOf("@");
        let dot = email.indexOf(".");
        if (atSign == -1 || dot == -1 || dot - atSign <= 1) {
            $("#invalidEmail").text("Invalid Email");
        } else {
            $("#invalidEmail").text("");
        }
    });

    $("#butnLogin").click(function(e) {
        let email = $("#Email").val();
        let password = $("#Password").val();
        if (email !="" && password !="") {
            $.ajax({
                url: "/assignment2/User/login/",
                type: "POST",
                data: {
                    email: email,
                    password: password
                },
                success: function(data) {
                    if (data == "No") {
                        swal({
                            title: "Đăng nhập!",
                            text: "Email hoặc mật khẩu không hợp lệ!",
                            icon: "error",
                        });
                    }else {
                        $("#exampleModal").modal("hide");
                        swal({
                            title: "Đăng nhập!",
                            text: "Đăng nhập thành công!",
                            icon: "success",
                            button: false
                        });
                        let path = window.location.pathname.split("/");
                        window.setTimeout(function(){ 
                            if (path[path.length - 1] != "register")
                                location.reload();
                            else location.href = "/assignment2/Home/";
                        } ,1200);
                    }
                }
            });
        } else {
            swal({
                title: "Đăng nhập!",
                text: "Vui lòng điền đầy đủ thông tin để đăng nhập!",
                icon: "warning"
            });
        }
        e.preventDefault();
    });

    $("#logout").click(function(e) {
        swal({
            title: "Đăng xuất",
            text: "Bạn có chắc chắn muốn đăng xuất?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: "/assignment2/User/logout/",
                    type: "GET",
                    success: function(data) {
                        swal({
                            title: "Đăng xuất!",
                            text: "Đăng xuất thành công!",
                            icon: "success",
                            button: false
                        });
                        window.setTimeout(function(){ 
                            location.href = "/assignment2/Home/";
                        } ,1200);
                    }
                });
            }
        });
        e.preventDefault();
    })
})