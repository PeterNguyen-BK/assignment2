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
                            title: "Login!",
                            text: "Invalid Email or Password!",
                            icon: "error",
                        });
                    }else {
                        $("#exampleModal").modal("hide");
                        swal({
                            title: "Login!",
                            text: "Login successfully!",
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
                title: "Login!",
                text: "Please fill in all field to login!",
                icon: "warning"
            });
        }
        e.preventDefault();
    });

    $("#logout").click(function(e) {
        swal({
            title: "Logout",
            text: "Are you sure to logout?",
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
                            title: "Logout!",
                            text: "Logout successfully!",
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