@extends('Customer.templateCustomer')


@section('content')
<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    <header class="site-navbar site-navbar-target" role="banner">

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
                <li class="active"><a href="/" class="nav-link">Beranda</a></li>
                <li><a href="/list-mobil-tidak-login" class="nav-link">Mobil Baru</a></li>
                <li><a href="/list-mobil-bekas-tidak-login" class="nav-link">Mobil Bekas</a></li>
                <li><a href="/pengajuan-jual-tidak-login" class="nav-link">Jual Mobil</a></li>
                <li ><a href="/login" class="nav-link">Login</a></li>

              </ul>
            </nav>
          </div>


        </div>
      </div>

    </header>

  <div class="ftco-blocks-cover-1">

    <div class="ftco-cover-1 overlay" style="background-image: url('{{asset('storage/'.$mobilBaru->foto)}}')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <h1>New Offer</h1>
            <div class="feature-car-rent-box-1">

              <h3>{{$mobilBaru->nama}}</h3>
              <ul class="list-unstyled">
                <li>
                  <span>Doors</span>
                  <span class="spec">{{$mobilBaru->pintu->jumlah}}</span>
                </li>
                <li>
                  <span>Seats</span>
                  <span class="spec">{{$mobilBaru->kursi->jumlah}}</span>
                </li>
                <li>
                  <span>Transmission</span>
                  <span class="spec">{{$mobilBaru->kategori}}</span>
                </li>
                <li>
                    <span>Harga</span>
                    <span class="spec">Rp. {{number_format($mobilBaru->harga,0,',','.')}}</span>
                  </li>

              </ul>
              <div class="d-flex align-items-center bg-light p-3">
                {{-- <span>Rp. {{number_format($mobilBaru->harga,0,',','.')}}</span><br> --}}
                <a href="/beli-mobil-baru/{{$mobilBaru->id_mobil}}" class="ml-auto btn btn-primary">Ajukan Pembelian</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







    </div>


  <div class=" mb-2 site-section section-3 mt-2" style="background-image: url('images/hero_2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-5">
          <h2 class="text-white">Our services</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="flaticon-car-1"></span>
            </span>
            <div class="service-1-contents">
                <h3><a class="text-decoration: none;" href="/list-mobil">Beli Baru</a></h3>
              <p>ACC menyediakan kredit mobil baru dengan beragam merek mobil, seperti Toyota, Daihatsu, Isuzu, Honda, dan lainnya. Harga terjangkau & cicilan yang ringan bikin Anda mudah gapai impian.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 ">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="flaticon-car"></span>
            </span>
            <div class="service-1-contents">
              <h3><a class="text-decoration: none;" href="/list-mobil-bekas">Beli Bekas</a></h3>
              <p>ACC memfasilitasi kredit mobil bekas hampir seluruh merek mobil bekas dengan harga yang kompetitif</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="flaticon-valet"></span>
            </span>
            <div class="service-1-contents">
              <h3><a class="text-decoration: none;" href="/pengajuan-jual">Jual Mobil</a></h3>
              <p>Mau jual mobil baru atau jual mobil bekas? Mulai dari city car, mobil LCGC, sampai mobil keluarga. ACC siap bantu jual mobil kamu!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
