@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Nasabah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="nasabah">Data Nasabah</a></li>
              <li class="breadcrumb-item active">Tambah Data Nasabah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
          
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Penambahan Data Nasabah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('nasabah.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <!-- Auto dari initial angka 9414 dan no urut (4 Digit) -->
                    <label for="id_nasabah">No Rekening</label>
                    <input class="form-control" id="id_nasabah" name="nomor_rekening" require>
                  </div>
                  <div class="form-group">
                    <label for="nama_nasabah">Nama Nasabah</label>
                    <input class="form-control" id="nama_nasabah" placeholder="Input Nama Nasabah" name="nama_nasabah" require>
                  </div> 
                  <!-- radio -->
                  <div class="form-group">
                    <label for="jenkel">Jenis Kelamin</label>
                    <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="1" value="laki-laki">
                                <label class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="2" value="perempuan">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input class="form-control" id="alamat" placeholder="Input Alamat" name="alamat" require>
                  </div>
                  <div class="form-group">
                    <label for="no_hp">No Handphone/Whatsapp</label>
                    <input type="number" class="form-control" id="no_hp" placeholder="Input No Handphone/WA" name="nomor_wa" require>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Input Email" require name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto Nasabah</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Pilih Foto</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer float-right">
                  <!-- Simpan ke Data Base -->
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                  <!-- Tanpa menyimpan Data dan kembali ke Halaman Sebelumnya -->
                    <a href="nasabah" class="btn btn-primary">
                      <i class="fas fa-times"></i>
                      <span> Batal</span>
                    </a>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
 
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection