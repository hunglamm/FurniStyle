<?php 
session_start();
// session_destroy();
ob_start();

if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang']=array();
}
include_once 'model_DAO/product.php';
include_once 'model_DAO/category.php';
include_once 'model_DAO/post.php';
include_once 'model_DAO/user.php';
include_once 'model_DAO/comment.php';
include_once 'model_DAO/cart.php';
include_once 'model_DAO/bosuutap.php';
extract($_REQUEST);
include_once 'site/views/header.php';
if(isset($act)){
    switch($act){
       
        case 'home':
            $ds_sp=product_list();
            $ds_dm=category_list();
            $ds_new=product_new();
            $ds_hot=product_hot();
            $count_home=count_pro();
            $ds_bst=bosuutap_list();
            $ds_bv=baiviet_list();
            $number_page=ceil($count_home/5);
            if (!isset($page)) $page=1;
            $home_page=home_page($page);
            include_once 'site/views/home.php';
            break;

        case 'shop':
         
            $ds_dm=category_list();
            $ds_sp=product_list();
            $count_shop=count_pro();
           
            $number_page=ceil($count_shop/9);
            if (!isset($page)) $page=1;
            $shop_page=home_page($page);
            include_once 'site/views/shop.php';
            break;


        case 'category':
            $ds_dm=category_list();
            $ds_sp=product_list();
            $sp_dm=product_by_category_filter_order($id);
            $dm_ten=cate_name($id);
            // var_dump($dm_ten);
            include_once 'site/views/category.php';
            break;

        case 'bosuutap':
            $ds_dm=category_list();
           $tenbst=bst_name($id);
            $ds_bst=bosuutap_list();
            $ds_sp=product_list();
            $sp_bst=bstsp($id);
            $dm_ten=cate_name($id);
            // var_dump($dm_ten);
            include_once 'site/views/bosuutap.php';
            break;

        case 'shop_detail':
            $ds_sp=product_list();
            $ds_dm=category_list();
            $comment_list=comment_list($id);
            $onesp = [];
            if(isset($_GET['id'])&&($_GET['id']>0))
                $onesp=get_one_product($id);
            
                include_once 'site/views/shop_detail.php';
            
                break;

        case 'blog':
            $ds_bv=baiviet_list();
            include_once 'site/views/blog.php';
                break;

        case 'blog_detail':
            $ds_bv=baiviet_list();
            $onebv = [];
            if(isset($_GET['id'])&&($_GET['id']>0))
                $onebv= get_one_baiviet($id);
            
                include_once 'site/views/blog_detail.php';
            
                break;

        case 'about_us':
            include_once 'site/views/about_us.php';
            break;
     
            case 'sign_up':
                if(isset($addUser_submit)){
                    user_add($tentaikhoan, $email, $matkhau, $sdt, $diachi, $_FILES['anhtaikhoan']['name'], $quyen);
                    move_uploaded_file($_FILES['anhtaikhoan']['tmp_name'],'../furni-1.0.0/images/'.$_FILES['anhtaikhoan']['name']);
                    header('location: ?mod=page&act=login');
                }
            
                include_once 'site/views/sign_up.php';
                
                break;
         
        case 'checkout':
            include_once 'site/views/checkout.php';
                break;

        case 'search':
            // print_r('cccc',$_POST['keyword']);
                $data_search=pro_search($keyword);
            
            include_once 'site/views/search.php'; 
        
            break;
        
                
        case 'login':
            if (isset($_POST['submit-login'])) {
                $kq=login($_POST['tentaikhoan'], $_POST['matkhau']);
                // var_dump($kq);
                if ($kq) {
                    // Đăng nhập thành công
             //thêm vào biến $kq[0] nó sẽ truy vấn vào thẳng 1 tài khoản nếu ko có thì sẽ ko hiểu chỉ truy vấn ở ngoài 
                    $_SESSION['user']=$kq[0];
                    if ($kq[0]['quyen'] == 'admin') {
                        // echo"admin";
                        header("location: admin/index.php");
                    }else{
                        // echo"usser";
                        header("location: index.php");
                    }
                }
                else {
                    $thongbao ='Email or mật khẩu ko đúng';
                }

            }
            include_once 'site/views/login.php';
            break;

        case 'contact_us':
            include_once 'site/views/contact_us.php';
                break;

        case 'thank':
            include_once 'site/views/thankyou.php';
                break;

        case 'haldn_cart':
            $userId = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : null;
            $cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

            if (!empty($cartItems)) {
                try {
                    $orderId = create_order($userId, $cartItems);
                    $_SESSION['cart'] = array();
                    include_once 'site/views/cart.php';
                    
                } catch (PDOException $e) {
                    echo("Database error: " . $e->getMessage());
            
                } 
            } else {
                include_once 'site/views/cart.php';
                
            }
            break;

        case 'cart':
            if(isset($_POST['add_to_cart'])){
                $id = $_POST['id'];
                $tensanpham = $_POST['tensanpham'];
                $soluong = $_POST['quantity'];
                $gia = $_POST['gia'];
                $anhsanpham = $_POST['anhsanpham'];
                $_SESSION['cart'][$id]=array(
                    'id'=>$id,
                    'tensanpham'=>$tensanpham,
                    'anhsanpham'=>$anhsanpham,
                    'gia'=>$gia,
                    'soluong'=>$soluong        
                );
                } else {
                    $product = select_by_id($_GET["id"]);
                    $product["soluong"] = 1;
                    $_SESSION['cart'][$id] = $product;
                }
            
            include_once 'site/views/cart.php';
            break;
        
            case 'clear_cart':
                // Xóa toàn bộ giỏ hàng (session)
                $_SESSION['cart'] = array(); // hoặc unset($_SESSION['cart']);
                include_once 'site/views/cart.php';
                break;
        
                case 'delete':
                    unset($_SESSION['cart'][$id]);
                    include_once 'site/views/cart.php';
                    break;
                case 'increase':
                    $_SESSION['cart'][$id]['soluong'] += 1;
                    include_once 'site/views/cart.php';
                    break;
                case 'decrease':
                    if ($_SESSION['cart'][$id]['soluong'] > 1) {
                        $_SESSION['cart'][$id]['soluong'] -= 1;
                    } else {
                        unset($_SESSION['cart'][$id]);
                    }
                    include_once 'site/views/cart.php';
                    break;
                
       
    }
}

include_once 'site/views/footer.php';






?>