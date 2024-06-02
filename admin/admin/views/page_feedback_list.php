<div class="p-5 vh-100">
    <h3 class="text-center">Quản lý bình luận</h3>
    <div >
        <a class="btn btn-primary" href="?mod=feedback&act=add">Thêm bình luận</a>
    </div>
    
    <table class="table table-hover ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mã tài khoản </th>
                <th>Nội Dung</th>
                <th>Ngày bình luận</th>
                <th>Mã sản phẩm</th>
              
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach($ds_cm as $feecdback): ?>
            <tr>
                <td><?=$feecdback['id']?></td>
                <td><?=$feecdback['mataikhoan']?></td>
                <td><?=$feecdback['noidung']?></td>
                <td><?=$feecdback['ngaybinhluan']?></td>
                <td><?=$feecdback['masanpham']?></td>
               
                <td>
                    <a class="btn btn-danger" href="?mod=feedback&act=delete&id=<?=$feecdback['id']?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
               
        </tbody>
         
</div>

    </table>
    <div class="page_number">
                <!-- ?php for($i=1;$i<=$number_page;$i++) :?>
                a class="btn btn-sm btn-primary btn-minus" href="?mod=feedback&act=list&page=?=$i?>">?=$i?></a> -->
                <!-- ?php endfor ?> -->
            </div>
  