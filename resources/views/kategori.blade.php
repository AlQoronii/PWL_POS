<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Kategori Barang Kantin</title>
</head>
<body>
        <h1>Data Kategori Barang</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{$d->kategori_id}}</td>
                    <td>{{$d->kategori_kode}}</td>
                    <td>{{$d->kategori_nama}}</td>
                </tr>
            @endforeach
        </table>
</body>
</html>