@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3>{{ __('Dashboard') }}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/welcome.jpg') }}" class="img-fluid mb-4" alt="Welcome Image" style="max-width: 200px;">
                        <h4>{{ __('Selamat Datang!') }}</h4>
                        <p class="text-muted">{{ __('Anda sudah login.') }}</p>
                        <a href="{{ url('/features') }}" class="btn btn-outline-primary mt-3">{{ __('Explore Features') }}</a>
                    </div>

                    <hr>

                    <div class="mt-4">
                        <h4>{{ __('Tugas, Hak Akses, dan Tanggung Jawab Admin dalam Pengelolaan Sampah') }}</h4>
                        <p>
                            Sebagai seorang admin di sistem pengelolaan sampah, Anda memiliki tugas dan tanggung jawab berikut:
                        </p>
                        <ul>
                            <li><strong>Tugas:</strong>
                                <ul>
                                    <li>Memantau dan mengelola laporan harian mengenai jenis, jumlah, dan lokasi pengumpulan sampah.</li>
                                    <li>Memastikan data yang dimasukkan oleh pengguna valid dan akurat.</li>
                                    <li>Mengatur jadwal pengumpulan sampah dan koordinasi dengan tim lapangan.</li>
                                    <li>Memberikan laporan periodik kepada pihak terkait mengenai status pengelolaan sampah.</li>
                                </ul>
                            </li>
                            <li><strong>Hak Akses:</strong>
                                <ul>
                                    <li>Akses penuh ke sistem manajemen untuk melihat, menambah, mengubah, dan menghapus data laporan.</li>
                                    <li>Akses ke fitur-fitur khusus yang hanya tersedia untuk admin, seperti pembuatan laporan, manajemen pengguna, dan konfigurasi sistem.</li>
                                </ul>
                            </li>
                            <li><strong>Tanggung Jawab:</strong>
                                <ul>
                                    <li>Menjaga kerahasiaan data dan informasi yang terdapat dalam sistem.</li>
                                    <li>Memastikan sistem berjalan dengan lancar dan melakukan troubleshooting jika terjadi masalah.</li>
                                    <li>Mengikuti perkembangan dan pelatihan terkait pengelolaan sampah dan teknologi pendukung.</li>
                                    <li>Bertanggung jawab atas akurasi dan validitas data yang diinputkan dalam sistem.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
