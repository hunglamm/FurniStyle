<!-- Start Hero Section -->
<div class="headermini" style="background-color: #f8b810; height: 80px;
">
    <div class="container">

        <div class="intro-excerpt">
            <h1 style="color: #2f2f2f; line-height: 80px;  font-size: 2.5rem;">Thanh Toán</h1>
        </div>

        <div class="col-lg-7">


        </div>
    </div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section">
	<div class="container">
		<div class="row mb-5">

		</div>
		<form id="checkout-form" class="col-md-12" method="post" action="?mod=page&act=haldn_cart">
		<div class="row">
			<div class="col-md-6 mb-5 mb-md-0">
				<h2 class="h3 mb-3 text-black">Chi tiết thanh toán</h2>
				<div class="p-3 p-lg-5 border bg-white">
					<div class="form-group">
						<label for="c_country" class="text-black">Thành phố <span class="text-danger">*</span></label>
						<select id="c_country" class="form-control">
							<option value="1">Chọn thành phố</option>
							<option value="2">Thành phố Hồ Chí Minh</option>
							<option value="3">Hà Nội</option>
							<option value="4">Đà Nẵng</option>
							<option value="5">Hải Phòng</option>
							<option value="6">Cần Thơ</option>
							<option value="7">Thừa Thiên Huế</option>
							<option value="8">Nghệ An</option>
							<option value="9">Đồng Tháp</option>
							<option value="10">Long An</option>
							<option value="11">Cần Giờ</option>
							<option value="12">Bình Dương</option>
							<option value="13">Thanh Hóa</option>
							<option value="14">An Giang</option>
							<option value="15">Bà Rịa - Vũng Tàu</option>
							<option value="16">Bắc Kạn</option>
							<option value="17">Bạc Liêu</option>
							<option value="18">Bắc Ninh</option>
							<option value="19">Bình Phước</option>
							<option value="20">Bến Tre</option>
							<option value="21">Bình Thuận</option>
							<option value="22">Điện Biên</option>
							<option value="23">Hà Giang</option>
							<option value="24">Gia Lai</option>
							<option value="25">Hà Nam</option>
							<option value="26">Hà Tĩnh</option>
							<option value="27">Hải Dương</option>
							<option value="28">Hậu Giang</option>
							<option value="29">Hòa Bình</option>
							<option value="30">Hưng Yên</option>
							<option value="31">Khánh Hòa</option>
							<option value="32">Kiên Giang</option>
							<option value="33">Kon Tum</option>
							<option value="34">Đắk Nông</option>
							<option value="35">Đắk Lắk</option>
							<option value="36">Cao Bằng</option>
							<option value="37">Bình Định</option>
							<option value="38">Lai Châu</option>
							<option value="39">Lâm Đồng</option>
							<option value="40">Lạng Sơn</option>
							<option value="41">Lào Cai</option>
							<option value="42">Long An</option>
							<option value="43">Nam Định</option>
							<option value="44">Ninh Bình</option>
							<option value="45">Ninh Thuận</option>
							<option value="46">Phú Thọ</option>
							<option value="47">Phú Yên</option>
							<option value="48">Quảng Bình</option>
							<option value="49">Quảng Nam</option>
							<option value="50">Quảng Ngãi</option>
							<option value="51">Quảng Ninh</option>
							<option value="52">Quảng Trị</option>
							<option value="53">Sóc Trăng</option>
							<option value="54">Sơn La</option>
							<option value="55">Tây Ninh</option>
							<option value="56">Thái Bình</option>
							<option value="57">Thái Nguyên</option>
							<option value="58">Tiền Giang</option>
							<option value="59">Trà Vinh</option>
							<option value="60">Tuyên Quang</option>
							<option value="61">Vĩnh Long</option>
							<option value="62">Vĩnh Phúc</option>
							<option value="63">Yên Bái</option>
						</select>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label for="c_fname" class="text-black">Tên <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_fname" name="c_fname" placeholder="Nhập tên">
						</div>
						<div class="col-md-6">
							<label for="c_lname" class="text-black">Họ <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_lname" name="c_lname" placeholder="Nhập họ">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-12">
							<label for="c_address" class="text-black">Địa chỉ <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_address" name="c_address" placeholder="Nhập địa chỉ">
						</div>
					</div>
					<div class="form-group row mb-5">
						<div class="col-md-6">
							<label for="c_email_address" class="text-black">Địa chỉ Email <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_email_address" name="c_email_address" placeholder="Nhập địa chỉ Email">
						</div>
						<div class="col-md-6">
							<label for="c_phone" class="text-black">Số điện thoại <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Nhập số điện thoại">
						</div>
					</div>
					<div class="form-group">
						<label for="c_ship_different_address" class="text-black" data-bs-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address">
							Gửi đến một địa chỉ khác?<input style="width:35px" type="checkbox" value="1" id="c_ship_different_address">
						</label>
						<div class="collapse" id="ship_different_address">
							<div class="py-2">
								<div class="form-group">
									<label for="c_diff_country" class="text-black">Thành phố <span class="text-danger">*</span></label>
									<select id="c_country" class="form-control">
										<option value="1">Chọn thành phố</option>
										<option value="2">Thành phố Hồ Chí Minh</option>
										<option value="3">Hà Nội</option>
										<option value="4">Đà Nẵng</option>
										<option value="5">Hải Phòng</option>
										<option value="6">Cần Thơ</option>
										<option value="7">Thừa Thiên Huế</option>
										<option value="8">Nghệ An</option>
										<option value="9">Đồng Tháp</option>
										<option value="10">Long An</option>
										<option value="11">Cần Giờ</option>
										<option value="12">Bình Dương</option>
										<option value="13">Thanh Hóa</option>
										<option value="14">An Giang</option>
										<option value="15">Bà Rịa - Vũng Tàu</option>
										<option value="16">Bắc Kạn</option>
										<option value="17">Bạc Liêu</option>
										<option value="18">Bắc Ninh</option>
										<option value="19">Bình Phước</option>
										<option value="20">Bến Tre</option>
										<option value="21">Bình Thuận</option>
										<option value="22">Điện Biên</option>
										<option value="23">Hà Giang</option>
										<option value="24">Gia Lai</option>
										<option value="25">Hà Nam</option>
										<option value="26">Hà Tĩnh</option>
										<option value="27">Hải Dương</option>
										<option value="28">Hậu Giang</option>
										<option value="29">Hòa Bình</option>
										<option value="30">Hưng Yên</option>
										<option value="31">Khánh Hòa</option>
										<option value="32">Kiên Giang</option>
										<option value="33">Kon Tum</option>
										<option value="34">Đắk Nông</option>
										<option value="35">Đắk Lắk</option>
										<option value="36">Cao Bằng</option>
										<option value="37">Bình Định</option>
										<option value="38">Lai Châu</option>
										<option value="39">Lâm Đồng</option>
										<option value="40">Lạng Sơn</option>
										<option value="41">Lào Cai</option>
										<option value="42">Long An</option>
										<option value="43">Nam Định</option>
										<option value="44">Ninh Bình</option>
										<option value="45">Ninh Thuận</option>
										<option value="46">Phú Thọ</option>
										<option value="47">Phú Yên</option>
										<option value="48">Quảng Bình</option>
										<option value="49">Quảng Nam</option>
										<option value="50">Quảng Ngãi</option>
										<option value="51">Quảng Ninh</option>
										<option value="52">Quảng Trị</option>
										<option value="53">Sóc Trăng</option>
										<option value="54">Sơn La</option>
										<option value="55">Tây Ninh</option>
										<option value="56">Thái Bình</option>
										<option value="57">Thái Nguyên</option>
										<option value="58">Tiền Giang</option>
										<option value="59">Trà Vinh</option>
										<option value="60">Tuyên Quang</option>
										<option value="61">Vĩnh Long</option>
										<option value="62">Vĩnh Phúc</option>
										<option value="63">Yên Bái</option>
									</select>
								</div>
								<div class="form-group row">
									<div class="col-md-6">
										<label for="c_diff_fname" class="text-black">Tên <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname" placeholder="Nhập tên">
									</div>
									<div class="col-md-6">
										<label for="c_diff_lname" class="text-black">Họ <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname" placeholder="Nhập họ">
									</div>
								</div>
								<div class="form-group row">
								</div>
								<div class="form-group row  mb-3">
									<div class="col-md-12">
										<label for="c_diff_address" class="text-black">Địa chỉ <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Nhập địa chỉ">
									</div>
								</div>
								<div class="form-group">
								</div>
								<div class="form-group row">
								</div>
								<div class="form-group row mb-5">
									<div class="col-md-6">
										<label for="c_diff_email_address" class="text-black">Địa chỉ Email <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address" placeholder="Nhập địa chỉ email">
									</div>
									<div class="col-md-6">
										<label for="c_diff_phone" class="text-black">Số điện thoại <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Nhập số điện thoại">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="c_order_notes" class="text-black">Ghi chú</label>
						<textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Viết ghi chú của bạn ở đây..."></textarea>
					</div>

				</div>
			</div>
			<div class="col-md-6">

				<div class="row mb-5">
					<div class="col-md-12">
						<h2 class="h3 mb-3 text-black">Mã giảm giá</h2>
						<div class="p-3 p-lg-5 border bg-white">

							<label for="c_code" class="text-black mb-3">Nhập mã giảm giá nếu bạn có</label>
							<div class="input-group w-75 couponcode-wrap">
								<input type="text" class="form-control me-2" id="c_code" placeholder="Nhập mã giảm giá" aria-label="Coupon Code" aria-describedby="button-addon2">
								<div class="input-group-append">
									<button class="btn btn-black btn-sm" type="button" id="button-addon2">Áp dụng</button>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="row mb-5">
					<div class="col-md-12">
						<h2 class="h3 mb-3 text-black">Đơn hàng của bạn</h2>
						<div class="p-3 p-lg-5 border bg-white">
							<table class="table site-block-order-table mb-5">
								<thead>
									<th>Sản phẩm</th>
									<th>Tổng cộng</th>
								</thead>
								<tbody><?php $tongtien=0;
                         foreach($_SESSION['cart'] as $item) :
                         $tongtien+=($item['gia'] * $item['soluong']);?>
									<tr>
										<td><?=$item['tensanpham']?><strong class="mx-2">x</strong> <?=$item['soluong']?></td>
										<td><?=$item['gia']?></td>
									</tr>
							<?php endforeach; ?>
									<!-- <tr>
										<td>Polo Shirt <strong class="mx-2">x</strong> 1</td>
										<td>$100.00</td>
									</tr>
									<tr>
										<td class="text-black font-weight-bold"><strong>Phí vận chuyển</strong></td>
										<td class="text-black">$350.00</td>
									</tr> -->
									<tr>
										<td class="text-black font-weight-bold"><strong>Tổng thanh toán</strong></td>
										<td class="text-black font-weight-bold"><strong><?=number_format($tongtien)?></strong></td>
									</tr>
								</tbody> 
							</table>

							<div class="border p-3 mb-3">
								<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

								<div class="collapse" id="collapsebank">
									<div class="py-2">
										<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
									</div>
								</div>
							</div>

							<div class="border p-3 mb-3">
								<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

								<div class="collapse" id="collapsecheque">
									<div class="py-2">
										<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
									</div>
								</div>
							</div>

							<div class="border p-3 mb-5">
								<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

								<div class="collapse" id="collapsepaypal">
									<div class="py-2">
										<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
									</div>
								</div>
							</div>

							<div class="form-group">
							<button class="btn btn-black btn-lg py-3 btn-block" type="button" onclick="submitForm()">Thanh toán</button>
												</div>

						</div>
					</div>
				</div>

			</div>
		</div>
		</form>
		<script>
    function submitForm() {
        // Get the form element
        var form = document.getElementById('checkout-form');

        // Submit the form
        form.submit();
	
    }
</script>
	</div>
</div>