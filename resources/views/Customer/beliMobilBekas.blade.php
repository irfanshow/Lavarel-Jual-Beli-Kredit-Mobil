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
                <li ><a href="/" class="nav-link">Beranda</a></li>
                <li ><a href="/list-mobil" class="nav-link">Mobil Baru</a></li>
                <li class="active"> <a href="/list-mobil-bekas" class="nav-link">Mobil Bekas</a></li>
                <li ><a href="/pengajuan-jual" class="nav-link">Jual Mobil</a></li>
                <li ><a href="/proses-pengajuan-user-baru" class="nav-link">Proses Pengajuan</a></li>
                <li ><a href="" class="nav-link" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user mr-2" aria-hidden="true" ></i>Log Out</a></li>
            </ul>

          </nav>

        </div>


      </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin Log Out ? </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
         <a href="/logout"><button type="button" class="btn btn-primary" >Ya</button></a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
        </div>
      </div>
    </div>
  </div>
    </div>

  </header>

  <div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url({{asset('/BeliMobilBekasPage')}})">
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

  <div class="site-section bg-light" id="contact-section">
    <div class="container">


          <h1>ISI FORM DIBAWAH</h1>
<form class="form-horizontal" action="/kalkulasiBekas" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-8 mb-5" >

                @csrf
                <fieldset>

                <!-- Form Name -->
                <legend>Data Mobil</legend>

                <div class="form-group row">

                    <div class="col-md-6 mb-4 mb-lg-0">
                        <label class="col-md-6 mb-4 mb-lg-0" >Merk/Brand</label>

                        <input id="mobil" readonly name="merk" placeholder="Nama Mobil" class="form-control input-md"
                        value="{{$detailMobilBekas->dealer->nama_dealer}}"required="" type="text">
                        {{-- <input id="mobil" readonly name="merk" placeholder="Nama Mobil" class="form-control input-md"
                        value="{{$detailMobilBekas->dealer->id_dealer}}"required="" type="hidden"> --}}

                    </div>

                    <div class="col-md-6">
                        <label class="col-md-6 mb-4 mb-lg-0" for="mobil">Nama Mobil</label>
                        <div class="col-md-15">
                        <input id="mobil" value="{{$detailMobilBekas->nama}}" readonly name="mobil" placeholder="Nama Mobil" class="form-control input-md" required="" type="text">
                    </div>



                  </div>


                  <div class="form-group row ml-3 mt-3">

                    <div class="md-6">
                        <label class="col-md-2 mb-4 mb-lg-0" >Jumlah Kursi</label>

                        <input id="mobil" readonly name="kursi" placeholder="Nama Mobil" class="form-control input-md"
                        value="{{$detailMobilBekas->kursi->jumlah}}"required="" type="text">

                    </div>

                    <div class="col-md-6">
                        <label class="col-md-6 mb-4 mb-lg-0" >Jumlah Pintu</label>

                        <input id="mobil" readonly name="pintu" placeholder="Nama Mobil" class="form-control input-md"
                        value="{{$detailMobilBekas->pintu->jumlah}}"required="" type="text">

                    </div>



                </div>

                <div class="form-group row col-ml-3 mt-3">
                    <div class="col-md-12">
                        <label class="col-md-4 control-label" >Kategori Mobil</label>

                        <input id="mobil" readonly name="kategori" placeholder="Nama Mobil" class="form-control input-md"
                        value="{{$detailMobilBekas->kategori}}"required="" type="text">

                        </div>
                    </div>

                    <input id="mobil" readonly name="harga" placeholder="Nama Mobil" class="form-control input-md"
                    value="{{$detailMobilBekas->harga}}"required="" type="hidden">

                    <input id="mobil" readonly name="foto" placeholder="Nama Mobil" class="form-control input-md"
                    value="{{$detailMobilBekas->foto}}"required="" type="hidden">

                    <input id="mobil" readonly name="plat" placeholder="Nama Mobil" class="form-control input-md"
                    value="{{$detailMobilBekas->plat}}"required="" type="hidden">

                    <input id="mobil" readonly name="lokasi" placeholder="Nama Mobil" class="form-control input-md"
                    value="{{$detailMobilBekas->lokasi}}"required="" type="hidden">

                    <input id="mobil" readonly name="stnk" placeholder="Nama Mobil" class="form-control input-md"
                    value="{{$detailMobilBekas->nama_stnk}}"required="" type="hidden">

                    <input id="mobil" readonly name="masa" placeholder="Nama Mobil" class="form-control input-md"
                    value="{{$detailMobilBekas->masa_stnk}}"required="" type="hidden">

                    <input id="mobil" readonly name="tahun" placeholder="Nama Mobil" class="form-control input-md"
                    value="{{$detailMobilBekas->tahun_mobil}}"required="" type="hidden">








                </div>
                {{-- Akhir dari form data mobil --}}


                {{-- Awal Info Mobil --}}
                <legend class="ml-3">Informasi Pembayaran</legend>

                <div class="form-group row col-ml-3 mt-3">
                    <div class="col-md-12">
                        <label class="col-md-4 control-label" >Uang Muka(DP)</label>
                        <input id="mobil" readonly  placeholder="Nama Mobil" class="form-control input-md"
                        value="Rp.{{number_format($dp,0,',','.')}}"required="" type="text">
                        <input id="mobil" readonly name="dp" placeholder="Nama Mobil" class="form-control input-md"
                        value="{{$dp}}"required="" type="hidden">

                        </div>
                    </div>

                    <h3 class="mt-3">Pilih Paket Cicilan</h3>
                {{-- //Masukkin ke table table --}}
                <div class="form-group row">

                    <table class="table table-borderless table-secondary">
                        <thead>
                          <tr>
                            <th></th>
                            <th scope="col">Tenor</th>
                            <th scope="col">Cicilan Per Bulan</th>
                          </tr>
                        </thead>
                        <tbody>

                            {{-- Mulai item Radio tenor 5--}}
                          <tr>

                            <td>
                                <input class="form-check-input" type="radio" name="tenor" id="tenor" value="5" required>
                                <input class="form-check-input" type="hidden" name="cicilan" id="tenor" value="{{$tenor5}}">
                                <input class="form-check-input" type="hidden" name="bunga" id="tenor" value="8">
                            </td>

                            <td>
                                <label class="form-check-label" for="tenor">
                                            <span style="font-weight:bold">5 Tahun</span>
                                            <p>Bunga 8%</p>

                                </label>
                            </td>

                            <td>
                                Rp. {{number_format($tenor5,0,',','.')}}
                            </td>

                          </tr>
                          {{-- Akhir item radio tenor 5 --}}

                           {{-- Mulai item Radio tenor 4--}}
                          <tr>

                            <td>
                                <input class="form-check-input" type="radio" name="tenor" id="tenor" value="4">
                                <input class="form-check-input" type="hidden" name="cicilan" id="tenor" value="{{$tenor4}}">
                                <input class="form-check-input" type="hidden" name="bunga" id="tenor" value="7">

                            </td>

                            <td>
                                <label class="form-check-label" for="tenor">
                                            <span style="font-weight:bold">4 Tahun</span>
                                            <p>Bunga 7%</p>

                                </label>
                            </td>

                            <td>
                                Rp. {{number_format($tenor4,0,',','.')}}
                            </td>

                          </tr>
                          {{-- Akhir item radio tenor 4 --}}


                        {{-- Mulai item Radio tenor 3--}}

                          <tr>

                            <td>
                                <input class="form-check-input" type="radio" name="tenor" id="tenor" value="3">
                                <input class="form-check-input" type="hidden" name="cicilan" id="tenor" value="{{$tenor3}}">
                                <input class="form-check-input" type="hidden" name="bunga" id="tenor" value="6">
                            </td>

                            <td>
                                <label class="form-check-label" for="tenor">
                                            <span style="font-weight:bold">3 Tahun</span>
                                            <p>Bunga 6%</p>

                                </label>
                            </td>

                            <td>
                                Rp. {{number_format($tenor3,0,',','.')}}
                            </td>

                          </tr>
                          {{-- Akhir item radio tenor 3--}}

                        {{-- Mulai item Radio tenor 2--}}

                          <tr>

                            <td>
                                <input class="form-check-input" type="radio" name="tenor" id="tenor" value="2">
                                <input class="form-check-input" type="hidden" name="cicilan" id="tenor" value="{{$tenor2}}">
                                <input class="form-check-input" type="hidden" name="bunga" id="tenor" value="5">
                            </td>

                            <td>
                                <label class="form-check-label" for="tenor">
                                            <span style="font-weight:bold">2 Tahun</span>
                                            <p>Bunga 5%</p>

                                </label>
                            </td>

                            <td>
                                Rp. {{number_format($tenor2,0,',','.')}}
                            </td>

                          </tr>
                          {{-- Akhir item radio tenor 2--}}

                                                  {{-- Mulai item Radio tenor 1--}}

                          <tr>

                            <td>
                                <input class="form-check-input" type="radio" name="tenor" id="tenor" value="1">
                                <input class="form-check-input" type="hidden" name="cicilan" id="tenor" value="{{$tenor1}}">
                                <input class="form-check-input" type="hidden" name="bunga" id="tenor" value="4">
                            </td>

                            <td>
                                <label class="form-check-label" for="tenor">
                                            <span style="font-weight:bold">1 Tahun</span>
                                            <p>Bunga 4%</p>

                                </label>
                            </td>

                            <td>
                                Rp. {{number_format($tenor1,0,',','.')}}
                            </td>

                          </tr>
                          {{-- Akhir item radio tenor 1--}}

                        </tbody>
                      </table>

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
                <div class="form-group row md-5">
                <legend class="mt-3">Data Diri</legend>

                <div class="col-md-6 mb-4 mb-lg-0">
                    <label class="col-md-6 mb-4 mb-lg-0" >Nama Lengkap</label>
                    <input id="mobil" name="lengkap" placeholder="Nama Lengkap" class="form-control input-md" required="" type="text">
                </div>

                <div class="col-md-6">
                    <label class="col-md-6 mb-4 mb-lg-0" for="mobil">Alamat E-mail</label>
                    <div class="col-md-15">
                    <input id="mobil" readonly name="email" placeholder="E-mail" class="form-control input-md" required="" type="text" value="{{Auth::user()->email}}">
                </div>

                </div>

                <div class="form-group row ml-1 mt-2">
                    <label class="col-md-6 mb-4 mb-lg-0" for="mobil">Nomor Handphone</label>
                    <div class="col-md-12">
                      <input type="text" name="no_hp" class="form-control" placeholder="08XXXX" maxlength="13">
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
        </div>

        {{-- <div class="col-lg-4 ml-auto">
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
        </div> --}}

      </div>
    </div>
  </div>
@endsection
