<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas | Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            include './config/koneksi.php';
        ?>
        <div class="col-10 m-auto" style="padding: 100px 0 0 0;">
            <h2 class="text-center fw-bold">Tambah Data Mahasiswa</h2>
            <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
                <form action="createproses.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">NIM</label>
                        <input name="nim" type="number" class="form-control" id="exampleFormControlInput2">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>