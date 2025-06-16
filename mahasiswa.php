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
    <!-- <link rel="stylesheet" href="mahasiswa.css"> -->
</head>
<style>
    .card-container {
    display: flex;
    /* align-items: center; */
    /* justify-content: center; */
    gap: 20px;
}

.card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    width: calc(33.33% - 20px);  /* 3 card per baris, sesuaikan kalau mau 4 atau 2 */
    box-sizing: border-box;
    transition: transform 0.2s ease;
    overflow: hidden;
}

.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.card-text {
    padding: 20px;
}

</style>
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
            <div class="card-container">
                <?php while ($row = mysqli_fetch_array($query)) { ?>
                <div class="card">
                    <img src="../../img/<?= $row['foto']; ?>" alt="<?= $row['nama']; ?>">
                    <div class="card-text">
                        <h3><?= $row['nama']; ?></h3>
                        <p><?= $row['prodi']; ?></p>
                        <p><?= $row['angkatan']; ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- Footer -->
        <footer>
            <p>&copy; 2025 Startup. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
