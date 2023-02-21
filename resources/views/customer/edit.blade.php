@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="customer">Data Customer</a></li>
              <li class="breadcrumb-item active">Edit Data Customer</li>
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
                <h3 class="card-title">Form Edit Data Customer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('customer.update', $customer->id)}}" method="post">
                @csrf
                @method('put')
                <!-- Data terinput sesuai data awal -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_customer">Nama Customer</label>
                    <input class="form-control" id="nama_customer" name="nama_customer" value="{{$customer->nama_customer}}" require>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input class="form-control" id="alamat" name="alamat" value="{{$customer->alamat}}" require>
                  </div>
                  <div class="form-group">
                    <label for="no_hp">No Handphone/Whatsapp</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" value="{{$customer->no_hp}}" require>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$customer->email}}" require>
                  </div>
                  
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer float-right">
                  <!-- Update ke Data Base -->
                  <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Update</button>
                  <!-- Tanpa menyimpan Data dan kembali ke Halaman Sebelumnya -->
                    <a href="customer" class="btn btn-primary">
                      <i class="fas fa-times-circle"></i>
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
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection