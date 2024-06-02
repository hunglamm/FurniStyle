<div class="p-5 vh-100">
  <h3 class="text-center">Quản lý đơn hàng</h3>

  <table class="table table-hover ">
    <thead>
      <tr>
        <th>Mã đơn hàng</th>
        <th>Tên người đặt</th>
        <th>Mã sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Tổng tiền</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach ($list_orders as $order) : ?>
      <tr>
        <td><?= $order['id'] ?></td>
        <td><?= $order['tentaikhoan'] ?></td>
        <td><?= $order['masanpham'] ?></td>
        <td><?= $order['gia'] ?></td>
        <td><?= $order['soluong'] ?></td>
        <td><?= intval($order['gia'] * $order['soluong']) ?></td>
        <td>
          <a class="btn btn-primary" href="?mod=order&act=detail&id=<?= $order['id'] ?>">Chi tiết</a>
          <a class="btn btn-danger" href="?mod=order&act=delete&id=<?= $order['id'] ?>">Xóa</a>
      </tr>
    <?php endforeach; ?>

    </tbody>
  </table>
  
</div>