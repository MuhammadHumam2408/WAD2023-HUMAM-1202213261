<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $sql = "SELECT * FROM showroom_mobil";
            $result = mysqli_query($connect, $sql);

            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Mobil</th>
                            <th>Brand Mobil</th>
                            <th>Warna Mobil</th>
                            <th>Tipe Mobil</th>
                            <th>Harga Mobil</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                
                                <td><?php echo $row['nama_mobil']; ?></td>
                                <td><?php echo $row['brand_mobil']; ?></td>
                                <td><?php echo $row['warna_mobil']; ?></td>
                                <td><?php echo $row['tipe_mobil']; ?></td>
                                <td><?php echo $row['harga_mobil']; ?></td>
                                <td>
                                    <a href="form_detail_mobil.php?id=<?php echo $row['id']; ?>" style="background-color: blue; color: white; border: 1px solid black; padding: 5px 10px; text-decoration: none;">Aksi</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>     
                <?php
            }
            







            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
