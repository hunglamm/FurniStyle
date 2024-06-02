<?php
include_once 'pdo.php';
function get_list_orders()
{
  $sql = "SELECT d.*, c.*, t.tentaikhoan FROM `donhang` AS d INNER JOIN `chitietdonhang` as c ON d.id = c.madonhang INNER JOIN `taikhoan` as t ON t.id = d.mataikhoan";
  $list = pdo_query($sql);
  return $list;
}
// function get_list_orders()
// {
//   $sql = "SELECT d.*, tk.id as user_id 
//   FROM donhang as d
//   JOIN taikhoan as tk ON tk.id = d.id";
//   $list = pdo_query($sql);
//   return $list;
// }
function get_order_details($id)
{
  $sql = "SELECT c.*, p.tensanpham, p.anhsanpham FROM `chitietdonhang` AS c LEFT JOIN `sanpham` AS p ON c.masanpham = p.id WHERE c.madonhang = ?";
  return pdo_query_one($sql, $id);
}

function order_delete($id){
  $sql="DELETE FROM chitietdonhang WHERE id=?";
  return pdo_execute($sql,$id);
}
// function get_list_detail($madonhang){
//   $sql = "SELECT * from chitietdonhang WHERE madonhang = ?";
// return pdo_query($sql, $madonhang);
// }