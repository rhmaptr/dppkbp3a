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
        .profil{
            @apply relative ml-10 font-semibold text-gray-500 hover:text-blue-900
        }
        .profil::after{
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .profil:hover:after{
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
</style>

<body>

    <body>
        <div class="bg-red-300 w-screen h-screen no-scrollbar">
            <div class="bg-white w-screen h-14 flex ">
                <div class="flex items-center">
                    <a href="#beranda" class="Beranda">Beranda</a>
                    <a href="#profil" class="profil">Profil</a>
                    <a href="#pusat" class="Pusat">Pusat tindakan</a>
                </div>
                <div
                    class="bg-white w-36 h-28 ml-[265px] rounded-full  border-b-4 border-blue-400 relative flex items-center justify-center">
                    <div class="bg-white w-32 h-24 rounded-[40px]">
                        <img src="logo_kb.png" class=" w-80 h-36 -mt-5">
                    </div>
                </div>
                <div class="flex items-center ml-[265px]">
                    <a href="#layanan" class="Layanan">Layanan</a>
                    <a href="#dokumentasi" class="Dokumentasi">Dokumentasi</a>
                    <a href="#berita" class="Berita">Berita</a>
                </div>
            </div>
            <div class="bg-blue-400 w-screen h-1"></div>
            <div class="bg-blue-500 w-screen h-[180px] flex items-center justify-center">
                <div class="bg-yellow-300 w-screen h-[35px] text-white font-semibold text-[30px] pl-10 ">Profil DPPKBP3A</div>
            </div>
            </div>
    </body>

</html>