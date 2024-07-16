@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4">Selamat Datang di Aku Sampah Bandung</h1>
        <p class="lead">Solusi Pengelolaan Sampah untuk Kota Bandung</p>
        <a href="#lanjutan" class="btn btn-primary btn-lg mt-3">Pelajari Lebih Lanjut</a>
    </div>

    <div id="lanjutan" class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <i class="fas fa-recycle fa-3x mb-3 text-success"></i>
                    <h5 class="card-title">Pengelolaan Sampah Organik</h5>
                    <p class="card-text">Kami menyediakan solusi untuk pengelolaan sampah organik yang ramah lingkungan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <i class="fas fa-trash-alt fa-3x mb-3 text-danger"></i>
                    <h5 class="card-title">Pengelolaan Sampah Anorganik</h5>
                    <p class="card-text">Sampah anorganik dikelola dengan metode daur ulang yang efisien dan efektif.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <i class="fas fa-biohazard fa-3x mb-3 text-warning"></i>
                    <h5 class="card-title">Pengelolaan Sampah B3</h5>
                    <p class="card-text">Penanganan khusus untuk sampah Bahan Berbahaya dan Beracun (B3) dengan standar keamanan tinggi.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h2>Kenapa Memilih Kami?</h2>
        <p class="lead">Kami berdedikasi untuk menciptakan lingkungan yang bersih dan sehat melalui pengelolaan sampah yang terintegrasi.</p>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-globe fa-3x mb-3"></i>
                        <h5 class="card-title">Ramah Lingkungan</h5>
                        <p class="card-text">Kami menggunakan teknologi dan metode yang ramah lingkungan dalam pengelolaan sampah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-handshake fa-3x mb-3"></i>
                        <h5 class="card-title">Mitra Terpercaya</h5>
                        <p class="card-text">Kami bekerja sama dengan berbagai mitra untuk memastikan proses pengelolaan sampah yang efektif.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-users fa-3x mb-3"></i>
                        <h5 class="card-title">Komunitas Peduli Sampah</h5>
                        <p class="card-text">Bergabunglah dengan komunitas kami untuk bersama-sama menjaga kebersihan Kota Bandung.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h2>Hubungi Kami</h2>
        <p class="lead">Untuk informasi lebih lanjut, silakan hubungi kami melalui kontak di bawah ini.</p>
        <a href="mailto:info@akusampahbandung.com" class="btn btn-outline-primary btn-lg">Email Kami</a>
    </div>
</div>
@endsection
