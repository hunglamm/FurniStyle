<?php
     extract($_REQUEST);
    if(isset($mod)){
        switch($mod){
            case 'home':
                include_once "controller/home.php";
                break;
            case 'category':
                include_once "controller/category.php";
                break;
            case 'user':
                include_once "controller/user.php";
                break;
            case 'product':
                include_once "controller/product.php";
                break;
            case 'order':
                include_once "controller/orders.php";
                break;
            case "feedback":
                include_once "controller/feedback.php";
                break;
            case 'post':
                include_once "controller/post.php";
                break;
        }
    }
    else {
        header("location: ?mod=home&act=list");
        
    }
?>