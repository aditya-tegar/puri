@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Laporan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Laporan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid row">
        <!-- Small boxes (Stat box) -->
        <div class="card-footer col-6">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-bookmark"></i></span>
            <a href="/laporan.penimbangan" class="nav-link">
            <div class="info-box-content">
                <span class="info-box-text"><h3><b>Penimbangan</b></h3></span>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width: 100%"></div>
                </div>
                <span class="progress-description">Rekap Penimbangan Sampah</span>
            </div>
            </a>
          </div>
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-shopping-cart"></i></span>
            <a href="/laporan.penjualan" class="nav-link">
            <div class="info-box-content">
                <span class="info-box-text"><h3><b>Penjualan</b></h3></span>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width: 100%"></div>
                </div>
                <span class="progress-description">Rekap Penjualan Sampah ke Customer</span>
            </div>
            </a>
          </div>
        </div>
        <div class="card-footer col-6">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-book"></i></span>
            <a href="/laporan.tabungan" class="nav-link">
            <div class="info-box-content">
                <span class="info-box-text"><h3><b>Tabungan</b></h3></span>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width: 100%"></div>
                </div>
                <span class="progress-description">Rekap Informasi Tabungan Nasabah</span>
            </div>
            </a>
          </div>
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-sync-alt"></i></span>
            <a href="/laporan.kas" class="nav-link">
            <div class="info-box-content">
                <span class="info-box-text"><h3><b>Pengelolaan Kas</b></h3></span>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width: 100%"></div>
                </div>
                <span class="progress-description">Detail Pengelolaan Kas Bank Sampah</span>
            </div>
            </a>
          </div>
          <!-- ./col -->
        </div>
          
        <!-- /.row -->
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