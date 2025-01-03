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
            @apply relative ml-10 font-semibold text-black
        }
        .Beranda::after{
            @apply content-[''] bg-black rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .Beranda::after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .profil{
            @apply relative ml-10 font-semibold text-gray-500 hover:text-black
        }
        .profil::after{
            @apply content-[''] bg-black rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .profil:hover:after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .Pusat{
            @apply relative ml-10 font-semibold  text-gray-500 hover:text-black
        }
        .Pusat::after{
            @apply content-[''] bg-black rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .Pusat:hover:after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .Layanan{
            @apply relative ml-10 font-semibold  text-gray-500 hover:text-black
        }
        .Layanan::after{
            @apply content-[''] bg-black rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .Layanan:hover:after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .Dokumentasi{
            @apply relative ml-10 font-semibold  text-gray-500 hover:text-black
        }
        .Dokumentasi::after{
            @apply content-[''] bg-black rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .Dokumentasi:hover:after{
            @apply w-[100%]
        }
    }

    @layer utilities {
        .Berita{
            @apply relative ml-10 font-semibold  text-gray-500 hover:text-black
        }
        .Berita::after{
            @apply content-[''] bg-black rounded-xl h-1 w-[0%] left-0 -bottom-4 absolute duration-200
        }
        .Berita:hover:after{
            @apply w-[100%]
        }
    }
</style>

<body>
    <div class="bg-transparent w-screen h-screen no-scrollbar ">
        <div class="bg-white w-screen h-14 flex fixed shadow-blue-400 shadow-md z-50 ">
            <div class="flex items-center ml-[5px]">
                <a href="#beranda" class="Beranda">Beranda</a>
                <a href="#profil" class="profil">Profil</a>
                <a href="#pusat" class="Pusat">Pusat Pengaduan</a>
            </div>
            <div
                class="bg-white w-36 h-28 ml-[230px] rounded-full  border-b-4 border-blue-400 relative flex items-center justify-center">
                <div class="bg-white w-32 h-24 rounded-[40px]">
                    <img src="logo_kb.png" class=" w-80 h-36 -mt-5">
                </div>
            </div>
            <div class="flex items-center ml-[240px]">
                <a href="#layanan" class="Layanan">Layanan</a>
                <a href="#dokumentasi" class="Dokumentasi">Dokumentasi</a>
                <a href="#berita" class="Berita">Berita</a>
            </div>
        </div>

        <div id="beranda" class="bg-white w-screen h-screen flex">
            <div class="bg-white w-[690px] h-full flex items-center justify-center flex-col">
                <div class="bg-transparent w-[600px] h-[300px] flex-col mt-[50px]">
                    <div class="bg-transparent w-full h-[80px]">
                        <h1
                            class="text-7xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-500 shadow-sm transform hover:scale-110 transition duration-300">
                            DPPKBP3A</h1>
                    </div>
                    <div class="bg-transparent w-full h-[80px]">
                        <p class="text-xl font-semibold text-black bg-clip-text bg-gradient-to-r">
                            Dinas pengendalian penduduk, keluarga berencana, pemberdayaan perempuan, perlindungan anak.
                        </p>
                    </div>
                </div>
                <div class="bg-white w-[350px] h-[150px] ml-[-240px] mt-[-140px]">
                    <div class="grid grid-cols-8 gap-3">
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                        <div class="bg-blue-400 w-[20px] h-[20px] rounded-full"></div>
                    </div>
                </div>
            </div>
            <div class="bg-white w-[740px] h-full flex items-center justify-center">
                <div
                    class="bg-blue-300 w-[650px] h-[380px] rounded-lg flex items-center justify-center mt-[50px] relative">
                    <div class="bg-white w-[600px] h-[330px] rounded-lg">
                        <div class=" relative bg-red-500 w-[600px] h-[330px] rounded-lg shadow-lg overflow-hidden">
                            <!-- Container Slide -->
                            <div id="slider" class="flex transition-transform duration-500">
                                <div class="min-w-full bg-blue-500 text-white text-center">
                                    <img src="DPPKBP3A page2.png" alt="Berita"
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                                </div>
                                <div class="min-w-full bg-blue-500 text-white text-center">
                                    <img src="DPPKBP3A page3.png" alt="Berita"
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                                </div>
                                <div class="min-w-full bg-blue-500 text-white text-center">
                                    <img src="DPPKBP3A page 1.png" alt="Berita"
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Navigasi -->
                    <button id="prev"
                        class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-200/60 hover:bg-gray-200 text-white p-2 rounded-full"><svg
                            xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                            viewBox="0 0 256 256">
                            <path
                                d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z">
                            </path>
                        </svg></button>
                    <button id="next"
                        class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-200/60 hover:bg-gray-200 text-white p-2 rounded-full"><svg
                            xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                            viewBox="0 0 256 256">
                            <path
                                d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z">
                            </path>
                        </svg></button>
                </div>

                <script>
                const slider = document.getElementById('slider');
                const prev = document.getElementById('prev');
                const next = document.getElementById('next');

                let currentIndex = 0;

                prev.addEventListener('click', () => {
                    if (currentIndex > 0) {
                        currentIndex--;
                        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
                    }
                });

                next.addEventListener('click', () => {
                    if (currentIndex < slider.children.length - 1) {
                        currentIndex++;
                        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
                    }
                });
                </script>
            </div>
        </div>
    </div>
    <div id="profil" class="bg-[#fafafa] w-screen h-screen flex">
        <div class="bg-yellow-300 w-[670px] h-full flex items-center justify-center">
            <div class="bg-green-300 w-[500px] h-[500px]"></div>
        </div>
        <div class="bg-yellow-600 w-[700px] h-full flex items-center justify-center">
        <div class="bg-green-300 w-[500px] h-[400px] font-medium text-[15px]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia, ex architecto. Nobis expedita quo dolor corrupti obcaecati suscipit dolorum molestias ipsa voluptate vero animi eum provident tempora ipsam numquam officia ut tempore, blanditiis ea dolores vitae! Modi placeat ratione autem ullam quas aspernatur, error natus doloremque dolor magni! Accusantium quidem molestiae inventore porro debitis sit architecto quis assumenda qui eveniet, nam, ullam ab. Deleniti consequuntur possimus itaque alias minus commodi praesentium dicta minima? Deserunt, harum. Mollitia est recusandae molestias enim ullam odit assumenda debitis incidunt reiciendis reprehenderit? Velit, perferendis accusantium atque esse dolore cum, excepturi libero modi nesciunt ex cumque.</div>
        </div>
    </div>
    <div id="pusat" class="bg-[#f5f4f4] w-screen h-screen flex-col flex items-center justify-center">
        <div
            class="bg-transparent w-full h-[40px] flex items-center justify-center font-semibold text-[30px] text-[#3B86FE]">
            Pusat Pengaduan</div>
        <div class="bg-transparent w-[1000px] h-[450px] mt-5 flex items-center justify-center">
            <div class="bg-white w-[300px] h-[400px] rounded-[15px] shadow-md">
                <div class="bg-gray-400 w-[257px] h-[150px] rounded-[15px] ml-[20px] mt-[20px]">
                    <img src="" alt="">
                </div>
                <div class="bg-transparent w-[257px] h-[30px] ml-[20px] font-semibold text-[20px] mt-[10px]">DPPKB
                </div>
                <div class="bg-transparent w-[257px] h-[120px] ml-[20px] font-medium text-gray-900 text-[15px]">
                    DPPKB (Dinas Pengendalian Penduduk dan Keluarga Berencana) Menuju Masyarakat Sejahtera dengan
                    Keluarga Berencana</div>
                <button onclick="window.location.href='http://localhost:8000/tindakankb'"
                    class="bg-[#3B86FE] w-[257px] h-[40px] rounded-[10px] ml-[20px] mt-[15px] flex items-center justify-center font-semibold text-white text-[15px] hover:bg-[#336fd1]">Kirim
                    Pesan
                </button>
            </div>
            <div class="bg-white w-[300px] h-[400px] rounded-[15px] ml-[50px] shadow-md">
                <div class="bg-gray-400 w-[257px] h-[150px] rounded-[15px] ml-[20px] mt-[20px]">
                    <img src="" alt="">
                </div>
                <div class="bg-transparent w-[257px] h-[30px] ml-[20px] font-semibold text-[20px] mt-[10px]">
                    Pemberdayaan Perempuan</div>
                <div class="bg-transparent w-[257px] h-[120px] ml-[20px] font-medium text-gray-900 text-[15px]">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia animi asperiores magnam. Rem
                    optio minus atque praesentium quia quae ut!</div>
                <button onclick="window.location.href='http://localhost:8000/tindakanpp'"
                    class="bg-[#3B86FE] w-[257px] h-[40px] rounded-[10px] ml-[20px] mt-[15px] flex items-center justify-center font-semibold text-white text-[15px] hover:bg-[#336fd1]">Kirim
                    Pesan</button>
            </div>
            <div class="bg-white w-[300px] h-[400px] rounded-[15px] ml-[50px] shadow-md">
                <div class="bg-gray-400 w-[257px] h-[150px] rounded-[15px] ml-[20px] mt-[20px]">
                    <img src="" alt="">
                </div>
                <div class="bg-transparent w-[257px] h-[30px] ml-[20px] font-semibold text-[20px] mt-[10px]">
                    Perlindungan Anak</div>
                <div class="bg-transparent w-[257px] h-[120px] ml-[20px] font-medium text-gray-900 text-[15px]">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia officia aut vero voluptatem, eos
                    laborum!</div>
                <button onclick="window.location.href='http://localhost:8000/tindakanpa'"
                    class="bg-[#3B86FE] w-[257px] h-[40px] rounded-[10px] ml-[20px] mt-[15px] flex items-center justify-center font-semibold text-white text-[15px] hover:bg-[#336fd1]">Kirim
                    Pesan</button>
            </div>
        </div>
    </div>
    <div id="layanan" class="bg-[#fafafa] w-screen h-screen pt-[50px]">
        <div class="bg-transparent w-[300px] h-[40px] ml-[160px] font-semibold text-[#3B86FE] text-[30px] mt-[-5px]">
            Layanan Kami</div>
        <div class="bg-transparent w-[500px] ml-[160px] font-medium text-gray-700">Berikut Layanan Yang Kami
            sediakan untuk Masyarakat Kota Tasikmalaya</div>
        <div class="bg-transparent w-full h-[400px] flex items-center justify-center">
            <!-- layanan 1 -->
            <div class="bg-transparent w-[300px] h-[350px] rounded-[10px] flex-col">
                <div class="bg-white w-full h-[300px]">
                    <div class="group relative overflow-hidden rounded-lg shadow-lg w-full h-full">
                        <img src="DPPKBP3A page2.png" alt="Berita"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                        <div
                            class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                            <h3 class="text-lg font-semibold">DPPKB</h3>
                            <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias,
                                doloremque?</p>
                        </div>
                    </div>
                </div>
                <div class="bg-yellow-200-300 w-full h-[50px] text-[#3B86FE] hover:text-blue-600 cursor-pointer pt-3">
                    Selengkapnya...</div>
            </div>
            <!-- layanan 2 -->
            <div class="bg-transparent w-[300px] h-[350px] rounded-[10px] ml-[70px]">
                <div class="bg-white w-full h-[300px]">
                    <div class="group relative overflow-hidden rounded-lg shadow-lg w-full h-full">
                        <img src="DPPKBP3A page 1.png" alt="Berita"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                        <div
                            class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                            <h3 class="text-lg font-semibold">PEMBERDAYAAN PEREMPUAN</h3>
                            <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias,
                                doloremque?</p>
                        </div>
                    </div>
                </div>
                <div class="bg-yellow-200-300 w-full h-[50px] text-[#3B86FE] hover:text-blue-600 cursor-pointer pt-3">
                    Selengkapnya...</div>
            </div>
            <!-- layanan 3 -->
            <div class="bg-transparent w-[300px] h-[350px] rounded-[10px] ml-[70px]">
                <div class="bg-white w-full h-[300px]">
                    <div class="group relative overflow-hidden rounded-lg shadow-lg w-full h-full">
                        <img src="DPPKBP3A page3.png" alt="Berita"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                        <div
                            class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                            <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                            <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias,
                                doloremque?</p>
                        </div>
                    </div>
                </div>
                <div class="bg-yellow-200-300 w-full h-[50px] text-[#3B86FE] hover:text-blue-600 cursor-pointer pt-3">
                    Selengkapnya...</div>
            </div>
        </div>
    </div>
    <!-- galeri -->
    <div id="dokumentasi" class="bg-[#f5f4f4] w-screen h-screen flex">
        <div class="bg-transparent w-[600px] h-full flex-col">
            <div class="bg-transparent  w-[500px] h-[30px] mt-52 ml-10 font-semibold flex items-center ">Galeri
            </div>
            <div
                class="bg-transparent w-[500px] h-[40px] ml-10 font-semibold text-[#3B86FE] text-[30px] flex items-center">
                Galeri Terbaru</div>
            <div class="bg-transparent w-[500px] h-[30px]  font-semibold flex items-center ml-10">Dokumentasi
                Kegiatan Pelayanan DPPKBP3A Kota Tasikmalaya</div>
            <div class="bg-transparent w-[200px] h-[40px] mt-3 flex items-center ml-10">
                <button onclick="window.location.href='http://localhost:8000/galeri'"
                    class="bg-[#3B86FE] w-[130px] h-[40px] rounded-full flex items-center justify-center font-semibold text-white text-[15px] hover:bg-[#336fd1]">Lihat
                    Semua</button>
            </div>
        </div>
        <div class="bg-blue-500 w-[765px] h-full container mx-auto overflow-hidden flex items-center justify-center">
            <div class="grid grid-cols-3 gap-0">
                <div class="bg-pink-100 w-[255px] h-[150px] group relative overflow-hidden">
                    <img src="DPPKBP3A page3.png" alt="Berita"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                        <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                    </div>
                </div>
                <div class="bg-pink-200 w-[255px] h-[150px] group relative overflow-hidden">
                    <img src="DPPKBP3A page 1.png" alt="Berita"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                        <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                    </div>
                </div>
                <div class="bg-pink-300 w-[255px] h-[150px] group relative overflow-hidden">
                    <img src="DPPKBP3A page2.png" alt="Berita"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                        <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                    </div>
                </div>
                <div class="bg-pink-400 w-[255px] h-[150px] group relative overflow-hidden">
                    <img src="DPPKBP3A page3.png" alt="Berita"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                        <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                    </div>
                </div>
                <div class="bg-pink-100 w-[255px] h-[150px] group relative overflow-hidden">
                    <img src="DPPKBP3A page2.png" alt="Berita"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                        <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                    </div>
                </div>
                <div class="bg-pink-200 w-[255px] h-[150px] group relative overflow-hidden">
                    <img src="DPPKBP3A page 1.png" alt="Berita"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                        <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                    </div>
                </div>
                <div class="bg-pink-300 w-[255px] h-[150px] group relative overflow-hidden">
                    <img src="DPPKBP3A page3.png" alt="Berita"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                        <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                    </div>
                </div>
                <div class="bg-pink-400 w-[255px] h-[150px] group relative overflow-hidden">
                    <img src="DPPKBP3A page 1.png" alt="Berita"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                        <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                    </div>
                </div>
                <div class="bg-pink-400 w-[255px] h-[150px] group relative overflow-hidden">
                    <img src="DPPKBP3A page2.png" alt="Berita"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                        <h3 class="text-lg font-semibold">PERLINDUNGAN ANAK</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="berita" class="bg-[#fafafa] w-screen h-screen flex-col pt-32">
        <div
            class="bg-transparent w-full h-[40px] flex items-center justify-center font-semibold text-[30px] text-[#3B86FE]">
            Berita dan Artikal Terbaru</div>
        <div class="bg-[#fafafa] w-full h-[300px] mt-[75px] flex items-center justify-center">
            <div class="bg-[#fafafa] w-[300px] h-[250px] rounded-[10px] ml-[70px] shadow-lg group relative overflow-hidden">
                <button
                    class="absolute bg-[#3B86FE] w-[85px] h-[25px] rounded-full hover:bg-[#336fd1] mt-3 ml-3 font-semibold text-white text-[15px]">Artikel</button>
                <img src="lo-lindo-PPEptzBa44Q-unsplash.jpg" alt="Example Image"
                    class="w-full h-full object-cover rounded-[10px]" />
                <div
                    class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-600/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                    <p class="text-white text-xs mb-2">27 Desember 2024</p>
                    <h3 class="text-lg font-bold mb-1">Judul Artikel</h3>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="bg-white w-[300px] h-[250px] rounded-[10px] ml-[70px] shadow-lg group relative overflow-hidden">
                <button
                    class="absolute bg-[#3B86FE] w-[85px] h-[25px] rounded-full hover:bg-[#336fd1] mt-3 ml-3 font-semibold text-white text-[15px]">Artikel</button>
                <img src="lo-lindo-PPEptzBa44Q-unsplash.jpg" alt="Example Image"
                    class="w-full h-full object-cover rounded-[10px]" />
                <div
                    class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-600/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                    <p class="text-white text-xs mb-2">27 Desember 2024</p>
                    <h3 class="text-lg font-bold mb-1">Judul Artikel</h3>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="bg-white w-[300px] h-[250px] rounded-[10px] ml-[70px] shadow-lg group relative overflow-hidden">
                <button
                    class="absolute bg-[#3B86FE] w-[85px] h-[25px] rounded-full hover:bg-[#336fd1] mt-3 ml-3 font-semibold text-white text-[15px]">Artikel</button>
                <img src="lo-lindo-PPEptzBa44Q-unsplash.jpg" alt="Example Image"
                    class="w-full h-full object-cover rounded-[10px]" />
                <div
                    class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-600/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                    <p class="text-white text-xs mb-2">27 Desember 2024</p>
                    <h3 class="text-lg font-bold mb-1">Judul Artikel</h3>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="bg-transparent w-full h-[50px] mt-5 flex items-center justify-center">
            <button onclick="window.location.href='http://localhost:8000/berita'"
                class="bg-[#3B86FE] w-[210px] h-[40px] rounded-full flex items-center justify-center font-semibold text-white text-[15px] hover:bg-[#336fd1]">Lihat
                Semua Artikel</button>
        </div>
    </div>
    <div class="bg-[#2969cf] w-screen h-[400px] flex">
        <div class="bg-transparent w-[703px] h-[full]">
            <div class="bg-transparent w-[550px] mt-[40px] ml-[100px] font-semibold text-[25px] text-white">DPPKBP3A
                Kota Tasikmalaya</div>
            <div class="bg-transparent w-[550px] h-[60px] ml-[100px] flex">
                <div class="bg-transparent w-[90px] h-[60px] mt-3 text-white"><svg xmlns="http://www.w3.org/2000/svg"
                        width="28" height="28" fill="#ffffff" viewBox="0 0 256 256">
                        <path
                            d="M200,224H150.54A266.56,266.56,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25a88,88,0,0,0-176,0c0,31.4,14.51,64.68,42,96.25A266.56,266.56,0,0,0,105.46,224H56a8,8,0,0,0,0,16H200a8,8,0,0,0,0-16ZM128,72a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z">
                        </path>
                    </svg></div>
                <div class="bg-transparent w-full h-[60px] mt-3 text-white">Jl. Perintis Kemerdekaan No.238
                    Karsamenak Kec. Kawalu, Tasikmalaya, Jawa Barat 46182</div>
            </div>
            <div class="bg-transparent w-[550px] h-[30px] ml-[100px] flex">
                <div class="bg-transparent w-[90px] h-[30px]  text-white"><svg xmlns="http://www.w3.org/2000/svg"
                        width="28" height="28" fill="#ffffff" viewBox="0 0 256 256">
                        <path
                            d="M231.88,175.08A56.26,56.26,0,0,1,176,224C96.6,224,32,159.4,32,80A56.26,56.26,0,0,1,80.92,24.12a16,16,0,0,1,16.62,9.52l21.12,47.15,0,.12A16,16,0,0,1,117.39,96c-.18.27-.37.52-.57.77L96,121.45c7.49,15.22,23.41,31,38.83,38.51l24.34-20.71a8.12,8.12,0,0,1,.75-.56,16,16,0,0,1,15.17-1.4l.13.06,47.11,21.11A16,16,0,0,1,231.88,175.08Z">
                        </path>
                    </svg></div>
                <div class="bg-transparent w-full h-[30px] text-white">dppkbp3a@tasikmalayakota.go.id</div>
            </div>
            <div class="bg-transparent w-[550px] h-[100px] ml-[100px] mt-[100px]">
                <div class="bg-transparent w-[550px] font-semibold text-[20px] text-white">Media Sosial Kami</div>
                <div class="bg-transparent w-[550px] h-[80px] flex">
                    <div class="bg-transparent w-[40px] h-[40px] flex items-center justify-center">
                        <a href="https://www.instagram.com/dppkbp3a_kotatasikmalaya/?igsh=cDNmNTVnanhrcmpq#"
                            target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fcfcfc"
                                viewBox="0 0 256 256">
                                <path
                                    d="M176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24ZM128,176a48,48,0,1,1,48-48A48.05,48.05,0,0,1,128,176Zm60-96a12,12,0,1,1,12-12A12,12,0,0,1,188,80Zm-28,48a32,32,0,1,1-32-32A32,32,0,0,1,160,128Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="bg-transparent w-[40px] h-[40px] ml-[10px] flex items-center justify-center">
                        <a href="https://www.facebook.com/dppkbp3akotatasik?mibextid=JRoKGi" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fcfcfc"
                                viewBox="0 0 256 256">
                                <path
                                    d="M232,128a104.16,104.16,0,0,1-91.55,103.26,4,4,0,0,1-4.45-4V152h24a8,8,0,0,0,8-8.53,8.17,8.17,0,0,0-8.25-7.47H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,8-8.53A8.17,8.17,0,0,0,167.73,80H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0-8,8.53A8.17,8.17,0,0,0,96.27,152H120v75.28a4,4,0,0,1-4.44,4A104.15,104.15,0,0,1,24.07,124.09c2-54,45.74-97.9,99.78-100A104.12,104.12,0,0,1,232,128Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="bg-transparent w-[40px] h-[40px] ml-[10px] flex items-center justify-center">
                        <a href="https://www.youtube.com/@dppkbp3akotatasik590" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fcfcfc"
                                viewBox="0 0 256 256">
                                <path
                                    d="M234.33,69.52a24,24,0,0,0-14.49-16.4C185.56,39.88,131,40,128,40s-57.56-.12-91.84,13.12a24,24,0,0,0-14.49,16.4C19.08,79.5,16,97.74,16,128s3.08,48.5,5.67,58.48a24,24,0,0,0,14.49,16.41C69,215.56,120.4,216,127.34,216h1.32c6.94,0,58.37-.44,91.18-13.11a24,24,0,0,0,14.49-16.41c2.59-10,5.67-28.22,5.67-58.48S236.92,79.5,234.33,69.52Zm-73.74,65-40,28A8,8,0,0,1,108,156V100a8,8,0,0,1,12.59-6.55l40,28a8,8,0,0,1,0,13.1Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-transparent w-[663px] h-[full] flex items-center justify-center">
            <div class="bg-white w-[450px] h-[350px]">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3956.7647289420484!2d108.2094511!3d-7.3802433!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f57c0bf66050b%3A0x847c829242296522!2sJl.%20Perintis%20Kemerdekaan%20No.238%2C%20Karsamenak%2C%20Kec.%20Kawalu%2C%20Kab.%20Tasikmalaya%2C%20Jawa%20Barat%2046182!5e0!3m2!1sid!2sid!4v1733398690237!5m2!1sid!2sid"
                    width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>