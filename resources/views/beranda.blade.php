<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>
</head>

<body onload="hidepopup()">
    <div class="bg-white w-screen h-screen flex">
       <x-side2></x-side2>
        <div class="bg-green-300 w-full h-screen">
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
                <!-- <div class="bg-white w-[720px] h-full shadow-lg rounded-xl ml-8">
                    <div class="bg-transparent w-full h-[35px] font-semibold text-[20px] pl-3">Pelapor DPPKB 2024</div>
                    <div class="bg-transparent w-full h-[35px] pl-3 flex">
                        <select name="" id=""
                            class="w-[190px] h-[35px] text-black pl-[15px] pb-[2px] border-2 border-black rounded-lg shadow-md">
                            <option value="">DPPKB</option>
                            <option value="">Pemberdayaan Perempuan</option>
                            <option value="">Perlindungan Anak</option>
                        </select>
                        <select name="" id=""
                            class="w-[90px] h-[35px] text-black pl-[15px] pb-[2px] border-2 border-black rounded-lg shadow-md ml-2">
                            <option value="">2024</option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                        <button
                            class="bg-[#3B86FE] w-[65px] h-[35px] rounded-lg flex items-center justify-center font-semibold text-white text-[15px] hover:bg-[#336fd1] ml-3">Cari</button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>