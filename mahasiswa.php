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
        <!-- header -->
        <header>
            <nav>
                <ul>
                    <li><a href="beranda.php">Beranda</a></li>
                    <li><a href="mahasiswa.php" aria-current="page" style="font-weight:700; color:#ffca28;">Daftar Mahasiswa</a></li>
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
                <tr><td>101001</td><td>Alya Palatiga</td><td>Teknik Informatika</td></tr>
                <tr><td>101002</td><td>Meysi Imut</td><td>Teknik Informatika</td></tr>
                <tr><td>101003</td><td>Cinta Waromsio</td><td>Teknik Informatika</td></tr>
                <tr><td>101004</td><td>Fia Topa</td><td>Teknik Informatika</td></tr>
                <tr><td>101005</td><td>Nina Tanggul</td><td>Teknik Informatika</td></tr>
                <tr><td>101006</td><td>Palatiga Pride</td><td>Teknik Informatika</td></tr>
                <tr><td>101007</td><td>Rahman Raha</td><td>Teknik Informatika</td></tr>
                <tr><td>101008</td><td>Lamangga Hujan Terus</td><td>Teknik Informatika</td></tr>
                <tr><td>101009</td><td>Fadhil Sambali</td><td>Teknik Informatika</td></tr>
            </tbody>
        </table>
    </main>
    <script>
        const searchInput = document.getElementById('searchInput');
        const studentTableBody = document.getElementById('studentTableBody');

        searchInput.addEventListener('input', function() {
            const filter = this.value.toLowerCase();
            const rows = studentTableBody.querySelectorAll('tr');

            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const nim = cells[0].textContent.toLowerCase();
                const name = cells[1].textContent.toLowerCase();
                if (nim.includes(filter) || name.includes(filter)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
