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
            @apply relative ml-10 font-semibold text-blue-900
        }
        .Beranda::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .Beranda::after{
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
    <div class="bg-transparent w-screen h-screen no-scrollbar">
        <div class="bg-white w-screen h-14 flex">
        <div class="flex items-center">
                <a href="#beranda" class="Beranda">Beranda</a>
                <a href="#visi" class="Visi">Visi misi</a>
                <a href="#pusat" class="Pusat">Pusat tindakan</a>
        </div>
        <div class="bg-red-400 w-36 h-28 ml-[300px] rounded-full relative flex items-center justify-center">
            <div class="bg-green-400 w-20 h-24 rounded-[40px] ">
            <img src="logo_kb.png" class=" w-20 h-24">
            </div>
        </div>
        <div class="flex items-center ml-[215px]">
                <a href="#layanan" class="Layanan">Layanan</a>
                <a href="#berita" class="Berita">Berita</a>
                <a href="#dokumentasi" class="Dokumentasi">Dokumentasi</a>
        </div>
        </div>
        <div class="bg-blue-400 w-screen h-1"></div>
        <div id="slider" class="flex transition-transform duration-500 ease-in-out">
        <div class="bg-transparent w-screen h-screen">
        <img src="DPPKBP3A page 1.png"/>
        <button id="prev" class="absolute top-2/3 left-4 -translate-y-1/2 bg-transparent text-white p-2 rounded-full"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg> </button>
        <button id="next" class="absolute top-2/3 right-4 -translate-y-1/2 bg-transparent text-white p-2 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path></svg></button>
        </div>
        </div>
     </div>
    </div>
</body>
</html>