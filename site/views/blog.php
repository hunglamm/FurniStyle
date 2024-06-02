<!-- Start Hero Section -->
<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Bài viết</h1>
								<p class="mb-4">Chào mừng bạn đến với trang bài viết của chúng tôi - nơi bạn có thể đọc tin tức về nội thất, chất lượng nhất cho không gian sống của bạn.</p>
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

		

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				
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
					
				</div>
			</div>
		</div>
		<!-- End Blog Section -->	

		

	