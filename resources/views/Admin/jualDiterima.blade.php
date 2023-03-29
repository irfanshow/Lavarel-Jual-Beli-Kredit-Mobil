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
              <li class="breadcrumb-item active">Diterima</li>
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

                {{-- <div class="my-3 col-12 col-sm-8 col-md-5">

                    <form action="" method="get">

                            <div class="input-group">

                                <input type="text" class="form-control" id="inlineFormInputGroupUsername" name ="cari" placeholder="Cari Mobil">
                                <button class=" btn btn-primary">Cari</button>
                            </div>
                    </form>

                  </div> --}}

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

                  @foreach ($jual as $no=>$j)


                  <tbody>
                  <tr>
                    <td scope="row">{{$no+1}}</td>
                    <td>{{$j->nama}}</td>
                    <td>{{ date('j F, Y', strtotime($j->tanggal)) }}</td>
                    <td><a href="/detail-riwayat-penjualan/{{$j->id_pengajuan_jual}}"><button class="btn btn-primary">Detail</button></a></td>

                    <td><button class="btn btn-success">Diterima</button></td>


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
                {{$jual->withQueryString()->links()}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


@endsection
