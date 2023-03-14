@extends('templates.Admin.adminTemplates')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Pengajuan Penjualan Mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pengajuan Penjualan</a></li>
              <li class="breadcrumb-item active">Data Mobil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
                <a href="/kelola-penjualan" class="btn btn-primary btn-sm"><i class="right fas fa-angle-left mr-1"></i> Kembali</a>
                <a href="/terima-penjualan/{{$beliBaru->id_pengajuan_jual}}" class="btn btn-success btn-sm">Terima</a>
                <a href="/tolak-penjualan/{{$beliBaru->id_pengajuan_jual}}" class="btn btn-danger btn-sm">Tolak</a>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="item-1">

                        @if ($beliBaru->foto != NULL)
                        <img class="card-img-top img-fluid" style="width:400px;height:250px;"style="width:400px;height:250px;"src="{{asset('storage/'.$beliBaru->foto)}}" alt="Not Found">
                        @else
                        <img class="card-img-top img-fluid" style="width:400px;height:250px;"style="width:400px;height:250px;"src="https://www.garduoto.com/wp-content/uploads/2021/02/ACC-Logo-Member-of-Astra-01.png" alt="Not Found">
                        @endif


                        <div class="item-1-contents">
                          <div class="text-center">
                        <h2>Brand : {{$beliBaru->nama_dealer}}</h3>
                          <h3>Tipe : {{$beliBaru->nama_mobil}}</h3>


                          <div class="rent-price">Harga : Rp. {{number_format($beliBaru->harga,0,',','.')}}</div>
                          </div>
                          <ul class="specs">
                            <li>
                              <span>Doors</span>
                              <span class="spec">{{$beliBaru->jumlah_pintu}}</span>
                            </li>
                            <li>
                              <span>Seats</span>
                              <span class="spec">{{$beliBaru->jumlah_kursi}}</span>
                            </li>
                            <li>
                              <span>Transmission</span>
                              <span class="spec">{{$beliBaru->kategori}}</span>
                            </li>

                          </ul>

                        </div>
                      </div>
                  </div>

          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>



              <tr>
                <th>Atas Nama</th>
                <th>E-Mail</th>
                <th>No.hp</th>
                <th>Uang Muka(DP)</th>
                <th>Tenor</th>
                <th>Cicilan Per Bulan</th>
                <th>Bunga</th>


              </tr>
              </thead>




              <tbody>
              <tr>
                <td>{{$beliBaru->nama_lengkap}}</td>
                <td>{{$beliBaru->email}}</td>
                <td>{{$beliBaru->no_hp}}</td>
                <td>{{$beliBaru->dp}}</td>
                <td>{{$beliBaru->tenor}} Tahun</td>
                <td>Rp. {{number_format($beliBaru->cicilan,0,',','.')}}</td>
                <td>{{$beliBaru->bunga}} %</td>

              </tr>

              </tbody>
              {{-- @endforeach --}}
              <tfoot>
              <tr>
                <th>Atas Nama</th>
                <th>E-Mail</th>
                <th>No.hp</th>
                <th>Uang Muka(DP)</th>
                <th>Tenor</th>
                <th>Cicilan Per Bulan</th>
                <th>Bunga</th>

              </tr>
              </tfoot>
            </table>
          </div>
          <div class="time-label">
            <a href="/kelola-penjualan" class="btn btn-primary btn-sm"><i class="right fas fa-angle-left mr-1"></i> Kembali</a>
            <a href="/terima-penjualan/{{$beliBaru->id_pengajuan_jual}}" class="btn btn-success btn-sm">Terima</a>
            <a href="/tolak-penjualan/{{$beliBaru->id_pengajuan_jual}}" class="btn btn-danger btn-sm">Tolak</a>
          </div>

                </div>
              </div>


            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
