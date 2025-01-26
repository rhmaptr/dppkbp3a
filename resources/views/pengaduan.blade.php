<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>
</head>

<body>
    <div class="bg-white w-screen h-screen flex">
        <x-side2></x-side2>
        <div class="bg-transparent w-full h-screen">
            <div class="bg-transparent w-full h-[35px] flex">
                <div class="bg-white w-[32px] h-full ml-8 flex items-center justify-center "><svg
                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3b86fe" viewBox="0 0 256 256">
                        <path
                            d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-68-76a12,12,0,1,1-12-12A12,12,0,0,1,140,132Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,132ZM96,172a12,12,0,1,1-12-12A12,12,0,0,1,96,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,140,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,172Z">
                        </path>
                    </svg></div>
                <div class="bg-transparent h-full flex items-center justify-center">
                    <?php
                  setlocale(LC_TIME, "id_ID.utf8");
                  echo strftime("%A, %d %B %Y"); // Format: Hari, Tanggal Bulan Tahun
                ?>
                </div>
            </div>
            <div class="bg-transparent w-[1100px] h-[550px] mt-10 ml-8 rounded-lg shadow-lg flex-col">
                <div class="bg-transparent w-full h-[40px] font-semibold text-[20px] pt-1 pl-3">Pengaduan Program
                    Dppkbp3a</div>
                <div class="bg-transparent w-full h-[35px] pl-3">
                    <select name="" id=""
                        class="w-[190px] h-[35px] text-black pl-[15px] pb-[2px] border-2 border-black rounded-lg shadow-md">
                        <option value="">Semua</option>
                        <option value="">DPPKB</option>
                        <option value="">Pemberdayaan Perempuan</option>
                        <option value="">Perlindungan Anak</option>
                    </select>
                </div>

                <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        .btn-detail { color: white; background-color: blue; padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; }
        .btn-detail:hover { background-color: darkblue; }
    </style>
</head>
<body>
    <h1>Data Pengguna</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->nik }}</td>
                    <td>{{ $user->ttl }}</td>
                    <td>{{ $user->alamat }}</td>
                    <td>
                        <a href="{{ route('detail', $user->id) }}" class="btn-detail">Detail</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Tidak ada data pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
                <!-- <div class="bg-transparent w-[1070px] h-[450px] mt-2 ml-3 rounded-lg shadow-lg flex-col">
                    <div class="bg-transparent w-[1040px] h-full ml-3 overflow-y-auto">
                        <div class="overflow-x-auto">
                            <table class="table-auto border-collapse border border-gray-200 w-full">
                                <thead>
                                    <tr class="bg-[#3B86FE] text-white">
                                        <th class="px-4 py-2">No</th>
                                        <th class="px-4 py-2">Tanggal</th>
                                        <th class="px-4 py-2">Program</th>
                                        <th class="px-4 py-2">Jenis Program</th>
                                        <th class="px-4 py-2">Nama Pelapor</th>
                                        <th class="px-4 py-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->nik }}</td>
                                        <td>{{ $user->ttl }}</td>
                                        <td>
                                            @if($user->category)
                                            {{ $user->category->name }}
                                            Menampilkan nama kategori
                                            @else
                                            N/A
                                            @endif
                                        </td>
                                        <td>{{ $user->alamat }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>TTL</th>
                        <th>Jenis Program</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->nik }}</td>
                        <td>{{ $user->ttl }}</td>
                        <td>
                            @if($user->category)
                            {{ $user->category->name }}
                            Menampilkan nama kategori
                            @else
                            N/A
                            @endif
                        </td>
                        <td>{{ $user->alamat }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
</body>

</html> -->