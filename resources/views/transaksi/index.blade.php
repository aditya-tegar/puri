@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaksi Penimbangan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
              <li class="breadcrumb-item active">Transaksi Penimbangan</li>
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
          <div class="col-md-3">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Data Penimbangan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="GET">
              {{-- <form method="POST" action="{{ route('transaksi.store') }}" > --}}
                {{-- <input type="text" hidden name="id_nasabah"> --}}
                {{-- @csrf --}}
                <div class="card-body">
                  <div class="form-group">
                    <!-- Autoincrement gabungan dari tahun-bulan-tanggal (tanggal di atas) dan no urut (berdasarkan tanggal) -->
                    <label for="id_penimbangan">No Penimbangan</label>
                    <input class="form-control" id="kode_transaksi" value="{{$NomorPenimbangan}}" disabled data-placeholder="kode_transaksi">
                  </div>
                  <div class="form-group">
                    <!-- Auto input dari Login Penimbang -->
                    <label for="penimbang">Nama Petugas</label>
                    <input class="form-control" id="penimbang" value="{{$Petugas->name}}" disabled>
                  </div>
                    <!-- Default isi otomatis sesuai tanggal berjalan, tetapi bisa juga diganti secara manual -->
                    <div class="form-group">
                      <label>Tanggal</label>
                      <div class="input-group date" id="tanggal" data-target-input="nearest">
                          <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate" value="{{now()->format('Y-m-d')}}"/>
                      </div>
                  </div>                  
                  <div class="form-group">
                    <!-- Isi Option Otomatis dari Tabel Data Nasabah -->
                  <label>Nama Nasabah</label>
                    <select required onchange="assignNasabahId()" class="select2bs4" data-placeholder="Pilih Nasabah" name="selectnasabah" id="selectnasabah"
                            style="width: 100%;">
                        <option value="" >--Pilih Nasabah--</option>
                        @foreach ($SemuaNasabah as $nasabah)
                        <option value="{{$nasabah->id}}" >{{$nasabah->nama_nasabah}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <!-- Saat Tombol diklik, Form Data Penimbangan Tidak Aktif (Disable) dan Form Input Penimbangan Aktif (Sebelumnya Disable) -->
                  <button class="btn btn-primary">Input Penimbangan</button>
                </div>

                
              </form>
              
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->

          <!-- right column -->

          <div class="col-md-9">
            <!-- Form Element sizes -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Penimbangan Sampah</h3>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('transaksi.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_nasabah" value="{{ $request->selectnasabah }}" id="id_nasabah">
                <input type="hidden" name="kode_transaksi" value="{{ $NomorPenimbangan}}">
                <input type="hidden" name="id_petugas" value="{{ $Petugas->id}}">

                <div class="form-group">
                  <div>
                    @if(session()->get('Success'))
                        <div class="alert alert-success">
                          {{ session()->get('Success') }}  
                        </div>
                    @endif
                  </div>
                    <!-- Isi Option Otomatis dari Tabel Data Sampah -->
                    <h3 class="card-title"><b>{{ $Nasabah?->nama_nasabah ?? null }}</b></h3>
                    <br/>
                    <label>Nama Sampah</label>
                    <select class="select2bs4" data-placeholder="Pilih Sampah" style="width: 100%;" name="id_sampah" >
                        @foreach ($ListSampah as $penimbangan)
                          <option value="{{$penimbangan->id}}" name="sampah_value">{{$penimbangan->nama_sampah}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-4">
                            <label for="berat">Berat Sampah (Kg)</label>
                    </div>
                    <div class="col-4">
                            <input class="form-control" name="berat" placeholder="Input Berat Sampah">
                    </div>
                    <div>
                      <!-- Saat Tombol diklik, Form Input Penimbangan Kosong dan Data terinput di tabel -->
                      <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>

         
                </div>
               
              </form>
                
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
                              <th>Harga per Kg(Rp)</th>
                              <th>Total Harga (Rp)</th>
                              <th style="width: 150px">Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                                  @foreach ($penimbanganModel as $dataPenimbang)
                                  {{-- @foreach($ListSampah as $sampah)
                                  @if($sampah->id == 3) --}}
                              <tr>
                                  <td>{{ ++$i }}</td>
                                  <td>{{ $dataPenimbang->nama_sampah }}</td>
                                  <td>{{ $dataPenimbang->berat }}</td>
                                  <td>{{ $dataPenimbang->harga_beli }}</td>
                                  <td>{{ $dataPenimbang->total_harga }}</td>
                                  <td>
                                      <!-- <a href="#" class="btn btn-sm bg-yellow">
                                          <i class="fas fa-pen"></i>
                                      </a> -->
                                      {{-- <a href="#" class="btn btn-sm bg-red">
                                          <i class="fas fa-trash"></i>
                                      </a> --}}
                                      <form action="{{ route('transaksi.destroy',$dataPenimbang->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
       
                                        @csrf
                                        @method('DELETE')
                                        <button  class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                  </td>
                              </tr>
                              {{-- @endif
                              @endforeach --}}
                              @endforeach
                          </tbody>
                          <tfoot>
                            <td></td>
                            <td></td>
                            <td>Total Pendapatan </td>
                            <td></td>
                            {{-- <td><h4><b>{{ number_format($countTotalHarga)}}</b></h4></td> --}}
                            <td><h4><b>{{ 'Rp. '.$countTotalHarga}}</b></h4></td>
                          </tfoot>
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
          <!-- Saat diklik, kolom di form data penimbangan aktif -->
          <a class="btn btn-app bg-blue" href="{{ route('transaksi.index') }}">
            <i class="fas fa-plus"></i> Baru
          </a>          
          <a href="/transaksi.edit" class="btn btn-app bg-yellow">
            <i class="fas fa-edit"></i> Edit
          </a>
          {{-- <a class="btn btn-app bg-green">
            <i class="fas fa-save"></i> Simpan
          </a> --}}
          <a href="/" class="btn btn-app bg-red">
            <i class="fas fa-times-circle"></i> Batal
          </a>                    
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


@section('javascript')


<script>
    $(document).ready(function() {
      alert($('#id_sampah').id);
    });  

  </script>

@endsection