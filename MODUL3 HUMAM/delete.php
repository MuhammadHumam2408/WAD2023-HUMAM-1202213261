<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
require "connect.php";
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
if (!is_numeric($id) || $id <= 0) {
    echo "<a href='list.php'>ID tidak valid</a>";
    exit;
}
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $sql_delete = "DELETE FROM showroom_mobil WHERE id = $id";
    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if (mysqli_query($connect, $sql_delete)) {
        if (mysqli_affected_rows($connect) == 0) {
            echo "<a href='list.php'>Data Berhasil Dihapus</a>";
        } else {
            echo "<a href='list.php'>Data dengan ID $id tidak ditemukan</a>";
        }
    } else {
        // (6) Handle error jika eksekusi query gagal
        echo "<a href='list.php'>EROR: " . mysqli_error($connect) . "</a>";
    }
// Tutup koneksi ke database setelah selesai menggunakan database
$connect->close();
?>