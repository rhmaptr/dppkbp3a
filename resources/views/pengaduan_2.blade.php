<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>

    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <div class="bg-white w-screen h-screen flex">
        <x-side2></x-side2>
        <div class="bg-transparent w-full h-screen ">
            <div class="bg-white w-full h-[35px] flex">
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
                <div class="bg-transparent w-full h-[35px] font-semibold text-[20px] pt-1 pl-3">Konten Pengaduan</div>
                <div class="bg-transparent w-full h-[35px] font-semibold text-[20px] pl-3 flex">
                    <form class="relative max-w-md">
                        <input type="text" placeholder="Telusuri..."
                            class="w-full px-1 py-1 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-[15px]" />
                        <button type="submit"
                            class="absolute right-2 top-[18px] transform -translate-y-1/2 text-gray-500 hover:text-blue-500"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                viewBox="0 0 256 256">
                                <path
                                    d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                </path>
                            </svg></button>
                    </form>
                    <button id="edit_pengaduan"
                        class="bg-[#3B86FE] w-[110px] h-[35px] ml-[750px] rounded-lg flex items-center justify-center font-semibold text-white text-[15px] hover:bg-[#336fd1] shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffffff"
                            viewBox="0 0 256 256">
                            <path
                                d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z">
                            </path>
                        </svg> <span class="pl-2">Tambah</span>
                    </button>
                    <div id="popupbtn" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
                        style="display:none;">
                        <div class="bg-white rounded-lg p-6 w-[600px]">
                            <div id="popupContent"></div>
                        </div>
                    </div>

                    <script>
                    document.getElementById("edit_pengaduan").addEventListener("click", function() {
                        window.location.href = "/edit_pengaduan";
                    });
                    </script>
                </div>

                <!-- bagian tabel -->
                <div class="bg-transparent w-[1070px] h-[450px] mt-2 ml-3 rounded-lg shadow-lg flex-col">
                    <div class="bg-transparent w-[1040px] h-full ml-3 overflow-y-auto">
                        <div class="overflow-x-auto">
                            <table>
                                <thead>
                                    <tr class="bg-[#3B86FE] text-white h-[40px]">
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Penjelasan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($kontens) && count($kontens) > 0)
                                    @foreach ($kontens as $konten)
                                    <tr>
                                        <td>{{ $konten->id }}</td>
                                        <td>{{ $konten->gambar }}</td>
                                        <td>{{ $konten->judul }}</td>
                                        <td>{{ $konten->penjelasan }}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="2">Tidak ada data</td>
                                    </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>