<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengguna</title>
    <style>
        .container { width: 80%; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; }
        .detail { margin-bottom: 10px; }
        .label { font-weight: bold; }
        .btn-back { color: white; background-color: gray; padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; }
        .btn-back:hover { background-color: darkgray; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Pengguna</h1>
        <div class="detail">
            <span class="label">Nama:</span> {{ $user->name }}
        </div>
        <div class="detail">
            <span class="label">NIK:</span> {{ $user->nik }}
        </div>
        <div class="detail">
            <span class="label">Tanggal Lahir:</span> {{ $user->ttl }}
        </div>
        <div class="detail">
            <span class="label">Alamat:</span> {{ $user->alamat }}
        </div>
        <div class="detail">
            <span class="label">No. HP:</span> {{ $user->no_hp }}
        </div>
        <div class="detail">
            <span class="label">Status:</span> {{ $user->status ?? '-' }}
        </div>
        <div class="detail">
            <span class="label">Jumlah Anak:</span> {{ $user->jml_anak ?? '-' }}
        </div>
        <div class="detail">
            <span class="label">Umur Anak:</span> {{ $user->umur_anak ?? '-' }}
        </div>
        <div class="detail">
            <span class="label">Jumlah Anggota Keluarga:</span> {{ $user->jml_anggota ?? '-' }}
        </div>
        <div class="detail">
            <span class="label">Kategori:</span> {{ $user->category->name ?? '-' }}
        </div>
        <div class="detail">
            <span class="label">Keluhan:</span> {{ $user->keluhan ?? '-' }}
        </div>
        <a href="{{ route('pengaduan') }}" class="btn-back">Kembali</a>
    </div>
</body>
</html>
