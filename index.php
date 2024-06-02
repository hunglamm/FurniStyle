<?php
   
    
    extract($_REQUEST);
    if(isset($mod)){
        switch($mod){
            case 'page':
                include_once "site/controller/page.php";
                break;
            case 'cart':
                include_once "site/controller/cart.php";
                break;
               
        }
    }
    else {
        header("location: ?mod=page&act=home");
        
    }
?>