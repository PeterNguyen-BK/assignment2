<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img class="logo" style="display: block; margin: 0 auto;" src="/assignment2/public/img/logo-dark-01.png" alt="">
                <form action="/assignment2/User/login" method="post" style="margin: 20px 0;">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="invalidEmail" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group" style="margin-bottom: 30px;">
                        <label for="exampleInputPassword1">Mật khẩu</label>
                        <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
                    </div>
                    <button type="submit" name="btnLogin" class="btn btn-primary" id="butnLogin">Đăng nhập</button>
                    <?php if (!isset($_GET["url"]) || count(explode("/", filter_var(trim($_GET["url"],"/")))) == 1 || explode("/", filter_var(trim($_GET["url"],"/")))[1] != "register") {?>
                        <button type="button" class="btn btn-primary">
                            <a href="/assignment2/User/register" type="button" style="color: white; text-decoration:none;">Đăng ký</a>
                        </button>
                    <?php }?>
                </form>
            </div>
        </div>
    </div>
</div>