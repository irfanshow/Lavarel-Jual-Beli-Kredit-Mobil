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
                    <li ><a href="/list-mobil-tidak-login" class="nav-link">Mobil Baru</a></li>
                    <li class="active"><a href="/list-mobil-bekas-tidak-login" class="nav-link">Mobil Bekas</a></li>
                    <li ><a href="/pengajuan-jual-tidak-login" class="nav-link">Jual Mobil</a></li>
                    <li ><a href="/login" class="nav-link">Login</a></li>
                </ul>
              </nav>
            </div>


          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage " style=" background-image: url({{asset('/BeliMobilBekas.png')}} )">
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
        <div class="my-3 col-12 col-sm-8 col-md-5">

            <form action="" method="get">

                    <div class="input-group">

                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" name ="cari" placeholder="Cari Mobil">
                        <button class=" btn btn-primary">Cari</button>
                    </div>
            </form>

          </div>
        <div class="row">


            @foreach ($mobilBekas as $Bekas)

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="item-1">


                    @if ($Bekas->foto != NULL)
                    <img class="card-img-top img-fluid" style="width:400px;height:250px;"style="width:400px;height:250px;" src="{{asset('storage/'.$Bekas->foto)}}" alt="Not Found">
                    @else
                    <img class="card-img-top img-fluid" style="width:400px;height:250px;"style="width:400px;height:250px;" src="https://www.garduoto.com/wp-content/uploads/2021/02/ACC-Logo-Member-of-Astra-01.png" alt="Not Found">
                    @endif
                    <div class="item-1-contents">
                      <div class="text-center">
                    <h2><a href="#">{{$Bekas->dealer->nama_dealer}}</a></h3>
                      <h3><a href="#">{{$Bekas->nama}}</a></h3>


                      <div class="rent-price">Rp. {{number_format($Bekas->harga,0,',','.')}}</div>
                      </div>
                      <ul class="specs">
                        <li>
                          <span>Doors</span>
                          <span class="spec">{{$Bekas->kursi->jumlah}}</span>
                        </li>
                        <li>
                          <span>Seats</span>
                          <span class="spec">{{$Bekas->pintu->jumlah}}</span>
                        </li>
                        <li>
                          <span>Transmission</span>
                          <span class="spec">{{$Bekas->kategori}}</span>
                        </li>

                        <li>
                            <span>Tahun</span>
                            <span class="spec">{{$Bekas->tahun_mobil}}</span>
                          </li>

                        <li>
                            <span>Plat Nomor | Lokasi</span>
                            <span class="spec">{{$Bekas->plat}} | {{$Bekas->lokasi}}</span>
                          </li>

                      </ul>
                      <div class="d-flex action">
                        <a href="/beli-mobil-bekas/{{$Bekas->id_pengajuan_jual}}" class="btn btn-primary">Ajukan Pembelian</a>
                      </div>
                    </div>
                  </div>
              </div>
              @endforeach


      </div>
      {{$mobilBekas->withQueryString()->links()}}
    </div>
</div>
@endsection

