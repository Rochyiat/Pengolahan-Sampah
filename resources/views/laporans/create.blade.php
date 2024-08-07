@extends('admin.app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <h1 class="h3 font-weight-bold">Tambah Laporan</h1>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('laporans.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="tanggal" class="form-label">Tanggal:</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ now()->format('Y-m-d') }}" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="iframe" class="form-label">Lokasi:</label>
                        <input type="text" name="iframe" class="form-control" id="iframe">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis_sampah" class="form-label">Jenis Sampah:</label>
                        <select class="form-control" id="jenis_sampah" name="jenis_sampah">
                            <option value="Organik">Organik</option>
                            <option value="Anorganik">Anorganik</option>
                            <option value="Bahan">Bahan (B3)</option>
                            <option value="Berbahaya">Berbahaya (B3)</option>
                            <option value="Beracun">Beracun (B3)</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi:</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                    </div>

                    

                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
