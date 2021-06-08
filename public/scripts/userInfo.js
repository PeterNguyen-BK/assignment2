$(document).ready(function() {
    $("#loading-image").hide();
    $("#layer").hide();
    $(function () {
        $('[data-toggle="popover"]').popover()
    });

    $("#inputFirstName").change(function() {
        let fname = $("#inputFirstName").val();
        $.ajax({
            url: "/assignment2/Ajax/checkFname/",
            type: "POST",
            data: {
                fname: fname
            },
            success: function(data) {
                if (data != "") {
                    $("#invalidFname").text(data);
                    $("#inputFirstName").css({"border-color": "red", "outline": "0", "box-shadow": "0 0 0 0.2rem rgb(252, 174, 169)"});
                } else {
                    $("#inputFirstName").css({"border-color": "", "outline": "", "box-shadow": ""});
                    $("#invalidFname").text(data);
                }
            }
        });
    });
    
    $("#inputLastName").change(function() {
        let lname = $("#inputLastName").val();
        $.ajax({
            url: "/assignment2/Ajax/checkLname/",
            type: "POST",
            data: {
                lname: lname
            },
            success: function(data) {
                if (data != "") {
                    $("#invalidLname").text(data);
                    $("#inputLastName").css({"border-color": "red", "outline": "0", "box-shadow": "0 0 0 0.2rem rgb(252, 174, 169)"});
                } else {
                    $("#inputLastName").css({"border-color": "", "outline": "", "box-shadow": ""});
                    $("#invalidLname").text(data);
                }
            }
        });
    });
    
    $("#inputPhone").change(function() {
        let phone = $("#inputPhone").val();
        $.ajax({
            url: "/assignment2/Ajax/checkPhone/",
            type: "POST",
            data: {
                phone: phone
            },
            success: function(data) {
                if (data != "") {
                    $("#invalidPhone").text(data);
                    $("#inputPhone").css({"border-color": "red", "outline": "0", "box-shadow": "0 0 0 0.2rem rgb(252, 174, 169)"});
                } else {
                    $("#inputPhone").css({"border-color": "", "outline": "", "box-shadow": ""});
                    $("#invalidPhone").text(data);
                }
            }
        });
    });

    $("#btnUpdateInfo").click(function() {
        let fname = $("#inputFirstName").val();
        let lname = $("#inputLastName").val();
        let phone = $("#inputPhone").val();
        let city = $("#city").val();
        let district = $("#district").val();
        let ward = $("#ward").val();
        $('#loading-image').show();
        $("#layer").show();
        $.ajax({
            url: "/assignment2/User/updateInfo/",
            method: "POST",
            data: {
                fname: fname,
                lname: lname,
                phone: phone,
                address: ward + ", " + district + ", " + city
            },
            success: function(data) {
                if (data == "Fail") {
                    $("#loading-image").hide();
                    $("#layer").hide();
                    swal({
                        title: "Cập nhật!",
                        text: "Thông tin không hợp lệ!",
                        icon: "error",
                    });
                    $.ajax({
                        url: "/assignment2/Ajax/checkAddress/",
                        type: "POST",
                        data: {
                            address: ward + ", " + district + ", " + city
                        },
                        success: function(data) {
                            $("#invalidAddress").text(data);
                        }
                    });
                } else {
                    $("#loading-image").hide();
                    $("#layer").hide();
                    swal({
                        title: "Cập nhật!",
                        text: "Cập nhật thành công",
                        icon: "success",
                        button: false
                    });
                    window.setTimeout(function(){ 
                        location.reload();
                    } ,1200);
                }
            }
        });
    });

    $("#fileUpload").change(function() {
        console.log($(this)[0].files[0]);
        if ($(this)[0].files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                $("#preview").attr("src", e.target.result);
            }
            reader.readAsDataURL($(this)[0].files[0])
        }
    });

    $("#btnChangePwd").click(function() {
        let old_pwd = $("#oldPassword").val();
        let new_pwd = $("#newPassword").val();
        let confirm_pwd = $("#confirmPassword").val();
        $.ajax({
            url: "/assignment2/User/changePassword/",
            method: "POST",
            data: {
                old_pwd: old_pwd,
                new_pwd: new_pwd,
                confirm_pwd: confirm_pwd
            },
            success: function(data) {
                if (data == "") {
                    swal({
                        title: "Cập nhật!",
                        text: "Cập nhật thành công",
                        icon: "success",
                        button: true
                    });
                    $("#formChangePwd").trigger("reset");
                } else {
                    swal({
                        title: "Cập nhật!",
                        text: "Thông tin không hợp lệ",
                        icon: "error",
                        button: true
                    });
                }
            }
        });
    });

    // $("#btnUpdateAvatar").click(function() {
    //     $.ajax({
    //         url: "/assignment2/User/uploadImage/",
    //         method: "POST",
            
    //     });
    // });
})