@extends('templates.Admin.adminTemplates')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mobil Bekas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Lihat Data Mobil</a></li>
              <li class="breadcrumb-item active">Data Mobil Bekas</li>
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
                    <th>No</th>
                    <th>Nama Penjual</th>
                    <th>Plat Nomor</th>
                    <th>Lokasi</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>

                  @foreach ($mobilBekas as $no=>$mobil)
                  <tbody>
                  <tr>
                    <td scope="row">{{$no+1}}</td>
                    <td>{{$mobil->nama}}</td>
                    <td>{{$mobil->plat}}</td>
                    <td>{{$mobil->lokasi}}</td>

                    @if ($mobil->foto == NULL)
                        <td>Tidak ada Foto</td>
                    @else
                        <td>{{$mobil->foto}}</td>
                    @endif
                    <td><a href="detail-data-mobil-bekas/{{$mobil->id_pengajuan_jual}}"><button type="button" class="btn btn-info">Detail</button></a></td>


                  </tr>

                  </tbody>
                  @endforeach
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Penjual</th>
                    <th>Plat Nomor</th>
                    <th>Lokasi</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


@endsection
