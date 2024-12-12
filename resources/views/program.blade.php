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
        <div class="bg-green-200 w-[180px] h-screen"></div>
        <div class="bg-blue-300 w-full h-screen">
        <div class="bg-green-300 w-full h-[35px] flex">
           <div class="bg-white w-[32px] h-full ml-14 flex items-center justify-center "><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3b86fe" viewBox="0 0 256 256"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-68-76a12,12,0,1,1-12-12A12,12,0,0,1,140,132Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,132ZM96,172a12,12,0,1,1-12-12A12,12,0,0,1,96,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,140,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,172Z"></path></svg></div>
            <div class="bg-blue-300 h-full flex items-center justify-center">
                <?php
                  setlocale(LC_TIME, "id_ID.utf8");
                  echo strftime("%A, %d %B %Y"); // Format: Hari, Tanggal Bulan Tahun
                ?>
            </div>
        </div>
        <div class="bg-red-200 w-[1100px] h-[550px] mt-10 ml-14 rounded-lg shadow-lg flex-col">
            <div class="bg-slate-300 w-full h-[40px] font-semibold text-[20px] pt-1 pl-3">Pengajuan Program Dppkbp3a</div>
            <div class="bg-slate-400 w-full h-[35px] pl-3">
            <select name="" id="" class="w-[190px] h-[35px] text-black pl-[15px] pb-[2px] border-2 border-black rounded-lg shadow-md">
                    <option value="">Semua</option>
                    <option value="">DPPKB</option>
                    <option value="">Pemberdayaan Perempuan</option>
                    <option value="">Perlindungan Anak</option>
            </select>
            </div>
            <div class="bg-green-200 w-[1070px] h-[450px] mt-2 ml-3 rounded-lg shadow-lg flex-col">
                <div class="bg-blue-400 w-[1040px] h-full ml-3">
                    <div class="bg-white w-full h-[40px] rounded-lg flex">
                        <div class="bg-slate-300 w-[50px] h-full ml-2 font-normal text-[15px] flex items-center justify-center text-white">No</div>
                        <div class="bg-slate-400 w-[170px] h-full ml-5 font-normal text-[15px] flex items-center justify-center text-white">Tanggal</div>
                        <div class="bg-slate-500 w-[170px] h-full ml-5 font-normal text-[15px] flex items-center justify-center text-white">Program</div>
                        <div class="bg-slate-600 w-[170px] h-full ml-5 font-normal text-[15px] flex items-center justify-center text-white">Jenis Program</div>
                        <div class="bg-slate-700 w-[170px] h-full ml-5 font-normal text-[15px] flex items-center justify-center text-white">Nama Pelapor</div>
                        <div class="bg-slate-400 w-[170px] h-full ml-5 font-normal text-[15px] flex items-center justify-center text-white">Aksi</div>
                    </div>
                    <div class="bg-white w-full h-[40px] rounded-lg flex shadow-lg border-2 hover:border-[#3B86FE] transition duration-30"></div>
                    <div class="bg-white w-full h-[40px] rounded-lg flex mt-1 shadow-lg border-2 hover:border-[#3B86FE] transition duration-30"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>