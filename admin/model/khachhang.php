<?php
function del_KH($id){
    $conn = ketnoi();
    $sql ="DELETE FROM khach_hang where Ma_KH=".$id;
    $conn->exec($sql);
}
function edit_KH($id,$tenKH,$diachi,$dienthoai,$email)
{
    $conn = ketnoi();
    $sql = "UPDATE khach_hang set Ten_KH='".$tenKH."',Dia_Chi='".$diachi."',Dien_Thoai='".$dienthoai."',Email='".$email."' where Ma_KH=".$id;
    
   
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function insert_KH($tenKH,$diachi,$dienthoai,$email)
{
    $conn = ketnoi();
    $sql = "INSERT INTO khach_hang (Ten_KH,  Dia_Chi, Dien_Thoai, Email) values('$tenKH','$diachi','$dienthoai','$email')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getone_KH($id){
    $conn = ketnoi();
    $stmt = $conn->prepare("SELECT * FROM khach_hang where Ma_KH=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function getall_KH($key, $page, $soluongsp) {
    $batdau = ($page - 1) * $soluongsp;
    $conn = ketnoi();
    $sql = "SELECT * FROM khach_hang WHERE 1 ";
    if ($key != "") {
        $sql .= "AND Ten_KH LIKE '%" . $key . "%' ";
    }
    $sql .= "ORDER BY Ma_KH ASC LIMIT " . $batdau . "," . $soluongsp;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kh = $stmt->fetchAll();
    return $kh;
}
function getall_KH1($page,$soluongsp){
    $batdau = ($page-1)*$soluongsp;
    $conn = ketnoi();
    $stmt = $conn->prepare("SELECT * FROM khach_hang LIMIT ".$batdau.",".$soluongsp);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function countRowsInTable_KH() {
    $conn = ketnoi();
    $stmt = $conn->prepare("SELECT COUNT(*) AS total_rows FROM khach_hang");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total_rows'];
}
