<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pelaporan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/navbar.css">
    <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>


<!-- Notifikasi -->
<div id="notif-panel" class="notif-panel">
    <div class="notif-header">
        <h5>Kamu memiliki 4 Notifikasi Baru!</h5>
        <hr>
    </div>
    <ul id="notif-list">
        <li>
            <img src="img/ceklis.png" alt="Accepted" style="height: 20px;"> Permintaan anda diterima
        </li>
        <li>
            <img src="img/ceklis.png" alt="Accepted" style="height: 20px;"> Permintaan anda diterima
        </li>
        <li>
            <img src="img/silang.png" alt="Rejected" style="height: 20px;"> Permintaan anda ditolak
        </li>
        <li>
            <img src="img/ceklis.png" alt="Accepted" style="height: 20px;"> Permintaan anda diterima
        </li>
    </ul>
    
    <!-- Garis tambahan disembunyikan di sini -->
    <hr id="extra-line" style="display: none;">

    <!-- Notifikasi tambahan yang disembunyikan -->
    <div id="extra-notif" style="display: none;">
        <ul>
            <li>
                <img src="img/ceklis.png" alt="Accepted" style="height: 20px;"> Permintaan anda diterima
            </li>
            <li>
                <img src="img/silang.png" alt="Rejected" style="height: 20px;"> Permintaan anda ditolak
            </li>
        </ul>
    </div>
    
    <hr>
    <a href="#" id="show-more" class="show-more">Lihat Semua Notifikasi</a>
</div>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">FORM PELAPORAN KERUSAKAN</h1>
                </div>

                <form>
                    <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan nama lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="nomorHandphone" class="form-label">Nomor Handphone</label>
                        <input type="text" class="form-control" id="nomorHandphone" placeholder="Masukkan nomor handphone">
                    </div>
                    <div class="mb-3">
                        <label for="programStudi" class="form-label">Program Studi</label>
                        <select class="form-select" id="programStudi">
                            <option selected>Pilih program studi</option>
                            <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                            <option value="S1 Informatika">S1 Informatika</option>
                            <option value="S1 Tenik Elektro">S1 Tenik Elektro</option>
                            <option value="S1 Teknik Bioproses">S1 Teknik Bioproses</option>
                            <option value="S1 Manajemen Rekayasa">S1 Manajemen Rekayasa</option>
                            <option value="S1 Teknik Metalurgi">S1 Teknik Metalurgi</option>
                            <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
                            <option value="D3 Teknologi Informasi">D3 Teknologi Informasi</option>
                            <option value="D4 Teknologi Rekayasa Perangkat Lunak">D4 Teknologi Rekayasa Perangkat Lunak</option>

                            <!-- Add more options as necessary -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="lokasiKerusakan" class="form-label">Lokasi Kerusakan</label>
                        <input type="text" class="form-control" id="lokasiKerusakan" placeholder="Masukkan lokasi kerusakan">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsiKerusakan" class="form-label">Deskripsi Kerusakan</label>
                        <textarea class="form-control" id="deskripsiKerusakan" rows="3" placeholder="Bagian ini harap isi dengan jelas dan detail bentuk kerusakan yang ditemukan."></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="fotoKerusakan" class="form-label">Unggah Foto Bukti Kerusakan</label>
                        <input class="form-control" type="file" id="fotoKerusakan">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script src="jss/index.js" defer></script>

    
    
    
</body>
</html>
<?php /**PATH C:\Users\Indah\Herd\ppw\resources\views/form.blade.php ENDPATH**/ ?>