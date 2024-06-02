<?php
    include_once 'pdo.php';
    function product_list(){
        $sql="SELECT sanpham.*, danhmuc.tendanhmuc
         FROM sanpham
         join danhmuc on sanpham.madanhmuc = danhmuc.id";
        return pdo_query($sql);
    }
    function product_new(){
        $sql="SELECT sanpham.*, danhmuc.tendanhmuc
         FROM sanpham
         join danhmuc on sanpham.madanhmuc = danhmuc.id
         WHERE sanphammoi = 'new'
         ORDER BY sanphammoi DESC";
        return pdo_query($sql);
    }
    function product_hot(){
        $sql="SELECT sanpham.*, danhmuc.tendanhmuc
         FROM sanpham
         join danhmuc on sanpham.madanhmuc = danhmuc.id
         ORDER BY luotxem DESC LIMIT 4; ";
        return pdo_query($sql);
    }
    function product_add($tensanpham,$gia,$anhsanpham,$chitiet,$tinhtrang,$madanhmuc){
        $sql="INSERT INTO sanpham(tensanpham,gia,anhsanpham,chitiet,tinhtrang,madanhmuc) VALUES(?,?,?,?,?,?) ";
        return pdo_execute($sql,$tensanpham,$gia,$anhsanpham,$chitiet,$tinhtrang,$madanhmuc);
    }
    function product_delete($id){
        $sql="DELETE FROM sanpham WHERE id=?";
        return pdo_execute($sql,$id);
    }
    function get_one_product($id){
        $sql="SELECT * FROM sanpham WHERE id=?";
        return pdo_query_one($sql,$id);
    }
    function product_edit($tensanpham, $gia, $anhsanpham, $chitiet, $tinhtrang, $soluong, $sanphammoi, $sanphamnoibat, $id){
        $sql = "UPDATE sanpham SET tensanpham=?, gia=?, anhsanpham=?, chitiet=?, tinhtrang=?, soluong=?, sanphammoi=?, sanphamnoibat=? WHERE id=?";
        return pdo_execute($sql, $tensanpham, $gia, $anhsanpham, $chitiet, $tinhtrang, $soluong, $sanphammoi, $sanphamnoibat, $id);
    }
    function count_pro(){
        $sql = "SELECT COUNT(*) FROM sanpham";
        return pdo_query_value($sql);
    }
    function pro_page($page){
        $start=($page-1)*3;
        $sql = "SELECT sp.*, dm.tendanhmuc FROM sanpham sp INNER JOIN danhmuc dm on sp.madanhmuc=dm.id LIMIT $start, 3";
        return pdo_query($sql);
    }
    function count_home(){
        $sql = "SELECT COUNT(*) FROM sanpham";
        return pdo_query_value($sql);
    }
    function home_page($page){
        $start=($page-1)*9;
        $sql = "SELECT sp.* FROM sanpham sp LIMIT $start, 9";
        return pdo_query($sql);
    }
    function pro_search($keyword){
        $sql="SELECT * FROM sanpham WHERE tensanpham LIKE '%$keyword%' ";
        return pdo_query($sql);
    }
    function product_by_category_filter_order($id){
        $sql ="SELECT sanpham.*, danhmuc.tendanhmuc
        FROM sanpham
        JOIN danhmuc ON sanpham.madanhmuc = danhmuc.id
        WHERE sanpham.madanhmuc = ?";
        return pdo_query($sql,$id);
    }
    function select_by_id($id){
        $sql="SELECT * FROM sanpham WHERE id = ?";
        return pdo_query_one($sql,$id);
    }
?>