<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username='".$username."' AND password='".$password."'");
$data = mysqli_fetch_array($query);
$cek_hasil = mysqli_num_rows($query);

if($cek_hasil>0){
    $_SESSION['username'] = $data['username'];
    ?>
    <script>
        alert("Login Berhasil, Selamat Datang <?php echo $data['nama']; ?>");
        document.location = "index.php";
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Login Gagal, Username atau Password Salah");
        document.location = "login.php";
    </script>
    <?php
}
?>
