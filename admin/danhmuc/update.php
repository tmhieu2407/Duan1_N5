<?php
if (isset($dm) && is_array($dm)) {
    extract($dm);
}

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="font-weight-bold">CẬP NHẬT LOẠI HÀNG HÓA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="index.php?act=updatedm" method="POST">
                <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
                <div class="mb-3">
                    <label for="maloai" class="text-right">Mã loại</label>
                    <input type="text" class="form-control text-left" value="<?= isset($id) ? $id : '' ?>" id="maloai"
                        name="maloai" placeholder="Nhập vào mã loại">
                </div>
                <div class="mb-3">
                    <label for="tenloai" class="text-right">Tên loại</label>
                    <input type="text" class="form-control text-left" id="tenloai"
                        value="<?= isset($name) ? $name : ''; ?>" name="tenloai" placeholder="Nhập vào tên" required>
                </div>
                <div class="mb-3 text-left">
                    <input class="btn btn-primary mr-3 " type="submit" name="capnhat" value="Cập nhật" required>
                    <input class="btn btn-secondary mr-3 text-left" type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listdm"><input class="btn btn-success text-left" type="button"
                            value="DANH SÁCH">
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
if (isset($thongbao) && $thongbao != "") {
    echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}
?>