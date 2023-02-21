@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Penimbangan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="transaksi">Data Penimbangan</a></li>
              <li class="breadcrumb-item active">Edit Data Penimbangan</li>
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
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Data Penimbangan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <!-- Saat Proses, Kolom aktif dan terisi data sebelumnya -->
                  <div class="form-group row">
                    <label>No Transaksi</label>
                    <div class="input-group col-4">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control float-right" id="reservation" placeholder="Masukkan No Transaksi" >
                    </div>
                    <!-- /.input group -->
                      <div class="col-2">
                          <a href="#" class="btn btn-primary btn-block">Proses</a>
                      </div>
                  </div>

                  <!-- Default isi otomatis dari data sebelumnya -->
                  <div class="form-group col-6">
                    <label>Tanggal</label>
                    <div class="input-group date" id="tanggal" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" disabled/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <!-- Default isi otomatis dari data sebelumnya -->
                    <label for="penimbang">Nama Penimbang</label>
                    <input class="form-control" id="penimbang" disabled>
                  </div>                  
                  <div class="form-group">
                    <!-- Default isi otomatis dari data sebelumnya -->
                  <label>Nama Nasabah</label>
                    <select class="select2bs4" multiple="multiple"
                            style="width: 100%;" disabled>
                        <option>Mia - IDN0001</option>
                        <option>Fani - IDN0004</option>
                        <option>Findi - IDN0003</option>
                        <option>Yayuk - IDN0002</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
               
              </form>
              
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->

          <!-- right column -->
          <div class="col-md-6">
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
                                style="width: 100%;" disabled>
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
                            <input class="form-control" id="berat" placeholder="Input Berat Sampah" disabled>
                    </div>
                    <div>
                      <!-- Saat Tombol diklik, Form Input Penimbangan Kosong dan Data terinput di tabel -->
                      <button class="btn btn-primary">Simpan</button>
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
                            <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Gelas Mineral Bersih</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="btn btn-sm bg-yellow">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm bg-red">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Rongsok</td>
                                <td>1,4</td>
                                <td>
                                    <a href="#" class="btn btn-sm bg-yellow">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm bg-red">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Kardus</td>
                                <td>2</td>
                                <td>
                                    <a href="#" class="btn btn-sm bg-yellow">
                                        <i class="fas fa-pen"></i>
                                    </a>
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
          <a href="/transaksi" class="btn btn-app bg-red">
            <i class="fas fa-times-circle"></i> Batal
          </a>
          <a class="btn btn-app bg-green">
            <i class="fas fa-save"></i> Update
          </a>
          <!-- <a class="btn btn-app bg-blue">
            <i class="fas fa-print"></i> Print
          </a>                     -->
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