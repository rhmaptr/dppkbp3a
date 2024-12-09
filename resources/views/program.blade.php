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
    <div class="bg-green-300 w-screen h-[2000px] no-scrollbar">
        <div class="bg-white w-screen h-14 flex shadow-blue-400 shadow-md">
        <div class="flex items-center">
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
    <div class="bg-yellow-300 w-[1300px] h-[1000px] mt-14 ml-10 flex">
           <div class="bg-blue-200 w-[1300px] h-[300px] mt-3 flex">
            <div class="bg-red-300 w-[400px] h-full"></div>
            <div class="bg-blue-500 w-[900px] h-full">
                <div class="bg-green-300 w-[900px] h-[30px] mt-5"></div>
                <div class="bg-green-300 w-[900px] h-[30px] mt-5"></div>
                <div class="bg-green-300 w-[900px] h-[30px] mt-5"></div>
                <div class="bg-green-300 w-[900px] h-[30px] mt-24 justify-center">
                    <a href="#" class="text-blue-500 hover:underline font-medium">Baca Selengkapnya →</a>
                </div>
            </div>
           </div>
    </div>
</div>
</body>
</html>