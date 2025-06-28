<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About | Adam Faturrachman</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Playfair Display', serif;
      background: linear-gradient(135deg, #d7ccc8, #a1887f);
      color: #3e2723;
    }

    .header {
      background-color: #4e342e;
      color: #fff8e1;
    }

    .nav-link {
      color: #ffcc80;
    }

    .nav-link:hover {
      text-decoration: underline;
      color: #fff8e1;
    }

    .card {
      background-color: #efebe9;
      border: 1px solid #a1887f;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .footer {
      background-color: #4e342e;
      color: #fff8e1;
    }

    .highlight {
      color: #6d4c41;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="header text-center py-10 shadow-md">
    <h1 class="text-4xl md:text-5xl font-bold uppercase tracking-wide">Tentang Saya</h1>
    <p class="text-sm mt-2 italic text-[#ffe0b2]">Jejak langkah dalam baris kata dan cerita pribadi.</p>
  </header>

  <!-- Navigation -->
  <nav class="bg-[#bcaaa4] text-center py-4 shadow-md">
    <ul class="flex justify-center space-x-10 text-lg font-semibold uppercase">
      <li><a href="index.php" class="nav-link">Artikel</a></li>
      <li><a href="gallery.php" class="nav-link">Gallery</a></li>
      <li><a href="about.php" class="nav-link">About</a></li>
      <li><a href="admin/login.php" class="nav-link">Login</a></li>
    </ul>
  </nav>

  <!-- About Section -->
  <main class="max-w-4xl mx-auto px-6 py-12">
    <section class="card rounded-xl p-8">
      <h2 class="text-2xl font-bold text-[#4e342e] mb-6 border-b border-[#6d4c1f] pb-2">Tentang Saya</h2>
      <div class="text-base leading-relaxed space-y-4 text-[#3e2723]">
        <?php 
          $sql = "SELECT * FROM tbl_about ORDER BY id_about DESC"; 
          $query = mysqli_query($db, $sql); 
          while ($data = mysqli_fetch_array($query)) { 
            echo "<p>" . nl2br(htmlspecialchars($data['about'])) . "</p>"; 
          } 
        ?>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="footer text-center py-6 mt-16 text-sm">
    &copy; <?php echo date('Y'); ?> | Dibuat oleh <span class="highlight">Adam Faturrachman</span>
  </footer>

</body>
</html>
