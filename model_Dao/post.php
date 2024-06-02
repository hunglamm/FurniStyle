<?php
    include_once 'pdo.php';
    function baiviet_list(){
        $sql="SELECT * FROM baiviet";
        return pdo_query($sql);
        
    }
    function get_one_baiviet($id){
        $sql="SELECT * FROM baiviet WHERE id=?";
        return pdo_query_one($sql,$id);
    }
    function post_add($tenbaiviet,$hinhanhbv,$noidungbaiviet,$tacgia,$ngaydang){
        $sql="INSERT INTO baiviet($tenbaiviet,$hinhanhbv,$noidungbaiviet,$tacgia,$ngaydang) VALUES(?,?,?,?,?) ";
        return pdo_execute($sql,$tenbaiviet,$hinhanhbv,$noidungbaiviet,$tacgia,$ngaydang);
    }
    function post_delete($id){
        $sql="DELETE FROM baiviet WHERE id=?";
        return pdo_execute($sql,$id);
    }
    function get_one_post($id){
        $sql="SELECT * FROM baiviet WHERE id=?";
        return pdo_query_one($sql,$id);
    }
    function post_edit($tenbaiviet,$hinhanhbv,$noidungbaiviet,$tacgia,$ngaydang,$id){
        $sql = "UPDATE baiviet SET tenbaiviet=?, hinhanhbv=?, noidungbaiviet=?, tacgia=?, ngaydang=? WHERE id=?";
        return pdo_execute($sql, $tenbaiviet,$hinhanhbv,$noidungbaiviet,$tacgia,$ngaydang,$id);
    }
    function count_post(){
        $sql = "SELECT COUNT(*) FROM baiviet";
        return pdo_query_value($sql);
    }
    function post_page($page){
        $start=($page-1)*2;
        $sql = "SELECT bv.* FROM baiviet bv LIMIT $start, 2";
        return pdo_query($sql);
    }
    function post_search($keyword){
        $sql="SELECT * FROM baiviet WHERE tenbaiviet LIKE '%$keyword%' ";
        return pdo_query($sql);
    }
?>