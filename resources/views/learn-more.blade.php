<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelajari Lebih Lanjut - Pengolahan Sampah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-image: url('/images/plastic-waste-7617451.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .lead {
            font-size: 1.25rem;
        }
        .article-content h2 {
            margin-top: 1.5rem;
            margin-bottom: 1rem;
            font-size: 1.75rem;
        }
        .article-content h4 {
            margin-top: 1rem;
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
        }
        .article-content p {
            margin-bottom: 1rem;
        }
        .article-content ul {
            margin-bottom: 1.5rem;
        }
        .content {
            background: rgba(255, 255, 255, 0.8); /* Transparan putih untuk konten agar teks mudah dibaca */
            padding: 20px;
            border-radius: 10px;
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Pengolahan Sampah</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 article-content" style="background-color: aliceblue">
        <h1 class="display-4">Pelajari Lebih Lanjut tentang Pengolahan Sampah</h1>
        <p class="lead">Platform kami menyediakan berbagai fitur untuk membantu mengelola sampah dengan lebih efisien.</p>
        <hr class="my-4">

        <h2>Fitur Web Pengolahan Sampah</h2>
        <ul>
            <li>Pemantauan Sampah</li>
            <li>Pengelolaan Sampah</li>
            <li>Daur Ulang</li>
            <li>Pelaporan</li>
        </ul>

        <h2>Manfaat Pengolahan Sampah</h2>
        <p>Tahukah Anda, selain sebagai upaya menjaga kebersihan lingkungan, ada begitu banyak manfaat pengelolaan sampah lainnya bagi kehidupan.</p>
        <p>Sampah merupakan bahan sisa kegiatan yang sudah tidak terpakai dan perlu dikelola dengan baik. Adapun tujuan pengelolaan sampah adalah agar terhindar dari penyakit dan juga kerusakan alam. Di samping itu, banyak manfaat mengelola sampah yang juga bisa Anda dapatkan. Untuk memahaminya lebih lanjut, berikut ini beberapa manfaat pengelolaan sampah:</p>

        <h4>1. Lingkungan Lebih Bersih dan Sehat</h4>
        <p>Manfaat pengelolaan sampah yang utama adalah menjadikan lingkungan lebih bersih dan juga sehat. Bahan sisa kegiatan sehari-hari yang dikelola dengan baik dan rutin dibersihkan, menjadikan lingkungan bebas dari tumpukan sampah. Kondisi ini menjadikan lingkungan lebih sehat, karena tidak ada media untuk pengembangan penyakit.</p>

        <h4>2. Dijadikan Peluang Usaha</h4>
        <p>Sampah yang dikelola dengan baik dapat menjadi peluang usaha. Sampah organik maupun non-organik bisa dimanfaatkan menjadi barang yang memiliki nilai guna. Misalnya, botol bekas, sedotan, kain, atau sampah lainnya bisa didaur ulang dan dijadikan kerajinan. Jadi, Anda bisa mencari ide untuk mengubah barang-barang tersebut menjadi sesuatu yang bernilai. Jangan lupa untuk menonjolkan ciri khas dari produk yang dibuat dan menjualnya ke orang lain.</p>

        <h4>3. Dapat Digunakan Kembali</h4>
        <p>Tidak semua sampah harus dibuang dan tak layak digunakan kembali. Beberapa sampah bisa dialih fungsikan. Misalnya, stoples bekas bisa digunakan sebagai wadah alternatif untuk menaruh bahan-bahan dapur. Ini membantu menghemat uang karena tidak perlu membeli wadah baru.</p>

        <h4>4. Dapat Diuangkan</h4>
        <p>Salah satu manfaat mengelola sampah adalah mendapatkan uang dari kegiatan tersebut. Caranya adalah dengan membawa sampah yang sudah dikumpulkan ke tempat penampungan. Biasanya, berat sampah setiap kilonya akan dihargai dengan sejumlah uang. Jadi, Anda bisa mendapatkan keuntungan.</p>

        <h4>5. Sebagai Bahan Dasar Pupuk</h4>
        <p>Manfaat pengelolaan sampah organik adalah bisa dijadikan sebagai bahan dasar pupuk. Caranya mudah, letakkan sampah organik di satu lubang tanah dan tunggu hingga membusuk. Jika sudah berubah bentuk menyerupai tanah, hasilnya bisa digunakan sebagai pupuk untuk menyuburkan tanaman. Anda juga bisa menggunakan sampah organik sebagai bahan pupuk kompos, meski memerlukan ketelatenan karena banyak tahapan yang harus dilalui.</p>

        <h4>6. Jadi Media Tanam</h4>
        <p>Sampah organik maupun anorganik bisa dimanfaatkan untuk kehidupan sehari-hari, salah satunya sebagai media tanam. Sampah organik bisa dijadikan pupuk untuk menyuburkan tanaman, sementara sampah anorganik seperti botol plastik bisa didaur ulang dan dimanfaatkan sebagai pot tanaman.</p>

        <h4>7. Tambahan Pakan Ternak</h4>
        <p>Manfaat pengelolaan sampah organik lainnya adalah bisa dijadikan tambahan pakan ternak. Bagi Anda yang memiliki hewan ternak seperti kambing, sapi, atau lainnya, bisa menambahkan sampah organik berupa dedaunan di makanannya. Sampah organik juga bisa diubah menjadi pelet untuk makan ikan dan ayam.</p>

        <h4>8. Bantu Kurangi Polusi</h4>
        <p>Memanfaatkan sampah untuk didaur ulang atau diubah menjadi barang lainnya memang memerlukan waktu. Namun, upaya ini bisa membantu mengurangi polusi. Misalnya, untuk membuat pupuk kompos, Anda perlu melewati proses yang panjang, tetapi ini membantu mengurangi polusi.</p>

        <h4>9. Bantu Menghemat SDA</h4>
        <p>Mengelola sampah dengan baik dapat membantu menghemat dan menjaga Sumber Daya Alam (SDA). Ini sejalan dengan penjelasan sebelumnya bahwa pengelolaan sampah dapat mengurangi polusi. Pengelolaan sampah juga bisa menghemat SDA karena menurunkan tingkat kebutuhan akan barang-barang seperti wadah atau pot bunga. Misalnya, sampah botol yang dimanfaatkan menjadi pot bunga bisa menghemat kebutuhan membeli pot baru.</p>

        <h4>10. Langkah Utama Cegah Risiko Banjir</h4>
        <p>Manfaat pengelolaan sampah yang paling penting adalah membantu mengantisipasi bencana banjir. Pengelolaan sampah tidak hanya berkaitan dengan pemanfaatan, tetapi juga soal pembuangannya. Jika sampah dibuang di tempat seharusnya, tidak akan ada penyumbatan saluran air yang dapat menyebabkan banjir.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
