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
                    <div class="bg-white w-[575px] h-[45px] mt-16 ml-10 font-semibold text-[25px]">Pusat Tindakan
                        Perlindungan Anak</div>
                    <div class="bg-transparent w-[620px] h-[500px] mt-5 ml-10">
                        <div class="bg-white w-[125px] h-[25px] text-slate-900 font-semibold text-[15px]">Tuliskan
                            Keluhan</div>
                        <textarea
                            class=" w-[620px] h-[250px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></textarea>
                        <button
                            class="bg-blue-500 w-[620px] h-[40px] text-white pl-[15px] pb-[2px] rounded-xl shadow-md mt-7 hover:bg-[#336fd1]">Kirim</button>
                    </div>
                </div>
                <div class="bg-transparent w-[720px] h-[670px]">
                    <img src="lo-lindo-PPEptzBa44Q-unsplash.jpg" alt="Example" class="w-full h-full object-cover" />
                </div>
            </div>
</body>

</html>