<?php
    include_once 'pdo.php';
    function category_list(){
        $sql="SELECT * FROM danhmuc";
        return pdo_query($sql);
        
    }
   
    function category_add($tendanhmuc,$hinhanh,$tinhtrangdm){
        $sql="INSERT INTO danhmuc(tendanhmuc,hinhanh,tinhtrangdm) VALUES(?,?,?) ";
        return pdo_execute($sql,$tendanhmuc,$hinhanh,$tinhtrangdm);
    }
    function category_delete($id){
        $sql="DELETE FROM danhmuc WHERE id=?";
        return pdo_execute($sql,$id);
    }
    function get_one_category($id){
        $sql="SELECT * FROM danhmuc WHERE id=?";
        return pdo_query_one($sql,$id);

    }
    function category_edit($tendanhmuc,$hinhanh,$tinhtrangdm,$id){
        $sql="UPDATE danhmuc SET tendanhmuc=?, hinhanh=?, tinhtrangdm=? WHERE id=?";
        return pdo_execute($sql,$tendanhmuc,$hinhanh,$tinhtrangdm,$id);
    }
    function count_cate(){
        $sql = "SELECT COUNT(*) FROM danhmuc";
        return pdo_query_value($sql);
    }
    function cate_page($page){
        $start=($page-1)*4;
        $sql = "SELECT cate.* FROM danhmuc cate LIMIT $start, 4";
        return pdo_query($sql);
    }
    function cate_name($id){
        $sql ="SELECT danhmuc.tendanhmuc
        FROM sanpham
        JOIN danhmuc ON sanpham.madanhmuc = danhmuc.id
        WHERE sanpham.madanhmuc = ? limit 1";
        return pdo_query($sql,$id);
    }
    
?>