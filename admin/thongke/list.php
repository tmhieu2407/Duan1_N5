<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="font-weight-bold">DANH SÁCH</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="#" method="POST">
                <div class="mb-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã danh mục</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá cao nhất</th>
                                <th scope="col">Giá thấp nhất</th>
                                <th scope="col">Giá trung bình</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listthongke as $key => $thongke):
                                extract($thongke);
                                ?>
                                <tr>
                                    <td>
                                        <?= $madm ?>
                                    </td>
                                    <td>
                                        <?= $tendm ?>
                                    </td>
                                    <td>
                                        <?= $countsp ?>
                                    </td>
                                    <td>
                                        <?= number_format($maxprice, 0, ',', '.') ?>VNĐ
                                    </td>
                                    <td>
                                        <?= number_format($minprice,0,',','.') ?>VNĐ
                                    </td>
                                    <td>
                                        <?= number_format($trungbinh,0,',','.')  ?>VNĐ
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>