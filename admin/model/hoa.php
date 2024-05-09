<?php
function del($id){
    $conn = ketnoi();
    $sql ="DELETE FROM san_pham where Ma_Hoa=".$id;
    $conn->exec($sql);
}
function edithoa($id,$tenhoa,$soluong,$hinhanh,$dongia,$maloai)
{
    $conn = ketnoi();
    if($hinhanh=="")
    {
        $sql = "UPDATE san_pham set Ten_Hoa='".$tenhoa."',So_Luong='".$soluong."',Don_Gia='".$dongia."',Ma_Loai='".$maloai."' where Ma_Hoa=".$id;
    }
    else{
        $sql = "UPDATE san_pham set Ten_Hoa='".$tenhoa."',So_Luong='".$soluong."',Hinh_anh='".$hinhanh."',Don_Gia='".$dongia."',Ma_Loai='".$maloai."' where Ma_Hoa=".$id;
    }
   
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function inserthoa($tenhoa,$soluong,$hinhanh,$dongia,$maloai)
{
    $conn = ketnoi();
    $sql = "INSERT INTO san_pham (Ten_Hoa, So_Luong, Hinh_anh, Don_Gia, Ma_Loai) values('$tenhoa','$soluong','$hinhanh','$dongia','$maloai')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getone($id){
    $conn = ketnoi();
    $stmt = $conn->prepare("SELECT * FROM san_pham where Ma_Hoa=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function getall($page,$soluongsp){
    $batdau = ($page-1)*$soluongsp;
    $conn = ketnoi();
    $stmt = $conn->prepare("SELECT * FROM san_pham LIMIT ".$batdau.",".$soluongsp);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function countRowsInTable() {
    $conn = ketnoi();
    $stmt = $conn->prepare("SELECT COUNT(*) AS total_rows FROM san_pham");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total_rows'];
}

function getall_loaiHoa(){
    $conn = ketnoi();
    $stmt = $conn->prepare("SELECT * FROM loai");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $loai = $stmt->fetchAll();
    return $loai;
}
function getone_loaihoa($id){
    $conn = ketnoi();
    $stmt = $conn->prepare("SELECT * FROM loai where Ma_Loai=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $loai = $stmt->fetchAll();
    return $loai;
}
function edit_loaihoa($id,$tenloai)
{
    $conn = ketnoi();
    $sql = "UPDATE loai set Ten_Loai='".$tenloai."' where Ma_Loai=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function insert_loaihoa($tenloai)
{
    $conn = ketnoi();
    $sql = "INSERT INTO loai (Ten_Loai) values('$tenloai')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function del_loaihoa($id){
    $conn = ketnoi();
    //$sql ="DELETE FROM loai where Ma_Loai=".$id;
    //$conn->exec($sql);
    $stmt = $conn->prepare("SELECT COUNT(*) AS total_hoa FROM san_pham WHERE Ma_Loai = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if($result['total_hoa'] > 0) {
        // Nếu có hoa sử dụng mã loại này, thông báo không thể xóa
        echo "<script>alert('Không thể xóa loại hoa này vì có hoa sử dụng mã loại này.'); window.location.href = 'index.php?act=loaihoa';</script>";
    } else {
        // Nếu không có hoa sử dụng mã loại này, thực hiện xóa
        $sql ="DELETE FROM loai where Ma_Loai=".$id;
        $conn->exec($sql);
    }
}

function getall_hoa($key, $page, $soluongsp) {
    $batdau = ($page - 1) * $soluongsp;
    $conn = ketnoi();
    $sql = "SELECT * FROM san_pham WHERE 1 ";
    if ($key != "") {
        $sql .= "AND Ten_Hoa LIKE '%" . $key . "%' ";
    }
    $sql .= "ORDER BY Ma_Hoa ASC LIMIT " . $batdau . "," . $soluongsp;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $loai = $stmt->fetchAll();
    return $loai;
}

 ?>
