<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$db = mysqli_connect("localhost:3308","root","","wad_modul4");
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if ($db->connect_error) {
    die("Koneksi gagal: " . $db->connect_error);
}
// 
 
?>