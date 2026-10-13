
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pegawai</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #343a40;
            height: 64px;
            padding: 0;
        }

        .brand {
            background-color: #212529;
            width: 320px;
            height: 64px;
            padding: 20px;
            color: white;
        }

        .sidebar {
            background-color: #f8f9fa;
            width: 320px;
            min-height: 100vh;
            padding: 20px;
            border-right: 1px solid #ddd;
        }

        .sidebar a {
            display: block;
            padding: 12px 0;
            color: #333;
            text-decoration: none;
        }

        .sidebar a.active {
            color: #4778b8;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .content {
            flex: 1;
            padding: 25px 30px;
        }

        .judul {
            font-size: 40px;
            font-weight: normal;
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
        }

        .sambutan {
            font-size: 30px;
            font-weight: normal;
        }

        .table {
            margin-top: 20px;
        }

        .table th,
        .table td {
            padding: 12px 10px;
        }
    </style>
</head>

<body>


<!-- Navbar -->
<nav class="navbar d-flex p-0">

    <!-- Nama Website -->
    <div class="brand">
        Aza-Store
    </div>

    <!-- Search -->
    <div class="flex-grow-1">
        <input type="text"
               class="form-control rounded-0 border-0"
               placeholder="Search"
               style="height: 60px;">
    </div>

    <!-- Sign out -->
    <a href="#"
       class="text-white text-decoration-none px-4 d-flex align-items-center"
       style="height: 60px;">
        Sign out
    </a>

</nav>

    <div class="d-flex">

        <!-- Sidebar -->
        <div class="sidebar">
            <a href="#" class="active">
                <i class="bi bi-house-door"></i> Dashboard
            </a>

            <a href="#">
                <i class="bi bi-file-earmark"></i> Data Pegawai
            </a>

            <a href="#">
                <i class="bi bi-cart3"></i> Kontak Person
            </a>
        </div>

        <!-- Konten -->
        <div class="content">

            <h1 class="judul">Data Pegawai</h1>

            <h3 class="sambutan">
                Selamat Datang di Halaman Data Pegawai
            </h3>

            <button class="btn btn-primary btn-sm">
                Input Data Pegawai
            </button>

            <!-- Tabel Pegawai -->
            <table class="table table-hover">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>No. HP</th>
                        <th>Agama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'koneksi.php';
                    $query = mysqli_query ($dbconect, "SELECT * FROM tbpegawai");
                    $no = 1;

                    while ($tampil = mysqli_fetch_assoc($query)){
                        ?>
                    
                    <tr>
                        <td> <?php echo $no++;  ?> </td>
                        <td> <?php echo $tampil['id']  ?></td>
                        <td> <?php echo $tampil['nama'] ?></td>
                        <td> <?php echo $tampil['alamat'] ?></td>
                        <td> <?php echo $tampil['kelamin'] ?></td>
                        <td> <?php echo $tampil['nohp'] ?></td>
                        <td> <?php echo $tampil['alamat'] ?></td>
                        <td class="text-nowrap">
                            <button class="btn btn-danger">
                                Hapus
                            </button>

                            <button class="btn btn-primary">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <?php
                    }




                    ?>
                </tbody>

            </table>

        </div>
    </div>

</body>
</html>
```