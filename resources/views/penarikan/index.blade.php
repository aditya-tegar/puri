@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaksi Penarikan Tabungan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
              <li class="breadcrumb-item active">Penarikan</li>
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
                    <label for="norek">No Rekening</label>
                    <input class="form-control" id="norek" placeholder="Masukkan No Rekening">
                  </div>
                  <!-- <div class="form-group col-3"> -->
                    <!-- Isi Option Otomatis dari Tabel Data Customer -->
                  <!-- <label>Nama Nasabah</label> -->
                    <!-- <select class="select2bs4" multiple="multiple" data-placeholder="Pilih Nasabah"
                            style="width: 100%;">
                        <option>Mia - 9414 0001</option>                                               
                        <option>Yayuk - 9414 0002</option>
                        <option>Findi - 9414 0003</option>
                        <option>Fani - 9414 0004</option>
                    </select> -->
                  <!-- </div> -->
                </div>
                <!-- /.card-body -->
                
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
                  <h3 class="card-title"><b>Data Tabungan</b></h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button> -->
                  </div>
                </div>
                                
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-4 row">
                      <div class="col-4">
                        <!-- Isi Otomatis dari Data base Tabungan Nasabah -->
                        <label>Nama Nasabah</label>
                      </div>
                      <div class="col-6" id="nama">
                        <input type="text" class="form-control" disabled/>
                      </div>
                    </div>
                    <div class="form-group col-4 row">
                      <div class="col-4">
                        <!-- Otomatis dari Data base Tabungan Nasabah -->
                        <label>Saldo Tabungan</label>
                      </div>
                      <div class="col-6" id="tohar">
                        <input type="text" class="form-control" disabled/>
                      </div>
                    </div>
                    <div class="form-group col-4 row">
                      <!-- select -->
                      <div class="col-6">
                        <label>Metode Penarikan</label>
                        <select class="form-control">
                          <!-- Saat dipilih, Form Penarikan Uang Aktif -->
                          <option>Penarikan Uang</option>
                          <!-- Saat dipilih, Form Penarikan Emas Aktif -->
                          <option>Penarikan Emas</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="card-body row">  
                    <div class="card card-default col-sm-4">
                      <div class="card-header">
                        <h3 class="card-title"><b>Penarikan Uang</b></h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group row">
                          <label>Jumlah Penarikan</label>
                          <div class="col-8" id="tarik">
                            <input type="text" class="form-control" placeholder="Input Jumlah Penarikan"/>
                          </div>
                        </div>
                      </div>
                    </div>  
                    <div class="card card-default col-sm-6">
                      <div class="card-header">
                        <h3 class="card-title"><b>Penarikan Emas</b></h3>
                      </div> 
                      <div class="card-body">
                        <div class="form-group row">
                          <label class="col-4">Harga Emas (Per Gram)</label>
                            <div class="col-6" id="emas">
                              <input type="text" class="form-control" placeholder="Input Harga Emas terupdate"/>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-4">Berat Emas (Gram)</label>
                            <div class="col-6" id="tohar">
                                <input type="text" class="form-control" placeholder="Input Berat Emas"/>
                            </div>
                        </div>
                        <div class="form-group row">
                          <!-- Input Otomatis dari konversi Harga Emas dengan Berat Emas yang diminta -->
                          <label class="col-4">Konversi Uang</label>
                            <div class="col-6" id="tohar">
                                <input type="text" class="form-control" disabled/>
                            </div>
                        </div>
                      </div>  
                    </div>
                    <div class="card card-default col-sm-2">
                      <div class="card-body">
                        <a class="btn btn-app bg-blue">
                          <i class="fas fa-print"></i> Print
                        </a>
                        <a class="btn btn-app bg-green">
                          <i class="fas fa-save"></i> Simpan
                        </a>
                        <a class="btn btn-app bg-red">
                          <i class="fas fa-times-circle"></i> Batal
                        </a>
                      </div>
                    </div>
                  </div>  
                  <div class="card card-default float-right">
                <!-- <div class="card-body">
                  <div class="form-group row">
                    <label>Form Cetak Bukti Penarikan</label>
                    <input type="text" class="form-control col-8" placeholder="Input Nota Transaksi Penarikan"/>
                    <a class="btn btn-app bg-purple">
                      <i class="fas fa-print"></i> Print
                    </a>
                  </div>                  
                </div> -->
              </div>
                </div>
                  
                  <!-- /.row -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              
            <!-- </div> -->

          </div>
          <!--/.col (left) -->

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