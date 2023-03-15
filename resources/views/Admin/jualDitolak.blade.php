@extends('templates.Admin.adminTemplates')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Riwayat Pengajuan Penjualan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Riwayat Pengajuan Penjualan</a></li>
              <li class="breadcrumb-item active">Ditolak</li>
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
                    <th>Atas Nama</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                    <th>Status</th>

                  </tr>
                  </thead>

                  @foreach ($jual as $no=>$jual)


                  <tbody>
                  <tr>
                    <td scope="row">{{$no+1}}</td>
                    <td>{{$jual->nama}}</td>
                    <td>{{ date('j F, Y', strtotime($jual->tanggal)) }}</td>
                    <td><a href="/detail-riwayat-penjualan/{{$jual->id_pengajuan_jual}}"><button class="btn btn-primary">Detail</button></a></td>

                    <td><button class="btn btn-danger">Ditolak</button></td>


                  </tr>
                  @endforeach
                  </tbody>
                  {{-- @endforeach --}}
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Atas Nama</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                    <th>Status</th>

                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


@endsection
