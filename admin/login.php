<?php 
session_start(); 
if (isset($_SESSION['username'])) { 
  header('location:beranda_admin.php'); 
} 
require_once("../koneksi.php"); 
?> 

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Administrator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Playfair Display', serif;
      background: linear-gradient(135deg, #efebe9, #d7ccc8);
      min-height: 100vh;
    }
    .login-container {
      background-color: #ffffff;
      border: 1px solid #d7ccc8;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    .heading {
      color: #4e342e;
    }
    .label {
      color: #5d4037;
    }
    .input-style {
      background-color: #fefefe;
      color: #4e342e;
    }
    .btn-login {
      background-color: #6d4c41;
    }
    .btn-login:hover {
      background-color: #5d4037;
    }
  </style>
</head>

<body class="flex items-center justify-center px-4">

  <div class="login-container rounded-xl p-8 w-full max-w-md mt-20">
    <h2 class="text-3xl font-bold text-center mb-8 heading">Login Administrator</h2>
    
    <form action="cek_login.php" method="post" class="space-y-6">
      <div>
        <label for="username" class="block text-sm font-semibold mb-1 label">Username</label>
        <input type="text" name="username" id="username" required placeholder="Masukkan username"
          class="w-full px-4 py-2 rounded border border-gray-300 focus:ring-2 focus:ring-[#ffcc80] focus:outline-none input-style">
      </div>

      <div>
        <label for="password" class="block text-sm font-semibold mb-1 label">Password</label>
        <input type="password" name="password" id="password" required placeholder="Masukkan password"
          class="w-full px-4 py-2 rounded border border-gray-300 focus:ring-2 focus:ring-[#ffcc80] focus:outline-none input-style">
      </div>

      <div class="flex justify-between mt-6">
        <input type="submit" name="login" value="Login"
          class="btn-login text-white font-semibold px-5 py-2 rounded cursor-pointer transition">
        <input type="reset" value="Cancel"
          class="bg-gray-300 text-gray-800 font-medium px-5 py-2 rounded hover:bg-gray-400 transition cursor-pointer">
      </div>
    </form>

    <p class="text-center text-sm text-gray-600 mt-8">
      &copy; <?php echo date('Y'); ?> - <strong>Adam Faturrachman</strong>
    </p>
  </div>

</body>
</html>
