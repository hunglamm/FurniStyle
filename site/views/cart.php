	<!-- Start Hero Section -->
  <div class="headermini" style="background-color: rgb(114, 124, 121); height: 40px; ">
    <div class="container" style="margin-top: -120px;">

        <div class="intro-excerpt">
            <h1 style="color: #eeeeee; line-height: 40px;">Cart</h1>
        </div>

        <div class="col-lg-7">


        </div>
    </div>
</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          
                          <th class="product-name">Sản phẩm</th>
                          <th class="product-thumbnail">Hình ảnh</th>
                          <th class="product-quantity">Số lượng</th>
                          <th class="product-price">Giá</th>
                          <th class="product-remove">Xóa</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $tongtien=0;
                         foreach($_SESSION['cart'] as $item) :
                        
                            $tongtien+=($item['gia'] * $item['soluong']);

                            ?>
                        <tr>
                          <td class="product-name">
                            <h2 class="h5 text-black"><?=$item['tensanpham']?></h2>
                          </td>
                          <td class="product-thumbnail">
                            <img src="furni-1.0.0/images/<?=$item['anhsanpham']?>" alt="Image" class="img-fluid">
                          </td>
                          <td>
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                              <div class="input-group-prepend">
                                <button class="btn btn-outline-black decrease"  href="?mod=page&act=decrease&id=<?php echo $item['id']; ?>" type="button">&minus;</button>
                              </div>
                              <input type="text" class="form-control text-center quantity-amount" value="<?=$item['soluong']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <div class="input-group-append">
                                <button class="btn btn-outline-black increase" type="button"  href="?mod=page&act=increase&id=<?php echo $item['id']; ?>">&plus;</button>
                              </div>
                            </div>
        
                          </td>
                          <td><?=$item['gia']?></td>
                          <td><a href="?mod=page&act=delete&id=<?php echo $item['id']; ?>" class="btn btn-black btn-sm">X</a></td>
                        </tr>
                        <?php endforeach; ?>
                        <!-- <tr>
                          <td class="product-thumbnail">
                            <img src="furni-1.0.0/images/product-2.png" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black">Sản phẩm 2</h2>
                          </td>
                          <td>$49.00</td>
                          <td>
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                              <div class="input-group-prepend">
                                <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                              </div>
                              <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <div class="input-group-append">
                                <button class="btn btn-outline-black increase" type="button">&plus;</button>
                              </div>
                            </div>
        
                          </td>
                          <td>$49.00</td>
                          <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                        </tr> -->
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    <div class="col-md-6">
                      <button class="btn btn-outline-black btn-sm btn-block"  onclick="window.location='?mod=page&act=shop'">Tiếp tục mua hàng</button>
                   
                    </div>
                    <div class="col-md-6">
                  <a  href="?mod=page&act=clear_cart">
                      <button class="btn btn-outline-black btn-sm btn-block" name="xoatoanbo">Xóa giỏ hàng</button>
                  </a>                 
                    </div>
                  </div>
                 
                </div>
                <div class="col-md-6 pl-5">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">TỔNG TIỀN GIỎ HÀNG</h3>
                        </div>
                      </div>
                      <div class="row mb-5">
                        <div class="col-md-6">
                          <span class="text-black">Tổng tiền</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black"><?=number_format($tongtien)?></strong>
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-12">
                          <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='?mod=page&act=checkout'">Thanh Toán</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>