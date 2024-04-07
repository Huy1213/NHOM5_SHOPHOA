<div id="layoutSidenav_content">
<main>
<a class="btn btn-primary" href="index.php?act=insert_loaihoa" style="margin:20px;">Thêm Mới</a>

<table class="table table-light table-striped">
           <th>Mã loại</th>
           <th>Tên loại</th>
           <th></th>
        </tr>
        <?php
        if(isset($loai)&&(count($loai)>0))
        {
            foreach($loai as $KQ)
            {

        ?>
        <tr>
            <td><?php echo $KQ['Ma_Loai'] ?></td>
            <td><?php echo $KQ['Ten_Loai'] ?></td>
            <td><a href="index.php?act=edit_loaihoa&id=<?php echo $KQ['Ma_Loai'] ?>">Sửa</a> | <a href="index.php?act=del_loaihoa&id=<?php echo $KQ['Ma_Loai'] ?>">Xóa</a></td>
           
        </tr>
        <?php 
            }
            $con = null;

        } 
           
        ?>
    </table>
</main>
</div>

