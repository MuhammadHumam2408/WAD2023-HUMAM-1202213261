<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
require "connect.php";
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    function update($connect, $id, $nama_mobil, $brand_mobil, $warna_mobil, $tipe_mobil, $harga_mobil) {
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $sql_update = "UPDATE showroom_mobil SET 
                        nama_mobil = '$nama_mobil',
                        brand_mobil = '$brand_mobil',
                        warna_mobil = '$warna_mobil',
                        tipe_mobil = '$tipe_mobil',
                        harga_mobil = $harga_mobil
                        WHERE id = $id";

        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        $result = mysqli_query($connect, $sql_update);
        // Eksekusi perintah SQL
        if ($result) {
            header("Location: list_mobil.php");
        } else {
            echo "<a href='list.php'>Update Gagal</a>: " . mysqli_error($connect);
        }
    }
        // Buatkan kondisi jika eksekusi query berhasil
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        $nama_mobil = $_POST['nama_mobil'];
        $brand_mobil = $_POST['brand_mobil'];
        $warna_mobil = $_POST['warna_mobil'];
        $tipe_mobil = $_POST['tipe_mobil'];
        $harga_mobil = $_POST['harga_mobil'];
    // Panggil fungsi update dengan data yang sesuai
    update($connect, $id, $nama_mobil, $brand_mobil, $warna_mobil, $tipe_mobil, $harga_mobil);
}
// Tutup koneksi ke database setelah selesai menggunakan database
$connect->close();
?>