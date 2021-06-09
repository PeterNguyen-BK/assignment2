<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="/assignment2/public/styles/home.css">
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
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 animate__animated animate__fadeIn" src="/assignment2/public/img/bg1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="animate__animated animate__zoomInDown slogan">Thân thiện với khách hàng - Chăm chỉ - Cẩn thận</h5>
                  <p class="animate__animated animate__zoomInDown slogan">Dọn dẹp căn nhà của bạn</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 animate__animated animate__fadeIn" src="/assignment2/public/img/bg2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="animate__animated animate__zoomInDown slogan">Thân thiện với khách hàng - Chăm chỉ - Cẩn thận</h5>
                  <p class="animate__animated animate__zoomInDown slogan">Dọn dẹp căn nhà của bạn</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 animate__animated animate__fadeIn" src="/assignment2/public/img/bg3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="animate__animated animate__zoomInDown slogan">Thân thiện với khách hàng - Chăm chỉ - Cẩn thận</h5>
                  <p class="animate__animated animate__zoomInDown slogan">Dọn dẹp căn nhà của bạn</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/assignment2/public/scripts/home.js"></script>
    <script src="/assignment2/public/scripts/script.js"></script>
</body>
</html>