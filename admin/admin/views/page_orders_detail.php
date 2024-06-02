<div class="p-5 vh-100">
  <h3 class="text-center">Chi tiết đơn hàng số <?= $id ?></h3>
  <table class="table table-hover ">
    <thead>
      <tr>
        <th>Mã đơn hàng</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá</th>
        <th>Số lượng</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php if (!empty($order_details)) : ?>
      <tr>
        <td><?= $order_details['id'] ?></td>
        <td><?= $order_details['masanpham'] ?></td>
        <td><?= $order_details['tensanpham'] ?></td>
        <td><img src="../furni-1.0.0/images/<?= $order_details['anhsanpham'] ?>" width="120px" alt=""></td>
        <td><?= number_format($order_details['gia']) ?> VNĐ</td>
        <td><?= $order_details['soluong'] ?></td>
      </tr>
    <?php endif; ?>
    </tbody>
  </table>
</div>