<?php 
  session_start();
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="stylelr.css">
</head>
<body>
    <?php 
        if(isset($_POST['email'])){
          $email = $_POST['email'];
          $password = md5($_POST['password']);

          $query = mysqli_query($koneksi, "INSERT INTO user(email,password) values ('$email','$password')");

          if($query){
            echo '<script> alert("Selamat, pendaftaran anda berhasil. silahkan login.")</script>';
          }else{
            echo '<script> alert("Pendaftaran gagal.")</script>';
          }
        }
      ?>

    <div class="container">
        <h2>Register</h2>
        <form id="registerForm" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required minlength="8" pattern="(?=.*[0-9])(?=.*[A-Z])(?=.*[\W_]).{8,}">
            
            <button type="submit" class="btn">Register</button>
        </form>
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </div>

    <!-- <script>
        function register() {
            // Ambil nilai input dari form
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Simpan data di localStorage (ini hanya contoh sederhana, sebaiknya backend digunakan)
            localStorage.setItem('registeredEmail', email);
            localStorage.setItem('registeredPassword', password);

            alert('Registrasi berhasil! Silakan login.');
            // Arahkan ke halaman login
            window.location.href = 'login.html';
        }
    </script> -->
</body>
</html>
