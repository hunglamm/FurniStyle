<?php 
session_start();
// session_destroy();
include_once '../model_DAO/pdo.php';
include_once '../model_DAO/product.php';
include_once '../model_DAO/category.php';
extract($_REQUEST);
include_once 'admin/views/template_header.php';
if(isset($act)){
    switch($act){
        case 'list':
            $ds_sp=product_list();
            $count_pro=count_pro();
            $number_page=ceil($count_pro/3);
            if (!isset($page)) $page=1;
            $pro_page=pro_page($page);
            include_once 'admin/views/page_product_list.php';
            break;

        case 'add':
            if(isset($addProduct_submit)){
                product_add($_POST['tensanpham'], $_POST['gia'], $_FILES['anhsanpham']['name'], $_POST['chitiet'], $_POST['tinhtrang'], $_POST['madanhmuc']);
                move_uploaded_file($_FILES['anhsanpham']['tmp_name'],'../furni-1.0.0/images/'.$_FILES['anhsanpham']['name']);
                header('location: ?mod=product&act=list');
            }
            include_once 'admin/views/page_product_add.php';
            break;
        case 'delete':
            product_delete($id);
            header('location: ?mod=product&act=list');
            break;    

        case 'edit':
            $sp=get_one_product($id);
            if(isset($editProduct_submit)){
                if($_FILES['anhsanpham']['name']==null){
                    product_edit($tensanpham, $gia, $sp['anhsanpham'], $chitiet, $tinhtrang, $soluong, $sanphammoi, $sanphamnoibat, $id);
                    header('location: ?mod=product&act=list');
                }else{
                    product_edit($tensanpham, $gia, $_FILES['anhsanpham']['name'], $chitiet, $tinhtrang, $soluong, $sanphammoi, $sanphamnoibat, $id);
                    move_uploaded_file($_FILES['anhsanpham']['tmp_name'],'../furni-1.0.0/images/'.$_FILES['anhsanpham']['name']);
                    header('location: ?mod=product&act=list');
                }
            }
            include_once 'admin/views/page_product_edit.php';
            break;
    }
}
include_once 'admin/views/template_footer.php';
?>