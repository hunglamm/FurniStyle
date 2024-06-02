<!-- Assuming $user is the user data retrieved from the database -->

<div class="p-3 vh-100">
    <form method="post" action="" enctype="multipart/form-data" class="form p-3">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label for="">Tên tài khoản</label>
                    <input value="<?=$user['tentaikhoan']?>" type="text" name="tentaikhoan" class="form-control">
                </div>
                <div>
                    <label for="">Email</label>
                    <input value="<?=$user['email']?>" type="email" name="email" class="form-control">
                </div>
                <div>
                    <label for="">Mật khẩu</label>
                    <input value="<?=$user['matkhau']?>" type="password" name="matkhau" class="form-control">
                </div>
                <div>
                    <label for="">Số điện thoại</label>
                    <input value="<?=$user['sdt']?>" type="text" name="sdt" class="form-control">
                </div>
                <div>
                    <label for="">Địa chỉ</label>
                    <input value="<?=$user['diachi']?>" type="text" name="diachi" class="form-control">
                </div>
                            <div>
                <label for="">Hình ảnh</label>
                <input type="file" name="anhtaikhoan" class="form-control">
            </div>

                <div>
                    <label for="">Quyen</label>
                    <select class="form-select" name="quyen">
                        <option value="admin" <?php if($user['quyen'] === 'admin') echo 'selected'; ?>>Admin</option>
                        <option value="user" <?php if($user['quyen'] === 'user') echo 'selected'; ?>>User</option>
                    </select>
                </div>
                <div class="text-center">
                    <input class="btn btn-danger m-5" type="submit" name="editUser_submit" value="Cập nhật">
                </div>
            </div>
            <div class="col-md-6">
            <img class="my-3" src="../furni-1.0.0/images/<?=$user['anhtaikhoan']?>" width="400" height="400" alt="">
            </div>
        </div>
    </form>
</div>
