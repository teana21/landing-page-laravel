<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Menarik</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

<!-- Navigation Bar -->
<nav class="bg-white shadow-md">
    <ul class="flex justify-center space-x-8 py-4">
        <li><a href="#home" class="text-gray-700 hover:text-blue-500">Beranda</a></li>
        <li><a href="#features" class="text-gray-700 hover:text-blue-500">Layanan</a></li>
        <li><a href="#testimonials" class="text-gray-700 hover:text-blue-500">Testimoni</a></li>
        <li><a href="#contact" class="text-gray-700 hover:text-blue-500">Kontak</a></li>
        <a href="{{ route('about') }}" class="text-1xl font-bold mb-4">Selengkapnya...</a>
    </ul>
</nav>

<!-- Header Section -->
<header id="home" class="bg-blue-500 text-white py-24 text-center">
    <div>
        <h1 class="text-4xl font-bold">Selamat Datang di Kota Impian</h1>
        <p class="mt-4">Temukan keindahan dan peluang di setiap sudut kota</p>
        <a href="#features" class="inline-block bg-orange-500 text-white px-6 py-3 rounded-full mt-6 hover:bg-orange-600 transition">Jelajahi Sekarang</a>
    </div>
</header>

<!-- Features Section -->
<section class="features py-16 bg-gray-100" id="features">
    <div class="container mx-auto text-center">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="feature p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Layanan 24/7</h3>
                <p>Kami menyediakan layanan non-stop sepanjang waktu untuk memenuhi kebutuhan Anda kapan saja.</p>
            </div>
            <div class="feature p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Teknologi Terkini</h3>
                <p>Memanfaatkan teknologi terbaru untuk memberikan solusi yang efisien dan inovatif.</p>
            </div>
            <div class="feature p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Dukungan Profesional</h3>
                <p>Tim ahli kami siap membantu Anda dengan pengetahuan dan pengalaman yang luas.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials py-16 bg-white" id="testimonials">
    <div class="container mx-auto text-center">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="testimonial bg-gray-100 p-6 rounded-lg shadow-md">
                <p class="text-lg">"Layanan yang sangat memuaskan! Kota ini benar-benar tempat yang tepat untuk memulai petualangan baru."</p>
                <h4 class="mt-4 font-bold">- John Doe</h4>
            </div>
            <div class="testimonial bg-gray-100 p-6 rounded-lg shadow-md">
                <p class="text-lg">"Teknologi yang digunakan sangat canggih, membuat hidup menjadi lebih mudah dan efisien."</p>
                <h4 class="mt-4 font-bold">- Jane Smith</h4>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact py-16 bg-gray-100" id="contact">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row justify-between">
            <!-- Contact Form -->
            <div class="contact-form w-full md:w-1/2 bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6">Kontak Kami</h2>
                <form>
                    <input type="text" placeholder="Nama" class="w-full p-4 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <input type="email" placeholder="Email" class="w-full p-4 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <textarea placeholder="Pesan" class="w-full p-4 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                    <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition">Kirim Pesan</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="contact-info w-full md:w-1/2 mt-8 md:mt-0 md:ml-8">
                <h3 class="text-2xl font-bold mb-4">Informasi Kontak</h3>
                <p class="mb-4"><i class="fas fa-map-marker-alt"></i> Alamat: Jl. DI Panjaitan, Purwokerto</p>
                <p class="mb-4"><i class="fas fa-phone-alt"></i> Telepon: +62 877 7724 1348</p>
                <p><i class="fas fa-envelope"></i> Email: info@DIPanjaitan.com</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="bg-blue-500 text-white py-6 text-center">
    <p>&copy; 2024 DI Panjaitan. Semua hak dilindungi.</p>
</footer>

</body>
</html>
