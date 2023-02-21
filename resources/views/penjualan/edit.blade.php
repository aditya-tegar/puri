@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Transaksi Penjualan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
              <li class="breadcrumb-item"><a href="/penjualan">Penjualan</a></li>
              <li class="breadcrumb-item active">Edit Penjualan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
          
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body col-6 row">
                  <div class="form-group col-3">                      
                    <label for="nota">No Transaksi</label>                                          
                  </div>
                  <div class="form-group col-4">
                    <input class="form-control" id="nota">
                  </div>
                  <div class="col-2">
                    <a href="#" class="btn btn-primary btn-block">Proses</a>
                  </div>
                </div>
                <div class="card-body row">                  
                    <!-- Default isi otomatis sesuai tanggal berjalan, tetapi bisa juga diganti secara manual -->
                  <div class="form-group col-3">
                    <label>Tanggal</label>
                    <div class="input-group date" id="tanggal" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" disabled/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                    
                  </div>

                  <div class="form-group col-3">
                    <!-- Auto input dari Login Penimbang -->
                    <label for="petugas">Nama Petugas</label>
                    <input class="form-control" id="petugas" disabled>
                  </div>                   
                  <div class="form-group col-3">
                    <!-- Isi Option Otomatis dari Tabel Data Customer -->
                  <label>Nama Customer</label>
                    <select class="select2bs4" multiple="multiple" data-placeholder="Pilih Nasabah"
                            style="width: 100%;" disabled>
                        <option>Jejen</option>
                        <option>Sobri</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <!-- <div class="card-footer"> -->
                    <!-- Saat Tombol diklik, Form Data Penimbangan Tidak Aktif (Disable) dan Form Input Penimbangan Aktif (Sebelumnya Disable) -->
                  <!-- <button class="btn btn-primary">Input Penjualan</button> -->
                <!-- </div> -->

                
              </form>
              
            </div>
            <!-- /.card -->
                        <!-- Form Element sizes -->
            <!-- <div class="card card-primary"> -->
              <!-- <div class="card-header">
                <h3 class="card-title">Form Penjualan Sampah</h3>
              </div> -->

              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Input Data Penjualan</h3>                  

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                                
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="form-group row">
                      <div class="col-1">
                        <label>Tanggal</label>
                      </div>
                      <div class="input-group date col-3" id="tanggal1" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Input Tanggal Penimbangan"/>
                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                  <div>
                    <div class="col-12 row">
                      <div class="form-group">
                        <!-- Ambil dari database total berat jenis sampah per tanggal -->
                        <label>Data Sampah</label>
                        <select class="duallistbox" multiple="multiple" disabled>
                          <option selected>Pilih Sampah</option>
                          <option>Gelas Plastik Bersih - 1,8 - 7.200 </option>
                          <option>Rongsok - 2,6 - 3.900</option>
                          <option>Kardus - 2 - 3.400</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <div class="form-group row">
                      <div class="col-2">
                        <!-- Otomatis dari total harga sampah yang dipilih -->
                        <label>Total Harga</label>
                      </div>
                      <div class="col-3" id="tohar">
                          <input type="text" class="form-control" placeholder="14.500" disabled/>
                      </div>
                      <div class="col-1">
                        <label>Bayar</label>
                      </div>
                      <div class="col-2" id="tohar">
                          <input type="text" class="form-control" placeholder="15.000"/>
                      </div>
                      <div class="col-1">
                        <label>Kembali</label>
                      </div>
                      <div class="col-2" id="tohar">
                          <input type="text" class="form-control" placeholder="500" disabled/>
                      </div>
                  </div>
                  
                  <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <!-- <div class="card-footer">
                  Visit <a href="https://github.com/istvan-ujjmeszaros/bootstrap-duallistbox#readme">Bootstrap Duallistbox</a> for more examples and information about
                  the plugin.
                </div> -->
                <div class="col-sm-6">
                  <div class="card-body row">
                    <a href= "/penjualan" class="btn btn-app bg-red">
                      <i class="fas fa-times-circle"></i> Batal
                    </a>
                    <a class="btn btn-app bg-blue">
                      <i class="fas fa-upload"></i> Update
                    </a>
                    <!-- <a class="btn btn-app bg-silver">
                      <i class="fas fa-print"></i> Print
                    </a> x    x-->
                  </div>
                </div>
              </div>
              <!-- /.card -->

            <!-- </div> -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->

          <div class="col-md-6">

            <!-- /.card -->
          </div>
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
<!-- /.content-wrapper -->
@endsection