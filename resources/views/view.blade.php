<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Data Mahasiswa</title>
    <style>
        table {
            margin: 0px auto;
            width: 80%;
            text-align: center;
            border: 1px solid black;
        } tr, td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <a href="/new-mhs"> Tambah Data Baru </a>
    <table>
        <thead>
            <th> NIM </th>
            <th> Nama </th>
            <th> Prodi </th>
            <th> Fakultas </th>
            <th> Jenis Kelamim </th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td> {{ $item->nim }} </td>
                    <td> {{ $item->nama }} </td>
                    <td> {{ $item->prodi }} </td>
                    <td> {{ $item->fakultas }} </td>
                    <td> {{ $item->jenis_kelamin }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>