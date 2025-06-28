<?php 
session_start(); 
if (!isset($_SESSION['username'])) { 
  header('location:login.php'); 
  exit; 
} 
require_once("../koneksi.php"); 

$username = $_SESSION['username']; 
$sql = "SELECT * FROM tbl_user WHERE username = '$username'"; 
$query = mysqli_query($db, $sql); 
$hasil = mysqli_fetch_array($query); 

$jumlah_artikel = mysqli_num_rows(mysqli_query($db, "SELECT id_artikel FROM tbl_artikel")); 
$jumlah_gallery = mysqli_num_rows(mysqli_query($db, "SELECT id_gallery FROM tbl_gallery")); 
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: linear-gradient(135deg, #d7ccc8, #a1887f);
      font-family: 'Georgia', serif;
      color: #3e2723;
    }

    .card {
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

    .highlight {
      color: #6d4c41;
      font-weight: bold;
    }

    .footer p {
      font-size: 0.875rem;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="header text-center py-6 shadow-md">
    <h1 class="text-3xl font-bold uppercase tracking-wide">Dashboard Admin</h1>
    <p class="text-sm italic mt-2 text-[#ffe0b2]">"Kelola isi website dengan penuh cinta dan tanggung jawab."</p>
  </header>

  <!-- Container -->
  <div class="flex max-w-7xl mx-auto mt-10 px-4 gap-6">
    
    <!-- Sidebar -->
    <aside class="w-1/4 sidebar rounded-xl shadow-lg p-6">
      <h2 class="text-xl font-semibold mb-6 text-center uppercase tracking-wide">Menu Navigasi</h2>
      <ul class="space-y-3 text-base">
        <li><a href="beranda_admin.php">Beranda</a></li>
        <li><a href="data_artikel.php">Kelola Artikel</a></li>
        <li><a href="data_gallery.php">Kelola Galeri</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="logout.php" onclick="return confirm('Yakin ingin logout?');" class="text-red-700 font-semibold">Logout</a></li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="w-3/4 card rounded-xl shadow-xl p-8">

      <!-- Sambutan -->
      <div class="mb-6 leading-relaxed text-lg">
        Selamat datang, <span class="highlight"><?php echo htmlspecialchars($_SESSION['username']); ?></span>!<br>
        Kamu adalah pengelola utama dari cerita digital ini.
      </div>

      <!-- Quote -->
      <div class="bg-[#5d4037] p-5 rounded-xl text-sm italic text-[#ffecb3] mb-8 shadow border-l-4 border-[#d7ccc8]">
        <p>“Dashboard ini bukan hanya tempat kontrol, tapi ruang inspirasi untuk menjaga kualitas dan makna dari kontenmu.”</p>
      </div>

      <!-- Statistik -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div class="bg-[#d7ccc8] p-6 rounded-xl shadow-md text-center">
          <h3 class="text-xl font-semibold mb-2 text-[#4e342e]">Total Artikel</h3>
          <p class="text-4xl font-bold highlight"><?php echo $jumlah_artikel; ?></p>
        </div>
        <div class="bg-[#d7ccc8] p-6 rounded-xl shadow-md text-center">
          <h3 class="text-xl font-semibold mb-2 text-[#4e342e]">Total Galeri</h3>
          <p class="text-4xl font-bold highlight"><?php echo $jumlah_gallery; ?></p>
        </div>
      </div>

    </main>
  </div>

  <!-- Footer -->
  <footer class="footer text-center py-5 mt-16">
    <p>&copy; <?php echo date('Y'); ?> | Dibuat dengan ❤️ oleh <strong>Adam Faturrachman</strong></p>
  </footer>

</body>
</html>