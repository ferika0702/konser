@extends('layout.main')

@section('container')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pendaftaran Pasien Umum</h1>
      </div>


<div class="row justify-content-end">
  <div class="col-md-6">
    <form action="" method="GET">
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search.." name="search">
  <button class="btn btn-primary me-1" type="submit" id="button-addon2">Search</button>
</div>
    </form>
  </div>
</div>

            <div class="table-responsive">
        <!-- <table class="table table-striped table-sm"> -->
          <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Nomer Telepon</th>
              <th scope="col">Kode Tiket</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          @if (count($penonton) > 0)
          @foreach($penonton as $key=>$item)
          <tbody>
            <tr>
              <td>{{ $loop -> iteration}}</td>
              <td>{{ $item -> nama}}</td>
              <td>{{ $item -> email}}</td>
              <td>{{ $item -> nomer_telepon}}</td>
              <td>{{ $item -> kode}}</td>
              <td>
              <form action="" method="GET">
                    <button type="submit" class="btn btn-danger">Cek In</button>
              </td>
            </form>
            </tr>
          </tbody>
          @endforeach
          @endif
        </table>
      </div>
      
@endsection
