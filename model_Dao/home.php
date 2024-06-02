<?php
// statistics.php

include_once 'pdo.php';

function total_user() {
    $sql = "SELECT COUNT(*) FROM taikhoan";
    return pdo_query_value($sql);
}
function total_categories() {
    $sql = "SELECT COUNT(*) FROM danhmuc";
    return pdo_query_value($sql);
}

function total_comments() {
    $sql = "SELECT COUNT(*) FROM binhluan";
    return pdo_query_value($sql);
}
function total_orders() {
    $sql = "SELECT COUNT(*) FROM donhang";
    return pdo_query_value($sql);
}
function top_selling_products() {
    $sql = "SELECT sanpham.*, COUNT(chitietdonhang.masanpham) AS totalSold
            FROM sanpham
            JOIN chitietdonhang ON sanpham.id = chitietdonhang.masanpham
            GROUP BY sanpham.id
            ORDER BY totalSold DESC
            LIMIT 5";

    return pdo_query($sql);
}
function product_ratio_by_category() {
    $sql = "SELECT danhmuc.tendanhmuc, COUNT(sanpham.id) AS productCount
            FROM danhmuc
            LEFT JOIN sanpham ON danhmuc.id = sanpham.madanhmuc
            GROUP BY danhmuc.id";

    return pdo_query($sql);
}
?>