<!-- resources/views/user/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Ruangan</th>
                <th>Kapasitas</th>
                <th>Deskripsi</th>
                <th>Lokasi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ruangans as $ruangan)
                        <tr>
                            <td>{{ $ruangan->id }}</td>
                            <td>{{ $ruangan->nama_ruangan }}</td>
                            <td>{{ $ruangan->kapasitas }}</td>
                            <td>{{ $ruangan->deskripsi }}</td>
                            <td>{{ $ruangan->lokasi }}</td>
                        </tr>
            @endforeach
        </tbody>
        </table>
        <a href="{{route('user.home')}}">Kembali</a>
</body>
</html>
