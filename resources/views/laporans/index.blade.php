@extends('layouts.app')
@section('content')
<div class="container table-responsive py-5">
    <button type="button" class="btn btn-primary">Tambah Data</button>
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Tanggal</th>
          <th scope="col">Lokasi</th>
          <th scope="col">Jenis_Sampah</th>
          <th>Action</th>
        </tr>
      </thead>
      @foreach ($laporans as $laporan)
            <tr>
                <td>{{ $laporan->tanggal }}</td>
                <td>{{ $laporan->lokasi }}</td>
                <td>{{ $laporan->jenis_sampah }}</td>
                <td> <button type="button" class="btn btn-secondary">Secondary</button> <button type="button" class="btn btn-danger">Danger</button></td>
            </tr>
        @endforeach

@endsection