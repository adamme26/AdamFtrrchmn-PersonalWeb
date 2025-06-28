<?php 
include('../koneksi.php'); 
session_start(); 
if (!isset($_SESSION['username'])) { 
  header('location:login.php'); 
  exit; 
} 
?> 

<!DOCTYPE html> 
<html lang="id"> 
<head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Gambar Gallery</title> 
  <script src="https://cdn.tailwindcss.com"></script> 
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Playfair Display', serif;
      background: linear-gradient(to right, #d7ccc8, #a1887f);
      color: #3e2723;
    }

    .card {
      background-color: #efebe9;
      border: 1px solid #a1887f;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .nav-link {
      color: #ffcc80;
    }

    .nav-link:hover {
      text-decoration: underline;
      color: #fff8e1;
    }

    .footer {
      background-color: #4e342e;
      color: #fff8e1;
    }
  </style>
</head> 
<body>

  <!-- Header -->
  <header class="bg-[#4e342e] text-white text-center py-10 shadow-md">
    <h1 class="text-3xl md:text-4xl font-bold">Tambah Gambar ke Gallery</h1>
    <p class="text-sm italic mt-2 text-[#ffe0b2]">Unggah momen spesialmu ke dalam galeri.</p>
  </header>

  <!-- Main Container -->
  <div class="flex flex-col lg:flex-row max-w-7xl mx-auto mt-10 px-6 gap-6">

    <!-- Sidebar -->
    <aside class="lg:w-1/4 card rounded-xl p-6">
      <h2 class="text-xl font-semibold text-center uppercase tracking-wide text-[#6d4c41] mb-6">Menu</h2>
      <ul class="space-y-4 text-base">
        <li><a href="beranda_admin.php" class="block px-3 py-2 rounded nav-link">Beranda</a></li>
        <li><a href="data_artikel.php" class="block px-3 py-2 rounded nav-link">Kelola Artikel</a></li>
        <li><a href="data_gallery.php" class="block px-3 py-2 rounded bg-[#d7ccc8] font-semibold text-[#3e2723]">Kelola Gallery</a></li>
        <li><a href="about.php" class="block px-3 py-2 rounded nav-link">About</a></li>
        <li><a href="logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar?');" class="block px-3 py-2 rounded text-red-500 hover:bg-red-100 font-semibold">Logout</a></li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="lg:w-3/4 card rounded-xl p-8">
      <form action="proses_add_gallery.php" method="post" enctype="multipart/form-data" class="space-y-6">
        <div>
          <label for="judul" class="block text-sm font-medium text-[#5d4037] mb-1">Judul Gambar</label>
          <input type="text" id="judul" name="judul" required
            class="w-full p-3 border border-[#bcaaa4] rounded focus:outline-none focus:ring focus:border-[#6d4c41] bg-white text-[#3e2723]">
        </div>
        <div>
          <label for="foto" class="block text-sm font-medium text-[#5d4037] mb-1">Pilih Gambar</label>
          <input type="file" id="foto" name="foto" accept="image/*" required
            class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#d7ccc8] file:text-[#4e342e] hover:file:bg-[#bcaaa4]">
        </div>
        <div class="flex justify-end space-x-4">
          <button type="submit"
            class="bg-[#6d4c41] text-white px-4 py-2 rounded hover:bg-[#4e342e] transition">Simpan</button>
          <a href="data_gallery.php"
            class="bg-gray-300 text-[#3e2723] px-4 py-2 rounded hover:bg-gray-400 transition">Batal</a>
        </div>
      </form>
    </main>

  </div>

  <!-- Footer -->
  <footer class="footer text-center py-6 mt-16 text-sm">
    &copy; <?php echo date('Y'); ?> | Dibuat oleh <span class="font-semibold">Adam Faturrachman</span>
  </footer>

</body> 
</html>
