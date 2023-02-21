@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Pengelolaan Kas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="laporan">Laporan</a></li>
              <li class="breadcrumb-item active">Laporan Kas</li>
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

                <!-- Date range -->
                <div class="form-group row">
                  <label>Rentang Tanggal</label>

                  <div class="input-group col-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right col-8" id="reservation" placeholder="Masukkan Rentang Tanggal" >
                  </div>
                  <!-- /.input group -->
                    <div class="col-1">
                        <a href="#" class="btn btn-primary btn-block">Cari</a>
                    </div>
                </div>
                <!-- /.form group -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Data Pengelolaan Kas</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nominal Pemasukan (Rp)</th>
                    <th>Nominal Pengeluaran (Rp)</th>
                    <th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1.</td>
                        <td>24 Des 2022</td>
                        <td>200.000</td>
                        <td>-</td>
                        <td>Penimbangan Sampah</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>25 Des 2022</td>
                        <td>-</td>
                        <td>20.000</td>
                        <td>Beli Buku Besar</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>25 Des 2022</td>
                        <td>-</td>
                        <td>35.000</td>
                        <td>Beli Kalkulator</td>
                    </tr>                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th></th>
                    <th>Total</th>
                    <th>200.000</th>
                    <th>55.000</th>
                    <th>145.000</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->              
            </div>
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
            <!-- /.card -->

              </div>
                <!-- <div class="card-footer">
                  Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more examples and information about
                  the plugin.
                </div> -->
              <!-- /.card-body -->
            </div>
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