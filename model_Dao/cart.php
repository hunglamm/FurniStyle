<?php
 include_once 'pdo.php';
// Tuong tác với bảng cart trong CSDL
// Hàm SQL tt với CSDL
// SELECT * FROM taikhoan WHERE email='alo@gmail.com' AND matkhau='12345'


function cart_add($tensanpham, $gia, $anhsanpham, $chitiet, $id) {
    $sql = "UPDATE product SET tensanpham=?, gia=?, anhsanpham=?, chitiet=?, tinhtrang=1, giohang=? WHERE id=?";
    pdo_execute($sql, $tensanpham, $gia, $anhsanpham, $chitiet, $id);
}
function cart_delete($tensanpham, $gia, $anhsanpham, $chitiet ,$id) {
    $sql = "UPDATE product SET tensanpham=?, gia=?, anhsanpham=?, chitiet=?, tinhtrang=0, giohang=? WHERE id=?";
    pdo_execute($sql, $tensanpham, $gia, $anhsanpham, $chitiet, $id);
}
function create_order($mataikhoan, $cartItems) {
    try {
        $totalAmount = 0;
        foreach ($cartItems as $item) {
            $totalAmount += $item['gia'] * $item['soluong'];
        }

        $pdo = pdo_get_connection();
        $pdo->beginTransaction();

        $sqlOrder = "INSERT INTO donhang (mataikhoan, tongtien) VALUES (?, ?)";
        pdo_executeargs($sqlOrder, [(int)$mataikhoan, (int)$totalAmount]);

        $sqlMaxId = "SELECT MAX(id) FROM donhang";
        $maxIdStatement = $pdo->query($sqlMaxId);
        $maxId = $maxIdStatement->fetchColumn();
       
        $sqlDetails = "INSERT INTO chitietdonhang (madonhang, masanpham, gia, soluong, tongtientatca) VALUES (?, ?, ?, ?, ?)";
        foreach ($cartItems as $item) {
            pdo_executeargs($sqlDetails, [
                (int)$maxId,
                (int)$item['id'],
                (int)$item['gia'],
                (int)$item['soluong'],
                (int)($item['gia'] * $item['soluong'])
            ]);
        }
        $pdo->commit();

        return $maxId;
    } catch (PDOException $e) {
        $pdo->rollBack();
        throw $e;
    } finally {
        unset($pdo);
    }
}
?>