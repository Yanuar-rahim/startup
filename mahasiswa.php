<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
                    <li><a href="kontak.php">Kontak</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <main>
        <h1>Daftar Mahasiswa</h1>
        <input
            type="text"
            id="searchInput"
            placeholder="Cari mahasiswa berdasarkan nama atau NIM..."
            aria-label="Cari mahasiswa"
        />
        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
         <tbody id="studentTableBody">
                <tr><td>101001</td><td>Alya Ukhty</td><td>Teknik Informatika</td></tr>
                <tr><td>101002</td><td>Meysi Imut</td><td>Tekniik Informatika</td></tr>
                <tr><td>101003</td><td>Cinta Waromsio</td><td>Teknik Informatika</td></tr>
                <tr><td>101004</td><td>Fia Topa</td><td>Teknik Informatika</td></tr>
                <tr><td>101004</td><td>Nina Tanggul</td><td>Teknik Informatika</td></tr>
                <tr><td>101004</td><td>Palatiga Pride</td><td>Teknik Informatika</td></tr>
                <tr><td>101004</td><td>Yanuar Galau</td><td>Teknik Informatika</td></tr>
                <tr><td>101004</td><td>Lamangga Hujan Terus</td><td>Teknik Informatika</td></tr>
</tbody>  

</body>
</html>
