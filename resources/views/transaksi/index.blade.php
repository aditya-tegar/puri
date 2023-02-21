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
              <li class="breadcrumb-item active">Transaksi Penimbangan</li>
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
          <div class="col-md-3">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Data Penimbangan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <!-- Autoincrement gabungan dari tahun-bulan-tanggal (tanggal di atas) dan no urut (berdasarkan tanggal) -->
                    <label for="id_penimbangan">No Penimbangan</label>
                    <input class="form-control" id="id_penimbangan" disabled>
                  </div>
                  <div class="form-group">
                    <!-- Auto input dari Login Penimbang -->
                    <label for="penimbang">Nama Petugas</label>
                    <input class="form-control" id="penimbang" disabled>
                  </div>
                    <!-- Default isi otomatis sesuai tanggal berjalan, tetapi bisa juga diganti secara manual -->
                    <div class="form-group">
                      <label>Tanggal</label>
                      <div class="input-group date" id="tanggal" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>                  
                  <div class="form-group">
                    <!-- Isi Option Otomatis dari Tabel Data Nasabah -->
                  <label>Nama Nasabah</label>
                    <select class="select2bs4" multiple="multiple" data-placeholder="Pilih Nasabah"
                            style="width: 100%;">
                        <option>Mia - 9414 0001</option>                                               
                        <option>Yayuk - 9414 0002</option>
                        <option>Findi - 9414 0003</option>
                        <option>Fani - 9414 0004</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <!-- Saat Tombol diklik, Form Data Penimbangan Tidak Aktif (Disable) dan Form Input Penimbangan Aktif (Sebelumnya Disable) -->
                  <button class="btn btn-primary">Input Penimbangan</button>
                </div>

                
              </form>
              
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->

          <!-- right column -->
          <div class="col-md-9">
            <!-- Form Element sizes -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Penimbangan Sampah</h3>
              </div>
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
                    <div class="col-4">
                            <label for="berat">Berat Sampah (Kg)</label>
                    </div>
                    <div class="col-4">
                            <input class="form-control" id="berat" placeholder="Input Berat Sampah">
                    </div>
                    <div>
                      <!-- Saat Tombol diklik, Form Input Penimbangan Kosong dan Data terinput di tabel -->
                      <button class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="card">
                      <div class="card-header">
                          <h3 class="card-title"><b>Detail Penimbangan</b></h3>

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
                                  <td>1</td>
                                  <td>3.800</td>
                                  <td>3.800</td>
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
                                  <td>1,4</td>
                                  <td>1.300</td>
                                  <td>1.820</td>
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
                                  <td>1.500</td>
                                  <td>3.000</td>
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
                          <tfoot>
                            <td></td>
                            <td></td>
                            <td>Total Pendapatan (Rp)</td>
                            <td></td>
                            <td><h4><b>8.620</b></h4></td>
                          </tfoot>
                          </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <div class="card-footer row">
      <div class="col-sm-6">
        <div class="card-body row">
          <!-- Saat diklik, kolom di form data penimbangan aktif -->
          <a class="btn btn-app bg-blue">
            <i class="fas fa-plus"></i> Baru
          </a>          
          <a href="/transaksi.edit" class="btn btn-app bg-yellow">
            <i class="fas fa-edit"></i> Edit
          </a>
          <a class="btn btn-app bg-green">
            <i class="fas fa-save"></i> Simpan
          </a>
          <a href="/" class="btn btn-app bg-red">
            <i class="fas fa-times-circle"></i> Batal
          </a>                    
        </div>
      </div>
    </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
</div>
<!-- /.content-wrapper -->
@endsection