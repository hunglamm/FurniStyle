<div class="p-5 vh-100">
    <h3 class="text-center">Quản lý danh mục</h3>
    <div >
        <a class="btn btn-primary" href="?mod=category&act=add">Thêm danh mục</a>
    </div>
    <table class="table table-hover ">
        <thead>
            <tr>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Hình ảnh</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach($cate_page as $dm): ?>
            <tr>
                <td><?=$dm['id']?></td>
                <td><?=$dm['tendanhmuc']?></td>
                <td><img src="../furni-1.0.0/images/<?=$dm['hinhanh']?>" width="120px" alt=""></td>
                <td><?=$dm['tinhtrangdm']?></td>
                <td>
                    <a class="btn btn-primary" href="?mod=category&act=edit&id=<?=$dm['id']?>">Sửa</a>
                    <a class="btn btn-danger" href="?mod=category&act=delete&id=<?=$dm['id']?>">Xóa</a>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="page_number">
        <?php for($i=1;$i<=$number_page;$i++) :?>
            <a class="btn btn-sm btn-primary btn-minus" href="?mod=category&act=list&page=<?=$i?>"><?=$i?></a>
        <?php endfor ?>
    </div>
</div>