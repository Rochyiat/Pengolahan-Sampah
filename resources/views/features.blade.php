@extends('admin.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3>{{ __('Fitur') }}</h3>
                </div>

                <div class="card-body">
                    <div class="list-group">
                        <a href="{{ url('/user') }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Kelola User</h5>
                            </div>
                            <p class="mb-1">Kelola pengguna di aplikasi, termasuk pendaftaran, penghapusan, dan perubahan hak akses.</p>
                        </a>
                        <a href="{{ url('/laporans') }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Laporan</h5>
                            </div>
                            <p class="mb-1">Kelola laporan yang masuk, termasuk peninjauan dan verifikasi data laporan harian.</p>
                        </a>
                        <a href="{{ url('/jadwal') }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Jadwal Pengumpulan</h5>
                            </div>
                            <p class="mb-1">Atur dan pantau jadwal pengumpulan sampah di berbagai lokasi.</p>
                        </a>
                        <a href="{{ url('/statistik') }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Statistik Pengelolaan</h5>
                            </div>
                            <p class="mb-1">Lihat statistik dan analisis data pengelolaan sampah untuk evaluasi kinerja.</p>
                        </a>
                        <a href="{{ url('/pengaturan') }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Pengaturan Sistem</h5>
                            </div>
                            <p class="mb-1">Konfigurasi dan pengaturan sistem untuk mengoptimalkan kinerja aplikasi.</p>
                        </a>
                        <a href="{{ url('/bantuan') }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Pusat Bantuan</h5>
                            </div>
                            <p class="mb-1">Akses dokumentasi dan bantuan untuk memahami penggunaan aplikasi.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
