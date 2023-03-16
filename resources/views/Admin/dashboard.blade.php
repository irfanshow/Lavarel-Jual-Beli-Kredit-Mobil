@extends('templates.Admin.adminTemplates')


@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        {{-- awal container --}}
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <h3>Pengajuan Pembelian Mobil Baru</h3>
            <div class="row">

              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>{{$hitungPengajuanBaruDiterima}}</h3>

                    <p>Pengajuan Diterima</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-checkmark"></i>
                  </div>
                  <a href="/beli-baru-diterima" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>{{$hitungPengajuanBaruPending}}</h3>

                    <p>Pengajuan Pending</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-hourglass"></i>
                  </div>
                  <a href="/kelola-pembelian-mobil-baru" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>{{$hitungPengajuanBaruDitolak}}</h3>

                    <p>Pengajuan Ditolak</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-ban"></i>
                  </div>
                  <a href="/beli-baru-ditolak" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            {{-- akhir container --}}

      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <h3>Pengajuan Pembelian Mobil Bekas</h3>
        <div class="row">

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$hitungPengajuanBekasDiterima}}</h3>

                <p>Pengajuan Diterima</p>
              </div>
              <div class="icon">
                <i class="ion ion-checkmark"></i>
              </div>
              <a href="/beli-bekas-diterima" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$hitungPengajuanBekasPending}}</h3>

                <p>Pengajuan Pending</p>
              </div>
              <div class="icon">
                <i class="fa fa-hourglass"></i>
              </div>
              <a href="/kelola-pembelian-mobil-bekas" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$hitungPengajuanBekasDitolak}}</h3>

                <p>Pengajuan Ditolak</p>
              </div>
              <div class="icon">
                <i class="fa fa-ban"></i>
              </div>
              <a href="/beli-bekas-ditolak" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <h3>Pengajuan Penjualan Mobil Bekas</h3>
            <div class="row">

              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>{{$hitungPengajuanJualDiterima}}</h3>

                    <p>Pengajuan Diterima</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-checkmark"></i>
                  </div>
                  <a href="/jual-diterima" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>{{$hitungPengajuanJualPending}}</h3>

                    <p>Pengajuan Pending</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-hourglass"></i>
                  </div>
                  <a href="/kelola-penjualan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>{{$hitungPengajuanJualDitolak}}</h3>

                    <p>Pengajuan Ditolak</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-ban"></i>
                  </div>
                  <a href="/jual-ditolak" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->










              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
@endsection
