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
                    <li ><a href="/" class="nav-link">Beranda</a></li>
                    <li ><a href="/list-mobil" class="nav-link">Mobil Baru</a></li>
                    <li class="active"><a href="/list-mobil-bekas" class="nav-link">Mobil Bekas</a></li>
                    <li ><a href="/pengajuan-jual" class="nav-link">Jual Mobil</a></li>
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
              <h1>Beli Mobil Bekas Di ACC</h1>
              <p>ACC memfasilitasi kredit mobil bekas hampir seluruh merek mobil bekas dengan harga yang kompetitif</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">


            @foreach ($mobilBekas as $mobilBekas)

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="item-1">


                    @if ($mobilBekas->foto != NULL)
                    <img class="card-img-top img-fluid" style="width:400px;height:250px;"style="width:400px;height:250px;" src="{{asset('storage/'.$mobilBekas->foto)}}" alt="Not Found">
                    @else
                    <img class="card-img-top img-fluid" style="width:400px;height:250px;"style="width:400px;height:250px;" src="https://www.garduoto.com/wp-content/uploads/2021/02/ACC-Logo-Member-of-Astra-01.png" alt="Not Found">
                    @endif
                    <div class="item-1-contents">
                      <div class="text-center">
                    <h2><a href="#">{{$mobilBekas->dealer->nama_dealer}}</a></h3>
                      <h3><a href="#">{{$mobilBekas->nama}}</a></h3>


                      <div class="rent-price">Rp. {{number_format($mobilBekas->harga,0,',','.')}}</div>
                      </div>
                      <ul class="specs">
                        <li>
                          <span>Doors</span>
                          <span class="spec">{{$mobilBekas->kursi->jumlah}}</span>
                        </li>
                        <li>
                          <span>Seats</span>
                          <span class="spec">{{$mobilBekas->pintu->jumlah}}</span>
                        </li>
                        <li>
                          <span>Transmission</span>
                          <span class="spec">{{$mobilBekas->kategori}}</span>
                        </li>

                        <li>
                            <span>Tahun</span>
                            <span class="spec">{{$mobilBekas->tahun_mobil}}</span>
                          </li>

                        <li>
                            <span>Plat Nomor | Lokasi</span>
                            <span class="spec">{{$mobilBekas->plat}} | {{$mobilBekas->lokasi}}</span>
                          </li>

                      </ul>
                      <div class="d-flex action">
                        <a href="/beli-mobil-bekas/{{$mobilBekas->id_pengajuan_jual}}" class="btn btn-primary">Ajukan Pembelian</a>
                      </div>
                    </div>
                  </div>
              </div>
              @endforeach

      </div>
    </div>
</div>
@endsection

