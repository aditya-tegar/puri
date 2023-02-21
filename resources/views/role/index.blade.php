@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Role Akses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <!-- <li class="breadcrumb-item active">Blank Page</li> -->
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
          <h3 class="card-title">Akses Sistem Bank Sampah Puri Indah</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>

        <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Nasabah</th>
                    <th>Alamat</th>
                    <th>No Handphone/Whatsapp</th>
                    <th style="text-align: center">Aksi</th>  
                  </tr>
                  </thead>
                  <tr>
                    @foreach ($semuaRoles as $item)
                    <td>{{$item->id}}</td>
                    <td>1</td>
                    <td>1</td>
                    <td style="text-align: center">
                      <a href="#" class="btn btn-sm bg-yellow">
                        <i class="fas fa-pen"></i>
                      </a>
                      <a href="#" class="btn btn-sm bg-red">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                    @endforeach
                  </tr>
                </table>
              </div>
        </div>
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