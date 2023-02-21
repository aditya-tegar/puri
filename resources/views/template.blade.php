@extends('master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Utama</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>93</h3>

                <p>Nasabah</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><sup style="font-size: 20px">Rp</sup>4.950.000</h3>

                <p>Total Tabungan Nasabah</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>57</h3>

                <p>Jenis Sampah</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3>22<sup style="font-size: 20px">kali</sup></h3>

                <p>Penimbangan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="card-body">

          <!-- Container for the image gallery -->
          <div class="container">

            <!-- Full-width images with number text -->
            <div class="mySlides">
              <div class="numbertext">1 / 6</div>
                <img src="../../dist/img/BS Puri Indah_1.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 6</div>
                <img src="../../dist/img/BS Puri Indah_2.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 6</div>
                <img src="../../dist/img/BS Puri Indah_3.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">4 / 6</div>
                <img src="../../dist/img/BS Puri Indah_4.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">5 / 6</div>
                <img src="../../dist/img/BS Puri Indah_5.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">6 / 6</div>
                <img src="../../dist/img/BS Puri Indah_6.jpg" style="width:100%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Image text -->
            <!-- <div class="caption-container">
              <p id="caption"></p>
            </div> -->

            <!-- Thumbnail images -->
            <div class=" card-body row">
              <div class="column">
                <img class="demo cursor" src="../../dist/img/Lite BS Puri Indah_1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
              </div>
              <div class="column">
                <img class="demo cursor" src="../../dist/img/Lite BS Puri Indah_2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
              </div>
              <div class="column">
                <img class="demo cursor" src="../../dist/img/Lite BS Puri Indah_3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
              </div>
              <div class="column">
                <img class="demo cursor" src="../../dist/img/Lite BS Puri Indah_4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
              </div>
              <div class="column">
                <img class="demo cursor" src="../../dist/img/Lite BS Puri Indah_5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
              </div>
              <div class="column">
                <img class="demo cursor" src="../../dist/img/Lite BS Puri Indah_6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
              </div>
            </div>
          </div>

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

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
          Start creating your amazing application!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection