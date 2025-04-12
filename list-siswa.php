<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | List Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <header class="mb-4">
            <h3 class="text-center">Siswa yang Sudah Mendaftar</h3>
        </header>
        
        <nav class="mb-3">
            <a href="form-daftar.php" class="btn btn-primary">(+) Tambah Data Baru</a>
        </nav>
        
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include("config.php");
                    $sql = "SELECT * FROM calon_siswa";
                    $query = mysqli_query($db, $sql);
                    
                    while ($siswa = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>". $siswa["id"]."</td>";
                        echo "<td>". $siswa["nama"]."</td>";
                        echo "<td>". $siswa["alamat"]."</td>";
                        echo "<td>". $siswa["jenis_kelamin"]."</td>";
                        echo "<td>". $siswa["agama"]."</td>";
                        echo "<td>". $siswa["sekolah_asal"]."</td>";
                        echo "<td>
                                <a href='form-edit.php?id=".$siswa['id']."' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='hapus.php?id=".$siswa['id']."' class='btn btn-danger btn-sm'>Hapus</a>
                              </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <p class="text-end">Total Siswa: <strong><?php echo mysqli_num_rows($query); ?></strong></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
