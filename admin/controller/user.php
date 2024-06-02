<?php 
session_start();
// session_destroy();
include_once '../model_DAO/pdo.php';
include_once '../model_DAO/orders.php';
include_once '../model_DAO/product.php';
include_once '../model_DAO/category.php';
include_once '../model_DAO/user.php';
extract($_REQUEST);
include_once 'admin/views/template_header.php';
if(isset($act)){
    switch($act){
        case 'list':
                $ds_tk=user_list();
                $count_user=count_user();
                $number_page=ceil($count_user/3);
                if (!isset($page)) $page=1;
                $user_page=user_page($page);
            include_once 'admin/views/page_user_list.php';
            break;

        case 'add':
            if(isset($addUser_submit)){
                user_add($tentaikhoan, $email, $matkhau, $sdt, $diachi, $_FILES['anhtaikhoan']['name'], $quyen);
                move_uploaded_file($_FILES['anhtaikhoan']['tmp_name'],'../furni-1.0.0/images/'.$_FILES['anhtaikhoan']['name']);
                header('location: ?mod=user&act=list');
            }
            include_once 'admin/views/page_user_add.php';
            break;

        case 'delete':
            user_delete($id);
            header('location: ?mod=user&act=list');
            break;

        case 'edit':
            $user=get_one_user($id);
                if(isset($editUser_submit)){
                    if($_FILES['anhtaikhoan']['name']==null){    
                    user_edit($tentaikhoan, $email, $matkhau, $sdt, $diachi, $user['anhtaikhoan'], $quyen, $id);
                    header('location: ?mod=user&act=list');
                    }else{
                        user_edit($tentaikhoan, $email, $matkhau, $sdt, $diachi, $_FILES['anhtaikhoan']['na'], $quyen, $id);
                        move_uploaded_file($_FILES['anhtaikhoan']['tmp_name'],'../furni-1.0.0/images/'.$_FILES['anhtaikhoan']['name']);
                        header('location: ?mod=user&act=list');
                    }
                }
            include_once 'admin/views/page_user_edit.php';
            break;
    }
}
include_once 'admin/views/template_footer.php';
?>