<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>
</head>

<body>
    <div class="bg-gray-100 w-screen h-screen flex">
        <x-side2></x-side2>
        <div class="bg-[fafafa] w-full flex items-center justify-center shadow-sm">
            <div class="bg-white w-[600px] h-[580px] rounded-xl">
                <div class="bg-transparent w-full h-[35px] flex">
                    <div
                        class="bg-transparent w-[180px] h-full font-semibold text-[20px] flex items-center justify-center">
                        Tambah Berita</div>
                    <button onclick="closePopup()"
                        class="bg-transparent w-[50px] h-full text-white flex items-center justify-center ml-auto"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                            viewBox="0 0 256 256">
                            <path
                                d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z">
                            </path>
                        </svg></button>
                </div>
                <form method="POST" action="{{ route('tambah_berita.create') }}">
                    @csrf
                    <div class="bg-black w-full h-1"></div>
                    <div class="bg-transparent w-full h-[30px] mt-3 font-medium text-[18px] pl-5">Gambar
                    </div>
                    <div class="bg-transparent w-full h-[140px]">
                        <div name="image"
                            class="bg-slate-50 w-[560px]  ml-5 h-full rounded-lg border-slate-200 border-2 shadow-md flex items-center justify-center relative overflow-hidden">
                            <button type="button" onclick="openFileDialog()">
                                <img id="cameraIcon" src="camera-plus.svg" alt="Kamera"
                                    class="w-full h-full object-cover"></button>
                            <!-- Input File (Disembunyikan) -->
                            <input name="gambar" type="file" id="fileInput" style="display:none;"
                                onchange="handleFileSelect()"></input>
                        </div>
                    </div>
                    <div for="dateInput" class="bg-transparent w-full h-[30px] mt-3 font-medium text-[18px] pl-5">
                        Tanggal
                    </div>
                    <div class="bg-transparent w-full h-[50px]">
                        <input type="date" id="dateInput" name="tgl"
                            class="bg-slate-50 w-[560px] border border-gray-300 rounded-lg px-3 py-2 ml-5 pl-5 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700"></input>
                    </div>
                    <div class="bg-transparent w-full h-[30px] mt-1 font-medium text-[18px] pl-5">Judul
                    </div>
                    <div class="bg-transparent w-full h-[50px]">
                        <input type="text" name="judul"
                            class="bg-slate-50 w-[560px] h-full text-black pl-5 ml-5 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></input>
                    </div>
                    <div class="bg-transparent w-full h-[30px] mt-2 font-medium text-[18px] pl-5">
                        Artikel</div>
                    <div class="bg-transparent w-full h-[40px]">
                        <textarea name="artikel"
                            class="bg-slate-50 w-[560px] h-[80px] text-black ml-5 pl-5  border border-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                    <div class="bg-transparent w-full h-[40px] mt-16 flex items-center justify-center">
                        <button typ="submit"
                            class="bg-[#3B86FE] w-[560px] h-[40px] text-white flex items-center justify-center rounded-lg shadow-md hover:bg-[#336fd1]">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script>
    function openFileDialog() {
        document.getElementById('fileInput').click();
    }

    function handleFileSelect() {
        const fileInput = document.getElementById('fileInput');
        const file = fileInput.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const cameraIcon = document.getElementById('cameraIcon');
                cameraIcon.src = event.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
    </script>
</body>

</html>