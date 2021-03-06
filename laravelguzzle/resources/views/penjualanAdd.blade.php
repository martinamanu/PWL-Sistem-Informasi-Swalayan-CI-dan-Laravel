 @extends('master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Penjualan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Penjualan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Penjualan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/swalayan/save" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class ="form-group">
                      <label for="tanggal">Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal">
                  </div>
                  <div class="form-group">
        <label for="namabarang">Nama Barang</label>
        <select class="form-control" id="kdbarang" name="kdbarang">
            <?php
            $i = count($data['brg']['data']);

            for ($a = 0; $a < $i; $a++) { ?>
                <option value="<?= $data['brg']['data'][$a]['kdbarang']; ?>"><?= $data['brg']['data'][$a]['namabarang']; ?></option>
            <?php } ?>
        </select>
    </div>
                  <div class="form-group">
        <label for="namakasir">Nama Kasir</label>
        <select class="form-control" id="kdkasir" name="kdkasir">
            <?php
            $i = count($data['kas']['data']);

            for ($a = 0; $a < $i; $a++) { ?>
                <option value="<?= $data['kas']['data'][$a]['kdkasir']; ?>"><?= $data['kas']['data'][$a]['namakasir']; ?></option>
            <?php } ?>
        </select>
    </div>

                  <div class ="form-group">
                    <label for="jumlahbeli">Jumlah Beli</label>
                    <input type="text" class="form-control" id="jumlahbeli" name="jumlahbeli">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="add" class="btn btn-primary">Submit</button>
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
@endsection