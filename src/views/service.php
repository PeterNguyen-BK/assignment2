<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <link rel="stylesheet" href="/public/styles/service.css">
</head>
<body>
    <?php require_once "./src/views/layouts/header.php"?>
    <div class="content">
    <?php require_once "./src/views/layouts/login.php"?>
        <div class="service">
        <?php while($row = mysqli_fetch_assoc($data[1])) {?>
            <div class="service-img">
                <img src="<?php echo $row["image"] ?>" alt="">
            </div>
            <div class="service-info">
                <h3><?php echo $row["name"] ?></h3>
                <?php
                    if ($data[0]->{"num_rows"} > 0) {
                        $sum = 0; 
                        $avg = 0;
                        while ($row1 = mysqli_fetch_assoc($data[0])) {
                            $sum += intval($row1["star_rating"]);
                        }
                        $avg = intval($sum/$data[0]->{"num_rows"});
                        for ($i = 0; $i < 5; $i++) {
                            if ($i < $avg) {
                                echo "<span class=\"fa fa-star\" style=\"color: #FD4;\"></span>";
                            } else echo "<span class=\"fa fa-star-o\"></span>";
                        }
                        echo "<span style=\"color: gray; font-size: 13px;\"><a href=\"#customer-rating\"> (".$data[0]->{"num_rows"}." Đánh giá)</a></span>";
                    }else echo "<p style=\"color: gray; font-size: 13px\">Chưa có đánh giá</p>";?>
                <ul style="list-style-type: none; padding: 0;">
                    <?php 
                        $tasks = explode(";", $row["task"]);
                        foreach($tasks as $task) {
                            echo "<li><img src=\"/public/img/check-mark.png\" alt=\"\">".$task."</li>";
                        }
                    ?>
                </ul>
                <a href="/Price/#service<?php echo $row["SID"]; ?>">Đăng ký</a>
            </div>
        
        </div>
        <h2>Mô tả dịch vụ</h2>
        <p style="margin-bottom: 30px;"><?php echo str_replace("\r\n", "<br><br>", $row["description"]); ?></p>
        <?php } ?>
        <?php if (isset($_SESSION["login"])) { ?>
        <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Viết nhận xét - đánh giá
            </a>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="stars">
                <form action="" method="post">
                    <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
                    <label class="star star-5" for="star-5"></label>
                    <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
                    <label class="star star-4" for="star-4"></label>
                    <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
                    <label class="star star-3" for="star-3"></label>
                    <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
                    <label class="star star-2" for="star-2"></label>
                    <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
                    <label class="star star-1" for="star-1"></label> <br> <br> <br>
                    <label for="comment">Viết binh luận</label>
                    <textarea name="comment" id="comment" cols="50" rows="1" ></textarea>
                    <button type="submit" name="btnRate" class="btn btn-success btn-sm">Gửi</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Hủy</button>
                </form>
            </div>
        </div>
        <?php }?>
        <h2>Đánh giá - Nhận xét từ khách hàng</h2>
        <div class="rating" id="customer-rating">
        <?php if ($data[2]->{"num_rows"} > 0) { ?>
        <?php while($row = mysqli_fetch_assoc($data[2])) {?>
            <div class="customer-comment">
                <h5><?php echo $row["first_name"]." ".$row["last_name"]?></h5>
                <span>Đánh giá: </span>
                <?php for ($i = 0; $i < 5; $i++) {
                    if ($i < intval($row["star_rating"])) {
                        echo "<span class=\"fa fa-star\" style=\"color: #FD4;\"></span>";
                    } else echo "<span class=\"fa fa-star-o\"></span>";
                }
                if (intval($row["star_rating"]) == 1) echo "<span> <b>Rất không hài lòng</b></span>";
                else if (intval($row["star_rating"]) == 2) echo "<span> <b>Không hài lòng</b></span>";
                else if (intval($row["star_rating"]) == 3) echo "<span> <b>Bình thường</b></span>";
                else if (intval($row["star_rating"]) == 4) echo "<span> <b>Hài Lòng</b></span>";
                else echo "<span> <b>Cực kỳ hài Lòng</b></span>";
                echo "<p style=\"font-size: 12px;\">Nhận xét vào ".$row["time"]."</p>"; ?>
                <p><?php echo $row["comment"];?></p>
            </div>
        <?php } } else {?> <p>Hiện tại chưa có nhận xét</p><?php }?>
        </div>
    </div>
    <?php require_once "./src/views/layouts/footer.php"?>
    <script src="https://use.fontawesome.com/6da8d8b501.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/public/scripts/script.js"></script>
</body>
</html>