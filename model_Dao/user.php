<?php
 include_once 'pdo.php';
// Tuong tác với bảng user/taikhoan trong CSDL
// Hàm SQL tt với CSDL
// SELECT * FROM taikhoan WHERE email='alo@gmail.com' AND matkhau='12345'

function login($tentaikhoan, $matkhau) {
   
    $sql = "SELECT * FROM taikhoan WHERE tentaikhoan='".$tentaikhoan."' AND matkhau='".$matkhau."'";
    return pdo_query($sql);
    
}


// function get_products() {
    
//     global $conn;
//     $sql = "SELECT sp.*, dm.tendm FROM sanpham sp";
//     $stmt = $conn -> prepare($sql);
//     $stmt -> execute();
//     $stmt -> setFetchMode(PDO::FETCH_ASSOC);
//     return $stmt->fetchALL();
// }

function signup($tentaikhoan, $anhtaikhoan ,$email, $matkhau) {
    global $conn;
    $sql = "INSERT INTO taikhoan (`tentaikhoan`, `anhtaikhoan`, `email`, `matkhau`) 
            VALUES (:tentaikhoan :anhtaikhoan, :email, :matkhau)";
    return pdo_query($sql);
}

function checkmail($tentaikhoan) {
    global $conn;
    $sql = "SELECT * FROM taikhoan WHERE tentaikhoan= :tentaikhoan";
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(":tentaikhoan", $tentaikhoan);
    $stmt -> execute();
    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    return pdo_query($sql);
}
function user_add($tentaikhoan, $email, $matkhau, $sdt, $diachi, $anhtaikhoan, $quyen) {
    $sql = "INSERT INTO taikhoan (tentaikhoan, email, matkhau, sdt, diachi, anhtaikhoan, quyen) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $tentaikhoan, $email, $matkhau, $sdt, $diachi, $anhtaikhoan, $quyen);
}

function user_edit($tentaikhoan,  $email, $matkhau, $sdt, $diachi,$anhtaikhoan, $quyen, $id) {
    $sql = "UPDATE taikhoan 
            SET tentaikhoan = ?, email = ?, matkhau = ?, sdt = ?, diachi = ?, anhtaikhoan = ?, quyen = ?
            WHERE id = ?";
    pdo_execute($sql, $tentaikhoan, $email, $matkhau, $sdt, $diachi, $anhtaikhoan, $quyen, $id);
}


// Function to delete a user
function user_delete($id) {
    $sql = "DELETE FROM taikhoan WHERE id = ?";
    pdo_execute($sql, $id);
}
function get_one_user($id){
    $sql="SELECT * FROM taikhoan WHERE id = ?";
    return pdo_query_one($sql,$id);

}
// Function to get all users
function user_list(){
    $sql="SELECT * FROM taikhoan";
    return pdo_query($sql);
    
}
function count_user(){
    $sql = "SELECT COUNT(*) FROM taikhoan";
    return pdo_query_value($sql);
}
function user_page($page){
    $start=($page-1)*3;
    $sql = "SELECT * FROM taikhoan LIMIT $start, 3";
    return pdo_query($sql);
}
?>