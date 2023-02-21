@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Pengelolaan Kas</h1>
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
                <h3 class="card-title">Form Edit Pengelolaan Kas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="card-body">
                <div class="form-group col-6 row">
                    <label class="col-3">No Transaksi</label>
                    <div class="col-4" id="notrans">
                        <input type="text" class="form-control"/>
                    </div>
                    <div class="col-2">
                        <a href="#" class="btn btn-primary btn-block">Proses</a>
                    </div>
                </div>                                                 
              </form>
              
            </div>
            <!-- /.card -->

            <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
                                
            <div class="card-body"><!-- Default isi otomatis sesuai -->
                <div class="row">    
                    <div class="form-group col-3">
                        <label>Tanggal</label>
                        <div class="input-group date" id="tanggal" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" disabled/>
                            <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div> -->
                        </div>
                    </div>                  
                    <div class="form-group col-3">
                        <!-- Auto input dari Login Penimbang -->
                        <label for="petugas">Nama Petugas</label>
                        <input class="form-control" id="petugas" disabled>
                    </div>
                                
                    <div class="form-group col-4">
                        <!-- select -->
                        <label class="col-4">Jenis Transaksi</label>
                        <input class="form-control col-8" id="jenis_trans" placeholder="Pemasukan" disabled>
                    </div>
                </div>
                <div class="card-body row">  
                <div class="card card-default col-sm-5">
                    <div class="card-header">
                    <h3 class="card-title"><b>Pemasukan Kas</b></h3>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        <label>Jumlah Pemasukan</label>
                        <div class="col-8" id="masuk">
                        <input type="text" class="form-control" placeholder="Input Jumlah Pemasukan"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="5" placeholder="Input Keterangan Pemasukan Kas"></textarea>
                    </div>
                    </div>
                </div>
                <div class="card card-default col-sm-5">
                    <div class="card-header">
                    <h3 class="card-title"><b>Pengeluaran Kas</b></h3>
                    </div> 
                    <div class="card-body">
                    <div class="form-group">
                        <label>Jumlah Pengeluaran</label>
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
                    <!-- <a class="btn btn-app">
                        <i class="fas fa-edit"></i> Preview
                    </a> -->                        
                    <a class="btn btn-app bg-green">
                        <i class="fas fa-upload"></i> Update
                    </a>
                    <a href="/kelola_kas" class="btn btn-app bg-red">
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

        </div>
        <!--/.col (left) -->

    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
        <!-- /.card-body -->

</div>
<!-- /.content-wrapper -->
@endsection