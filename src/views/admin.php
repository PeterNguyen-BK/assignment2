<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý</title>
    <link rel="stylesheet" href="/assignment2/public/styles/introduction.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        .diff_color {
            background: gray;
        }
        .sctable {
            display: block;
            max-height: 400px;
            overflow-y : scroll;
        }
        .mg10{
            margin: 10px;
        }
        
    </style>
</head>
<body>
    <?php require_once "./src/views/layouts/header.php"?>
    
    <div class="content">
        <?php require_once "./src/views/layouts/login.php"?>
        <h1>Quản lý</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="user-tab" data-toggle="tab" href="#home" role="tab" aria-controls="user" aria-selected="true">User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="service-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="service" aria-selected="false">Service</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="price-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="price" aria-selected="false">Price</a>
        </li>
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">1</div>
        <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">2</div>
        <div class="tab-pane fade" id="price" role="tabpanel" aria-labelledby="price-tab">3</div>
        </div>
    <?php require_once "./src/views/layouts/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/assignment2/public/scripts/script.js"></script>
    <script src="/assignment2/public/scripts/admin.js"></script>
</body>
</html>