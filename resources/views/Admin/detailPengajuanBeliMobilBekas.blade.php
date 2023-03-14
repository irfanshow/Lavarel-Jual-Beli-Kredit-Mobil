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

              <table>
                  <td>
                      <a href="/kelola-pembelian-mobil-baru" class="btn btn-primary btn-sm"><i class="right fas fa-angle-left mr-1"></i> Kembali</a>
                  </td>

                  <td>

                      <form action="/terima-pembelian-bekas/{{$beliBekas->id_kalkulasi}}" method="post">
                          @csrf
                          @method('put')
                          <button type="submit" class="btn btn-success btn-sm "><i class="right fas fa-check mr-1"></i>Terima</button>


                  </td>

                  <td>

                  </form>

                  <form action="/tolak-pembelian-bekas/{{$beliBekas->id_kalkulasi}}" method="post">
                      @csrf
                      @method('put')
                      <button type="submit" class="btn btn-danger btn-sm "><i class="right fas fa-ban mr-1"></i>Tolak</button>

                  </form>

                  </td>
              </table>

              <div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="item-1">

                        @if ($beliBekas->foto != NULL)
                        <img class="card-img-top img-fluid" style="width:400px;height:250px;"style="width:400px;height:250px;"src="{{asset('storage/'.$beliBekas->foto)}}" alt="Not Found">
                        @else
                        <img class="card-img-top img-fluid" style="width:400px;height:250px;"style="width:400px;height:250px;"src="https://www.garduoto.com/wp-content/uploads/2021/02/ACC-Logo-Member-of-Astra-01.png" alt="Not Found">
                        @endif


                        <div class="item-1-contents">
                          <div class="text-center">
                        <h2>Brand : {{$beliBekas->nama_dealer}}</h3>
                          <h3>Tipe : {{$beliBekas->nama_mobil}}</h3>


                          <div class="rent-price">Harga : Rp. {{number_format($beliBekas->harga,0,',','.')}}</div>
                          </div>
                          <ul class="specs">
                            <li>
                              <span>Doors</span>
                              <span class="spec">{{$beliBekas->jumlah_pintu}}</span>
                            </li>
                            <li>
                              <span>Seats</span>
                              <span class="spec">{{$beliBekas->jumlah_kursi}}</span>
                            </li>
                            <li>
                              <span>Transmission</span>
                              <span class="spec">{{$beliBekas->kategori}}</span>
                            </li>
                            <li>
                                <span>Tahun : </span>
                                <span class="spec">{{$beliBekas->tahun_mobil}}</span>
                              </li>

                            <li>
                                <span>Plat Nomor :</span>
                                <span class="spec">{{$beliBekas->plat}} </span>
                              </li>
                              <li>
                                <span>Lokasi :</span>
                                <span class="spec"> {{$beliBekas->lokasi}}</span>
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
                        <td>{{$beliBekas->nama_stnk}}</td>
                        <td>{{$beliBekas->masa_stnk}}</td>


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

          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>



              <tr>
                <th>Atas Nama Pembeli</th>
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
                <td>{{$beliBekas->nama_lengkap}}</td>
                <td>{{$beliBekas->email}}</td>
                <td>{{$beliBekas->no_hp}}</td>
                <td>{{$beliBekas->dp}}</td>
                <td>{{$beliBekas->tenor}} Tahun</td>
                <td>Rp. {{number_format($beliBekas->cicilan,0,',','.')}}</td>
                <td>{{$beliBekas->bunga}} %</td>

              </tr>

              </tbody>
              {{-- @endforeach --}}
              <tfoot>
              <tr>
                <th>Atas Nama Pembeli</th>
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
