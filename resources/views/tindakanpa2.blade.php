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
        <form method="POST" action="{{ url('') }}">
                @csrf
            <div class="bg-white w-full h-full no-scrollbar flex">
                <div class="bg-transparent w-[720px] h-full">
                    <div class="bg-white w-[575px] h-[45px] mt-16 ml-10 font-semibold text-[25px]">Pusat Tindakan
                        Perlindungan Anak</div>
                    <div class="bg-white w-[275px] h-[35px] -mt-3 ml-10 font-semibold text-[20px]">Identitas Anak</div>
                    <div class="bg-white w-[620px] h-[700px] mt-5 ml-10">
                        <div class="bg-white w-[125px] h-[25px] text-slate-900 font-semibold text-[15px]">Nama Lengkap
                        </div>
                        <input type="text"
                            class=" w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></input>
                        <div class="bg-white w-[125px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Usia
                        </div>
                        <input type="text"
                            class=" w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></input>
                        <div class="bg-white w-[125px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Jenis
                            Kelamin</div>
                        <input type="text"
                            class=" w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></input>
                        <div class="bg-white w-[125px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Status
                            Pendidikan</div>
                        <input type="text"
                            class=" w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></input>
                        <div class="bg-white w-[125px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Kondisi
                            Kesehatan</div>
                        <input type="text"
                            class=" w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></input>
                        <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Alamat
                            Lengkap</div>
                        <textarea
                            class=" w-[620px] h-[100px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></textarea>
                        <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Status
                            Keluarga</div>
                        <select name="" id=""
                            class="w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <option value="" disabled selected>Pilih Status Keluarga</option>
                            <option value="">Anak Yatim / Piatu</option>
                            <option value="">Anak dari Keluarga Kurang Mampu</option>
                            <option value="">DLL</option>
                        </select>
                        <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Jenis
                            Program</div>
                        <select name="" id=""
                            class="w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <option value="" disabled selected>Pilih Jenis Program</option>
                            <option value="">Fisik</option>
                            <option value="">Psikis</option>
                            <option value="">Seksual</option>
                            <option value="">Penelantaran</option>
                        </select>
                        <button onclick="window.location.href='http://localhost:8000/tindakanpa3'"
                            class="bg-blue-500 w-[620px] h-[40px] text-white pl-[15px] pb-[2px] rounded-xl shadow-md mt-6 hover:bg-[#336fd1]">Selanjutnya</button>
                    </div>
                </div>
                <div class="bg-transparent w-[720px] h-[895px]">
                    <img src="lo-lindo-PPEptzBa44Q-unsplash.jpg" alt="Example" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </body>

</html>