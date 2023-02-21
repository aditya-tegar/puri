@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil Perusahaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Informasi</li>
              <li class="breadcrumb-item active">Profil</li>
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
                       src="../../dist/img/Logo Utama.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">BANK SAMPAH PURI INDAH</h3>

                <p class="text-muted text-center"></p>
                <p class="text-muted text-center"></p>

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
                <strong><i class="fas fa-book mr-1"></i> Rata-rata Pendidikan Petugas</strong>

                <p class="text-muted">
                  Sekolah Menengah Atas
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                <p class="text-muted">Grand Puri Asih, Kadu Jaya, Kec. Curug</p>

                <hr>

                <strong><i class="fas fa-phone mr-1"></i> No Telp.</strong>

                <p class="text-muted">Grand Puri Asih, Kadu Jaya, Kec. Curug</p>


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
                  <li class="nav-item"><a class="nav-link active" href="#so" data-toggle="tab">Strutur Organisasi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#visi" data-toggle="tab">Visi Misi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#sk" data-toggle="tab">SK Pemerintah</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="so">
                    <!-- Post -->
                    <div class="post">
                      <img src="../../dist/img/SO BS Puri Indah.jpg" alt="">
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="visi">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                         -- VISI --
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-eye bg-primary"></i>

                        <div class="timeline-item">

                          <h3 class="timeline-header"><a href="#">Visi BS Puri Indah</a></h3>

                          <div class="timeline-body">
                          Sampah Bukanlah Masalah tapi Solusi
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->

                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          -- MISI --
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-rocket bg-purple"></i>

                        <div class="timeline-item">

                          <h3 class="timeline-header"><a href="#">Misi BS Puri Indah</a></h3>

                          <div class="timeline-body">
                            1)	Membantu peran Pemerintah dalam permasalahan sampah <br>
                            2)	Menciptakan pemberdayaan ekonomi masyarakat <br>
                            3)	Perubahan perilaku Masyarakat dan menciptakan perekonomian mandiri
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="sk">
                    <form class="form-horizontal">
                      <!-- Post -->
                      <div class="post">
                        <img src="../../dist/img/SK BS Puri Indah 1.jpg" alt="">
                      </div>
                      <hr>
                      <div class="post">
                        <img src="../../dist/img/SK BS Puri Indah 2.jpg" alt="">
                      </div>
                      <hr>
                      <div class="post">
                        <img src="../../dist/img/SK BS Puri Indah 4.jpg" alt="">
                      </div>
                      <hr>
                      <div class="post">
                        <img src="../../dist/img/SK BS Puri Indah 5.jpg" alt="">
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
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