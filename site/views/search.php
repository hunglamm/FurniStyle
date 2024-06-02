<div class="untree_co-section product-section before-footer-section">
    <div class="container" style="margin-top: -90px;">
        <div class="row">

            <!-- Start Column 1 -->
            <?php foreach($data_search as $data): ?>
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="?mod=page&act=shop_detail&id=<?php echo $data['id']; ?>" >
                        <img src="furni-1.0.0/images/<?=$data['anhsanpham']?>" class="img-fluid product-thumbnail" style="height: 300px;">
                        <h3 class="product-title"><?=$data['tensanpham']?></h3>
                        <strong class="product-price"><?=$data['gia']?></strong>

                        <span class="icon-cross">
								<img src="furni-1.0.0/images/cross.svg" class="img-fluid">
							</span>
                    </a>
                </div>
                <!-- End Column 2 -->
                <?php endforeach ?>
            

        </div>
    </div>
</div>