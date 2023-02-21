@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="pengguna">Data Pengguna</a></li>
              <li class="breadcrumb-item active">Edit Data Pengguna</li>
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
                <h3 class="card-title">Form Edit Data Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <!-- Data terinput sesuai data awal -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_pengguna">Id Pengguna</label>
                    <input class="form-control" id="id_pengguna" disabled>
                  </div>
                  <div class="form-group">
                    <label for="nama_pengguna">Nama Pengguna</label>
                    <input class="form-control" id="nama_pengguna" require>
                  </div>
                  <div class="form-group">
                    <label for="user">Username</label>
                    <input type="email" class="form-control" id="user" require>
                  </div>
                  <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" id="pass" require>
                  </div>
                  <!-- select -->
                  <div class="form-group">                  
                    <div class="form-group">
                        <label>Level Pengguna</label>
                        <select class="form-control" data-placeholder="Pilih Nasabah">
                          <option>SuperAdmin</option>
                          <option>Admin</option>
                          <option>Nasabah</option>
                          <option>Penimbang</option>
                        </select>
                      </div>
                  </div>
                  
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer float-right">
                  <!-- Update ke Data Base -->
                  <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Update</button>
                  <!-- Tanpa menyimpan Data dan kembali ke Halaman Sebelumnya -->
                    <a href="pengguna" class="btn btn-primary">
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