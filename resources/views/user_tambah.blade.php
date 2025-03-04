<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Data User</h1>
        
        <form method="post" action="/user/tambah_simpan/">
            {{ csrf_field() }}
            
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Level ID</label>
                <input type="number" name="level_id" class="form-control" placeholder="Masukan Level ID" required>
            </div>
            
            <div class="button-group">
                <a href="/user" class="btn btn-secondary w-50">Kembali</a>
                <button type="submit" class="btn btn-success w-50">Simpan</button>
                
            </div>
        </form>
    </div>
</body>
</html>
