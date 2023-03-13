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
              <a href="index.html">CarRent</a>
            </div>
          </div>

          <div class="col-9  text-right">


            <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>



            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="services.html" class="nav-link">Services</a></li>
                <li><a href="cars.html" class="nav-link">Cars</a></li>
                <li><a href="about.html" class="nav-link">About</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="active"><a href="pengajuan" class="nav-link">Contact</a></li>
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
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light" id="contact-section">
    <div class="container">
      <div class="row justify-content-center text-center">
      <div class="col-7 text-center mb-5">
        <h2>Contact Us Or Use This Form To Rent A Car</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
      </div>
    </div>
<form class="form-horizontal" action="add-mobil" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-8 mb-5" >

                @csrf
                <fieldset>

                <!-- Form Name -->
                <legend>Data Mobil</legend>

                <div class="form-group row">

                    <div class="col-md-6 mb-4 mb-lg-0">
                        <label class="col-md-6 mb-4 mb-lg-0" >Merk/Brand</label>
                        <select  name="merk" class="form-control">
                            @foreach ($dealer as $dealer)
                            <option value="{{$dealer->id_dealer}}">{{$dealer->nama_dealer}}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="col-md-6 mb-4 mb-lg-0" for="mobil">Nama Mobil</label>
                        <div class="col-md-15">
                        <input id="mobil" name="nama" placeholder="Nama Mobil" class="form-control input-md" required="" type="text">
                    </div>



                  </div>


                  <div class="form-group row ml-3 mt-3">

                    <div class="md-6">
                        <label class="col-md-2 mb-4 mb-lg-0" >Jumlah Kursi</label>
                          <select  name="kursi" class="form-control">
                            @foreach ($kursi as $kursi)
                            <option value="{{$kursi->id_kursi}}">{{$kursi->jumlah}}</option>

                            @endforeach

                          </select>
                    </div>

                    <div class="col-md-6">
                        <label class="col-md-6 mb-4 mb-lg-0" >Jumlah Pintu</label>

                          <select  name="pintu" class="form-control">
                            @foreach ($pintu as $pintu)
                            <option value="{{$pintu->id_pintu}}">{{$pintu->jumlah}}</option>

                            @endforeach

                          </select>
                    </div>



                </div>

                <div class="form-group row ml-3 mt-3">
                    <div class="col-md-6">
                        <label class="col-md-4 control-label" >Kategori Mobil</label>

                          <select  name="kategori" class="form-control">
                              <option value="MT">MT (Transmisi Manual)</option>
                              <option value="AT">AT (Transmisi Otomatis)</option>
                          </select>
                    </div>


                    <div class="col-md-6">
                        <label class="col-md-4 control-label" >Tahun Mobil</label>
                        <input id="mobil" name="Tahun" placeholder="Tahun" class="form-control input-md" required="" type="number">
                    </div>

                </div>
                {{-- Akhir dari form data mobil --}}


                {{-- Awal Info Mobil --}}
                <legend class="ml-3">Informasi Mobil</legend>

                <div class="form-group row">

                    <div class="col-md-6 mb-4 mb-lg-0">
                        <label class="col-md-6 mb-4 mb-lg-0" >Atas Nama STNK</label>
                        <input id="mobil" name="stnk" placeholder="Atas Nama STNK" class="form-control input-md" required="" type="text">
                    </div>

                    <div class="col-md-6">
                        <label class="col-md-6 mb-4 mb-lg-0" for="mobil">Masa Berlaku STNK</label>
                        <div class="col-md-15">
                        <input id="mobil" name="berlaku" placeholder="Masa Berlaku STNK" class="form-control input-md" required="" type="date">
                    </div>



                  </div>


                  <div class="form-group row ml-3 mt-2">

                    <div class="col-md-6 mb-4 mb-lg-0">
                        <label class="col-md-20 mb-4 mb-lg-0" >Nomor Plat</label>
                        <input id="mobil" name="berlaku" placeholder="Nomor Plat" class="form-control input-md" required="" type="text">
                    </div>

                    <div class="col-md-6">
                        <label class="col-md-6 mb-4 mb-lg-0" >Lokasi</label>

                        <input id="mobil" name="berlaku" placeholder="Lokasi Mobil Saat ini" class="form-control input-md" required="" type="text">
                    </div>

                </div>

                </div>

                <div class="form-group row">
                    <div class="col-md-12 ml-3">
                        <label class="col-md-6 mb-4 mb-lg-0" >Harga Jual</label>
                        <input name="" id="" class="form-control" placeholder="0" ></input>
                </div>








                 <!-- File Button -->
                <div class="form-group ml-3">
                  <label class="col-md-4 control-label" for="filebutton">Foto Mobil</label>
                  <div class="col-md-4">
                    <input id="filebutton" name="foto" class="input-file" type="file">
                  </div>
                </div>
                {{-- Akhir Info Mobil --}}


                {{-- Awal Data diri --}}
                <div class="form-group row ml-4">
                <legend class="mt-3">Data Diri</legend>

                <div class="col-md-6 mb-4 mb-lg-0">
                    <label class="col-md-6 mb-4 mb-lg-0" >Nama Lengkap</label>
                    <input id="mobil" name="stnk" placeholder="Nama Lengkap" class="form-control input-md" required="" type="text">
                </div>

                <div class="col-md-6">
                    <label class="col-md-6 mb-4 mb-lg-0" for="mobil">Alamat E-mail</label>
                    <div class="col-md-15">
                    <input id="mobil" name="berlaku" placeholder="E-mail" class="form-control input-md" required="" type="text">
                </div>

                </div>

                <div class="form-group row ml-3">
                    <label class="col-md-6 mb-4 mb-lg-0" for="mobil">Nomor Handphone</label>
                    <div class="col-md-12">
                      <input type="text" class="form-control" placeholder="08XXXX">
                    </div>
                  </div>




                <!-- Button -->

                <div class="form-group mt-3">
                  <label class="col-md-4 control-label" for="singlebutton"></label>
                  <div class="col-md-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

                </fieldset>

                </form>
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
