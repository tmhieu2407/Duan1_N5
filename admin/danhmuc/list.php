<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="font-weight-bold">DANH SÁCH LOẠI HÀNG HÓA</h1>
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
                                <th scope="col">MÃ LOẠI</th>
                                <th scope="col">TÊN LOẠI</th>
                                <th scope="col">THAO TÁC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listdanhmuc as $danhmuc): ?>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>
                                        <?php echo $danhmuc['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $danhmuc['name']; ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary"
                                            href="index.php?act=suadm&id=<?php echo $danhmuc['id']; ?>">Sửa</a>
                                        <a class="btn btn-danger"
                              tttttttttt              href="index.php?act=xoadm&id=<?php echo $danhmuc['id']; ?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="mb-3 text-left">
                    <input class="btn btn-primary mr-3" type="button" value="CHỌN TẤT CẢ">
                    <input class="btn btn-secondary mr-3" type="button" value="BỎ CHỌN TẤT CẢ">
                    <a href="index.php?act=adddm"><input class="btn btn-success" type="button" value="NHẬP THÊM"></a>
                </div>
            </form>
        </div>
    </div>
</div>