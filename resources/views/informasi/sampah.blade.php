@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Harga Sampah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Informasi</li>
              <li class="breadcrumb-item active">Informasi Harga Sampah</li>
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
        <h3 class="card-title">Informasi terbaru Harga Sampah BS Puri Indah</h3>
        <div class="card-tools">
            <!-- Search by Nama Sampah -->
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
            <br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id Sampah</th>
                    <th>Nama Sampah</th>
                    <th>Harga per Kg(Rp)</th> 
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>IDS0001</td>
                    <td>Gelas Mineral Bersih</td>
                    <td>3800</td>
                  </tr>
                  <tr>
                  <td>IDS0002</td>
                    <td>Rongsok</td>
                    <td>1300</td>
                  </tr>
                  <tr>
                  <td>IDS0003</td>
                    <td>Kardus</td>
                    <td>1500</td>
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