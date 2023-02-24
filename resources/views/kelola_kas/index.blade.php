@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengelolaan Kas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
              <li class="breadcrumb-item active">Pengelolaan Kas</li>
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
                <h3 class="card-title">Form Pengelolaan Kas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body row">
                    <!-- Default isi otomatis sesuai tanggal berjalan, tetapi bisa juga diganti secara manual -->
                  <div class="form-group col-3">
                    <label>Tanggal</label>
                    <div class="input-group date" id="tanggal" data-target-input="nearest">
                        <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                    </div>
                  </div>
                  
                  <div class="form-group col-3">
                    <!-- Auto input dari Login Penimbang -->
                    <label for="petugas">Nama Petugas</label>
                    <input class="form-control" id="petugas" disabled>
                  </div>                   
                  <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3 style="text-align: center"><sup style="font-size: 20px">Rp</sup>1.250.000</h3>

                            <p><b>Saldo Akhir Kas</b></p>
                        </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
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
                  <h3 class="card-title"><b>Detail Transaksi</b></h3>
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
                    <div class="form-group col-8">
                      <!-- select -->
                      <div class="row">
                        <!-- Isi Otomasit dari Initial & Tanggal (yy-mm-dd) & No Urut (Contoh : KAS230111-0001) -->
                        <label class="col-2">No Transaksi</label>
                        <div class="col-3" id="notrans">
                            <input type="text" class="form-control" disabled/>
                        </div>
                        <label class="col-2">Jenis Transaksi</label>
                        <select class="form-control col-3" disabled>
                          <option>Pilih Jenis Transaksi</option>
                          <!-- Saat dipilih, Form Penarikan Uang Aktif -->
                          <option>Pemasukan</option>
                          <!-- Saat dipilih, Form Penarikan Emas Aktif -->
                          <option>Pengeluaran</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="card-body row">  
                    <div class="card card-default col-sm-5">
                      <div class="card-header">
                        <h3 class="card-title"><b>Pemasukan Kas</b></h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Jumlah Pemasukan (Rp)</label>
                          <div class="col-8" id="masuk">
                            <input type="text" class="form-control" placeholder="Input Jumlah Pemasukan" disabled/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label>Keterangan</label>
                          <textarea class="form-control" rows="5" placeholder="Input Keterangan Pemasukan Kas" disabled></textarea>
                        </div>
                      </div>
                    </div>  
                    <div class="card card-default col-sm-5">
                      <div class="card-header">
                        <h3 class="card-title"><b>Pengeluaran Kas</b></h3>
                      </div> 
                      <div class="card-body">
                        <div class="form-group">
                          <label>Jumlah Pengeluaran (Rp)</label>
                          <div class="col-8" id="keluar">
                            <input type="text" class="form-control" placeholder="Input Jumlah Pengeluaran" disabled/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label>Keterangan</label>
                          <textarea class="form-control" rows="5" placeholder="Input Keterangan Pengeluaran Kas" disabled></textarea>
                        </div>
                      </div> 
                    </div>
                    <div class="card card-default col-sm-2">
                      <div class="card-body">
                        <!-- Saat Klik, Kolom Tanggal dan Jenis Transaksi Aktif -->
                        <a class="btn btn-app bg-blue">
                          <i class="fas fa-plus"></i> Baru
                        </a>
                        <a class="btn btn-app bg-green">
                          <i class="fas fa-save"></i> Simpan
                        </a>
                        <a href="/kelola_kas.edit" class="btn btn-app bg-yellow">
                          <i class="fas fa-edit"></i> Edit
                        </a>
                        <a class="btn btn-app bg-red">
                          <i class="fas fa-times-circle"></i> Batal
                        </a>
                      </div>
                    </div>
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
          <!-- right column -->

          <!--/.col (left) -->
          <!-- right column -->

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