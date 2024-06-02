<?php 
session_start();
// session_destroy();
include_once '../model_DAO/pdo.php';
include_once '../model_DAO/orders.php';
include_once '../model_DAO/user.php';
include_once '../model_DAO/product.php';
include_once '../model_DAO/category.php';
extract($_REQUEST);
include_once 'admin/views/template_header.php';
if(isset($act)){
    switch($act){
        case 'list':
            $ds_dm=category_list();
                $count_cate=count_cate();
                $number_page=ceil($count_cate/4);
                if (!isset($page)) $page=1;
                $cate_page=cate_page($page);
            include_once 'admin/views/page_category_list.php';
            break;

        case 'add':
            if(isset($addCategory_submit)){
                category_add($tendanhmuc,$_FILES['hinhanh']['name'],$tinhtrangdm);
                move_uploaded_file($_FILES['hinhanh']['tmp_name'],'../furni-1.0.0/images/'.$_FILES['hinhanh']['name']);
                header('location: ?mod=category&act=list');
            }
            include_once 'admin/views/page_category_add.php';
            break;

        case 'delete':
            category_delete($id);
            header('location: ?mod=category&act=list');
            break;

        case 'edit':
            $dm=get_one_category($id);
            if(isset($editCategory_submit)){
                if($_FILES['hinhanh']['name']==null){
                    category_edit($tendanhmuc,$dm['hinhanh'],$tinhtrangdm,$id);
                    header('location: ?mod=category&act=list');
                }else{
                category_edit($tendanhmuc,$_FILES['hinhanh']['name'],$tinhtrangdm,$id);
                move_uploaded_file($_FILES['hinhanh']['tmp_name'],'../furni-1.0.0/images/'.$_FILES['hinhanh']['name']);
                header('location: ?mod=category&act=list');
            }
        }
        include_once 'admin/views/page_category_edit.php';
        break;
    }
}
include_once 'admin/views/template_footer.php';
?>