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
  <title>Tambah Artikel</title> 
  <script src="https://cdn.tailwindcss.com"></script> 
  <style>
    body {
      background: linear-gradient(135deg, #d7ccc8, #a1887f);
      font-family: 'Georgia', serif;
      color: #3e2723;
    }

    .form-card {
      background-color: #efebe9;
      border: 1px solid #a1887f;
    }

    .sidebar {
      background-color: #bcaaa4;
    }

    .sidebar a {
      color: #4e342e;
    }

    .sidebar a:hover {
      color: #3e2723;
      text-decoration: underline;
    }

    .header, .footer {
      background-color: #4e342e;
      color: #fff8e1;
    }

    .footer p {
      font-size: 0.875rem;
    }
  </style>
</head> 
<body>

  <!-- Header --> 
  <header class="header text-center py-6 shadow-md">
    <h1 class="text-3xl font-bold uppercase tracking-wide">Tambah Artikel Baru</h1>
    <p class="text-sm italic mt-2 text-[#ffe0b2]">"Setiap kata yang kamu tulis hari ini, bisa jadi pengingat untuk hari esok."</p>
  </header> 

  <!-- Konten Utama -->
  <div class="flex max-w-7xl mx-auto mt-10 px-4 gap-6">
    
    <!-- Sidebar --> 
    <aside class="w-1/4 sidebar rounded-xl shadow-lg p-6">
      <h2 class="text-xl font-semibold mb-6 text-center uppercase tracking-wide">Menu</h2>
      <ul class="space-y-3 text-base">
        <li><a href="beranda_admin.php">Beranda</a></li>
        <li><a href="data_artikel.php" class="font-bold">Kelola Artikel</a></li>
        <li><a href="data_gallery.php">Kelola Gallery</a></li>
        <li><a href="about.php">About</a></li>
        <li>
          <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');" class="text-red-700 font-semibold">Logout</a>
        </li>
      </ul>
    </aside>

    <!-- Main Content --> 
    <main class="w-3/4 form-card rounded-xl shadow-xl p-8">
      
      <!-- Kata-kata inspiratif -->
      <div class="bg-[#5d4037] p-5 rounded-xl text-sm italic text-[#ffecb3] mb-8 shadow border-l-4 border-[#d7ccc8]">
        <p>"Setiap artikel yang ditulis, bukan hanya kumpulan kata, tetapi jendela menuju pikiran, hati, dan kenangan."</p>
        <p>"Di sinilah cerita baru dimulai, dan jejakmu akan dikenang dalam setiap baris paragraf."</p>
      </div>

      <!-- Form Tambah Artikel -->
      <form action="proses_add_artikel.php" method="post" class="space-y-6">
        <div>
          <label for="nama_artikel" class="block text-sm font-medium mb-1">Judul Artikel</label>
          <input type="text" id="nama_artikel" name="nama_artikel" required 
            class="w-full p-3 border border-[#a1887f] rounded focus:outline-none focus:ring focus:border-[#5d4037]">
        </div>

        <div>
          <label for="isi_artikel" class="block text-sm font-medium mb-1">Isi Artikel</label>
          <textarea id="isi_artikel" name="isi_artikel" rows="6" required 
            class="w-full p-3 border border-[#a1887f] rounded focus:outline-none focus:ring focus:border-[#5d4037]"></textarea>
        </div>

        <div class="flex justify-end space-x-4">
          <button type="submit" class="bg-[#6d4c41] text-white px-5 py-2 rounded hover:bg-[#4e342e] transition">Simpan</button>
          <a href="data_artikel.php" class="bg-gray-300 text-gray-700 px-5 py-2 rounded hover:bg-gray-400 transition">Batal</a>
        </div>
      </form>
    </main>
  </div>

  <!-- Footer --> 
  <footer class="footer text-center py-5 mt-16">
    <p>&copy; <?php echo date('Y'); ?> | Created with ☕ by <strong>Adam Faturrachman</strong></p>
  </footer>

</body> 
</html>