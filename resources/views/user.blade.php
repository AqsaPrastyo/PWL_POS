<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>
<body>
    <a href="/user/tambah">+Tambah User</a>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
<tr>
    <th>ID</th>
    <th>Username</th>
    <th>Nama</th>
    <th>ID Level Pengguna</th>
    <th>Kode Level</th>
    <th>Nama Level</th>
    <th>Aksi</th>
</tr>
@foreach ($data as $data)
    

<tr>
    <td>{{$data->user_id}}</td>
    <td>{{$data->username}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->level_id}}</td>
    <td>{{$data->level->level_kode}}</td>
    <td>{{$data->level->level_nama}}</td>
    <td><a href="/user/ubah/{{$data->user_id}}">ubah</a> | <a href="/user/hapus/{{ $data->user_id}}">Hapus</a></td>
</tr>
@endforeach

    </table>
</body>
</html>