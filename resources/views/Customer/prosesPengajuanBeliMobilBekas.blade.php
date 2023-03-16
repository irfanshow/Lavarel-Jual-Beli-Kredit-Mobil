@extends('Customer.templateCustomer')


@section('content')
<header class="site-navbar site-navbar-target" role="banner">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>

    <div class="container">
      <div class="row align-items-center position-relative">

        <div class="col-3 ">
          <div class="site-logo">
            <a href="index.html">ASTRA CREDIT COMPANIES</a>

          </div>
        </div>

        <div class="col-9  text-right">


          <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>



          <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li ><a href="/" class="nav-link">Beranda</a></li>
                <li ><a href="/list-mobil" class="nav-link">Mobil Baru</a></li>
                <li ><a href="/list-mobil-bekas" class="nav-link">Mobil Bekas</a></li>
                <li ><a href="/pengajuan-jual" class="nav-link">Jual Mobil</a></li>
                <li class="active"><a href="/proses-pengajuan-user-bekas" class="nav-link">Proses Pengajuan</a></li>
            </ul>
          </nav>
        </div>


      </div>
    </div>

  </header>

  <div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center">

            <h1>Proses Pengajuan</h1>
            <p>Pantau Proses Pengajuan Pembeliam Mobilmu Disini!</p>

          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5 mt-5">
            <h2 class="heading-section">Table Proses Pengajuan Pembelian Mobil</h2>
            <a href="proses-pengajuan-user-baru"><button class="btn btn-info">Mobil Baru</button></a> | <a href="#" class="btn btn-info disabled" role="button" >Mobil Bekas</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-wrap mb-5">
                <h2>Pengajuan Aktif</h2>




                <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Mobil</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Status</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($bekas as $no=>$bekas)
                        <th scope="row">{{$no+1}}</th>

                        <td>Mobil Bekas</td>
                        <td>{{$bekas->nama_dealer}}</td>
                        <td>{{$bekas->nama_mobil}}</td>
                        <td><button class="btn btn-warning">{{$bekas->status}}</button></td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>




            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-wrap mb-5">
                <h2>Pengajuan Tidak Aktif</h2>
                <table class="table">


                    <thead class="thead-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Mobil</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Status</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($bekasSelesai as $no=>$bekas)
                      <tr>
                        <th scope="row">{{$no+1}}</th>
                        <td>Mobil Bekas</td>
                        <td>{{$bekas->nama_dealer}}</td>
                        <td>{{$bekas->nama_mobil}}</td>

                        @if ($bekas->status == 'Ditolak')
                            <td><button class="btn btn-danger">{{$bekas->status}}</button></td>
                        @else
                            <td><button class="btn btn-success">{{$bekas->status}}</button></td>
                        @endif


                      </tr>
                      @endforeach

                    </tbody>

                  </table>



            </div>
        </div>
    </div>


</div>

@endsection


