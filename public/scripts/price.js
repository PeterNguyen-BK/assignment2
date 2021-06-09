$(document).ready(function() {
    $(function () {
        $('[data-toggle="popover"]').popover()
    });

    $("#btnPay").click(function() {
        let temp = window.location.pathname;
        let money = temp.split("/")[4];
        let sid = temp.split("/")[5];
        $.ajax({
            url: "/assignment2/Payment/success/",
            method: "POST",
            data: {
                sid: sid,
                money: money
            },
            success: function(data) {
                if (data != "Fail") {
                    swal({
                        title: "Thanh toán!",
                        text: "Thanh toán thành công",
                        icon: "success",
                        button: true
                    }).then((isPaid) => {
                        if (isPaid) {
                            location.href = "/assignment2/User/";
                        }
                    })
                }
            }
        });
    })
});