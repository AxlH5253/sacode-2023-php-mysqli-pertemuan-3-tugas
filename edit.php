<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas | Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            include './config/koneksi.php';
            $id = $_GET['id'];
            $query = "SELECT * FROM mahasiswa WHERE id = '$id'";
            $result = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($result);
        ?>
        <div class="col-10 m-auto" style="padding: 100px 0 0 0;">
            <h2 class="text-center fw-bold">Edit Data Mahasiswa</h2>
            <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
                <form action="editproses.php" method="post">
                    <input type="hidden" name="id" value="<?=$data['id']?>"> 
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">NIM</label>
                        <input name="nim" type="number" class="form-control" id="exampleFormControlInput2" value="<?= $data['nim'] ?>">
                    </div>
                    <div class="mb-3">
                        <p>Jenis Kelamin</p>
                        <input name="gender" type="radio" id="gender1Input" value="pria" <?= $data['jenis_kelamin'] == 'pria' ? 'checked' : null ?>>
                        <label from="gender1Input" class="form-label">Pria</label>
                        <input name="gender" type="radio" id="gender2Input" value="wanita" <?= $data['jenis_kelamin'] == 'wanita' ? 'checked' : null ?>>
                        <label from="gender2Input" class="form-label">Wanita</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleFormControlInput3" value="<?= $data['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput4" class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlInput4"><?= $data['alamat'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput5" class="form-label">Whatsapp</label>
                        <input name="whatsapp" type="text" class="form-control" id="exampleFormControlInput5" value="<?= $data['whatsapp'] ?>">
                    </div>
                    <div class="col-3 m-auto">
                        <button class="btn btn-md btn-primary px-5 mt-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>