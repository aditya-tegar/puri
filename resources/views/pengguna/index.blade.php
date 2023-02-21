@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Master Data</li>
              <li class="breadcrumb-item active">Data Pengguna</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pengguna Sistem Informasi BS Puri Indah</h3>
          <div class="card-tools">
            <!-- Search by Nama Pengguna -->
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
          <div class="form-group btn-group w-100 col-2">
            <a href="pengguna.tambah" class="btn btn-primary btn-block">
              <i class="fas fa-plus"></i>
              <span>Tambah</span>
            </a>
          </div>
          <br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id Pengguna</th>
                    <th>Nama Pengguna</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level Pengguna</th>
                    <th style="text-align: center">Aksi</th>  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>IDP0001</td>
                    <td>Wawan</td>
                    <td>wawan@gmail.com</td>
                    <td>wawan123</td>
                    <td>SuperAdmin</td>
                    <td style="text-align: center">
                      <a href="pengguna.edit" class="btn btn-sm bg-yellow">
                        <i class="fas fa-pen"></i>
                      </a>
                      <a href="#" class="btn btn-sm bg-red">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                  <td>IDP0002</td>
                    <td>Adit</td>
                    <td>adit@gmail.com</td>
                    <td>adit123</td>
                    <td>Admin</td>
                    <td style="text-align: center">                      
                      <a href="pengguna.edit" class="btn btn-sm bg-yellow">
                        <i class="fas fa-pen"></i>
                      </a>
                      <a href="#" class="btn btn-sm bg-red">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                  <td>IDP0003</td>
                    <td>Yayuk</td>
                    <td>yayuk@gmail.com</td>
                    <td>yayuk123</td>
                    <td>Nasabah</td>
                    <td style="text-align: center">                      
                      <a href="pengguna.edit" class="btn btn-sm bg-yellow">
                        <i class="fas fa-pen"></i>
                      </a>
                      <a href="#" class="btn btn-sm bg-red">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                  <td>IDP0004</td>
                    <td>Erniati</td>
                    <td>erniati@gmail.com</td>
                    <td>erniati123</td>
                    <td>Penimbang</td>
                    <td style="text-align: center">                      
                      <a href="pengguna.edit" class="btn btn-sm bg-yellow">
                        <i class="fas fa-pen"></i>
                      </a>
                      <a href="#" class="btn btn-sm bg-red">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                </table>
              </div>
        </div>
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