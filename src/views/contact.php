<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assignment2/public/styles/contact.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <?php require_once "./src/views/layouts/header.php"?>
    <div class="content">
        <?php require_once "./src/views/layouts/login.php"?>
        <!-- Messenger Plugin chat Code -->
        <div id="fb-root"></div>

        <!-- Your Plugin chat code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

        <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "100202265629605");
            chatbox.setAttribute("attribution", "biz_inbox");
            window.fbAsyncInit = function() {
                FB.init({
                xfbml            : true,
                version          : 'v10.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="page-title">
            <h1 class="title1">Dịch vụ</h1>
            <p class="link">Trang chủ / <b>Liên hệ</b></p>
        </div>
        
        <div id="contact-bkcse" class="container-fluid bg-grey mt-5">
            <div class="row">
                <div class="col-md-6" id="googleMap" style="height:400px; width:100%;"></div>
    
                <div class="col-sm-5 d-flex flex-wrap justify-content-between ml-2">
                    <div class="location">
                        <div class="location-icon"></div>
                        <h2>Địa điểm</h2>
                        <p>320 17C Lý Thường Kiệt, Phường 15, Quận 11, Thành phố Hồ Chí Minh</p>
                    </div>
                    <div class="phone">
                        <div class="phone-icon"></div>
                        <h2>Số điện thoại</h2>
                        <p>0123 456 789</p>
                    </div>
                    <div class="mail">
                        <div class="mail-icon"></div>
                        <h2>Địa chỉ Email</h2>
                        <p>A1234321Ag@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-sm-7 slideamin">
                <form name="contact-form" action="" method="post" id="contact-form"> 
                    <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Tên " type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="phone" name="tel-contact" placeholder="Số điện thoại" type="tel" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="addresses" name="addresses" placeholder="Địa chỉ" type="text" required>
                    </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Lời nhắn" rows="5"></textarea>
                    <div id="button-row" class="row">
                    <div class="col-sm-12 form-group text-center">
                        <button type="submit" id="submit_form" class="btn btn-success mt-3">Gửi</button>
                    </div>
                    <img src="/assignment2/public/image/loading.gif" id="loading-img">    
                </form>
                <div class="response_msg"></div>
                </div>
              </div>
            </div>  
        </div>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
            var myCenter = new google.maps.LatLng(10.77334945, 106.65963187);
      
            function initialize() {
              var mapProp = {
                center: myCenter,
                zoom:12,
                scrollwheel:true,
                draggable:true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
              };
              var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
      
              var marker = new google.maps.Marker({
                position: myCenter,
              });
              marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </div>
    </div>
    <?php require_once "./src/views/layouts/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/assignment2/public/scripts/script.js"></script>
    <script type="text/javascript" src="/assignment2/public/scripts/validator.min.js"></script>
    <script type="text/javascript" src="/assignment2/public/scripts/contact-scripts.js"></script>
</body>
</html>