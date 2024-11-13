<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist\bootstrap-5.3.3-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="row g-0">
        <div class="col-md-3 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="min-height: 100vh;">
            <a class="d-flex align-items-center text-white text-decoration-none mb-1" href="#">
                <i class="bi bi-apple me-2 mt-1"></i>
                <span class="fw-bold fs-4">APPLE ADMIN</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto mt-1">
                <li><a href="dashboard.php" class="nav-link text-white"><i class="bi bi-bank me-2"></i>HOME</a></li>
                <li><a href="index.php" class="nav-link text-white"><i class="bi bi-pc-display-horizontal me-2"></i>MASTER PROJECT</a></li>
                <li><a href="#" class="nav-link active text-white"><i class="bi bi-hammer me-2"></i>MASTER SERVICE</a></li>
            </ul>
            <hr>
            <div class="dropdown">
                <a class="d-flex align-items-center dropdown-toggle text-decoration-none text-white" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong>Admin</strong>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                </ul>
            </div>
        </div>


        <div class="col-md-9">
            <div class="row">

                <div class="col-md-6">
                    <div class="content-section">
                        <h4 class="ms-2">Inbox</h4>
                        <button class="btn btn-info mb-3 ms-2" data-bs-toggle="modal" data-bs-target="#infoModal"><i class="bi bi-person-circle m-2"></i>Ajakan kerja sama Brand Nike</button>
                        <button class="btn btn-info mb-3 ms-2" data-bs-toggle="modal" data-bs-target="#infoModal"><i class="bi bi-person-circle m-2"></i>Meeting dengan CEO Microsoft</button>
                        <button class="btn btn-info mb-3 ms-2" data-bs-toggle="modal" data-bs-target="#infoModal"><i class="bi bi-person-circle m-2"></i>Undangan Pembukaan Kantor baru</button>
                        <button class="btn btn-info mb-3 ms-2" data-bs-toggle="modal" data-bs-target="#infoModal"><i class="bi bi-person-circle m-2"></i>Ajakan kerja sama Brand Coca-Cola</button>
                        

                        <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="infoModalLabel">Informasi Kerja Sama</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Jenis kerja sama yang diinginkan klien:</p>
                                        <ul>
                                            <li>Proyek Baru</li>
                                            <li>Peningkatan Fitur</li>
                                            <li>Konsultasi</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Balas</button>
                                    </div>
                                </div>
                            </div>
                        </div>

            
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="content-section">
                        <h4>Masukkan To-Do List</h4>
                        <form>
                            <div class="mb-3">
                                <label for="judulToDo" class="form-label">Judul To-Do</label>
                                <input type="text" class="form-control" id="judulToDo" placeholder="Judul To-Do" required>
                            </div>
                            <div class="mb-3">
                                <label for="namaKlien" class="form-label">Nama Klien</label>
                                <input type="text" class="form-control" id="namaKlien" placeholder="Nama Klien" required>
                            </div>
                            <div class="mb-3">
                                <label for="ajakan" class="form-label">Ajakan</label>
                                <select class="form-select" id="ajakan" required>
                                    <option value="Proyek Baru">Proyek Baru</option>
                                    <option value="Peningkatan Fitur">Peningkatan Fitur</option>
                                    <option value="Konsultasi">Konsultasi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="isiPesan" class="form-label">Isi Pesan</label>
                                <textarea class="form-control" id="isiPesan" rows="3" placeholder="Tulis isi pesan..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambahkan To-Do</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap-5.3.3-dist\bootstrap-5.3.3-dist\js\bootstrap.js"></script>
</body>
</html>