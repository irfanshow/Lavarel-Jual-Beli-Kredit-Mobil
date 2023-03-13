@extends('templates.Admin.adminTemplates')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Timeline</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                <a href="/data-mobil-baru" class="btn btn-primary btn-sm"><i class="right fas fa-angle-left mr-1"></i> Kembali</a>
                <a href="/edit-mobil-baru/{{$detailMobilBaru->id_mobil}}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/delete-mobil-baru/{{$detailMobilBaru->id_mobil}}" class="btn btn-danger btn-sm">Delete</a>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
                @if ($detailMobilBaru->foto != NULL)
                <img class="card-img-top" src="{{asset('storage/'.$detailMobilBaru->foto)}}" alt="Not Found">
                @else
                <img class="card-img-top" src="https://www.garduoto.com/wp-content/uploads/2021/02/ACC-Logo-Member-of-Astra-01.png" alt="Not Found">
                @endif
                <div class="item-1-contents">
                  <div class="text-center">
                <h2><a href="#">{{$detailMobilBaru->dealer->nama_dealer}}</a></h3>
                  <h3><a href="#">{{$detailMobilBaru->nama}}</a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price">Rp.{{$detailMobilBaru->harga}},-</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Doors</span>
                      <span class="spec">{{$detailMobilBaru->kursi->jumlah}}</span>
                    </li>
                    <li>
                      <span>Seats</span>
                      <span class="spec">{{$detailMobilBaru->pintu->jumlah}}</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">{{$detailMobilBaru->kategori}}</span>
                    </li>

                  </ul>
                  {{-- <div class="d-flex action">
                    <a href="contact.html" class="btn btn-primary">Rent Now</a>
                  </div> --}}
                </div>
              </div>
          </div>
                  {{-- <div class="timeline-footer">
                    <a class="btn btn-warning btn-sm">Edit</a>
                    <a class="btn btn-danger btn-sm">Delete</a>
                  </div> --}}
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
