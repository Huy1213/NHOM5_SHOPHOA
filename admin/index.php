<?php 
session_start();
ob_start();
include "model/ketnoi.php";
include "model/hoa.php";
include "model/admin.php";
include "model/donhang.php";
include "model/khachhang.php";
include "view/header.php";

if(isset($_GET['act']))
{
    switch($_GET['act']){
        case 'hoa':
                if(isset($_POST['keyword']))
                {
                    $keyword=$_POST['keyword'];
                }
                else{
                    $keyword="";
                }
                if(!isset($_GET['page']))
                {
                    $page = 1;
                }
                else
                {
                    $page = $_GET['page'];
                } 
                $soluongsp = 5;
                $kq = getall_hoa($keyword,$page,$soluongsp);
                $total_rows = countRowsInTable();
                $total_pages = ceil($total_rows / $soluongsp);
            
          
            include "view/hoa.php";
            break;
        case 'insert':
            $loai=getall_loaiHoa();
            if(!isset($_POST['insert']))
            {
                include "view/inserthoa.php";
        
            }
            elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Lấy dữ liệu từ form
                //$id=$_POST['id'];
                $tenhoa = $_POST['Ten_Hoa'];
                $soluong = $_POST['So_Luong'];
                $dongia = $_POST['Don_Gia'];
                $maloai = $_POST['Ma_Loai'];
            
                // Xử lý hình ảnh được tải lên
                if ($_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                    $upload_dir = "images/product/"; // Thư mục lưu trữ hình ảnh sản phẩm
                    $tmp_name = $_FILES['hinh']['tmp_name'];
                    $new_image_name = basename($_FILES['hinh']['name']);
                    $new_image_path = $upload_dir . $new_image_name;
                    
                    // Di chuyển hình ảnh mới vào thư mục lưu trữ
                    move_uploaded_file($tmp_name, $new_image_path);
                    
                    // Cập nhật đường dẫn hình ảnh mới vào CSDL
                    $hinhanh = $new_image_name;
                }
                inserthoa($tenhoa,$soluong,$hinhanh,$dongia,$maloai);
               if(!isset($_GET['page']))
               {
                   $page = 1;
               }
               else
               {
                   $page = $_GET['page'];
               } 
               $soluongsp = 5;
               $kq = getall($page, $soluongsp);
               $total_rows = countRowsInTable();
               $total_pages = ceil($total_rows / $soluongsp);
                include "view/hoa.php";
            }
            
            break;
        case 'del':
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                del($id);
            }
            if(!isset($_GET['page']))
            {
                $page = 1;
            }
            else
            {
                $page = $_GET['page'];
            } 
            $soluongsp = 5;
            $kq = getall($page, $soluongsp);
            $total_rows = countRowsInTable();
            $total_pages = ceil($total_rows / $soluongsp);
           
            include "view/hoa.php";
            break;
        case 'edit':
            $loai=getall_loaiHoa();
            if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $kq1=getone($id);
                   include "view/edithoa.php";
                }
            if(isset($_POST['edit']))
                {
                    $id=$_POST['Ma_Hoa'];
                    $tenhoa=$_POST['Ten_Hoa'];
                    $soluong=$_POST['So_Luong'];
                    if ($_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                        $upload_dir = "images/product/"; // Thư mục lưu trữ hình ảnh sản phẩm
                        $tmp_name = $_FILES['hinh']['tmp_name'];
                        $new_image_name = basename($_FILES['hinh']['name']);
                        $new_image_path = $upload_dir . $new_image_name;
                        
                        // Di chuyển hình ảnh mới vào thư mục lưu trữ
                        move_uploaded_file($tmp_name, $new_image_path);
                        
                        // Cập nhật đường dẫn hình ảnh mới vào CSDL
                        $hinhanh = $new_image_name;
                    } 
                    
                    else {
                        // Nếu không có hình ảnh mới được chọn, giữ nguyên hình ảnh cũ
                       // $hinhanh = $_POST['Hinh_anh'];
                       $hinhanh="";
                    }
                    $dongia=$_POST['Don_Gia'];
                    $maloai=$_POST['Ma_Loai'];
                    edithoa($id,$tenhoa,$soluong,$hinhanh,$dongia,$maloai);
                    if(!isset($_GET['page']))
                    {
                        $page = 1;
                    }
                    else
                    {
                        $page = $_GET['page'];
                    } 
                    $soluongsp = 5;
                    $kq = getall($page, $soluongsp);
                    $total_rows = countRowsInTable();
                    $total_pages = ceil($total_rows / $soluongsp);
                    include "view/hoa.php";
                }
        //     $kq = getall();
        //    include "view/hoa.php";
            break;
        case 'loaihoa':
            $loai=getall_loaiHoa();
            include "view/loaihoa.php";
            break;
        case 'edit_loaihoa':
                
                if(isset($_GET['id']))
                    {
                        $id=$_GET['id'];
                        $loaihoa1=getone_loaihoa($id);
                       include "view/edit_loaihoa.php";
                    }
                if(isset($_POST['edit_loaihoa']))
                    {
                        $id=$_POST['Ma_Loai'];
                        $tenloai=$_POST['Ten_Loai'];
                        edit_loaihoa($id,$tenloai);
                        $loai=getall_loaiHoa();
                        include "view/loaihoa.php";
                    }
        
                break;
            case 'insert_loaihoa':
                    
                    if(!isset($_POST['insert_loaihoa']))
                    {
                        include "view/insert_loaihoa.php";
                
                    }
                    elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Lấy dữ liệu từ form
                        //$id=$_POST['id'];
                        $tenloai = $_POST['Ten_Loai'];
                       
                        insert_loaihoa($tenloai);
                        $loai=getall_loaiHoa();
                        include "view/loaihoa.php";
                    }
                    
                    break;
                    case 'del_loaihoa':
                        // // if(isset($_GET['id']))
                        // {
                        //     $id=$_GET['id'];
                        //     del_loaihoa($id);
                        // }
                        
// Kiểm tra xem có hoa nào sử dụng mã loại này không
                        if(isset($_GET['act']) && $_GET['act'] == 'del_loaihoa' && isset($_GET['id'])) {
                            $id = $_GET['id'];
                            // Thực hiện hàm xóa loại hoa
                            del_loaihoa($id);
                        }

                        $loai = getall_loaiHoa();
                       
                        include "view/loaihoa.php";
                        break;

                        case 'admin':
                            $admin=getall_admin();
                            include "view/admin.php";
                            break;
                       case 'insert_admin':
                            if(!isset($_POST['insert_admin']))
                            {
                                include "view/insert_admin.php";
                        
                            }
                            elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Lấy dữ liệu từ form
                                //$id=$_POST['id'];
                                $username = $_POST['UserName'];
                                $password = $_POST['Password'];
                                insert_admin($username,$password);
                                $admin=getall_admin();
                                include "view/admin.php";
                            }
                            
                            break;
                            case 'edit_admin':
                
                                if(isset($_GET['id']))
                                    {
                                        $id=$_GET['id'];
                                        $admin1=getone_admin($id);
                                       include "view/edit_admin.php";
                                    }
                                if(isset($_POST['edit_admin']))
                                    {
                                        $id=$_POST['id'];
                                        $username=$_POST['UserName'];
                                        $password = $_POST['Password'];
                                        edit_admin($id,$username,$password);
                                        $admin=getall_admin();
                                        include "view/admin.php";
                                    }
                        
                                break;
                                case 'del_admin':
                                    if(isset($_GET['id']))
                                    {
                                        $id=$_GET['id'];
                                        del_admin($id);
                                    }
                                    $admin=getall_admin();
                                    include "view/admin.php";
                                    break;
                        case 'thongke':
                            $listtk=getall_thongke();
                            include "view/thongke/list.php";
                            break;
                        case 'thongke_doanhthu':
                                $listtk=getall_thongke_doanhthu();
                                $listtkdt = getall_thongke_doanhthu();
                                include "view/thongke/list_doanhthu.php";
                                break;
                        case 'khachhang':
                                    if(isset($_POST['keyword']))
                                    {
                                        $keyword=$_POST['keyword'];
                                    }
                                    else{
                                        $keyword="";
                                    }
                                    if(!isset($_GET['page']))
                                    {
                                        $page = 1;
                                    }
                                    else
                                    {
                                        $page = $_GET['page'];
                                    } 
                                    $soluongsp = 5;
                                    $kh = getall_KH($keyword,$page,$soluongsp);
                                    $total_rows = countRowsInTable_KH();
                                    $total_pages = ceil($total_rows / $soluongsp);
                                
                              
                                include "view/khachhang.php";
                                break;
                            
        default:
            include "view/home.php";
    }

}
else {
    include"view/home.php";
}

?>

