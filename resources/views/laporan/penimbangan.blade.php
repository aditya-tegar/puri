@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Penimbangan Sampah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="laporan">Laporan</a></li>
              <li class="breadcrumb-item active">Laporan Penimbangan</li>
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
                <h3 class="card-title"><b>Data Penimbangan Sampah</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Sampah</th>
                    <th>Total Berat</th>
                    <th>Total Harga Beli</th>
                    <th>Total Harga Jual</th>
                    <th>Pemasukan Kas</th>

                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1.</td>
                        <td>24 Des 2022</td>
                        <td>
                            Gelas Plastik Bersih<br>
                            Rongsok<br>
                            Kardus
                        </td>
                        <td>
                            1,8<br>
                            2,6<br>
                            2
                        </td>
                        <td>
                            6.840<br>
                            3.380<br>
                            3.000
                        </td>
                        <td>
                            7.200<br>
                            3.900<br>
                            3.400
                        </td>
                        <td>
                            360<br>
                            520<br>
                            400
                        </td>
                    </tr>             
                  </tbody>
                  <tfoot>
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Total</th>
                    <th>13.220</th>
                    <th>14.500</th>
                    <th>1.280</th>
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
                <div class="card-footer">
                  Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more examples and information about
                  the plugin.
                </div>
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