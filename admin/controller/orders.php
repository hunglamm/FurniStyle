<?php
session_start();
// session_destroy();
include_once '../model_DAO/product.php';
include_once '../model_DAO/category.php';
include_once '../model_DAO/user.php';
include_once '../model_DAO/pdo.php';
include_once '../model_Dao/orders.php';
extract($_REQUEST);
include_once 'admin/views/template_header.php';
if (isset($act)) {
  switch ($act) {
    case 'list':
      $list_orders = get_list_orders();
      include_once 'admin/views/page_orders_list.php';
      break;

    case 'detail':
      $id = isset($_GET['id']) ? intval($_GET['id']) : "";
      // $order_details = get_order_details($id);
      $order_details= get_order_details($id);
      include_once 'admin/views/page_orders_detail.php';
      break;

      case 'delete':
        order_delete($id);
        header('location: ?mod=orders&act=list');
        
        break;
    // case 'oder_detail':
    //  $chitiet= get_order_details($_REQUEST["id"]);
    //   var_dump($chitiet); die();
    //  include_once 'admin/views/page_orders_detail.php';
    //  break;
  }
}
include_once 'admin/views/template_footer.php';
?>