@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="customer">Data Customer</a></li>
              <li class="breadcrumb-item active">Tambah Data Customer</li>
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
                <h3 class="card-title">Form Penambahan Data Customer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('customer.store')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_customer">Nama Customer</label>
                    <input class="form-control" id="nama_customer" placeholder="Input Nama Customer" name="nama_customer" require>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input class="form-control" id="alamat" placeholder="Input Alamat" name="alamat" require>
                  </div>
                  <div class="form-group">
                    <label for="no_hp">No Handphone/Whatsapp</label>
                    <input type="number" class="form-control" id="no_hp" placeholder="Input No Handphone/WA" name="no_hp" require>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Input Email" name="email" require>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer float-right">
                  <!-- Simpan ke Data Base -->
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                  <!-- Tanpa menyimpan Data dan kembali ke Halaman Sebelumnya -->
                    <a href="customer" class="btn btn-primary">
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