<div id="layoutSidenav_content">
<main>
    <form action="index.php?act=edit_KH" method="post" enctype="multipart/form-data">
    <div class="container">
        <h2>SẢN PHẨM</h2>
        <div class="mb-3">
            <label for="Ma_KH" class="form-label">Mã KH</label>
            <input type="number" class="form-control" name="Ma_KH" placeholder="" value="<?=$kq1[0]['Ma_KH']?>" readonly>
        </div>
        <div class="mb-3">
            <label for="Ten_KH" class="form-label">Tên KH</label>
            <input type="text" class="form-control" name="Ten_KH" placeholder="" value="<?=$kq1[0]['Ten_KH']?>">
        </div>
        <div class="mb-3">
            <label for="Dia_Chi" class="form-label">Địa Chỉ</label>
            <input type="text" class="form-control" name="Dia_Chi" placeholder="" value="<?=$kq1[0]['Dia_Chi']?>">
        </div>
        <div class="mb-3">
            <label for="Dien_Thoai" class="form-label">Điện Thoại</label>
            <input type="text" class="form-control" name="Dien_Thoai" placeholder="" value="<?=$kq1[0]['Dien_Thoai']?>">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" name="Email" placeholder="" value="<?=$kq1[0]['Email']?>">
        </div>
        <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <input type="submit" value="Save" class="btn btn-secondary" name="edit_KH"/>
        </div>
    </div>
    </div>

    </form>
    
    
</main>
</div>
