<?php
 include_once 'pdo.php';
 function comment_list($id){
   $sql="SELECT binhluan.*, taikhoan.tentaikhoan, taikhoan.anhtaikhoan
   FROM binhluan
   join taikhoan on binhluan.mataikhoan = taikhoan.id 
   where masanpham=?";
  return pdo_query($sql,$id);
   
}
function comment_add($idkh,$noidungbinhluan,$id){
   $sql="INSERT INTO binhluan(mataikhoan,noidung,ngaybinhluan,masanpham) VALUES(?,?,?,?) ";
   return pdo_execute($sql,$idkh,$noidungbinhluan,$id);
}

function comment_page($page){
  $start=($page-1)*4;
  $sql = "SELECT * idkh.noidungbinhluan FROM binhluan where 1*;
  $start, 4";
  return pdo_query($sql);
}
function comment_all(){
  $sql="SELECT * FROM binhluan";
  return pdo_query($sql);
  
}
function feedback_delete($id){
  $sql="DELETE FROM binhluan WHERE id=?";
  return pdo_execute($sql,$id);
}
?>
