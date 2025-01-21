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
        <div class="bg-blue-400 w-screen h-1"></div>
        <form method="POST" action="{{ url('tindakankb2') }}">
            @csrf
            <div class="bg-white w-full h-full no-scrollbar flex">
                <div class="bg-transparent w-[720px] h-full">
                    <div class="bg-white w-[275px] h-[45px] mt-10 ml-10 font-semibold text-[25px]">Pusat Tindakan
                        DPPKBP
                    </div>
                    <div class="bg-transparent w-[620px] h-[500px] mt-5 ml-10">
                        <div class="bg-white w-[125px] h-[25px] text-slate-900 font-semibold text-[15px]">Status
                            Perkawinan</div>
                        <input type="text" name="status"
                            class=" w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></input>
                        <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">
                            Jumlah
                            Anak</div>
                        <input type="text" name="jml_anak"
                            class=" w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></input>
                        <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Umur
                            Anak
                        </div>
                        <input type="text" name="umur_anak"
                            class=" w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></input>
                        <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">
                            Jumlah
                            Anggota Keluarga Dalam Satu Rumah</div>
                        <input type="text" name="jml_anggota"
                            class=" w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></input>
                        <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Jenis
                            Program</div>
                        <select name="category" id=""
                            class="w-[620px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <option value="" disabled selected>Pilih Jenis Program</option>
                            @foreach($categories as $category)
                            <option value="{{ $categories->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <button
                            class="bg-blue-500 w-[620px] h-[40px] text-white pl-[15px] pb-[2px] rounded-xl shadow-md mt-7 hover:bg-[#336fd1]">Selanjutnya</button>
                    </div>
                </div>
                <div class="bg-transparent w-[720px] h-full">
                    <img src="lo-lindo-PPEptzBa44Q-unsplash.jpg" alt="Example" class="w-full h-full object-cover" />
                </div>
            </div>
        </form>
</body>

</html>