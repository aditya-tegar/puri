@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Detail Tabungan Nasabah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="laporan">Laporan</a></li>
              <li class="breadcrumb-item"><a href="laporan.tabungan">Laporan Tabungan</a></li>
              <li class="breadcrumb-item active">Laporan Detail Tabungan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      
    </section>

        <!-- Main content -->
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Mia</h3>

                <p class="text-muted text-center">Ibu Rumah Tangga</p>
                <p class="text-muted text-center">9414 0001</p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tentang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Pendidikan</strong>

                <p class="text-muted">
                  Sekolah Menengah Atas
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                <p class="text-muted">Grand Puri Asih Blok C2 No 04</p>


                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Catatan</strong>

                <p class="text-muted">-</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Detail Tabungan</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> -->
                </ul>
              </div><!-- /.card-header -->
              <div class="card">
                      <div class="card-header">

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
                              <th>Tanggal</th>
                              <th>Dana Masuk (Rp)</th>
                              <th>Dana Keluar (Rp)</th>
                              <th>Saldo (Rp)</th>
                              <th>Keterangan</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1.</td>
                                  <td>24 Des 2022</td>
                                  <td>8.620</td>
                                  <td>0</td>
                                  <td>8.620</td>
                                  <td>Gelas Mineral Bersih : 1 - Rongsok : 1,4 - Kardus : 2</td>
                              </tr>
                              <tr>
                                  <td>2.</td>
                                  <td>25 Des 2022</td>
                                  <td>0</td>
                                  <td>5.000</td>
                                  <td>3.620</td>
                                  <td>Ambil Uang Tunai</td>
                              </tr>
                          </tbody>
                          </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
  <!-- /.content-wrapper -->
@endsection