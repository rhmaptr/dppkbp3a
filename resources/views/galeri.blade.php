<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>
</head>
<body>
    <div class="bg-white w-screen h-screen no-scrollbar">
    <x-navbar></x-navbar>
    <div class="bg-transparent w-full h-full">
        <div class="bg-white w-[1295px] h-[600px] pt-24 ml-10 flex-col">
            <div class="bg-transparent w-full h-[40px] font-semibold text-[30px] text-blue-500">Galeri</div>
            <div class="bg-transparent w-full h-[30px] font-medium text-[15px]">Dokumentasi Kegiatan Pelayanan DPPKBP3A
                Kota Tasikmalaya</div>
            <div class="bg-transparent w-full h-[430px] container mx-auto overflow-scroll no-scrollbar">
                <div class="grid grid-cols-5 gap-0">
                @if(isset($photos) && $photos->count() > 0)
                    @foreach ($photos as $photo)
                    <div class="bg-pink-100 w-[255px] h-[150px] group relative overflow-hidden">
                        <img src="{{ asset('storage/' . $photo->image) }}" alt="{{ $photo->image }}" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
                        <div
                            class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/50 via-slate-500/70  bg-opacity-60 text-white p-4 text-center opacity-0 translate-y-full transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                            <h3 class="text-lg font-semibold">{{ $photo->title }}</h3>
                        </div>
                    </div>
                    @endforeach
                @else
                <p>Tidak ada foto tersedia.</p>
                @endif
                    <!-- <div class="bg-pink-100 w-[255px] h-[150px] group relative overflow-hidden">
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
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <x-futter></x-futter>
    </div>
</body>

</html>