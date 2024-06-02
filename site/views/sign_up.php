

<div class="login-container" style="    margin-top: 15vh;
    margin-bottom: 15vh;">
        <h1>ĐĂNG KÝ</h1>
        <form action="" method="post" enctype="multipart/form-data">
        <div>
                    <label for="">Tên tài khoản</label>
                    <input type="text" name="tentaikhoan" class="form-control">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div>
                    <label for="">Mật khẩu</label>
                    <input type="password" name="matkhau" class="form-control">
                </div>
                <div>
                    <label for="">Số điện thoại</label>
                    <input type="text" name="sdt" class="form-control">
                </div>
                <div>
                    <label for="">Địa chỉ</label>
                    <input type="text" name="diachi" class="form-control">
                </div>
           
                <div>
                    <label for="">Ảnh tài khoản</label>
                    <input type="file" name="anhtaikhoan" class="form-control">
                </div>

            <div>
                    <label for="quyen">Quyền</label>
                    <select name="quyen" class="form-control">
                      
                        <option value="user">User</option>
                    </select>
                </div>
                <br>
                <br>

            <button class="button2" name="addUser_submit">
    ĐĂNG KÝ
</button>
        </form>
        <?php if (isset($thongbao)):?>
            <?=$thongbao?>
            <?php endif; unset($thongbao); ?>
    </div>



</div>