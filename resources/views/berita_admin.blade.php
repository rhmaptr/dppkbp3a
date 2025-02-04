<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>

    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>

<body>
    <div class="bg-white w-screen h-screen flex">
        <x-side2></x-side2>
        <div class="bg-transparent w-full h-screen ">
            <div class="bg-transparent w-full h-[35px] flex">
                <div class="bg-transparent w-[32px] h-full ml-8 flex items-center justify-center "><svg
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
            <div class="bg-white w-[1100px] h-[550px] mt-10 ml-8 rounded-lg shadow-lg flex-col">
                <div class="bg-transparent w-full h-[35px] font-semibold text-[20px] pt-1 pl-3">Berita</div>
                <div class="bg-transparent w-full h-[35px] font-semibold text-[20px] pl-3 flex items-center">
                    <form class="relative max-w-md">
                        <input type="text" placeholder="Telusuri..."
                            class="w-full px-1 py-1 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-[15px]" />
                        <button type="submit"
                            class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                viewBox="0 0 256 256">
                                <path
                                    d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                </path>
                            </svg>
                        </button>
                    </form>

                    <button id="tambah_berita"
                        class="bg-[#3B86FE] w-[110px] h-[35px] ml-[750px] rounded-lg flex items-center justify-center font-semibold text-white text-[15px] hover:bg-[#336fd1] shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffffff"
                            viewBox="0 0 256 256">
                            <path
                                d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z">
                            </path>
                        </svg> <span class="pl-2">Tambah</span>
                    </button>

                    <script>
                    document.getElementById("tambah_berita").addEventListener("click", function() {
                        window.location.href = "/tambah_berita";
                    });
                    </script>
                </div>

                <!-- bagian tabel -->

                <body>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>gambar</th>
                                <th>Tanggal</th>
                                <th>Judul</th>
                                <th>Artikel</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($beritas as $berita)
                            <tr>
                                <td>{{ $berita->id }}</td>
                                <td>{{ $beritapoto->image }}</td>
                                <td>{{ $berita->title }}</td>
                                <td>
                                    <a href="{{ route('detail', $berita->id) }}" class="btn-detail">Detail</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">Tidak ada data pengguna.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
<!-- <div class="bg-transparent w-[1070px] h-[450px] mt-2 ml-3 rounded-lg shadow-lg flex-col">
                    <div class="bg-transparent w-[1040px] h-full ml-3 overflow-y-auto">
                        <div class="overflow-x-auto">
                            <table class="table-auto border-collapse border border-gray-200 w-full">
                                <thead>
                                    <tr class="bg-[#3B86FE] text-white">
                                        <th class="px-4 py-2">No</th>
                                        <th class="px-4 py-2">gambar</th>
                                        <th class="px-4 py-2">Tanggal</th>
                                        <th class="px-4 py-2">Judul</th>
                                        <th class="px-4 py-2">Artikel</th>
                                        <th class="px-4 py-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-gray-50 ">
                                        <td class=" px-4 py-2 text-center">1</td>
                                        <td class=" px-4 py-2 text-center flex items-center justify-center">
                                            <div class="bg-red-300 w-16 h-10 "></div>
                                        </td>
                                        <td class=" px-4 py-2 text-center">16 desember 2024</td>
                                        <td class=" px-4 py-2 text-center">kb</td>
                                        <td class=" px-4 py-2 text-center">kb</td>
                                        <td class=" px-4 py-2  flex items-center justify-center">
                                            <div class="bg-yellow-300 w-[70px] h-[30px] flex">
                                                <button
                                                    class="bg-red-300 w-[35px] h-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="#59a1ee" viewBox="0 0 256 256">
                                                        <path
                                                            d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM192,108.68,147.31,64l24-24L216,84.68Z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <div
                                                    class="bg-transparent w-[35px] h-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="#ea3939" viewBox="0 0 256 256">
                                                        <path
                                                            d="M224,56a8,8,0,0,1-8,8h-8V208a16,16,0,0,1-16,16H64a16,16,0,0,1-16-16V64H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,56ZM88,32h80a8,8,0,0,0,0-16H88a8,8,0,0,0,0,16Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 border-2 border-gray-300">
                                        <td class=" px-4 py-2 text-center">2</td>
                                        <td class=" px-4 py-2 text-center flex items-center justify-center">
                                            <div class="bg-red-300 w-16 h-10 "></div>
                                        </td>
                                        <td class=" px-4 py-2 text-center">14 desember</td>
                                        <td class=" px-4 py-2 text-center">perlindungan anak</td>
                                        <td class=" px-4 py-2 text-center">perlindungan anak</td>
                                        <td class=" px-4 py-2 flex items-center justify-center">
                                            <div class="bg-transparent w-[70px] h-[30px] flex">
                                                <div
                                                    class="bg-transarent w-[35px] h-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="#59a1ee" viewBox="0 0 256 256">
                                                        <path
                                                            d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM192,108.68,147.31,64l24-24L216,84.68Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div
                                                    class="bg-transparent w-[35px] h-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="#ea3939" viewBox="0 0 256 256">
                                                        <path
                                                            d="M224,56a8,8,0,0,1-8,8h-8V208a16,16,0,0,1-16,16H64a16,16,0,0,1-16-16V64H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,56ZM88,32h80a8,8,0,0,0,0-16H88a8,8,0,0,0,0,16Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</body>

</html>