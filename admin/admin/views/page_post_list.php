<div class="p-5 vh-100">
    <h3 class="text-center">Quản lý bài viết</h3>
    <div >
        <a class="btn btn-primary" href="?mod=post&act=add">Thêm bài viết</a>
    </div>
    <table class="table table-hover ">
        <thead>
            <tr>
                <th>Mã bài viết</th>
                <th>Tên bài viết</th>
                <th>Hình ảnh bài viết</th>
                <th>Nội dung bài viết</th>
                <th>Tác giả</th>
                <th>Ngày đăng</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach($post_page as $bv): ?>
            <tr>
                <td><?=$bv['id']?></td>
                <td><?=$bv['tenbaiviet']?></td>
                <td><img src="../furni-1.0.0/images/<?=$bv['hinhanhbv']?>" width="120px" alt=""></td>
                <td><?=$bv['noidungbaiviet']?></td>
                <td><?=$bv['tacgia']?></td>
                <td><?=$bv['ngaydang']?></td>
                <td>
                    <a class="btn btn-primary" href="?mod=post&act=edit&id=<?=$bv['id']?>">Sửa</a>
                    <a class="btn btn-danger" href="?mod=post&act=delete&id=<?=$bv['id']?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="page_number">
        <?php for($i=1;$i<=$number_page;$i++) :?>
            <a class="btn btn-sm btn-primary btn-minus" href="?mod=post&act=list&page=<?=$i?>"><?=$i?></a>
       <?php endfor ?>
    </div>
</div>
  