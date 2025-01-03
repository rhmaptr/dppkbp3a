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
    <div class="bg-white w-screen h-screen no-scrollbar">
        <div class="bg-white w-screen h-14 shadow-blue-400 shadow-md flex">
            <div class="flex items-center ml-[5px]">
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
        <div class="bg-white w-[1295px] h-[500px] mt-10 ml-10 flex-col rounded-md shadow-sm">
            <div class="bg-transparent w-full h-[40px] font-semibold text-[30px] text-blue-500">Galeri</div>
            <div class="bg-transparent w-full h-[30px] font-medium text-[15px]">Dokumentasi Kegiatan Pelayanan DPPKBP3A
                Kota Tasikmalaya</div>
            <div class="bg-transparent w-full h-[430px] container mx-auto overflow-scroll no-scrollbar">
                <div class="grid grid-cols-5 gap-0">
                    <div class="bg-pink-100 w-[255px] h-[150px] group relative overflow-hidden">
                        <img src="DPPKBP3A page3.png" alt="Berita"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                        <div
                            class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                            <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                        </div>
                    </div>
                    <div class="bg-pink-100 w-[255px] h-[150px] group relative overflow-hidden">
                        <img src="DPPKBP3A page3.png" alt="Berita"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                        <div
                            class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                            <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                        </div>
                    </div>
                    <div class="bg-pink-100 w-[255px] h-[150px] group relative overflow-hidden">
                        <img src="DPPKBP3A page3.png" alt="Berita"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                        <div
                            class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                            <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                        </div>
                    </div>
                    <div class="bg-pink-100 w-[255px] h-[150px] group relative overflow-hidden">
                        <img src="DPPKBP3A page3.png" alt="Berita"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                        <div
                            class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                            <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                        </div>
                    </div>
                    <div class="bg-pink-100 w-[255px] h-[150px] group relative overflow-hidden">
                        <img src="DPPKBP3A page3.png" alt="Berita"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                        <div
                            class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                            <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>