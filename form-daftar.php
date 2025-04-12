<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h3>Formulir Pendaftaran Siswa Baru</h3>
            </div>
            <div class="card-body">
                <form action="proses-pendaftaran.php" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <textarea name="alamat" class="form-control" rows="3" required></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" required>
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" required>
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama:</label>
                        <select name="agama" class="form-select" required>
                            <option value="">Pilih Agama</option>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Atheis</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="sekolah_asal" class="form-label">Sekolah Asal:</label>
                        <input type="text" name="sekolah_asal" class="form-control" placeholder="Nama sekolah" required>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" name="daftar" class="btn btn-success">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
