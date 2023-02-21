@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaksi Penimbangan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
              <li class="breadcrumb-item active">Penimbangan</li>
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
          <h3 class="card-title">Data Penimbangan Sampah Nasabah</h3>
          <div class="card-tools">
            <!-- Search by Nama Nasabah -->
              <div class="input-group input-group-sm" style="width: 300px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button> -->
          </div>
        </div>
        <!-- <div class="card-body">
          Start creating your amazing application!
        </div> -->
        <div class="card-body">
          <div class="col-2">
            <a href="transaksi.tambah" class="btn btn-primary btn-block">
              <i class="fas fa-plus"></i>
                <span>Tambah</span>
            </a>
          </div>
          <br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No Penimbangan</th>
                    <th>Tanggal</th>
                    <th>Nama Nasabah</th>
                    <th>Nama Penimbang</th>
                    <th>Nama Sampah</th>
                    <th>Berat Sampah (Kg)</th>
                    <th style="text-align: center">Aksi</th>  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>2212240001</td>
                    <td>24-12-2022</td>
                    <td>Yayuk</td>
                    <td>Erniati</td>
                    <td>
                    Gelas Mineral Bersih <br>
                    Rongsok
                    </td>
                    <td>
                      0,8 <br>
                      1,2
                    </td>
                    <td style="text-align: center">
                      <a href="transaksi.edit" class="btn btn-sm bg-yellow">
                        <i class="fas fa-pen"></i>
                      </a>
                      <a href="#" class="btn btn-sm bg-red">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>2212240002</td>
                    <td>24-12-2022</td>
                    <td>Mia</td>
                    <td>Erniati</td>
                    <td>
                    Gelas Mineral Bersih <br>
                    Rongsok <br>
                    Kardus
                    </td>
                    <td>
                      1 <br>
                      1,4 <br>
                      2
                    </td>
                    <td style="text-align: center">
                      <a href="transaksi.edit" class="btn btn-sm bg-yellow">
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
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection