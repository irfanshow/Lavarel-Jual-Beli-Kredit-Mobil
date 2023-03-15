@extends('templates.Admin.adminTemplates')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Data Mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Lihat Data Mobil</a></li>
                <li class="breadcrumb-item active">Detail Mobil</li>
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
            <div class="">
              <!-- timeline time label -->
              <div class="">
                <a href="/data-mobil-bekas" class="btn btn-primary btn-sm"><i class="right fas fa-angle-left mr-1"></i> Kembali</a>
                {{-- <a href="/edit-mobil-baru/{{$detailMobilBekas->id_mobil}}" class="btn btn-warning btn-sm">Edit</a> --}}
                <a href="/delete-mobil-bekas/{{$detailMobilBekas->id_pengajuan_jual}}" class="btn btn-danger btn-sm">Delete</a>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="item-1">

                        @if ($detailMobilBekas->foto != NULL)
                        <img class="card-img-top img-fluid" style="width:400px;height:250px;"style="width:400px;height:250px;"src="{{asset('storage/'.$detailMobilBekas->foto)}}" alt="Not Found">
                        @else
                        <img class="card-img-top img-fluid" style="width:400px;height:250px;"style="width:400px;height:250px;"src="https://www.garduoto.com/wp-content/uploads/2021/02/ACC-Logo-Member-of-Astra-01.png" alt="Not Found">
                        @endif


                        <div class="item-1-contents">
                          <div class="text-center">
                        <h2>Brand : {{$detailMobilBekas->nama_dealer}}</h3>
                          <h3>Tipe : {{$detailMobilBekas->nama_mobil}}</h3>


                          <div class="rent-price">Harga : Rp. {{number_format($detailMobilBekas->harga,0,',','.')}}</div>
                          </div>
                          <ul class="specs">
                            <li>
                              <span>Doors</span>
                              <span class="spec">{{$detailMobilBekas->jumlah_pintu}}</span>
                            </li>
                            <li>
                              <span>Seats</span>
                              <span class="spec">{{$detailMobilBekas->jumlah_kursi}}</span>
                            </li>
                            <li>
                              <span>Transmission</span>
                              <span class="spec">{{$detailMobilBekas->kategori}}</span>
                            </li>
                            <li>
                                <span>Tahun : </span>
                                <span class="spec">{{$detailMobilBekas->tahun_mobil}}</span>
                              </li>

                            <li>
                                <span>Plat Nomor :</span>
                                <span class="spec">{{$detailMobilBekas->plat}} </span>
                              </li>
                              <li>
                                <span>Lokasi :</span>
                                <span class="spec"> {{$detailMobilBekas->lokasi}}</span>
                              </li>


                          </ul>

                        </div>
                      </div>
                  </div>

                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>



                      <tr>
                        <th>STNK Atas Nama Pemilik Mobil</th>
                        <th>Masa STNK</th>



                      </tr>
                      </thead>




                      <tbody>
                      <tr>
                        <td>{{$detailMobilBekas->nama_stnk}}</td>
                        <td>{{$detailMobilBekas->masa_stnk}}</td>


                      </tr>

                      </tbody>
                      {{-- @endforeach --}}
                      <tfoot>
                      <tr>
                        <th>STNK Atas Nama Pemilik Mobil</th>
                        <th>Masa STNK</th>

                      </tr>
                      </tfoot>
                    </table>
                  </div>




                </div>
              </div>


            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
