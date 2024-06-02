<?php      
    extract($onesp);
    // $img=$img_path.$pro_image;
?>

<div class="container" style="display: flex;
    align-items: center;
    
    margin: 20px;
    margin-left: 106px;">
    
    <div class="row">
        <div class="product-image" style=" flex: 1;
            margin-right: 20px;">
            <img src="furni-1.0.0/images/<?=$anhsanpham?>" alt="Hình ảnh sản phẩm" style="height: 500px;">
        </div>
        <div class="product-details" style=" flex: 2;
    text-align: left;
    margin-bottom: 50px;">
            <h1>
                <?=$tensanpham?>
            </h1>
            <p style="color: tomato; font-size: 1em;">Giá: <?=$gia?> VNĐ
            </p>
            <p>
                Mô tả sản phẩm: <?=$chitiet?>
            </p>
            <label for="quantity">Số lượng: <?=$soluong?></label>
            <form action="?mod=page&act=cart&id=<?=$id ?>" method="post">
            <input type="number" id="quantity" name="quantity" value="1">
                <input type="hidden" name="tensanpham" id="" value="<?=$tensanpham?>">
                <input type="hidden" name="gia" id="" value="<?=$gia?>">
                <input type="hidden" name="anhsanpham" id="" value="<?=$anhsanpham?>">
                <input type="hidden" name="chitiet" id="" value="<?=$chitiet?>">
                <input type="hidden" name="id" id="" value="<?=$id?>">
                <button class="btn button2" name="add_to_cart">Mua ngay</button>
            </form>
        </div>
    </div> 
</div>
<div class="container" style=" align-items: center; margin: 20px;  margin-left: 106px;">
<div class="binhluan" style="    margin-bottom: 90px;">
        <div class="comments-section">
            <h2 style="color:  #17787f;">Bình Luận Đã Có</h2>
            <div class="comment">
            <div class="comment2"style=" flex: 1; padding: 20px; display: flex; flex-wrap: wrap; justify-content: space-between;">
            <?php foreach($comment_list as $comment): ?>
                    <img src="furni-1.0.0/images/<?=$comment['anhtaikhoan']?>" style="height: 30px;">
                        <h5 style="color:  #17787f;"> <?=$comment['tentaikhoan']?></h5>
                        <h50 style="margin-left: auto;"> <?=$comment['ngaybinhluan']?></h50><br>
            </div>
                        <p style="margin-left: 22px;"><?=$comment['noidung']?></p>
                        
               
        
            
                <?php endforeach ?>
            </div>

            <!-- <div class="comment">
                <h3>Tên Người Dùng 2</h3>
                <p>Nội dung bình luận 2 sẽ được hiển thị ở đây.</p>
            </div> -->
            <div class="chuyentrang">
        <div class="pagination" style="" >
            <a href="#" class="page">1</a>
            <a href="#" class="page">2</a>
            <a href="#" class="page">3</a>
            <!-- Thêm các trang khác nếu cần -->
        </div> </div>

                <!-- Các bình luận khác có thể được thêm vào đây -->
        </div>
      
        <div class="comment-form">
            <h2>Thêm Bình Luận</h2>
            <form>
                <label for="comment">Bình Luận:</label>
                <br>
                <textarea id="comment" name="noidungbinhluan" rows="6" style="width: 99%;" required></textarea>
                <br>
                <div class="col-auto">
                                <button class="btn btn-primary" name="guibinhluan" style="background: #17787f;">
										Gửi
									</button>
                            </div>
            </form>
        </div>
    </div>
</div>