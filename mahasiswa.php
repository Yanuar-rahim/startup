<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Inline CSS for demonstration purposes */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f9fafb;
            margin: 0; 
            padding: 0;
            color: #333;
        }
        header {
            background: #3f51b5;
            color: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        nav ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 1.5rem;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        nav ul li a:hover,
        nav ul li a:focus {
            color: #ffca28;
        }
        main {
            max-width: 900px;
            margin: 2rem auto;
            padding: 0 1rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 3px 12px rgba(63,81,181,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 1rem;
            color: #3f51b5;
        }
        #searchInput {
            width: 100%;
            padding: 0.5rem 1rem;
            margin-bottom: 1.5rem;
            border: 2px solid #3f51b5;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 500;
            outline-offset: 2px;
            transition: border-color 0.3s ease;
        }
        #searchInput:focus {
            border-color: #ffca28;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 1rem;
        }
        thead {
            background: #3f51b5;
            color: white;
        }
        th, td {
            padding: 0.75rem 1rem;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        tbody tr:hover {
            background: #f0f4ff;
        }
    </style>
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
                <tr><td>101007</td><td>Yanuar Galau</td><td>Teknik Informatika</td></tr>
                <tr><td>101008</td><td>Lamangga Hujan Terus</td><td>Teknik Informatika</td></tr>
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
