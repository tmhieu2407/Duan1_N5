<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="font-weight-bold">DANH SÁCH LOẠI HÀNG HÓA</h1>

            <form action="index.php?act=listsp" method="post">
                <div class="input-group">
                    <input type="search" class="form-control rounded" name="tukhoa" placeholder="Nhập từ khóa"
                        aria-label="Search" aria-describedby="search-addon" />
                    <select name="iddm" class="form-select " aria-label="Default select example">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listdanhmuc as $danhmuc):
                            extract($danhmuc);
                            ?>
                            <option value="<?= $id ?>">
                                <?= $name ?>
                            </option>
                        <?php endforeach ?>
                        ?>
                    </select>


                    <input type="submit" name="listok" class="btn btn-outline-primary" value="Tìm kiếm">
                </div>
            </form>

            <form action=""></form>

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="#" method="POST">
                <div class="mb-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Mã sản phẩm</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Lượt xem</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listsanpham as $sanpham):
                                extract($sanpham);

                                $hinhPath = "../upload/" . $img;
                                if (is_file($hinhPath)) {
                                    $hinh = '<img src="' . $hinhPath . '" height="80px">';

                                } else {
                                    $hinh = "Không có hình";
                                }

                                ?>

                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>
                                        <?= $id ?>
                                    </td>
                                    <td>
                                        <?= $name ?>
                                    </td>
                                    <td>
                                        <?= $hinh ?>
                                    </td>
                                    <td>
                                        <?= number_format($price, 0, ',', '.') ?>VNĐ
                                    </td>
                                    <td>
                                        <?= $luotxem ?>
                                    </td>
                                    <td>
                                        <?= $mota ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="index.php?act=suasp&id=<?= $id ?>">Sửa</a>
                                        <a class="btn btn-danger" href="index.php?act=xoasp&id=<?= $id ?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="mb-3 text-left">
                    <input class="btn btn-primary mr-3" type="button" value="CHỌN TẤT CẢ">
                    <input class="btn btn-secondary mr-3" type="button" value="BỎ CHỌN TẤT CẢ">
                    <a href="index.php?act=addsp"><input class="btn btn-success" type="button" value="NHẬP THÊM"></a>
                </div>
            </form>
        </div>
    </div>
</div>