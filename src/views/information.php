<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/styles/information.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <?php require_once "./src/views/layouts/header.php"?>
    <div class="content">
        <?php require_once "./src/views/layouts/login.php"?>
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
                        <img src=<?php echo $row["image"] ?> alt="info1" class="img-info">
                        <p class="dichvu"><?php echo $row["name"] ?></p>
                        <div class="line-bottom-small"></div>
                        <p class="content-dichvu"><?php echo substr($row["description"], 0, strrpos($row["description"], " ", -500)) ?>...</p>
                        <a href="./information/service/<?php echo $row["SID"]; ?>"><button class="btn btn-outline-info" style="margin-bottom: 20px;">Chi tiết</button></a>
                    </div>
            <?php }?>
                <!-- <div class="col content-img">
                    <img src="/assignment2/public/img/info1.jpg" alt="info1" class="img-info">
                    <p class="dichvu">Dịch vụ vệ sinh nhà</p>
                    <div class="line-bottom-small"></div>
                    <p class="content-dichvu">Dịch vụ dọn nhà tùy theo diện tích và mức độ công việc để đưa ra giá cả hợp lý. Tuy nhiên chúng tôi vẫn đảm bảo giá cả...</p>
                    <button type="button" class="btn btn-outline-info" style="margin-bottom: 20px;" data-toggle="modal" data-target="#exampleModalLong1">Chi tiết</button>
                </div>
              
                <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Vệ sinh nhà</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <a href="../price/" class="btn btn-primary">Đăng ký</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col content-img">
                    <img src="/assignment2/public/img/info2.jpg" alt="info2" class="img-info">
                    <p class="dichvu">Dịch vụ chuyển nhà</p>
                    <div class="line-bottom-small"></div>
                    <p class="content-dichvu">Dịch vụ chuyển nhà đến nơi khác. <a href="../contact">Liên hệ</a> với chúng tôi ngay sẽ có người đến xem xét và báo giá ngay trong hôm nay để có thể thương...</p>
                    <button type="button" class="btn btn-outline-info" style="margin-bottom: 20px;" data-toggle="modal" data-target="#exampleModalLong2">Chi tiết</button>
                </div>
            
                <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle2">Vệ sinh bàn ghế</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <a href="../price/" class="btn btn-primary">Đăng ký</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col content-img">
                    <img src="/assignment2/public/img/service2.jpg" alt="info3" class="img-info">
                    <p class="dichvu">Dịch vụ vệ sinh ghế sofa</p>
                    <div class="line-bottom-small"></div>
                    <p class="content-dichvu">Hiện nay hầu như nhà nào cũng có ít nhất một chiếc sofa. Một đồ dùng không thể thiếu trong không gian phòng khác của bạn, nó tạo cảm giác dễ chịu êm ái mỗi khi bạn nghỉ ngơi...</p>
                    <button type="button" class="btn btn-outline-info" style="margin-bottom: 20px;" data-toggle="modal" data-target="#exampleModalLong3">Chi tiết</button>
                </div>
             
                <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle3" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle3">Vệ sinh ghế sofa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p>Hiện nay hầu như nhà nào cũng có ít nhất một chiếc sofa. Một đồ dùng không thể thiếu trong không gian phòng khác của bạn, nó tạo cảm giác dễ chịu êm ái mỗi khi bạn nghỉ ngơi trên chiếc sofa đó. Không những vậy nó còn mang lại vẻ đẹp sang trọng cho căn nhà của bạn</p>
                            <p>Nhưng sau một thời gian sử dụng thì chắc chắn rằng chiếc ghế của bạn sẽ bị ố và bám đầy bụi bẩn làm mất đi vẻ đẹp chiếc ghế hơn nữa bạn sẽ cảm thấy khó chịu bởi mùi hôi. Vậy làm sao để có thể làm sạch chiếc ghế sofa mà không lo mất họa tiết, bị hỏng?</p>
                            <p>Vì nhu cầu trên <b> BK-Cleanly</b> cung cấp đến quý khách hàng dịch vụ vệ sinh ghế sofa. Dịch vụ của chúng tôi được nhiều người tin dùng và có những phẩn hồi chất lượng</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <a href="../price/" class="btn btn-primary">Đăng ký</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="w-100"></div>
                <div class="col content-img">
                    <img src="/assignment2/public/img/service6.jpg" alt="info4" class="img-info">
                    <p class="dichvu">Dịch vụ vệ sinh nhà xưởng</p>
                    <div class="line-bottom-small"></div>
                    <p class="content-dichvu">Nhà xưởng sản xuất của bạn có nhiều vết bẩn? Sau một thời gian sử dụng xuất hiện những vết bẩn đáng sợ mà vệ sinh bằng tay không thể nào sạch được...</p>
                    <button type="button" class="btn btn-outline-info" style="margin-bottom: 20px;" data-toggle="modal" data-target="#exampleModalLong4">Chi tiết</button>
                </div>
              
                <div class="modal fade" id="exampleModalLong4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle4" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle4">Vệ sinh nhà máy, nhà xưởng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p>Nhà máy, nhà xưởng là nơi làm việc của nhiều công nhân, những người chịu trách nhiệm làm ra các sản phẩm uy tín chất lượng</p>
                            <p>Tất nhiên việc vệ sinh nơi làm việc là rất cần thiết để đảm bảo cho mọi người có một môi trường làm việc trong sạch, thoáng mát và chất lượng sản phầm làm ra phải ở mức cao nhất</p>
                            <p>Nếu không có một quy trình vệ sinh đúng cách sẽ khiến môi trường làm việc bị ẩm thấp, bốc mùi ảnh hương đến chất lượng sản phẩm</p>
                            <p><b>Ví dụ:</b> Đối với một nhà máy chế biến thực phẩm tươi sống thì việc vệ sinh là cực kỳ cần thiết để không ảnh hưởng đến chất lượng thực phẩm</p>
                            <p>Do đó, ở đây chúng tôi <b>BK-Cleanly</b> cung cấp dịch vụ vệ sinh nhà máy nhà xưởng với đội ngũ nhân viên uy tín chất lượng</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <a href="./service/" class="btn btn-primary">Đăng ký</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col content-img">
                    <img src="/assignment2/public/img/info5.jpg" alt="info5" class="img-info">
                    <p class="dichvu">Dịch vụ dọn dẹp nhà kho</p>
                    <div class="line-bottom-small"></div>
                    <p class="content-dichvu">Khi nhà bạn đang sửa hoặc bạn cần nơi để tạm đồ theo ngày hoặc tuần, chúng tôi có nhận giữ hộ đảm bảo an toàn, bảo mật, kiểm kê, niêm phong và giữ nơi...</p>
                    <button type="button" class="btn btn-outline-info" style="margin-bottom: 20px;" data-toggle="modal" data-target="#exampleModalLong5">Chi tiết</button>
                </div>
              
                <div class="modal fade" id="exampleModalLong5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle5" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle5">Vệ sinh bàn ghế</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <a href="../price/" class="btn btn-primary">Đăng ký</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col content-img">
                    <img src="/assignment2/public/img/info6.jpeg" alt="info6" class="img-info">
                    <p class="dichvu">Dịch vụ vệ sinh sau xây dựng</p>
                    <div class="line-bottom-small"></div>
                    <p class="content-dichvu">Nhà bạn mới xây trong nhà chắc chắn sẽ có nhùi bụi bặm, nhiều vết ố, vết xi măng hay sơn nước, cần phải tiến hành dọn dẹp lau chùi sạch sẽ từ trên xuống dưới, từ trong ra ngoài mới...</p>
                    <button type="button" class="btn btn-outline-info" style="margin-bottom: 20px;" data-toggle="modal" data-target="#exampleModalLong6">Chi tiết</button>
                </div>

                <div class="modal fade" id="exampleModalLong6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle6" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle6">Vệ sinh sau xây dựng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p>Nhà bạn mới xây trong nhà chắc chắn sẽ có nhùi bụi bặm, nhiều vết ố, vết xi măng hay sơn nước, cần phải tiến hành dọn dẹp lau chùi sạch sẽ từ trên xuống dưới, từ trong ra ngoài mới có thể dọn vào ở được. Nếu thế bạn hãy gọi dịch vụ vệ sinh <b>BK-Cleanly</b></p>
                            <p>Cùng với kinh nghiệm, máy móc và nhân viên chuyên nghiệp, chỉ trong một thời gian ngắn, chúng tôi sẽ vệ sinh sạch sẽ toàn bộ các hạng mục trong ngôi nhà của bạn. Với chi phí rẻ, giá cả hợp lý, uy tín và trách nhiệm, bạn hoàn toàn yên tâm khi sử dụng dịch vụ của chúng tôi.</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <a href="../price/" class="btn btn-primary">Đăng ký</a>
                        </div>
                    </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <?php require_once "./src/views/layouts/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="public/scripts/script.js"></script>
</body>
</html>