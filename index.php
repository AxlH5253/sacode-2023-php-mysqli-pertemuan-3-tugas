<?php
    include './config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas | CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-10 m-auto">
            <p class="h1 text-center p-5">Table Mahasiswa</p>
            <a href="create.php" class="btn btn-primary">Tambah Data</a>
            <table class="table table-hover table-bordered border-primary mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Whatsapp</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                    $query = "SELECT * FROM mahasiswa";
                    $result = mysqli_query($koneksi, $query);
                    
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($result)){
                ?>
                <tbody>
                    <tr>
                        <td scope="row"><?= $no++ ?></td>
                        <td scope="row"><?= $data['nama'] ?></td>
                        <td scope="row"><?= $data['nim'] ?></td>
                        <td scope="row"><?= $data['jenis_kelamin'] ?></td>
                        <td scope="row"><?= $data['alamat'] ?></td>
                        <td scope="row"><?= $data['email'] ?></td>
                        <td scope="row"><?= $data['whatsapp'] ?></td>
                        <td scope="row"></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>