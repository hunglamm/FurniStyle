<!-- Start Hero Section -->
<div class="headermini" style="background-color: #f8b810; height: 80px;
">
    <div class="container">

        <div class="intro-excerpt">
            <h1 style="color: #2f2f2f; line-height: 80px;  font-size: 2.5rem;">Tất Cả Sản Phẩm</h1>
        </div>

        <div class="col-lg-7">


        </div>
    </div>
</div>
<!-- End Hero Section -->



<div class="product-section" style="font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
           
            display: flex;">
             <?php foreach($ds_dm as $dm): ?>
    <div class="container">
        <div class="row" >

            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0" style="width: 25%; ">
                <ul style="margin-top: 9px; margin-bottom: -9px;">
               
                    <li><a class="nav-link text-black" href="?mod=page&act=category&id=<?php echo $dm['id']; ?>"><?=$dm['tendanhmuc']?></a></li>
             </ul>
       
            </div>
            <!-- End Column 1 -->
            <?php endforeach ?>
            <!-- Start Column 2 -->
            <div class="product-details" style=" flex: 1;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: -116px;">
            <?php foreach($shop_page as $sp): ?>
            <div class="col-12 col-md-4 col-lg-3 mb-5" style="   width: 30%;
            margin-bottom: 20px;
            padding: 10px;
            text-align: center;">
                <div class="product-item">
                <a  href="?mod=page&act=shop_detail&id=<?php echo $sp['id']; ?>" style="text-decoration: none;">   <img src="furni-1.0.0/images/<?=$sp['anhsanpham']?>" class="img-fluid product-thumbnail" style="height: 300px;">
                    <h3 class="product-title"><?=$sp['tensanpham']?></h3>
                    <strong class="product-price"><?=number_format($sp['gia'],0,",",".")?> VND</strong>
                    </a>
                    <a  href="?mod=page&act=cart&id=<?=$sp["id"] ?>">
                <span class="icon-cross">
								<img src="furni-1.0.0/images/cross.svg" class="img-fluid">
							</span>
                </a>
            </div>
            </div>
            <!-- End Column 1 -->
            <?php endforeach ?>
            <br>
            <div class="chuyentrang">
           
        <div class="page_number">
        <?php for($i=1;$i<=$number_page;$i++) :?>
            <a class="page" href="?mod=page&act=shop&page=<?=$i?>"><?=$i?> </a>
            <?php endfor ?>
            <!-- Thêm các trang khác nếu cần -->
        </div> 
    </div>
            
            </div>
     
            </div>
       
    </div>
</div>
</div>
            </div>
            </div>
            </div></div>
            </div>
           