<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist\bootstrap-5.3.3-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="row g-0">
        <div class="col-md-3 d-flex flex-column p-3 text-white bg-dark"
            style="height: inherit; min-height:100vh;">
            <a class="d-flex  alignment-items-center text-white text-decoration-none mb-1" href="#">
                <i class="bi bi-apple me-2 mt-1"></i><span class="fw-bold fs-4">APPLE ADMIN</span></a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto mt-1">
                <li>
                    <a href="#" class="nav-link active text-white"><i class="bi bi-bank me-2"></i>HOME</a>
                </li>
                <li>
                    <a href="index.php" class="nav-link text-white"><i
                            class="bi bi-pc-display-horizontal me-2"></i>MASTER PROJECT</a>
                </li>
                <li>
                    <a href="service.php" class="nav-link text-white"><i class="bi bi-hammer me-2"></i>MASTER
                        SERVICE</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <div class="dropdown">
                    <a class="d-flex align-items-center dropdown-toggle text-decoration-none text-white"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>Admin</strong>

                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="content container-fluid">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="content-section">
                            <h4>To-Do List</h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="task1">
                                    <label class="form-check-label" for="task1">Web Toko</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="task2">
                                    <label class="form-check-label" for="task2">Disain Logo</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="task3">
                                    <label class="form-check-label" for="task3">Edit Video</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="task3">
                                    <label class="form-check-label" for="task3">Buat Video Promosi</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="task3">
                                    <label class="form-check-label" for="task3">Meeting</label>
                                </li>
                            </ul>
                            <button class="btn btn-primary mt-2">Tambah Tugas</button>
                        </div>
                    </div>
                    <div class="col-md-6 content-section">
                        <h4>Catatan</h4>
                        <textarea class="form-control note-area" placeholder="Tulis catatan di sini..."></textarea>
                        <button class="btn btn-success mt-2">Simpan Catatan</button>
                    </div>
                </div>
            </div>
     


    <script src="bootstrap-5.3.3-dist\bootstrap-5.3.3-dist\js\bootstrap.js"></script>
</body>

</html>