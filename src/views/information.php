<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch Vụ</title>
    <link rel="stylesheet" href="/assignment2/public/styles/information.css">
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
            <p class="link">Trang chủ / <b>Dịch vụ</b></p>
        </div>
        
        <div class="container">
            <p class="title-service">Các dịch vụ tuyệt vời</p>
            <div class="line-bottom-large"></div>
            <div class="row">
            <?php
                while($row = mysqli_fetch_assoc($data)) {?>
                    <div class="col content-img">
                        <img src="/assignment2/<?php echo $row["image"] ?>" alt="info1" class="img-info">
                        <p class="dichvu"><?php echo $row["name"] ?></p>
                        <div class="line-bottom-small"></div>
                        <p class="content-dichvu"><?php echo substr($row["description"], 0, strlen($row["description"]) - strlen($row["description"])/2) ?>...</p>
                        <a href="/assignment2/Information/service/<?php echo $row["SID"]; ?>"><button class="btn btn-outline-info" style="margin-bottom: 20px;">Chi tiết</button></a>
                    </div>
            <?php }?>
            </div>
        </div>
    </div>
    <?php require_once "./src/views/layouts/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/assignment2/public/scripts/script.js"></script>
</body>
</html>