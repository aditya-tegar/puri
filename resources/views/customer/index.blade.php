@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Master Data</li>
              <li class="breadcrumb-item active">Data Customer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Customer Bank Sampah Puri Indah</h3>
          <div class="card-tools">
            <!-- Search by Nama customer -->
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
          
        <div class="card-body">
          <div class="form-group btn-group w-100 col-2">
            <a href="{{route('customer.create')}}" class="btn btn-primary btn-block">
              <i class="fas fa-plus"></i>
              <span>Tambah</span>
            </a>
          </div>
          <br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama Customer</th>
                    <th>Alamat</th>
                    <th>No Handphone/Whatsapp</th>
                    <th>Email</th>
                    <th style="text-align: center">Aksi</th>  
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($semuaCustomer as $customer )
                  <tr>
                    <td>{{ $customer->nama_customer }}</td>
                    <td>{{ $customer->alamat }}</td>
                    <td>{{ $customer->no_hp }}</td>
                    <td>{{ $customer->email }}</td>
                    <td style="text-align: center">
                      <a href="{{route('customer.edit', $customer->id)}}" class="btn btn-sm bg-yellow">
                        <i class="fas fa-pen"></i>
                      </a>
                      <form action="{{route('customer.destroy', $customer->id)}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-sm bg-red"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </table>
              </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection