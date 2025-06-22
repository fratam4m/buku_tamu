<?php
include "koneksi.php";
?>

<h1>DAFTAR TAMU</h1>
<a href="tambah.php">TAMBAH TAMU</a> | <a href="logout.php">LOGOUT</a> <br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>E-Mail</th>
        <th>KEPADA</th>
        <th>PESAN</th>
        <th>WAKTU</th>
        
        <th>AKSI</th>
    </tr>
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM daftar_tamu");
    $no = 1;
    while ($data = mysqli_fetch_array($query)) {
        echo "<tr>
            <td>{$no}</td>
            <td>{$data['nama']}</td>
            <td>{$data['alamat']}</td>
            <td>{$data['email']}</td>
            <td>{$data['tujuan']}</td>
            <td>{$data['pesan']}</td>
            <td>{$data['tanggal']}</td>
            <td>
                <a href='edit.php?id={$data['id']}'>Edit</a> | 
                <a href='delete.php?id={$data['id']}' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">Delete</a>
            </td>
        </tr>";
        $no++;
    }
    ?>
</table>
