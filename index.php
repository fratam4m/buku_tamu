<?php
session_start();
if(empty($_SESSION['username'])){
    header("location:login.php");
    exit();
}
include "koneksi.php";

//cek level user
$qlevel = mysqli_query($koneksi, "select * from pengguna where username='".$_SESSION['username']."'");
$dlevel = mysqli_fetch_array($qlevel);
?>

<h1>DAFTAR TAMU</h1>
<a href="tambah.php">TAMBAH TAMU</a> | <a href="logout.php">Log Out</a> <br><br>
<table border=1>
    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>ALAMAT</td>
        <td>No Telp</td>
        <td>E-Mail</td>
        <td>KEPADA</td>
        <td>PESAN</td>
        <td>WAKTU</td>
        <?php
            if ($dlevel ["level"] == "admin") {
                echo "<td>AKSI</td>";
            }
        ?>
    </tr>
    <?php
    $query = mysqli_query($koneksi, "select * from daftar_tamu");
    $no=1;
    while ($data = mysqli_fetch_array($query)) {
        echo   "<tr><td>" . $no . "</td>
                    <td>" . $data['nama'] . "</td>
                    <td></td>
                    <td></td>
                    <td>" . $data['email'] . "</td>
                    <td>" . $data['kepada'] . "</td>
                    <td>" . $data['pesan'] . "</td>
                    <td>" . $data['tanggal'] . "</td>";

                    if( $dlevel['level']=='admin'){
                        echo "<td> <a href='edit.php?id=".$data['id']."'>EDIT | <a href='delete.php?id=".$data['id']."'>DELETE</td>";                
                        }
                        echo "</tr>";
    $no++;
        }       
    ?>
</table>
