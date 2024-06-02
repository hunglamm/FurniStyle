

<div class="login-container" style="    margin-top: 15vh;
    margin-bottom: 15vh;">
        <h1>ĐĂNG NHẬP</h1>
        <form action="" method="post">


           <div class="form__group field">
                <input type="input" class="form__field" name="tentaikhoan" placeholder="Name" required="">
                <label for="name" class="form__label">Tên người dùng</label>
            </div>

            <div class="form__group field">
                <input type="input" class="form__field" name="matkhau" placeholder="Pass" required="">
                <label for="name" class="form__label">Mật khẩu</label>
            </div>

            <button class="button2" name="submit-login">
    ĐĂNG NHẬP
</button>
<br>
<br><a href="?mod=page&act=sign_up">
nếu chưa có tài khoản hãy nhấn vào đây</a>
        </form>
        <?php if (isset($thongbao)):?>
            <?=$thongbao?>
            <?php endif; unset($thongbao); ?>
    </div>



</div>
