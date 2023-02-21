@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaksi Penjualan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
              <li class="breadcrumb-item active">Penjualan</li>
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
                <h3 class="card-title">Form Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body row">
                    <!-- Default isi otomatis sesuai tanggal berjalan, tetapi bisa juga diganti secara manual -->
                  <div class="form-group col-3">
                    <label>Tanggal</label>
                    <div class="input-group date" id="tanggal" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                  </div>
                  <div class="form-group col-3">
                    <!-- Autoincrement gabungan dari "nota", tahun-bulan-tanggal (tanggal di atas) dan no urut (berdasarkan tanggal) -->
                    <label for="nota">Nota</label>
                    <input class="form-control" id="nota" disabled>
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
                            style="width: 100%;">
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
                  <h3 class="card-title"><b>Data Penjualan</b></h3>                  

                  <!-- <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div> -->
                </div>
                                
                <!-- /.card-header -->
                <div class="card-body row">
                <div class="card card-default col-4">
                  <div class="card-body">
                      <div class="form-group">
                        <!-- Isi Option Otomatis dari Tabel Data Sampah -->
                        <label>Nama Sampah</label>
                        <select class="select2bs4" multiple="multiple" data-placeholder="Pilih Sampah"
                                style="width: 100%;">
                            <option>Gelas Plastik Bersih - IDS0001</option>
                            <option>Rongsok - IDS0002</option>
                            <option>Kardus - IDS0003</option>
                        </select>
                      </div>
                      <div class="form-group row">
                        <!-- Ambil dari database total berat jenis sampah per tanggal -->
                        <label class="col-4">Berat</label>
                        <input class="form-control col-6" id="berat" disabled>
                      </div>
                      <div class="form-group row">
                        <!-- Ambil dari database total berat jenis sampah per tanggal -->
                        <label class="col-4">Harga Jual</label>
                        <input class="form-control col-6" id="harju" disabled>
                      </div>
                      <div class="form-group row">
                        <!-- Ambil dari database total berat jenis sampah per tanggal -->
                        <label class="col-4">Total Harga</label>
                        <input class="form-control col-6" id="tohar" disabled>
                      </div>
                      <div>
                      <!-- Saat Tombol diklik, Form Input Penimbangan Kosong dan Data terinput di tabel -->
                      <button class="btn btn-primary">Tambah Data</button>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
                <div class="card card-default col-8">
                <div class="form-group">
                    <div class="card">
                      <div class="card-header">
                          <h3 class="card-title"><b>Data Penjualan</b></h3>

                          <div class="card-tools">
                            <ul class="pagination pagination-sm float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                          </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body p-0">
                          <table class="table">
                          <thead>
                              <tr>
                              <th style="width: 10px">No</th>
                              <th>Nama Sampah</th>
                              <th>Berat (Kg)</th>
                              <th>Harga per Kg(Rp)</th>
                              <th>Total Harga (Rp)</th>
                              <th style="width: 150px">Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1.</td>
                                  <td>Gelas Mineral Bersih</td>
                                  <td>1,8</td>
                                  <td>4.000</td>
                                  <td>7.200</td>
                                  <td>
                                      <!-- <a href="#" class="btn btn-sm bg-yellow">
                                          <i class="fas fa-pen"></i>
                                      </a> -->
                                      <a href="#" class="btn btn-sm bg-red">
                                          <i class="fas fa-trash"></i>
                                      </a>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2.</td>
                                  <td>Rongsok</td>
                                  <td>2,6</td>
                                  <td>1.700</td>
                                  <td>3.900</td>
                                  <td>
                                      <!-- <a href="#" class="btn btn-sm bg-yellow">
                                          <i class="fas fa-pen"></i>
                                      </a> -->
                                      <a href="#" class="btn btn-sm bg-red">
                                          <i class="fas fa-trash"></i>
                                      </a>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3.</td>
                                  <td>Kardus</td>
                                  <td>2</td>
                                  <td>1.700</td>
                                  <td>3.400</td>
                                  <td>
                                      <!-- <a href="#" class="btn btn-sm bg-yellow">
                                          <i class="fas fa-pen"></i>
                                      </a> -->
                                      <a href="#" class="btn btn-sm bg-red">
                                          <i class="fas fa-trash"></i>
                                      </a>
                                  </td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div> 
                </div>
                <!-- /.card-body -->
                <!-- <div class="card-footer">
                  Visit <a href="https://github.com/istvan-ujjmeszaros/bootstrap-duallistbox#readme">Bootstrap Duallistbox</a> for more examples and information about
                  the plugin.
                </div> -->
                <div>

                </div>
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-1">
                      <!-- Otomatis dari total harga sampah yang dipilih -->
                      <label>Total Bayar</label>
                    </div>
                    <div class="col-2" id="tohar">
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
                        <input type="text" class="form-control" placeholder="5.000" disabled/>
                    </div>
                    <a class="btn btn-app bg-black col-2">
                  <i class="fas fa-print"></i> Print
                </a>
                </div>
                </div>
                
              </div>
              <!-- /.card -->
            <!-- </div> -->
                              
          </div>
          <!--/.col (left) -->
          <!-- right column -->

          <div class="col-md-12">
            <div class="col-sm-6 row">                  
              <div class="card-body row">
                <a class="btn btn-app bg-blue">
                  <i class="fas fa-plus"></i> Baru
                </a>
                <a href="/penjualan.edit" class="btn btn-app bg-yellow">
                  <i class="fas fa-edit"></i> Edit
                </a>
                <a class="btn btn-app bg-green">
                  <i class="fas fa-save"></i> Simpan
                </a>
                <a class="btn btn-app bg-red">
                  <i class="fas fa-times-circle"></i> Batal
                </a>                    
              </div>                  
            </div>
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