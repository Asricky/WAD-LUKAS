<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>


    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="judul"><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis"><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="text" name="tahun_terbit"><br><br>

        <button type="submit">Simpan</button>
    </form>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <br>
    <a href="{{ route('buku.index') }}">Kembali ke daftar buku</a>
</body>
</html>
