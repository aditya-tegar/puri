@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Pengelolaan Tabungan Nasabah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="laporan">Laporan</a></li>
              <li class="breadcrumb-item active">Laporan Tabungan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <!-- /.col (left) -->
        <div class="form-group">
            <div class="card card-primary">
              <div class="card-header">
                <!-- <h3 class="card-title">Date picker</h3> -->
              </div>
              <div class="card-body">

                <!-- Search -->
                <div class="form-group row">
                  <label>Cari Nasabah</label>
                  <div class="input-group col-4">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text" class="form-control float-right col-8" id="reservation" placeholder="Masukkan Nama Nasabah" >
                  </div>
                  <!-- /.input group -->
                    <div class="col-1">
                        <a href="#" class="btn btn-primary btn-block">Cari</a>
                    </div>
                </div>
                <!-- /.form group -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Data Tabungan Nasabah</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No Rekening</th>
                    <th>Nama Nasabah</th>
                    <th>Dana Masuk (Rp)</th>
                    <th>Dana Keluar (Rp)</th>
                    <th>Saldo Akhir</th>
                    <th>Detail</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1.</td>
                        <td>9414 0001</td>
                        <td>Mia</td>
                        <td>8.620</td>
                        <td>5.000</td>
                        <td>3.620</td>
                        <td style="text-align: center">
                          <a href="laporan.detailtabungan" class="btn btn-sm bg-yellow">
                            <i class="fas fa-eye"></i>
                          </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>9414 0002</td>
                        <td>Yayuk</td>
                        <td>4.600</td>
                        <td>0</td>
                        <td>4.600</td>
                        <td style="text-align: center">
                          <a href="laporan.detailtabungan" class="btn btn-sm bg-yellow">
                            <i class="fas fa-eye"></i>
                          </a>
                        </td>
                    </tr>                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th></th>
                    <th></th>
                    <th>Total Tabungan</th>
                    <th>13.220</th>
                    <th>0</th>
                    <th>13.220</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              </div>              
            <!-- /.card -->
            <div class="form-group row">
                <a class="btn btn-app col-2">
                  <i class="fas fa-eye"></i> Preview
                </a>
                <a class="btn btn-app col-2">
                  <i class="fas fa-print"></i> Print
                </a>
                <!-- <a class="btn btn-app">
                  <i class="fas fa-pause"></i> Batal
                </a> -->
              </div>
            </div>
            

              <!-- </div>
                <div class="card-footer">
                  Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more examples and information about
                  the plugin.
                </div> -->
              <!-- /.card-body -->
            
            <!-- /.card -->

          </div>


        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->

            <!--/.direct-chat -->
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
      <!-- Default box -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection