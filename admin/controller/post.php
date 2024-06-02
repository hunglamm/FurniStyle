<?php 
session_start();
// session_destroy();
include_once '../model_DAO/pdo.php';
include_once '../model_DAO/product.php';
include_once '../model_DAO/category.php';
include_once '../model_DAO/post.php';
extract($_REQUEST);
include_once 'admin/views/template_header.php';
if(isset($act)){
    switch($act){
        case 'list':
            $ds_bv=baiviet_list();
            $count_post=count_post();
            $number_page=ceil($count_post/2);
            if (!isset($page)) $page=1;
            $post_page=post_page($page);
            include_once 'admin/views/page_post_list.php';
            break;

        case 'add':
            if(isset($addPost_submit)){
                post_add($tenbaiviet, $_FILES['hinhanhbv']['name'], $noidungbaiviet, $tacgia, $ngaydang);
                move_uploaded_file($_FILES['hinhanhbv']['tmp_name'],'../furni-1.0.0/images/'.$_FILES['hinhanhbv']['name']);
                header('location: ?mod=post&act=list');
            }
            include_once 'admin/views/page_post_add.php';
            break;
        case 'delete':
            post_delete($id);
            header('location: ?mod=postt&act=list');
            break;    

        case 'edit':
            $bv=get_one_post($id);
            if(isset($editPost_submit)){
                if($_FILES['hinhanhbv']['name']==null){
                    post_edit($tenbaiviet, $bv['hinhanhbv'], $noidungbaiviet, $tacgia, $ngaydang, $id);
                    header('location: ?mod=post&act=list');
                }else{
                    post_edit($tenbaiviet, $_FILES['hinhanhbv']['name'], $noidungbaiviet, $tacgia, $ngaydang, $id);
                    move_uploaded_file($_FILES['hinhanhbv']['tmp_name'],'../furni-1.0.0/images/'.$_FILES['hinhanhbv']['name']);
                    header('location: ?mod=post&act=list');
                }
            }
            include_once 'admin/views/page_post_edit.php';
            break;
    }
}
include_once 'admin/views/template_footer.php';
?>