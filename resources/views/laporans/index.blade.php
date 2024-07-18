@extends('admin.app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <h1 class="h3 font-weight-bold">Daftar Laporan</h1>
            <a href="{{ route('laporans.create') }}" class="btn btn-primary">Tambah Laporan</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Jenis Sampah</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporans as $laporan)
                        <tr>
                            <td>{{ $laporan->tanggal }}</td>
                            <td>{!! $laporan->iframe !!}</td>
                            <td>{{ $laporan->jenis_sampah }}</td>
                            <td>{{ $laporan->deskripsi }}</td>
                            <td>
                                <a href="{{ route('laporans.edit', $laporan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('laporans.destroy', $laporan->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
