<?php 
session_start();
// session_destroy();

include_once '../model_DAO/home.php';
include_once '../model_DAO/product.php';
include_once '../model_DAO/category.php';
extract($_REQUEST);
include_once 'admin/views/template_header.php';
if(isset($act)){
    switch($act){
       
        case 'list':
                $count_user=total_user();
                $count_cate=total_categories();
                $count_cmt=total_comments();
                $count_order= total_orders();
                $top_selling=top_selling_products();
                $ratio_product=product_ratio_by_category();
                if (!isset($page)) $page=1;
                $cate_page=cate_page($page);
            include_once 'admin/views/page_home_list.php';
            break;
       
    }
}

include_once 'admin/views/template_footer.php';
?>