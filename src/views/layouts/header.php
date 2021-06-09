<div class="header">
    <?php
    if (!isset($_GET["url"]) || explode("/", filter_var(trim($_GET["url"],"/")))[0] == 'Home') 
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark\">";
    else echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">";
    ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand1 non-display" href="#">
            <?php
            if ($_GET["url"] == 'Home/' || $_GET["url"] == null) 
                echo "<img class=\"logo\" src=\"/assignment2/public/img/logo-light-01.png\" alt=\"\">";
            else echo "<img class=\"logo\" src=\"/assignment2/public/img/logo-dark-01.png\" alt=\"\">";
            ?>
        </a>
        <div class="dropdown search-responsive">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php
            if (!isset($_GET["url"]) ||  $_GET["url"] == 'Home/') 
                echo "<img src=\"/assignment2/public/img/search.png\" alt=\"\">";
            else echo "<img src=\"/assignment2/public/img/loupe.svg\" alt=\"\">";
            ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="width: 100%">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="/assignment2/Home/">TRANG CHỦ<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/assignment2/Introduction/">GIỚI THIỆU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/assignment2/Information/">DỊCH VỤ</a>
                </li>
                <li>
                    <a class="navbar-brand" href="#">
                        <?php
                        if (!isset($_GET["url"]) || $_GET["url"] == 'Home/' ) 
                            echo "<img class=\"logo\" src=\"/assignment2/public/img/logo-light-01.png\" alt=\"\">";
                        else echo "<img class=\"logo\" src=\"/assignment2/public/img/logo-dark-01.png\" alt=\"\">";
                        ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/assignment2/Price/">BẢNG GIÁ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/assignment2/Contact/">LIÊN HỆ</a>
                </li>
                <li>
                    <div class="dropdown search">
                        <button class="btn dropdown-toggle search-icon" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                        <?php
                        if (!isset($_GET["url"]) || $_GET["url"] == 'Home/') 
                            echo "<img src=\"/assignment2/public/img/search.png\" alt=\"\">";
                        else echo "<img src=\"/assignment2/public/img/loupe.svg\" alt=\"\">";
                        ?>
                        </button>
                        <div class="dropdown-menu" id="dropdown-service" aria-labelledby="dropdownMenuButton1">
                            <input class="form-control mr-sm-2" id="search-service" type="search" placeholder="Search" aria-label="Search">
                        
                            <ul id="service-list" style="list-style-type: none; padding: 0;"></ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                <?php
                if (!isset($_SESSION["login"])) { ?>
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal" id="userLogin">
                <?php        
                                if (!isset($_GET["url"]) || $_GET["url"] == 'Home/') 
                                    echo "<img src=\"/assignment2/public/img/user-white.svg\" alt=\"\">";
                                else echo "<img src=\"/assignment2/public/img/user.svg\" alt=\"\">";
                                echo "</a>";
                } else { 
                ?>
                    <div class="dropdown" id="userMenu">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION["login"]; ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="/assignment2/User/">Thông tin tài khoản</a>
                            <?php if (isset($_SESSION["admin"])) echo "<a class=\"dropdown-item\" href=\"/assignment2/Admin/\">Quản lý trang web</a>" ?>
                            <a class="dropdown-item" href="#" id="logout">Đăng xuất</a>
                        </div>
                    </div>
                <?php } ?>
                </li>

                
            </ul>
        </div>
    </nav>
</div>