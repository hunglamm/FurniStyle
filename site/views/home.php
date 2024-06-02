<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Sản Phẩm <span clsas="d-block">Khuyến Mãi</span></h1>
                    <p class="mb-4">Chào mừng bạn đến với trang web của chúng tôi - nơi bạn có thể khám phá và chọn lựa những món nội thất đẹp, chất lượng nhất cho không gian sống của bạn.</p>
                    <p><a href="" class="btn btn-secondary me-2">Mua ngay</a><a href="#" class="btn btn-white-outline">xem cửa hàng</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="furni-1.0.0/images/sọpha2.png" class="img-fluid" width="2000px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<!-- Start Product Section -->
<div class="product-section">
    <div class="container">
        <div class="row">

            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">Sản phẩm mới</h2>
                <p class="mb-4">Chào mừng bạn đến với thế giới của sự đẳng cấp và hiện đại! Chúng tôi tự hào giới thiệu đến bạn sản phẩm mới nhất của chúng tôi. </p>

            </div>
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <?php foreach($ds_new as $sp): ?>
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <div class="product-item">
                <a  href="?mod=page&act=shop_detail&id=<?php echo $sp['id']; ?> " style="text-decoration: none;">
                        <img src="furni-1.0.0/images/<?=$sp['anhsanpham']?>" class="img-fluid product-thumbnail" style="height: 300px;">
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
            <!-- End Column 2 -->
            <?php endforeach ?>

            <!-- Start Column 3 -->
            <!-- <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="cart.html">
                        <img src="furni-1.0.0/images/product-2.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Kruzo Aero Chair</h3>
                        <strong class="product-price">$78.00</strong>

                        <span class="icon-cross">
								<img src="furni-1.0.0/images/cross.svg" class="img-fluid">
							</span>
                    </a>
                </div> -->
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <!-- <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="cart.html">
                        <img src="furni-1.0.0/images/product-3.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Ergonomic Chair</h3>
                        <strong class="product-price">$43.00</strong>

                        <span class="icon-cross">
								<img src="furni-1.0.0/images/cross.svg" class="img-fluid">
							</span>
                    </a>
                </div> -->
            <!-- End Column 4 -->

        </div>
    </div>
</div>
<!-- End Product Section -->



<!-- Start We Help Section -->
<div class="we-help-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="imgs-grid">
                    <div class="grid grid-1"><img src="furni-1.0.0/images/img-grid-1.jpg" alt="Untree.co"></div>
                    <div class="grid grid-2"><img src="furni-1.0.0/images/img-grid-2.jpg" alt="Untree.co"></div>
                    <div class="grid grid-3"><img src="furni-1.0.0/images/img-grid-3.jpg" alt="Untree.co"></div>
                </div>
            </div>
            <div class="col-lg-5 ps-lg-5">
                <h2 class="section-title mb-4">Chúng tôi giúp bạn thiết kế nội thất hiện đại</h2>
                <p>Chào mừng bạn đến với thế giới của sự sang trọng và sáng tạo trong thiết kế nội thất hiện đại! Tại Furni, chúng tôi tự hào là đối tác đắc lực của bạn trong việc biến những ý tưởng độc đáo thành không gian sống đẳng cấp và đẹp mắt.</p>
                <p>Chúng tôi không chỉ là những người thiết kế, mà là những người sáng tạo, đem đến cho bạn không gian sống không chỉ đẹp mắt mà còn phản ánh đẳng cấp và cá tính riêng của bạn.</p>
                <p>Từ thiết kế hiện đại tới cổ điển, từ sự ấm cúng đến sự thanh lịch, chúng tôi có khả năng tạo ra không gian phản ánh đúng gu thẩm mỹ của bạn. Mỗi dự án là một câu chuyện, và chúng tôi muốn giúp bạn kể lên câu chuyện của riêng mình.
                </p>

                <ul class="list-unstyled custom-list my-4">
                    <li>Chất Lượng Vượt Trội</li>
                    <li>Thiết Kế Hiện Đại</li>
                    <li>Ưu Đãi Đặc Biệt</li>
                    <li>Số Lượng Có Hạn</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!-- End We Help Section -->

<!-- Start Popular Product -->
<div class="popular-product">
    <div class="container">
        <div class="row">
        <?php foreach($ds_bst as $bst): ?>
            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="furni-1.0.0/images/<?=$bst['hinhanhsuutap']?>" alt="Image" class="img-fluid" style="
    padding-top: 30px;">
                    </div>
                    <div class="pt-3">
                        <h3><?=$bst['tenbosuutap']?></h3>
                        <p><?=$bst['gioithieubst']?></p>
                        <p><a href="?mod=page&act=bosuutap&id=<?php echo $bst['id']; ?>">Xem Bộ Sưu Tập</a></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            <!-- <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="furni-1.0.0/images/product-2.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>Kruzo Aero Chair</h3>
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="furni-1.0.0/images/product-3.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>Ergonomic Chair</h3>
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>
<!-- End Popular Product -->

<div class="untree_co-section product-section before-footer-section">
    <div class="container">
    <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="section-title">Sản Phẩm Nổi Bật</h2>
            </div>
            <div class="col-md-6 text-start text-md-end">
                <a href="?mod=page&act=shop" class="more">Xem Tất Cả Các Sản Phẩm</a>
            </div>
        </div>
        <div class="row">

        <?php foreach($ds_hot as $sp): ?>
          <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <div class="product-item">
                <a  href="?mod=page&act=shop_detail&id=<?php echo $sp['id']; ?>" style="text-decoration: none;">
                        <img src="furni-1.0.0/images/<?=$sp['anhsanpham']?>" class="img-fluid product-thumbnail" style="height: 300px;">
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
            <!-- End Column 2 -->
            <?php endforeach ?>
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="#">
                    <img src="furni-1.0.0/images/product-1.png" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Nordic Chair</h3>
                    <strong class="product-price">$50.00</strong>

                    <span class="icon-cross">
							<img src="furni-1.0.0/images/cross.svg" class="img-fluid">
						</span>
                </a>
            </div> -->
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="#">
                    <img src="furni-1.0.0/images/product-2.png" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Kruzo Aero Chair</h3>
                    <strong class="product-price">$78.00</strong>

                    <span class="icon-cross">
							<img src="furni-1.0.0/images/cross.svg" class="img-fluid">
						</span>
                </a>
            </div> -->
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="#">
                    <img src="furni-1.0.0/images/product-3.png" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Ergonomic Chair</h3>
                    <strong class="product-price">$43.00</strong>

                    <span class="icon-cross">
							<img src="furni-1.0.0/images/cross.svg" class="img-fluid">
						</span>
                </a>
            </div> -->
            <!-- End Column 4 -->


            <!-- Start Column 1 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <!-- <a class="product-item" href="#">
                    <img src="furni-1.0.0/images/product-3.png" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Nordic Chair</h3>
                    <strong class="product-price">$50.00</strong>

                    <span class="icon-cross">
							<img src="furni-1.0.0/images/cross.svg" class="img-fluid">
						</span>
                </a>
            </div> -->
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="#">
                    <img src="furni-1.0.0/images/product-1.png" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Nordic Chair</h3>
                    <strong class="product-price">$50.00</strong>

                    <span class="icon-cross">
							<img src="furni-1.0.0/images/cross.svg" class="img-fluid">
						</span>
                </a>
            </div> -->
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="#">
                    <img src="furni-1.0.0/images/product-2.png" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Kruzo Aero Chair</h3>
                    <strong class="product-price">$78.00</strong>

                    <span class="icon-cross">
							<img src="furni-1.0.0/images/cross.svg" class="img-fluid">
						</span>
                </a>
            </div> -->
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="#">
                    <img src="furni-1.0.0/images/product-3.png" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Ergonomic Chair</h3>
                    <strong class="product-price">$43.00</strong>

                    <span class="icon-cross">
							<img src="furni-1.0.0/images/cross.svg" class="img-fluid">
						</span>
                </a>
            </div> -->
            <!-- End Column 4 -->

        </div>
    </div>
</div>



<!-- Start Blog Section -->
<div class="blog-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="section-title">Bài viết gần đây</h2>
            </div>
            <div class="col-md-6 text-start text-md-end">
                <a href="?mod=page&act=blog" class="more">Xem Tất Cả Các Bài Viết</a>
            </div>
        </div>

        <div class="row">
        <?php foreach($ds_bv as $bv): ?>
            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="?mod=page&act=blog_detail&id=<?php echo $bv['id']; ?>" class="post-thumbnail"><img src="furni-1.0.0/images/<?=$bv['hinhanhbv']?>" alt="Image" class="img-fluid" style="height: 193px; width:361px;"></a>
                    <div class="post-content-entry">
                        <h3><a href="?mod=page&act=blog_detail&id=<?php echo $bv['id']; ?>"><?=$bv['tenbaiviet']?></a></h3>
                        <div class="meta">
                            <span>bởi <a href="?mod=page&act=blog_detail&id=<?php echo $bv['id']; ?>"><?=$bv['tacgia']?></a></span> <span>vào <a href="?mod=page&act=blog_detail&id=<?php echo $bv['id']; ?>"><?=$bv['ngaydang']?></a></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            <!-- <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="furni-1.0.0/images/post-2.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">How To Keep Your Furniture Clean</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="furni-1.0.0/images/post-3.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>-->

        </div>
    </div>
</div> 
<!-- End Blog Section -->