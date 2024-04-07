<div id="layoutSidenav_content">
<main>
    <form action="index.php?act=edit" method="post" enctype="multipart/form-data">
    <div class="container">
        <h2>SẢN PHẨM</h2>
        <div class="mb-3">
            <label for="MaHoa" class="form-label">Mã Hoa</label>
            <input type="text" class="form-control" name="Ma_Hoa" placeholder="" value="<?=$kq1[0]['Ma_Hoa']?>" readonly>
        </div>
        <div class="mb-3">
            <label for="TenHoa" class="form-label">Tên Hoa</label>
            <input type="text" class="form-control" name="Ten_Hoa" placeholder="" value="<?=$kq1[0]['Ten_Hoa']?>">
        </div>
        <div class="mb-3">
            <label for="SoLuong" class="form-label">Số Lượng</label>
            <input type="number" class="form-control" name="So_Luong" placeholder="" value="<?=$kq1[0]['So_Luong']?>">
        </div>
        <div class="mb-3">
            <label for="HinhAnh" class="form-label">Hình Ảnh</label><br>
            <!-- <input type="text" class="form-control" name="Hinh_anh" placeholder="" value=""> -->
            <img src="images/product/<?=$kq1[0]['Hinh_anh']?>" alt="" width="80px"><br>
            <input type="file" name="hinh" id="">
        </div>
        <div class="mb-3">
            <label for="DonGia" class="form-label">Đơn Giá</label>
            <input type="number" class="form-control" name="Don_Gia" placeholder="" value="<?=$kq1[0]['Don_Gia']?>">
        </div>
        <div class="mb-3">
            <label for="MaLoai" class="form-label">Mã Loại</label>
            <!-- <input type="text" class="form-control" name="Ma_Loai" placeholder="" value=""> -->
            <select name="Ma_Loai" id="" class="form-control">
                <option value="0">Chọn mã loại</option>
                <?php
                    $maloai=$kq1[0]['Ma_Loai'];
                    if(isset($loai))
                    {
                        foreach($loai as $KQ)
                        {
                            if($KQ['Ma_Loai']==$maloai)
                                echo '<option value="'.$KQ['Ma_Loai'].'" selected>'.$KQ['Ma_Loai'].'</option>';
                            else
                                echo'<option value="'.$KQ['Ma_Loai'].'">'.$KQ['Ma_Loai'].'</option>';
                        }
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <input type="submit" value="Save" class="btn btn-secondary" name="edit"/>
        </div>
    </div>
    </div>

    </form>
    
    
</main>
</div>
