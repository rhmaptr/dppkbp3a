<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>
</head>
<style type="text/tailwindcss">
    @layer utilities {
        .Beranda{
            @apply relative ml-10 font-semibold text-gray-500 hover:text-blue-900
        }
        .Beranda::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .Beranda:hover:after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .Visi{
            @apply relative ml-10 font-semibold text-gray-500 hover:text-blue-900
        }
        .Visi::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .Visi:hover:after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .Pusat{
            @apply relative ml-10 font-semibold  text-gray-500 hover:text-blue-900
        }
        .Pusat::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .Pusat:hover:after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .Layanan{
            @apply relative ml-10 font-semibold  text-gray-500 hover:text-blue-900
        }
        .Layanan::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .Layanan:hover:after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .Berita{
            @apply relative ml-10 font-semibold  text-gray-500 hover:text-blue-900
        }
        .Berita::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .Berita:hover:after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .Dokumentasi{
            @apply relative ml-10 font-semibold  text-gray-500 hover:text-blue-900
        }
        .Dokumentasi::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .Dokumentasi:hover:after{
            @apply w-[100%]
        }
    }
</style>
<body>
<body>
    <div class="bg-white w-screen h-[2000px] no-scrollbar">
        <div class="bg-white w-screen h-14 shadow-blue-400 shadow-md flex">
        <div class="flex items-center ml-[5px]">
                <a href="#beranda" class="Beranda">Beranda</a>
                <a href="#visi" class="Visi">Visi misi</a>
                <a href="#pusat" class="Pusat">Pusat tindakan</a>
        </div>
        <div class="bg-white w-36 h-28 ml-[265px] rounded-full  border-b-4 border-blue-400 relative flex items-center justify-center">
            <div class="bg-white w-32 h-24 rounded-[40px]">
            <img src="logo_kb.png" class=" w-80 h-36 -mt-5">
            </div>
        </div>
        <div class="flex items-center ml-[265px]">
                <a href="#layanan" class="Layanan">Layanan</a>
                <a href="#berita" class="Berita">Berita</a>
                <a href="#dokumentasi" class="Dokumentasi">Dokumentasi</a>
        </div>
        </div>
    <div class="bg-white w-screen h-[40px] mt-14 font-semibold text-[30px] text-[#3B86FE] pl-10">Berita</div>
    <div class="bg-transparent w-[1300px] h-[1000px] ml-10">
           <div class="bg-white w-[1300px] h-[300px] mt-3 flex rounded-[20px] shadow-md hover:bg-[#3B86FE] transition duration-300">
            <div class="bg-red-300 w-[380px] h-[250px] mt-6 ml-8">
            <img src="https://via.placeholder.com/800x400" alt="Gambar Berita" class="w-full h-full object-cover"/>
            </div>
            <div class="bg-transparent w-[900px] h-full">
                <div class="bg-transparent w-[900px] h-[30px] mt-5 text-sm text-gray-500 pl-5">12 Desember 2024</div>
                <div class="bg-transparent w-[900px] h-[30px] text-xl font-bold text-gray-800 mt-2 pl-5">Judul Berita</div>
                <div class="bg-transparent w-[900px] h-[30px] mt-2 text-gray-600 pl-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum...</div>
                <div class="bg-transparent w-[900px] h-[30px] mt-24 ">
                    <a href="#" class="text-[#3B86FE] hover:underline font-medium ml-5">Baca Selengkapnya →</a>
                </div>
            </div>
           </div>
           <div class="bg-white w-[1300px] h-[300px] mt-8 flex rounded-[20px] shadow-md hover:bg-[#3B86FE] transition duration-300">
            <div class="bg-transparent w-[380px] h-[250px] mt-6 ml-8">
            <img src="https://via.placeholder.com/800x400" alt="Gambar Berita" class="w-full h-full object-cover"/>
            </div>
            <div class="bg-transparent w-[900px] h-full">
                <div class="bg-transparent w-[900px] h-[30px] mt-5 text-sm text-gray-500 pl-5 ">12 Desember 2024</div>
                <div class="bg-transparent w-[900px] h-[30px] text-xl font-bold text-gray-800 mt-2 pl-5">Judul Berita</div>
                <div class="bg-transparent w-[900px] h-[30px] mt-2 text-gray-600 pl-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum...</div>
                <div class="bg-transparent w-[900px] h-[30px] mt-24 ">
                    <a href="#" class="text-[#3B86FE] hover:underline font-medium ml-5">Baca Selengkapnya →</a>
                </div>
            </div>
           </div>
           <div class="bg-white w-[1300px] h-[300px] mt-8 flex rounded-[20px] shadow-md hover:bg-[#3B86FE] transition duration-300">
            <div class="bg-transparent w-[380px] h-[250px] mt-6 ml-8">
            <img src="https://via.placeholder.com/800x400" alt="Gambar Berita" class="w-full h-full object-cover"/>
            </div>
            <div class="bg-transparent w-[900px] h-full">
                <div class="bg-transparent w-[900px] h-[30px] mt-5 text-sm text-gray-500 pl-5 ">12 Desember 2024</div>
                <div class="bg-transparent w-[900px] h-[30px] text-xl font-bold text-gray-800 mt-2 pl-5">Judul Berita</div>
                <div class="bg-transparent w-[900px] h-[30px] mt-2 text-gray-600 pl-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum...</div>
                <div class="bg-transparent w-[900px] h-[30px] mt-24 ">
                    <a href="#" class="text-[#3B86FE] hover:underline font-medium ml-5">Baca Selengkapnya →</a>
                </div>
            </div>
           </div>
    </div>
</div>
</body>
</html>