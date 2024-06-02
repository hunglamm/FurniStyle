<?php
    include_once 'pdo.php';
    function bosuutap_list(){
        $sql="SELECT * FROM bosuutap limit 3";
        return pdo_query($sql);
    }

    function bstsp($id){
        $sql ="SELECT sanpham.*, bosuutap.tenbosuutap
        FROM sanpham
        JOIN bosuutap ON sanpham.mabosuutap = bosuutap.id
        WHERE sanpham.mabosuutap = ?";
        return pdo_query($sql,$id);
    }
    function bst_name($id){
        $sql ="SELECT bosuutap.tenbosuutap
        FROM sanpham
        JOIN bosuutap ON sanpham.mabosuutap = bosuutap.id
        WHERE sanpham.mabosuutap = ? limit 1";
        return pdo_query($sql,$id);
    }
    ?>