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
              <a href="/">ASTRA CREDIT COMPANIES</a>
            </div>
          </div>

          <div class="col-9  text-right">


            <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>



            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="services.html" class="nav-link">Services</a></li>
                <li><a href="/list-mobil" class="nav-link">Cars</a></li>
                <li><a href="about.html" class="nav-link">About</a></li>
                <li class="active"><a href="/pengajuan-jual" class="nav-link">Jual Mobil</a></li>
                <li ><a href="pengajuan" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


        </div>
      </div>

    </header>

  <div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url({{asset('/bg-jual.png')}})">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center">
            <h1>Jual Mobil di ACC</h1>
            <p>Mau jual mobil baru atau jual mobil bekas? Mulai dari city car, mobil LCGC, sampai mobil keluarga. ACC siap bantu jual mobil kamu!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="container site-section mb-5">
            <div class="row justify-content-center text-center">
              <div class="col-7 text-center mb-5">
                <h2>Cara Jual Mobil</h2>
              </div>
            </div>
            <div class="how-it-works d-flex">
              <div class="step">
                <span class="number"><span>01</span></span>
                <span class="caption">Daftarkan Mobil Pada Form Dibawah</span>
              </div>
              <div class="step">
                <span class="number"><span>02</span></span>
                <span class="caption">Atur Jadwal Inspeksi</span>
              </div>
              <div class="step">
                <span class="number"><span>03</span></span>
                <span class="caption">Iklan Mobil Ditayangkan</span>
              </div>
              <div class="step">
                <span class="number"><span>04</span></span>
                <span class="caption">Unit Laku Terjual</span>
              </div>
              <div class="step">
                <span class="number"><span>05</span></span>
                <span class="caption">Done</span>
              </div>

            </div>
          </div>

          <h1>DAFTARKAN MOBILMU</h1>
<form class="form-horizontal" action="/ajukanPembelianMobilBaru" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-8 mb-5" >

                @csrf
                <fieldset>

                <!-- Form Name -->
                <legend>Data Mobil</legend>

                <div class="form-group row">
@foreach ($kalkulasi as $kakulasi)


                    <div class="col-md-6 mb-4 mb-lg-0">
                        <label class="col-md-6 mb-4 mb-lg-0" >Merk/Brand</label>

                        <input id="mobil" readonly  placeholder="Nama Mobil" class="form-control input-md"
                        value="{{$kalkulasi->dealer->nama_dealer}}"required="" type="text">
                        <input id="mobil" readonly name="merk" placeholder="Nama Mobil" class="form-control input-md"
                        value="{{$kalkulasi->dealer->id_dealer}}"required="" type="text">

                    </div>

                    <div class="col-md-6">
                        <label class="col-md-6 mb-4 mb-lg-0" for="mobil">Nama Mobil</label>
                        <div class="col-md-15">
                        <input id="mobil" value="{{$kalkulasi->nama}}" readonly name="mobil" placeholder="Nama Mobil" class="form-control input-md" required="" type="text">
                    </div>



                  </div>


                  <div class="form-group row ml-3 mt-3">

                    <div class="md-6">
                        <label class="col-md-2 mb-4 mb-lg-0" >Jumlah Kursi</label>

                        <input id="mobil" readonly name="kursi" placeholder="Nama Mobil" class="form-control input-md"
                        value="{{$kalkulasi->kursi->jumlah}}"required="" type="text">

                    </div>

                    <div class="col-md-6">
                        <label class="col-md-6 mb-4 mb-lg-0" >Jumlah Pintu</label>

                        <input id="mobil" readonly name="pintu" placeholder="Nama Mobil" class="form-control input-md"
                        value="{{$kalkulasi->pintu->jumlah}}"required="" type="text">

                    </div>



                </div>

                <div class="form-group row col-ml-3 mt-3">
                    <div class="col-md-12">
                        <label class="col-md-4 control-label" >Kategori Mobil</label>

                        <input id="mobil" readonly name="kategori" placeholder="Nama Mobil" class="form-control input-md"
                        value="{{$kalkulasi->kategori}}"required="" type="text">

                        </div>
                    </div>





                </div>
                {{-- Akhir dari form data mobil --}}


                {{-- Awal Info Mobil --}}
                <legend class="ml-3">Informasi Pembayaran</legend>

                <div class="form-group row">

                    <div class="col-md-6 mb-4 mb-lg-0">
                        <label class="col-md-6 mb-4 mb-lg-0" >Pendapatan Per Bulan</label>
                        <input id="mobil" name="pendapatan" placeholder="Contoh : 2.000.000" class="form-control input-md" required="" type="number">
                    </div>

                    <div class="col-md-6 mt-4">
                        <label class="col-md-6 mb-4 mb-lg-0" for="mobil">Tenor</label>
                        <div class="col-md-15">
                        <input id="mobil" name="tenor" placeholder="Contoh : 1" class="form-control input-md" required="" type="number">
                    </div>



                  </div>


                  <div class="form-group row ml-3 mt-2">

                    <div class="col-md-20 mb-4 mb-lg-0 ml-3">
                        <label class="col-md-20 mb-4 mb-lg-0" >DP</label>
                        <input id="mobil" name="dp" placeholder="Contoh : 20.000.000" class="form-control input-md" required="" type="number">
                    </div>



                </div>

                </div>

                {{-- <div class="form-group row">
                    <div class="col-md-12 ml-3">
                        <label class="col-md-6 mb-4 mb-lg-0" >Harga Jual</label>
                        <input name="harga" id="" class="form-control" placeholder="Contoh : 150.000.0000" ></input>
                </div> --}}








                 {{-- <!-- File Button -->
                <div class="form-group ml-3">
                  <label class="col-md-4 control-label" for="filebutton">Foto Mobil</label>
                  <div class="col-md-4">
                    <input id="filebutton" name="foto" class="input-file" type="file">
                  </div>
                </div>
                Akhir Info Mobil --}}


                {{-- Awal Data diri --}}
                <div class="form-group row ml-4">
                <legend class="mt-3">Data Diri</legend>

                <div class="col-md-6 mb-4 mb-lg-0">
                    <label class="col-md-6 mb-4 mb-lg-0" >Nama Lengkap</label>
                    <input id="mobil" name="lengkap" placeholder="Nama Lengkap" class="form-control input-md" required="" type="text">
                </div>

                <div class="col-md-6">
                    <label class="col-md-6 mb-4 mb-lg-0" for="mobil">Alamat E-mail</label>
                    <div class="col-md-15">
                    <input id="mobil" name="email" placeholder="E-mail" class="form-control input-md" required="" type="text">
                </div>

                </div>

                <div class="form-group row ml-3 mt-2">
                    <label class="col-md-6 mb-4 mb-lg-0" for="mobil">Nomor Handphone</label>
                    <div class="col-md-12">
                      <input type="text" name="no_hp" class="form-control" placeholder="08XXXX">
                    </div>
                  </div>




                <!-- Button -->

                <div class="form-group mt-3">
                  <label class="col-md-4 control-label" for="singlebutton"></label>
                  <div class="col-md-5">
                    <button type="submit" class="btn btn-primary">Berikutnya</button>
                  </div>
                </div>

                </fieldset>

                </form>
                @endforeach
        </div>
        <div class="col-lg-4 ml-auto">
          <div class="bg-white p-3 p-md-5">
            <h3 class="text-black mb-4">Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block mb-3">
                <span class="d-block text-black">Address:</span>
                <span>34 Street Name, City Name Here, United States</span></li>
              <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
              <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
