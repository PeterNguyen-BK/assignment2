<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" href="/assignment2/public/styles/contact.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: 10.77334945, lng: 106.65963187 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
    </script>
</head>
<body>
    <?php require_once "./src/views/layouts/header.php"?>
    <div class="content">
        <?php require_once "./src/views/layouts/login.php"?>
        <div class="bg1">
            <h1>Liên hệ</h1>
            <p>Trang chủ / <b>Liên hệ</b></p>
        </div>
        <div id="contact-bkcse" class="container-fluid bg-grey mt-5">
            <div class="row">
                <!--The div element for the map -->
                <div id="map" class="col-sm-5"></div>

                <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHtEWtxBzmx__AFXDt8XWyiPTN67wGfWQ&callback=initMap&libraries=&v=weekly"
                async></script>
    
                <div class="col-sm-5 d-flex flex-wrap justify-content-between align-items-center ml-2 mt-3">
                    <div class="location">
                        <div class="location-icon"></div>
                        <h2>Địa điểm</h2>
                        <p>268 Lý Thường Kiệt, Phường 14, Quận 10, Thành phố Hồ Chí Minh</p>
                    </div>
                    <div class="phone">
                        <div class="phone-icon"></div>
                        <h2>Số điện thoại</h2>
                        <p>0123123123</p>
                    </div>
                    <div class="mail">
                        <div class="mail-icon"></div>
                        <h2>Địa chỉ Email</h2>
                        <p>support@bkcse.com</p>
                    </div>
                    
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-sm-7 slideamin">
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
                        <button type="submit" class="btn btn-success mt-3">Gửi</button>
                    </div>
                </div>
              </div>
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