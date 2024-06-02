<?php 
session_start();
// session_destroy();
include_once '../model_DAO/pdo.php';
include_once '../model_DAO/product.php';
include_once '../model_DAO/category.php';
include_once '../model_DAO/comment.php';
extract($_REQUEST);
include_once 'admin/views/template_header.php';
if(isset($act)){
    switch($act){
       
        case 'list':
            $ds_cm=comment_all();
                // $count_comment=count_comment();
                // $number_page=ceil($count_comment/4);
                // if (!isset($page)) $page=1;
                // $comment_page=comment_page($page);
            include_once 'admin/views/page_feedback_list.php';
            break;
        //     case 'add':
        //         if(isset($addCategory_submit)){
        //             comment_add($_POST['idkh'],$_POST['noidungbinhluan'],$_POST['id']);
        //             header('location: ?mod=feedback&act=list');
        //         }
        //         include_once 'admin/views/page_feedback_add.php';
        //         break;
    
            case 'delete':
                
                feedback_delete($id);
                header('location: ?mod=feedback&act=list');
                break;
    
        //     case 'edit':
        //  $dm=get_one_feedback($id);
        //             if(isset($editCategory_submit)){
        //                 feedback_edit($tendanhmuc,$_FILES['tendanhmuc']['name'],$tinhtrangdm,$id);
        //                 header('location: ?mod=feedback&act=list');
        //             }
        //         include_once 'admin/views/page_feedback_edit.php';
        //         break;
           
        }
    }
    
    include_once 'admin/views/template_footer.php';
    
    
    
    
    
    
    ?>