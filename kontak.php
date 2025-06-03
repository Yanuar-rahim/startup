<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="kontak.css">
</head>
<body>
    <div class="container">
        <!-- header -->
        <header>
            <nav>
                <ul>
                    <li><a href="beranda.php">Beranda</a></li>
                    <li><a href="mahasiswa.php">Daftar Mahasiswa</a></li>
                    <li><a href="tentang.php">Tentang</a></li>
                    <li><a href="kontak.php" class="active">Kontak</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- konten -->
        <div class="konten">
            <div class="hero">
                <h1>Hubungi Kami</h1>
                <p>Jika Anda memiliki pertanyaan atau masukan, silakan isi formulir di bawah ini.</p>
            </div>
            
            <article>
                <form action="proses_kontak.php" method="post">
                    <label class="nama" for="nama">Nama:</label><br>
                    <input class="nama" type="text" id="nama" name="nama" required><br><br>
                    
                    <label class="email" for="email">Email:</label><br>
                    <input class="email" type="email" id="email" name="email" required><br><br>
                    
                    <label class="pesan" for="pesan">Pesan:</label><br>
                    <textarea class="pesan" id="pesan" name="pesan" rows="5" required></textarea><br><br>
                    
                    <button type="submit">Kirim</button>
                </form>
            </article>
        </div>
        
        <!-- footer -->
        <footer>
            <p>&copy; 2025 Startup. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>