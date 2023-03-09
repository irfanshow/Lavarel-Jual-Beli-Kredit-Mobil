@extends('templates.Admin.adminTemplates')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mobil Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Lihat Data Mobil</a></li>
              <li class="breadcrumb-item active">Data Mobil Baru</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              {{-- <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>



                  <tr>
                    <th>Dealer/Merk</th>
                    <th>Nama Mobil</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>

                  @foreach ($mobilBaru as $mobil)
                  <tbody>
                  <tr>
                    <td>{{$mobil->dealer['nama_dealer']}}</td>
                    <td>{{$mobil->nama}}</td>
                    <td>{{$mobil->kategori}}</td>
                    <td>{{$mobil->deskripsi}}</td>
                    <td>{{$mobil->harga}}</td>
                    <td>{{$mobil->foto}}</td>
                    <td><a href="detail-data-mobil-baru/{{$mobil->id_mobil}}"><button type="button" class="btn btn-info">Detail</button></a></td>


                  </tr>

                  </tbody>
                  @endforeach
                  <tfoot>
                  <tr>
                    <th>Dealer/Merk</th>
                    <th>Nama Mobil</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Foto</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


@endsection
