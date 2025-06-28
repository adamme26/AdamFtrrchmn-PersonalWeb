<?php include "koneksi.php"; ?> 
<!DOCTYPE html> 
<html lang="id"> 
<head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Personal Web | Home</title> 
  <script src="https://cdn.tailwindcss.com"></script> 
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Playfair Display', serif;
      background: linear-gradient(135deg, #d7ccc8, #a1887f);
      color: #3e2723;
    }

    .card {
      background-color: #efebe9;
      border: 1px solid #a1887f;
      box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
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
  <header class="header text-center p-8 shadow-lg">
    <h1 class="text-3xl md:text-4xl font-bold tracking-wide drop-shadow">Personal Web | Adam Faturrachman</h1>
    <p class="text-sm italic mt-2 text-[#ffe0b2]">Berbagi cerita, ide, dan inspirasi melalui tulisan</p>
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
  <main class="max-w-7xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">

    <!-- Artikel Utama --> 
    <section class="md:col-span-2 card rounded-xl p-6">
      <h2 class="text-2xl font-semibold mb-4 text-[#4e342e] border-b pb-2 border-[#6d4c41]">Artikel Terbaru</h2>
      <div class="space-y-6">
        <?php 
        $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC"; 
        $query = mysqli_query($db, $sql); 
        while ($data = mysqli_fetch_array($query)) { 
          echo "<div class='pb-4 border-b border-[#a1887f]'>";
          echo "<h3 class='text-xl font-bold text-[#6d4c41] mb-1'>" . htmlspecialchars($data['nama_artikel']) . "</h3>"; 
          echo "<p class='text-sm leading-relaxed'>" . htmlspecialchars($data['isi_artikel']) . "</p>"; 
          echo "</div>"; 
        } 
        ?> 
      </div>
    </section> 

    <!-- Sidebar --> 
    <aside class="card rounded-xl p-6">
      <h2 class="text-xl font-semibold mb-4 text-[#4e342e] border-b pb-2 border-[#6d4c41]">Daftar Artikel</h2> 
      <ul class="space-y-3 list-disc list-inside text-sm text-[#5d4037]"> 
        <?php 
        $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC"; 
        $query = mysqli_query($db, $sql); 
        while ($data = mysqli_fetch_array($query)) { 
          echo "<li>" . htmlspecialchars($data['nama_artikel']) . "</li>"; 
        } 
        ?> 
      </ul> 
    </aside> 
  </main> 

  <!-- Audio Player Modern with Larger Album Icon -->
<div class="fixed top-4 right-4 z-50">
  <div class="flex items-center bg-[#efebe9] border border-[#a1887f] shadow-xl rounded-2xl px-5 py-3 space-x-4">

    <!-- Album Image (Ukuran Besar) -->
    <img src="images/one piss.jpg" alt="Album" class="w-16 h-16 rounded-xl object-cover border border-[#6d4c41] shadow-md">

    <!-- Audio Control -->
    <div class="flex flex-col justify-center">
      <p class="text-sm font-semibold text-[#4e342e] mb-1">ONE PIECE!</p>
      <div class="flex items-center space-x-3">
        <button onclick="togglePlay()" id="playBtn" class="text-2xl text-[#4e342e] hover:text-[#3e2723] transition">
          ▶️
        </button>
        <div id="volumeIcon" class="hidden sm:flex space-x-1">
          <span class="w-1 h-3 bg-[#6d4c41] animate-ping rounded-sm"></span>
          <span class="w-1 h-4 bg-[#6d4c41] animate-ping delay-100 rounded-sm"></span>
          <span class="w-1 h-5 bg-[#6d4c41] animate-ping delay-200 rounded-sm"></span>
        </div>
      </div>
      <audio id="myAudio" class="hidden">
        <source src="lagu/Memories - Maki Otsuki  One Piece Ending Song 1  Lirik + Terjemahan Indonesia - R Y U U 神.mp3" 
        type="audio/mpeg">
        Browser Anda tidak mendukung audio.
      </audio>
    </div>
  </div>
</div>

<!-- Tailwind Custom Animation -->
<style>
  @keyframes volume {
    0%, 100% { transform: scaleY(1); }
    50% { transform: scaleY(1.5); }
  }
  .animate-ping {
    animation: volume 1s infinite;
  }
  .delay-100 { animation-delay: 0.1s; }
  .delay-200 { animation-delay: 0.2s; }
</style>

<!-- Script Play / Pause -->
<script>
  const audio = document.getElementById("myAudio");
  const playBtn = document.getElementById("playBtn");
  const volumeIcon = document.getElementById("volumeIcon");

  function togglePlay() {
    if (audio.paused) {
      audio.play();
      playBtn.innerText = '⏸️';
      volumeIcon.style.display = 'flex';
    } else {
      audio.pause();
      playBtn.innerText = '▶️';
      volumeIcon.style.display = 'none';
    }
  }
</script>

  <!-- Footer --> 
  <footer class="footer text-center py-6 mt-16 text-sm">
    &copy; <?php echo date('Y'); ?> | Dibuat oleh <span class="highlight">Adam Faturrachman</span>
  </footer> 

</body> 
</html>