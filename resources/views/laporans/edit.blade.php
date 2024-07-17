@extends('admin.app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <h1 class="h3 font-weight-bold">Edit Laporan</h1>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('laporans.update', $laporan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="tanggal" class="form-label">Tanggal:</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $laporan->tanggal }}" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis_sampah" class="form-label">Lokasi:</label>
                        <input type="text" name="iframe" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis_sampah" class="form-label">Jenis Sampah:</label>
                        <select class="form-control" id="jenis_sampah" name="jenis_sampah">
                            <option value="Organik" {{ $laporan->jenis_sampah == 'Organik' ? 'selected' : '' }}>Organik</option>
                            <option value="Anorganik" {{ $laporan->jenis_sampah == 'Anorganik' ? 'selected' : '' }}>Anorganik</option>
                            <option value="Bahan" {{ $laporan->jenis_sampah == 'Bahan' ? 'selected' : '' }}>Bahan (B3)</option>
                            <option value="Berbahaya" {{ $laporan->jenis_sampah == 'Berbahaya' ? 'selected' : '' }}>Berbahaya (B3)</option>
                            <option value="Beracun" {{ $laporan->jenis_sampah == 'Beracun' ? 'selected' : '' }}>Beracun (B3)</option>
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
