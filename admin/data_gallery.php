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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kelola Gallery</title>
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

    .header,
    .footer {
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
    <h1 class="text-3xl font-bold uppercase tracking-wide">Kelola Gallery</h1>
    <p class="text-sm italic mt-2 text-[#ffe0b2]">"Galeri bukan sekadar gambar yang terpajang, tetapi kenangan yang tak ingin hilang."</p>
  </header>

  <div class="flex flex-col lg:flex-row max-w-7xl mx-auto mt-10 px-6 gap-6">

    <!-- Sidebar -->
    <aside class="lg:w-1/4 sidebar rounded-xl shadow-lg p-6">
      <h2 class="text-xl font-semibold text-center uppercase tracking-wide">Menu</h2>
      <ul class="space-y-3 text-base">
        <li><a href="beranda_admin.php">Beranda</a></li>
        <li><a href="data_artikel.php">Kelola Artikel</a></li>
        <li><a href="data_gallery.php" class="font-bold">Kelola Gallery</a></li>
        <li><a href="about.php">About</a></li>
        <li>
          <a href="logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar?');" class="text-red-700 font-semibold">Logout</a>
        </li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="lg:w-3/4 card rounded-xl shadow-xl p-8">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Daftar Galeri</h2>
        <a href="add_gallery.php" class="bg-[#6d4c41] text-white px-4 py-2 rounded hover:bg-[#4e342e] transition">+ Tambah Gambar</a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php
        $sql = "SELECT * FROM tbl_gallery ORDER BY id_gallery DESC";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) {
          echo "<div class='bg-[#d7ccc8] border border-[#a1887f] rounded-xl shadow-md overflow-hidden hover:shadow-xl transition'>";
          echo "<img src='../images/{$data['foto']}' class='w-full h-48 object-cover'>";
          echo "<div class='p-4'>";
          echo "<p class='font-semibold text-[#4e342e] mb-2'>" . htmlspecialchars($data['judul']) . "</p>";
          echo "<div class='flex justify-between text-sm'>";
          echo "<a href='edit_gallery.php?id_gallery={$data['id_gallery']}' class='text-blue-600 hover:underline'>Edit</a>";
          echo "<a href='delete_gallery.php?id_gallery={$data['id_gallery']}' onclick='return confirm(\"Yakin ingin menghapus?\")' class='text-red-600 hover:underline'>Hapus</a>";
          echo "</div>";
          echo "</div></div>";
        }
        ?>
      </div>
    </main>
  </div>

  <!-- Footer -->
  <footer class="footer text-center py-6 mt-16 text-sm">
    <p class="mb-1">&copy; <?php echo date('Y'); ?> | Dibuat oleh <strong>Adam Faturrachman</strong></p>
    <p class="italic text-[#ffecb3] mt-2">"Dari setiap foto yang tersimpan di sini, ada cerita yang tak terucap, namun abadi."</p>
  </footer>

</body>

</html>