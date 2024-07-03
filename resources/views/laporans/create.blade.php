@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-10">
        <div class="grid grid-cols-2 mb-3">
            <h1 style="font-size: 30px; font-weight: bold;">Tambah Laporan</h1>
        </div>
        <div class="max-w-xl rounded overflow-hidden shadow-lg bg-white mt-2">
            <div class="px-5 mt-5">
                <form action="{{ route('laporans.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Tanggal:
                        </label>
                        <input
                            class="@error('tanggal') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            value="{{ old('tanggal') }}" name="tanggal" type="date" placeholder="contoh: 2024/06/27">
                        @error('tanggal')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Lokasi:
                        </label>
                        <input
                            class="@error('lokasi') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            value="{{ old('lokasi') }}" name="lokasi" type="text" placeholder="contoh: depan sekolah">
                        @error('lokasi')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                           Jenis Sampah:
                        </label>
                        <select
                            class="@error('jenis_sampah') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="jenis_sampah">
                            <option value="Organik" {{ old('jenis_sampah') == 'Organik' ? 'selected' : '' }}>Organik</option>
                            <option value="Non Organik" {{ old('jenis_sampah') == 'Non Organik' ? 'selected' : '' }}>Non Organik</option>
                            <option value="Bahaya" {{ old('jenis_sampah') == 'Bahaya' ? 'selected' : '' }}>Bahaya</option>
                        </select>
                        @error('jenis_sampah')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
@endsection
