<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>
</head>

    <body>
        <div class="bg-transparent w-screen h-screen no-scrollbar">
        <x-navbar></x-navbar>
        <form method="POST" action="{{ url('') }}">
                @csrf
            <div class="bg-white w-full h-full no-scrollbar flex">
                <div class="bg-transparent w-[720px] h-full">
                    <div class="bg-white w-[275px] h-[45px] mt-16 ml-10 font-semibold text-[25px]">Pusat Tindakan</div>
                    <div class="bg-white w-[575px] h-[40px] -mt-4 ml-10 font-semibold text-[25px]">Pemberdayaan
                        Perempuan</div>
                    <div class="bg-transparent w-[620px] h-[500px] mt-5 ml-10">
                        <div class="bg-white w-[125px] h-[25px] text-slate-900 font-semibold text-[15px]">Jenis Program
                        </div>
                        <select name="" id=""
                            class="w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <option value="" disabled selected>Pilih Jenis Program</option>
                            <option value="">Pelatihan dan Pendidikan</option>
                            <option value="">Bantuan Modal Usaha</option>
                            <option value="">Dukungan Hukum dan Perlindungan</option>
                            <option value="">Program Kesehatan</option>
                            <option value="">Program Kesejahteraan Sosial</option>
                            <option value="">Program Kesetaraan gender</option>
                            <option value="">Program Pengembangan Komunitas</option>
                            <option value="">Program Teknologi dan Inovasi</option>
                        </select>
                        <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Tingkat
                            Pendidikan Terakhir</div>
                        <input type="text"
                            class=" w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></input>
                        <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Status
                            pendidikan Terakhir</div>
                        <input type="text"
                            class=" w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></input>
                        <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Status
                            Ekonomi Keluarga</div>
                        <select name="" id=""
                            class="w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <option value="" disabled selected>Pilih Status Ekonomi Keluarga</option>
                            <option value="">Bukan Penerima Bansos</option>
                            <option value="">Penerima Bansos</option>
                        </select>
                        <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Jumlah
                            Tanggungan Keluarga</div>
                        <input type="text"
                            class=" w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></input>
                        <button onclick="window.location.href='http://localhost:8000/tindakanpp3'"
                            class="bg-blue-500 w-[620px] h-[40px] text-white pl-[15px] pb-[2px] rounded-xl shadow-md mt-6 hover:bg-[#336fd1]">Selanjutnya</button>
                    </div>
                </div>
                <div class="bg-transparent w-[720px] h-[670px]">
                    <img src="lo-lindo-PPEptzBa44Q-unsplash.jpg" alt="Example" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </body>

</html>