@extends('templates.Admin.adminTemplates')


@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <h1>Add Data/Tambah Data Mobil Baru</h1>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <form class="form-horizontal" action="add-mobil" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Data Mobil</legend>

        <div class="form-group">
            <label class="col-md-4 control-label" >Merk/Delaer</label>
            <div class="col-md-4">
                <select  name="merk" class="form-control">
                    @foreach ($dealer as $dealer)
                    <option value="{{$dealer->id_dealer}}">{{$dealer->nama_dealer}}</option>

                    @endforeach

                </select>

            </div>
          </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="mobil">Nama Mobil</label>
          <div class="col-md-4">
          <input id="mobil" name="nama" placeholder="Nama Mobil" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" >Jumlah Kursi</label>
            <div class="col-md-4">
              <select  name="kursi" class="form-control">
                @foreach ($kursi as $kursi)
                <option value="{{$kursi->id_kursi}}">{{$kursi->jumlah}}</option>

                @endforeach

              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" >Jumlah Pintu</label>
            <div class="col-md-4">
              <select  name="pintu" class="form-control">
                @foreach ($pintu as $pintu)
                <option value="{{$pintu->id_pintu}}">{{$pintu->jumlah}}</option>

                @endforeach

              </select>
            </div>
          </div>



        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" >Kategori Mobil</label>
          <div class="col-md-4">
            <select  name="kategori" class="form-control">
                <option value="MT">MT (Transmisi Manual)</option>
                <option value="AT">AT (Transmisi Otomatis)</option>
            </select>
          </div>
        </div>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Deskripsi">Deskripsi</label>
            <div class="col-md-4">
            <input id="Deskripsi" name="deskripsi" placeholder="Deskripsi" class="form-control input-md" required="" type="text">

            </div>
          </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="harga">Harga</label>
          <div class="col-md-4">
          Rp.<input id="harga" name="harga" placeholder="Harga" class="form-control input-md" required="" type="text">

          </div>
        </div>



         <!-- File Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="filebutton">Foto Mobil</label>
          <div class="col-md-4">
            <input id="filebutton" name="foto" class="input-file" type="file">
          </div>
        </div>


        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-5">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </div>

        </fieldset>

        </form>


        </div>









            <!-- Calendar -->

            <!-- /.card -->
          </section>

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
@endsection
