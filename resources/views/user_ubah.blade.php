<html>
    <body>
        <h1>Form Ubah Data User</h1>
        <a href="/user">kembali</a>
        <br><br>
        <form method="post" action="{{ url('/user/ubah_simpan/' . $data->user_id) }}" >
        {{ csrf_field() }}
        {{method_field('PUT')}}

        <label>Username</label><br>
        <input type="text" name="username" placeholder="Masukan Username" value="{{$data->username}}">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukan Nama" value="{{$data->nama}}">
        <br>
        <label>Password</label>
        <input type="text" name="password" placeholder="Masukan Password" value="{{$data->password}}">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" placeholder="Masukan Level ID" value="{{$data->level_id}}">
        <br><br>
        <input type="Submit" class="btn btn-success" value="Simpan" >

        </form>
    </body>
</html>