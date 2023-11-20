<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm danh mục mới</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=adddm" method="POST">
        <div class="mb-3">
          <label for="maloai" class="text-right">Mã loại</label>
          <input type="text" class="form-control text-left" id="maloai" name="maloai" placeholder="Nhập vào mã loại">
        </div>
        <div class="mb-3">
          <label for="tenloai" class="text-right">Tên loại</label>
          <input type="text" class="form-control text-left" id="tenloai" name="tenloai" placeholder="Nhập vào tên"
            required>
        </div>
        <div class="mb-3">
          <input class="btn btn-primary mr-3 text-left" type="submit" name="themmoi" value="THÊM MỚI" required>
          <input class="btn btn-secondary mr-3 text-left" type="reset" value="NHẬP LẠI">
          <a href="index.php?act=listdm"><input class="btn btn-success text-left" type="button" value="DANH SÁCH"></a>
        </div>
      </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
if (isset($thongbao) && $thongbao != "") {
  echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}
?>