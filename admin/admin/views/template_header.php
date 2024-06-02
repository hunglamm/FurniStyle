<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- icon boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-2 bg-dark text-white p-4 ">
            <h3 class="text-center"><span class="text-danger">Furni</span><span>Style.</span></h3>
            <hr>
            <p><i class="bi bi-pie-chart-fill me-2"></i><a class="text-decoration-none text-white" href="?mod=home&act=list"> Quản lý thống kê</a></p>
            <p><i class="bi bi-tag-fill me-2"></i><a class="text-decoration-none text-white" href="?mod=category&act=list"> Quản lý danh mục</a></p>
            <p><i class="bi bi-box-seam me-2"></i><a class="text-decoration-none text-white" href="?mod=product&act=list"> Quản lý sản phẩm</a></p>
            <p><i class="bi bi-people-fill me-2"></i><a class="text-decoration-none text-white" href="?mod=user&act=list"> Quản lý người dùng</a></p>
            <p><i class="bi bi-cart-fill me-2"></i><a class="text-decoration-none text-white" href="?mod=order&act=list"> Quản lý đơn hàng</a></p>
            <p><i class="bi bi-chat-left-text-fill me-2"></i><a class="text-decoration-none text-white" href="?mod=feedback&act=list"> Quản lý bình luận</a></p>
            <p><i class="bi bi-chat-left-text-fill me-2"></i><a class="text-decoration-none text-white" href="?mod=post&act=list"> Quản lý bài viết</a></p>
            <hr>
            <div class="text-center">           
                 <a href="?mod=user&&act=logout" class="btn btn-danger">Đăng xuất</a>
            </div>
        </div>
        <div class="col-md-10 p-0">
            <div class="shadow bg-danger text-white d-flex justify-content-between align-content-center  p-3 pb-1">
                <p>Trang quản trị web FurniStyle.</p>
                <div><span>Admin</span><img class="rounded m-1 border border-1 border-white" width="30px" height="30px" src="../furni-1.0.0/images/avata_admin.png" alt=""></div>
            </div>
            <div class="row vh-100" style="margin-bottom: 37px;">