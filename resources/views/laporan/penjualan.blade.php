@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Penjualan Sampah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="laporan">Laporan</a></li>
              <li class="breadcrumb-item active">Laporan Penjualan</li>
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
                <h3 class="card-title"><b>Data Penjualan Sampah</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="form-group row col-6">
                    <label for="tgl_timbang" class="col-4">Tanggal Penimbangan</label>
                    <input class="form-control col-4" id="tgl_timbang" placeholder="24 Des 2022" disabled>
                  </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Sampah</th>
                    <th>Berat Sampah (Kg)</th>
                    <th>Harga Jual (Rp)</th>
                    <th>Total Harga (Rp)</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Gelas Plastik Bersih</td>
                        <td>1,8</td>
                        <td>4.000</td>
                        <td>7.200</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Rongsok</td>
                        <td>2,6</td>
                        <td>1.500</td>
                        <td>3.900</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Kardus</td>
                        <td>2</td>
                        <td>1.700</td>
                        <td>3.400</td>
                    </tr>          
                  </tbody>
                  <tfoot>
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Total Penjualan (Rp)</th>
                    <th>14.500</th>
                  </tr>
                  </tfoot>
                </table>
                <br>
                <div class="form-group row col-6">
                  <label for="tgl_timbang" class="col-4">Tanggal Penimbangan</label>
                  <input class="form-control col-4" id="tgl_timbang" placeholder="25 Des 2022" disabled>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Sampah</th>
                    <th>Berat Sampah (Kg)</th>
                    <th>Harga Jual (Rp)</th>
                    <th>Total Harga (Rp)</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Gelas Plastik Bersih</td>
                        <td>1,8</td>
                        <td>4.000</td>
                        <td>7.200</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Rongsok</td>
                        <td>2,6</td>
                        <td>1.500</td>
                        <td>3.900</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Kardus</td>
                        <td>3</td>
                        <td>1.700</td>
                        <td>5.100</td>
                    </tr>          
                  </tbody>
                  <tfoot>
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Total Penjualan (Rp)</th>
                    <th>16.200</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <div class="card-body row">
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

              <!-- </div>
                <div class="card-footer">
                  Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more examples and information about
                  the plugin.
                </div>
            </div> -->
            <!-- /.card -->

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