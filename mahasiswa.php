<?php
    include "koneksi.php";

    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswaaa ORDER BY id DESC");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mahasiswa.css">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
            <nav>
                <ul>
                    <li><a href="beranda.php">Beranda</a></li>
                    <li><a href="mahasiswa.php">Daftar Mahasiswa</a></li>
                    <li><a href="tentang.php">Tentang</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
        </header>

        <!-- Konten -->
        <div class="konten">
            <h1>Daftar Mahasiswa</h1>
            <?php while ($row = mysqli_fetch_array($query)) { ?>
            <div class="card-container">
                <div class="card">
                    <img src="../../img/<?= $row['foto']; ?>" alt="<?= $row['nama']; ?>">
                    <div class="card-text">
                        <h3><?= $row['nama']; ?></h3>
                        <p><?= $row['prodi']; ?></p>
                        <p><?= $row['angkatan']; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- Footer -->
        <footer>
            <p>&copy; 2025 Startup. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
