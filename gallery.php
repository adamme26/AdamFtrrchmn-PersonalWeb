<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gallery | Adam Faturrachman</title>
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

    /* Modal */
    .modal {
      display: none;
      position: fixed;
      z-index: 50;
      padding-top: 100px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.8);
    }

    .modal-content {
      margin: auto;
      display: block;
      max-width: 90%;
      max-height: 80vh;
    }

    .modal-content, .caption {
      animation: zoom 0.3s;
    }

    @keyframes zoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }

    .close {
      position: absolute;
      top: 30px;
      right: 50px;
      color: #fff8e1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
      cursor: pointer;
    }

    .close:hover {
      color: #ffcc80;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="header text-center py-10 shadow-md">
    <h1 class="text-4xl md:text-5xl font-bold uppercase tracking-wide">Galeri Foto</h1>
    <p class="text-sm mt-2 italic text-[#ffe0b2]">Abadikan momen, tampilkan cerita</p>
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

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-6 py-12">
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <?php
        $sql = "SELECT * FROM tbl_gallery ORDER BY id_gallery DESC";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) {
          echo "<div class='card rounded-xl overflow-hidden cursor-pointer'>";
          echo "<img src='images/{$data['foto']}' alt='Gambar' class='w-full h-52 object-cover hover:opacity-90 transition' onclick='openModal(this)'>";
          echo "<div class='p-4'>";
          echo "<h3 class='text-lg font-semibold text-[#4e342e]'>" . htmlspecialchars($data['judul']) . "</h3>";
          echo "</div></div>";
        }
      ?>
    </section>
  </main>

  <!-- Modal -->
  <div id="imgModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage">
  </div>

  <!-- Footer -->
  <footer class="footer text-center py-6 mt-16 text-sm">
    &copy; <?php echo date('Y'); ?> | Dibuat oleh <span class="highlight">Adam Faturrachman</span>
  </footer>

  <!-- Script Modal -->
  <script>
    function openModal(el) {
      const modal = document.getElementById("imgModal");
      const modalImg = document.getElementById("modalImage");
      modal.style.display = "block";
      modalImg.src = el.src;
    }

    function closeModal() {
      document.getElementById("imgModal").style.display = "none";
    }
  </script>
  
</body>
</html>


