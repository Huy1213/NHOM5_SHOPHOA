<div id="layoutSidenav_content">
<main>
<a class="btn btn-primary" href="index.php?act=insert" style="margin:15px;">Thêm Mới</a>
<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="post" action="index.php?act=hoa">
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search" name="timkiem"></i></button>
                </div>
</form>
<table class="table table-light table-striped">
           <th>Mã hoa</th>
           <th>Tên hoa</th>
           <th>Số lượng</th>
           <th>Hình ảnh</th>
           <th>Đơn giá</th>
           <th>Mã loại</th>
           <th></th>
        </tr>
        <?php
        if(isset($kq)&&(count($kq)>0))
        {
            foreach($kq as $KQ)
            {

        ?>
        <tr>
            <td><?php echo $KQ['Ma_Hoa'] ?></td>
            <td><?php echo $KQ['Ten_Hoa'] ?></td>
            <td><?php echo $KQ['So_Luong'] ?></td>
            <td> <img src="images/product/<?php echo $KQ['Hinh_anh'] ?>" alt="" width="80px"></td>
            <td><?php echo $KQ['Don_Gia'] ?></td>
            <td><?php echo $KQ['Ma_Loai'] ?></td>
            <td><a href="index.php?act=edit&id=<?php echo $KQ['Ma_Hoa'] ?>" class="btn btn-primary">Sửa</a>  <a href="index.php?act=del&id=<?php echo $KQ['Ma_Hoa'] ?>" class="btn btn-danger">Xóa</a></td>
            
</td>
        </tr>
        <?php 
            }
            $con = null;

        } 
           
        ?>
    </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                <a class="page-link">Previous</a>
                </li>
                <?php for($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item"><a class="page-link" href="index.php?act=hoa&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    
</main>
</div>
