<?php
  session_start();
  include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="stylelr.css">
</head>
<body>
<?php
        if(isset($_POST['email'])){
          $email = $_POST['email'];
          $password = md5($_POST['password']);

          $query =mysqli_query($koneksi, "SELECT*FROM user where email='$email' and password='$password'");

          if(mysqli_num_rows($query) > 0){
            $data = mysqli_fetch_array($query);
            $_SESSION['user'] = $data;
            echo '<script> alert("Selamat Datang, '.$data['email'].'");
            location.href="index.php";</script>';
          }else{
            echo '<script> alert("Email/Password tidak sesuai.");</script>';
          }
        }
      ?>
    <div class="container">
        <h2>Login</h2>
        <form id="loginForm" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required minlength="8" pattern="(?=.*[0-9])(?=.*[A-Z])(?=.*[\W_]).{8,}">
            
            <button type="submit" class="btn">Login</button>
        </form>
        <p>Belum punya akun? <a href="register.php">Register</a></p>
    </div>

    <!-- <script>
        function login() {
            // Ambil nilai input dari form
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Sederhana: Memeriksa jika email dan password sesuai
            if (email === 'admin@funvilla.com' && password === 'Password123!') {
                // Simpan status login di localStorage
                localStorage.setItem('isLoggedIn', 'true');
                
                // Redirect ke halaman utama
                window.location.href = 'index.html';
            } else {
                alert('Email atau password salah!');
            }
        }

        // Cek jika pengguna sudah login, arahkan langsung ke halaman utama
        window.onload = function() {
            if (localStorage.getItem('isLoggedIn') === 'true') {
                window.location.href = 'index.html';
            }
        }
    </script> -->
</body>
</html>
