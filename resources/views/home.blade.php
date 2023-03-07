@extends('templates.main')


@section('content')



    @foreach ($mobil as $no=>$list)

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tipe</th>
            <th scope="col">Merk</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{$no+1}}</th>
            <td>{{$list->tipe_mobil}}</td>
            <td>{{$list->merk_mobil}}</td>
          </tr>

        </tbody>
      </table>
      <?php $no++; ?>
    @endforeach




@endsection
