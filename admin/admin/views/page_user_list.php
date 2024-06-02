<!-- page_user_list.php -->
<div class="p-5 vh-100">
    <h3 class="text-center">Quản lý người dùng</h3>
    <div>
        <a class="btn btn-primary" href="?mod=user&act=add">Thêm người dùng</a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID Người dùng</th>
                <th>Tên người dùng</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Ảnh tài khoản</th>
                <th>Quyền</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($ds_tk as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['tentaikhoan'] ?></td>
                    <td><?= $user['matkhau'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['sdt'] ?></td>
                    <td><?= $user['diachi'] ?></td>
                    <td><img src="../furni-1.0.0/images/<?=$user['anhtaikhoan']?>" width="120px" alt=""></td>
                    <td><?= $user['quyen'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="?mod=user&act=edit&id=<?= $user['id'] ?>">Sửa</a>
                        <a class="btn btn-danger" href="?mod=user&act=delete&id=<?= $user['id'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="page_number">
        <?php for ($i = 1; $i <= $number_page; $i++) : ?>
            <a class="btn btn-sm btn-primary btn-minus" href="?mod=user&act=list&page=<?= $i ?>"><?= $i ?></a>
        <?php endfor ?>
    </div>
</div>
