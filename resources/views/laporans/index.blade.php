@extends('layouts.app')
@section('content')
<div class="container table-responsive py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Laporan</h2>
    <a href="{{ url('laporans/create') }}" class="btn btn-primary">Tambah Data</a>
</div>
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Tanggal</th>
          <th scope="col">Lokasi</th>
          <th scope="col">Jenis Sampah</th>
          <th>Action</th>
        </tr>
      </thead>
      @foreach ($laporans as $laporan)
            <tr>
                <td>{{ $laporan->tanggal }}</td>
                <td>{{ $laporan->lokasi }}</td>
                <td>{{ $laporan->jenis_sampah }}</td>
                <td>
                  <a href="{{ url('laporans/' . $laporan->id . '/edit') }}" class="btn btn-secondary btn-sm">Edit</a>
                  <form action="{{ route('laporans.destroy', $laporan->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
            </tr>
        @endforeach

@endsection