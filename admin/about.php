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
  <title>Kelola About</title> 
  <script src="https://cdn.tailwindcss.com"></script> 
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #d7ccc8, #a1887f);
      font-family: 'Playfair Display', serif;
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

<body class="min-h-screen">

  <!-- Header --> 
  <header class="header text-center py-6 shadow-md">
    <h1 class="text-3xl font-bold uppercase tracking-wide">Kelola Halaman About</h1>
    <p class="text-sm italic mt-2 text-[#ffe0b2]">"Halaman ini bukan hanya data, tapi jejak tentang siapa kita."</p>
  </header>

  <div class="flex flex-col lg:flex-row max-w-7xl mx-auto mt-10 px-6 gap-6"> 

    <!-- Sidebar --> 
    <aside class="lg:w-1/4 sidebar rounded-xl shadow-lg p-6">
      <h2 class="text-xl font-semibold text-center uppercase tracking-wide">Menu</h2>
      <ul class="space-y-3 text-base">
        <li><a href="beranda_admin.php">Beranda</a></li>
        <li><a href="data_artikel.php">Kelola Artikel</a></li>
        <li><a href="data_gallery.php">Kelola Gallery</a></li>
        <li><a href="about.php" class="font-bold">About</a></li>
        <li>
          <a href="logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar?');" class="text-red-700 font-semibold">Logout</a>
        </li>
      </ul>
    </aside>

    <!-- Main Content --> 
    <main class="lg:w-3/4 card rounded-xl shadow-xl p-8">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Tentang Saya</h2>
        <a href="add_about.php" class="bg-[#6d4c41] text-white px-4 py-2 rounded hover:bg-[#4e342e] transition">+ Tambah Data</a>
      </div>

      <div class="space-y-6">
        <?php 
        $sql = "SELECT * FROM tbl_about ORDER BY id_about DESC"; 
        $query = mysqli_query($db, $sql); 
        while ($data = mysqli_fetch_array($query)) { 
          echo "<div class='bg-[#d7ccc8] border border-[#a1887f] p-6 rounded-xl shadow hover:shadow-xl transition'>"; 
          echo "<p class='mb-4 leading-relaxed'>" . nl2br(htmlspecialchars($data['about'])) . "</p>"; 
          echo "<div class='flex space-x-6 text-sm font-medium'>";
          echo "<a href='edit_about.php?id_about={$data['id_about']}' class='text-blue-600 hover:underline'>Edit</a>"; 
          echo "<a href='delete_about.php?id_about={$data['id_about']}' onclick='return confirm(\"Yakin ingin menghapus?\")' class='text-red-600 hover:underline'>Hapus</a>"; 
          echo "</div></div>"; 
        } 
        ?> 
      </div>
    </main>
  </div>

  <!-- Footer --> 
  <footer class="footer text-center py-6 mt-16 text-sm">
    <p class="mb-1">&copy; <?php echo date('Y'); ?> | Dibuat oleh <strong class="highlight">Adam Faturrachman</strong></p>
    <p class="italic text-[#ffecb3] mt-2">"About bukan sekadar kata, tapi narasi tentang kita."</p>
  </footer>
</body> 
</html>