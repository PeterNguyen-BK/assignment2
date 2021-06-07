$(document).ready(function() {
    $("#loading-image").hide();
    $("#layer").hide();
    $("*[id*=input]:visible").popover({
        trigger: 'focus'
    });
    $("#inputEmail").change(function() {
        let email = $("#inputEmail").val();
        $.ajax({
            url: "/assignment2/Ajax/checkEmail/",
            type: "POST",
            data: {
                email: email
            },
            success: function(data) {
                if (data != "") {
                    $("#invalidEmailRegister").text(data);
                    $("#inputEmail").css({"border-color": "red", "outline": "0", "box-shadow": "0 0 0 0.2rem rgb(252, 174, 169)"});
                } else {
                    $("#inputEmail").css({"border-color": "", "outline": "", "box-shadow": ""});
                    $("#invalidEmailRegister").text(data);
                }
            }
        });
    });

    $("#inputPassword").change(function() {
        let password = $("#inputPassword").val();
        $.ajax({
            url: "/assignment2/Ajax/checkPassword/",
            type: "POST",
            data: {
                password: password
            },
            success: function(data) {
                if (data != "") {
                    $("#invalidPassword").text(data);
                    $("#inputPassword").css({"border-color": "red", "outline": "0", "box-shadow": "0 0 0 0.2rem rgb(252, 174, 169)"});
                } else {
                    $("#inputPassword").css({"border-color": "", "outline": "", "box-shadow": ""});
                    $("#invalidPassword").text(data);
                }
            }
        });
    });
    
    $("#inputConfirmPassword").change(function() {
        let confirmPassword = $("#inputConfirmPassword").val();
        let password = $("#inputPassword").val();
        $.ajax({
            url: "/assignment2/Ajax/checkConfirmPassword/",
            type: "POST",
            data: {
                confirmPassword: confirmPassword,
                password: password
            },
            success: function(data) {
                if (data != "") {
                    $("#invalidConfirmPassword").text(data);
                    $("#inputConfirmPassword").css({"border-color": "red", "outline": "0", "box-shadow": "0 0 0 0.2rem rgb(252, 174, 169)"});
                } else {
                    $("#inputConfirmPassword").css({"border-color": "", "outline": "", "box-shadow": ""});
                    $("#invalidConfirmPassword").text(data);
                }
            }
        });
    });

    // function checkNumber(myString) {
    //     return /\d/.test(myString);
    // }

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

    function renderCity(data) {
        for (let i of data) {
            $("#city").append(new Option(i.Name, i.Id + "-" + i.Name));
        }

        $("#city").change(function() {
            let districts = [];
            if ($(this).val() != "") {
                districts = data.filter(item => item.Id === $(this).val().split("-")[0]);
                for (let district of districts[0].Districts) {
                    $("#district").append(new Option(district.Name, district.Id + "-" + district.Name));
                }
            }
        });
        
        $("#district").change(function() {
            let wards = [];
            let dataCity = data.filter(item => item.Id === $("#city").val().split("-")[0]);
            if ($(this).val() != "") {
                wards = dataCity[0].Districts.filter(item => item.Id === $(this).val().split("-")[0]);
                for (let ward of wards[0].Wards) {
                    $("#ward").append(new Option(ward.Name, ward.Id + "-" + ward.Name));
                }
            }
        });
    }

    $.ajax({
        url: "/assignment2/public/geographic_data/data.json",
        method: "GET",
        dataType: "json",
        success: function(data) {
            renderCity(data);
        }
    });

    $("#butnRegister").click(function() {
        let email = $("#inputEmail").val();
        let password = $("#inputPassword").val();
        let confirmPassword = $("#inputConfirmPassword").val();
        let fname = $("#inputFirstName").val();
        let lname = $("#inputLastName").val();
        let phone = $("#inputPhone").val();
        let city = $("#city").val().split("-")[1];
        let district = $("#district").val().split("-")[1];
        let ward = $("#ward").val().split("-")[1];
        $('#loading-image').show();
        $("#layer").show();
        $.ajax({
            url: "/assignment2/User/register/",
            method: "POST",
            data: {
                email: email,
                password: password,
                confirmPassword: confirmPassword,
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
                        title: "Đăng ký!",
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
                        title: "Đăng ký!",
                        text: "Đăng ký thành công! Vui lòng truy cập email để xác minh.",
                        icon: "success",
                        button: false
                    });
                }
            }
        });
    });
});