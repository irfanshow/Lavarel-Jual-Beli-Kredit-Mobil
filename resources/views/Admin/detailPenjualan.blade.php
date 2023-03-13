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
                <a href="/terima-penjualan/{{$jual->id_pengajuan_jual}}" class="btn btn-success btn-sm">Terima</a>
                <a href="/tolak-penjualan/{{$jual->id_pengajuan_jual}}" class="btn btn-danger btn-sm">Tolak</a>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
                @if ($jual->foto != NULL)
                <img class="card-img-top" src="{{asset('storage/'.$jual->foto)}}" alt="Not Found">
                @else
                <img class="card-img-top" src="https://www.garduoto.com/wp-content/uploads/2021/02/ACC-Logo-Member-of-Astra-01.png" alt="Not Found">
                @endif
                <div class="item-1-contents">
                  <div class="text-center">
                <h2><a href="#">{{$jual->dealer->nama_dealer}}</a></h3>
                  <h3><a href="#">{{$jual->nama}}</a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price">Rp.{{$jual->harga}},-</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Doors</span>
                      <span class="spec">{{$jual->kursi->jumlah}}</span>
                    </li>
                    <li>
                      <span>Seats</span>
                      <span class="spec">{{$jual->pintu->jumlah}}</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">{{$jual->kategori}}</span>
                    </li>

                  </ul>

                </div>
              </div>
          </div>

          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>



              <tr>
                <th>Tahun Mobil</th>
                <th>Atas Nama STNK</th>
                <th>Masa Berlaku STNK</th>
                <th>Plat Nomor</th>
                <th>Lokasi</th>

              </tr>
              </thead>




              <tbody>
              <tr>

                <td>{{$jual->tahun_mobil}}</td>
                <td>{{$jual->nama_stnk}}</td>
                <td>{{$jual->masa_stnk}}</td>
                <td>{{$jual->plat}}</td>
                <td>{{$jual->lokasi}}</td>

              </tr>

              </tbody>
              {{-- @endforeach --}}
              <tfoot>
              <tr>
                <th>Tahun Mobil</th>
                <th>Atas Nama STNK</th>
                <th>Masa Berlaku STNK</th>
                <th>Plat Nomor</th>
                <th>Lokasi</th>

              </tr>
              </tfoot>
            </table>
          </div>
          <div class="time-label">
            <a href="/kelola-penjualan" class="btn btn-primary btn-sm"><i class="right fas fa-angle-left mr-1"></i> Kembali</a>
            <a href="/terima-penjualan/{{$jual->id_pengajuan_jual}}" class="btn btn-success btn-sm">Terima</a>
            <a href="/tolak-penjualan/{{$jual->id_pengajuan_jual}}" class="btn btn-danger btn-sm">Tolak</a>
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
