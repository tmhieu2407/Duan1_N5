<?php
if (isset($sanpham) && is_array($sanpham)) {
    extract($sanpham);
}

$hinhPath = "../upload/" . $img;
if (is_file($hinhPath)) {
    $hinh = '<img src="' . $hinhPath . '" height="80px">';

} else {
    $hinh = "Không có hình";
}

?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="font-weight-bold">CẬP NHẬT MỚI SẢN PHẨM</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="mb-3">
                    <label for="maloai" class="text-right">Mã loại</label>
                    <input type="text" class="form-control text-left" id="maloai" name="maloai" value="<?= $id ?>"
                        placeholder="Nhập mã loại">
                </div>
                <div class="mb-3">
                    <label for="tensp" class="text-right">Tên sản phẩm</label>
                    <input type="text" class="form-control text-left" id="tensp" name="tensp"
                        placeholder="Nhập tên sản phẩm" required value="<?= $name ?>">
                </div>
                <div class="mb-3">
                    <label for="giasp" class="text-right">Giá</label>
                    <input type="text" class="form-control text-left" id="giasp" name="giasp" value="<?= $price ?>"
                        placeholder="Nhập giá" required>
                </div>
                <div class="mb-3">
                    <label for="hinh" class="text-right">Hình ảnh</label>
                    <?= $hinh ?>
                    <input type="file" class="form-control text-left" id="hinh" name="hinh">
                </div>

                <div class="mb-3">
                    <label for="danhmuc" class="text-right">Danh mục</label>
                    <select name="iddm" class="form-select " aria-label="default select example">
                        <?php
                        foreach ($listdanhmuc as $danhmuc):
                            extract($danhmuc);
                            $selected = ($iddm == $id) ? "selected" : "";
                            ?>
                            <option <?= $selected ?> value="<?= $id ?>">
                                <?= $name ?>
                            </option>
                        <?php endforeach ?>
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="mota" class="text-right">Mô tả</label>
                    <textarea class="form-control text-left" id="mota" name="mota" placeholder="Nhập mô tả" required
                        cols="20" rows="5"><?= $mota ?>
                    </textarea>
                </div>



                <div class="mb-3">
                    <input class="btn btn-primary mr-3 text-left" type="submit" name="capnhat" value="CẬP NHẬT"
                        required>
                    <input class="btn btn-secondary mr-3 text-left" type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listdm"><input class="btn btn-success text-left" type="button"
                            value="DANH SÁCH"></a>
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
