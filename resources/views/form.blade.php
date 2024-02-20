<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Baru</title>
</head>
<body>
    <form action="/data-baru" method="POST">
        @csrf
        <div>
            <label for="">NIM</label>
            <input type="number" name="nim" id="">
        </div>
        <div>
            <label for="">Nama</label>
            <input type="text" name="nama" id="">
        </div>
        <div>
            <label for="">Prodi</label>
            <input type="text" name="prodi" id="">
        </div>
        <div>
            <label for="">Fakultas</label>
            <input type="text" name="fakultas" id="">
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" id="" placeholder="P / L">
        </div>
        <button type="submit">Tambah Data</button>
    </form>
</body>
</html>