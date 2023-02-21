@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Sampah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="sampah">Data Sampah</a></li>
              <li class="breadcrumb-item active">Tambah Data Sampah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
          
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Penambahan Data Sampah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('sampah.store')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_sampah">Nama Sampah</label>
                    <input class="form-control" id="nama_sampah" placeholder="Input Nama Sampah" name="nama_sampah" require>
                  </div>
                  <div class="form-group">
                    <label for="harbel">Harga Beli</label>
                    <input type="number" class="form-control" id="harbel" placeholder="Input Harga Beli" name="harga_beli" require>
                  </div>
                  <div class="form-group">
                    <label for="harju">Harga Jual</label>
                    <input type="number" class="form-control" id="harju" placeholder="Input Harga Jual" name="harga_jual" require>
                  </div>
                  
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer float-right">
                  <!-- Simpan ke Data Base -->
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                  <!-- Tanpa menyimpan Data dan kembali ke Halaman Sebelumnya -->
                    <a href="sampah" class="btn btn-primary">
                      <i class="fas fa-times-circle"></i>
                      <span> Batal</span>
                    </a>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
 
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection