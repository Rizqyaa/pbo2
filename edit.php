<?php
$id = $_GET['id'];
$db =new PDO("mysql:host=localhost;dbname=fufufu",'root','');
$query = $db->query("select * from mahasiswa where id=$id");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>update</title>
</head>
<body>
    
    <form method="POST" action="prosedit.php" class="row g-3" style="padding-top: 20px; padding-left: 25px;">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="col-auto">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?= $data['nama'] ?>">
        </div>
        <div class="col-auto">
            <label class="form-label">Jurusan</label>
            <select name="jurusan" id="" class="form-select" aria-label="Default select example" value="<?= $data['jurusan'] ?>">
                <option value="Teknik Informatika" <?= $data['jurusan'] == '1' ? 'selected' : '' ?>>Teknik Informatika</option>
                <option value="Sistem Informasi" <?= $data['jurusan'] == '2' ? 'selected' : '' ?>>Sistem Informasi</option>
                <option value="Matematika" <?= $data['jurusan'] == '3' ? 'selected' : '' ?>>Matematika</option>
                <option value="Astronomi" <?= $data['jurusan'] == '4' ? 'selected' : '' ?>>Astronomi</option>
                <option value="Geografi" <?= $data['jurusan'] == '5' ? 'selected' : '' ?>>Geografi</option>
                <option value="Ilmu Komunikasi" <?= $data['jurusan'] == '6' ? 'selected' : '' ?>>Ilmu Komunikasi</option>
                <option value="Kimia" <?= $data['jurusan'] == '7' ? 'selected' : '' ?>>Kimia</option>
                <option value="Fisika" <?= $data['jurusan'] == '8' ? 'selected' : '' ?>>Fisika</option>
                <option value="Farmasi" <?= $data['jurusan'] == '9' ? 'selected' : '' ?>>Farmasi</option>
                <option value="Arsitektur Interior" <?= $data['jurusan'] == '10' ? 'selected' : '' ?>>Arsitektur Interior</option>
                <option value="DKV" <?= $data['jurusan'] == '11' ? 'selected' : '' ?>>DKV</option>
                <option value="Psikologi Pendidikan" <?= $data['jurusan'] == '12' ? 'selected' : '' ?>>Psikologi Pendidikan</option>
            </select>
        </div>
        <div class="d-grid gap-2 d-md-block mx-auto" style="padding-top:5px;">
            <button type="submit" value="simpan" class="btn btn-primary mb-3" style="--bs-btn-font-weight: 80;">.   .Update.   .</button>
            <button type="" class="btn btn-danger mb-3" style="--bs-btn-font-weight: 600;" action="index.php" >.   .Batal.   .</button>
            </div>
    </form>
