<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | List Siswa</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS (Bootstrap 5 integration) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <div class="container mt-4">
        <header class="mb-4">
            <h3 class="text-center">Siswa yang Sudah Mendaftar</h3>
        </header>
        
        <nav class="mb-3">
            <a href="form-daftar.php" class="btn btn-primary">(+) Tambah Data Baru</a>
        </nav>
        
        <table id="siswaTable" class="table table-bordered table-striped">
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
                    $nomor = 1;
                    
                    while ($siswa = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>". $nomor++ ."</td>";
                        echo "<td>". htmlspecialchars($siswa["nama"]) ."</td>";
                        echo "<td>". htmlspecialchars($siswa["alamat"]) ."</td>";
                        echo "<td>". htmlspecialchars($siswa["jenis_kelamin"]) ."</td>";
                        echo "<td>". htmlspecialchars($siswa["agama"]) ."</td>";
                        echo "<td>". htmlspecialchars($siswa["sekolah_asal"]) ."</td>";
                        echo "<td>
                                <a href='form-edit.php?id=". $siswa['id'] ."' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='hapus.php?id=". $siswa['id'] ."' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin hapus data ini?\")'>Hapus</a>
                              </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <p class="text-end">Total Siswa: <strong><?php echo mysqli_num_rows($query); ?></strong></p>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery (required for DataTables) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <!-- Initialization of DataTables -->
    <script>
        $(document).ready(function() {
            $('#siswaTable').DataTable(); 
        });
    </script>
</body>
</html>
