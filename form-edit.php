<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h3>Formulir Edit Siswa</h3>
            </div>
            <div class="card-body">
                <form action="proses-edit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <textarea name="alamat" class="form-control" rows="3" required><?php echo $siswa['alamat'] ?></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin:</label>
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?> required>
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?> required>
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama:</label>
                        <?php $agama = $siswa['agama']; ?>
                        <select name="agama" class="form-select" required>
                            <option value="">Pilih Agama</option>
                            <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                            <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                            <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                            <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                            <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="sekolah_asal" class="form-label">Sekolah Asal:</label>
                        <input type="text" name="sekolah_asal" class="form-control" placeholder="Nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" required>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>