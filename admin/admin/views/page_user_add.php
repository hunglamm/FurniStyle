<div class="p-3 vh-100">
    <form method="post" action="" enctype="multipart/form-data" class="form p-3">
        <div class="row">
            <div class="col-md-6">
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
                <div>
                    <label for="quyen">Quyền</label>
                    <select name="quyen" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="text-center">
                    <input class="btn btn-primary m-5" type="submit" name="addUser_submit" value="Thêm người dùng">
                </div>
            </div>
        </div>
    </form>
</div>