<div class="p-5 vh-100">
    <h3 class="text-center">Quản lý sản phẩm</h3>
    <div >
        <a class="btn btn-primary" href="?mod=product&act=add">Thêm sản phẩm</a>
    </div>
    <table class="table table-hover ">
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Trạng thái</th>
                <th>Giá</th>
                <!-- <th>Giá khuyến mãi</th> -->
                <th>Chi tiết</th>
                <th>Số lượng</th>
                <th>Lượt xem</th>
                <th>Sản phẩm mới</th>
                <th>Sản phẩm nổi bật</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach($pro_page as $sp): ?>
            <tr>
                <td><?=$sp['id']?></td>
                <td><?=$sp['tensanpham']?></td>
                <td><img src="../furni-1.0.0/images/<?=$sp['anhsanpham']?>" width="120px" alt=""></td>
                <td><?=$sp['tinhtrang']?></td>
                <td><?=$sp['gia']?></td>
                <!-- <td><?=$sp['giakhyenmai']?></td> -->
                <td><?=$sp['chitiet']?></td>
                <td><?=$sp['soluong']?></td>
                <td><?=$sp['luotxem']?></td>
                <td><?=$sp['sanphammoi']?></td>
                <td><?=$sp['sanphamnoibat']?></td>
                <td>
                    <a class="btn btn-primary" href="?mod=product&act=edit&id=<?=$sp['id']?>">Sửa</a>
                    <a class="btn btn-danger" href="?mod=product&act=delete&id=<?=$sp['id']?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="page_number">
        <?php for($i=1;$i<=$number_page;$i++) :?>
            <a class="btn btn-sm btn-primary btn-minus" href="?mod=product&act=list&page=<?=$i?>"><?=$i?></a>
       <?php endfor ?>
    </div>
</div>
  