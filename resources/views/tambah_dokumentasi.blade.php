<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>
</head>

<body>
    <div class="bg-blue-100 w-screen h-screen flex items-center justify-center">
        <div class="bg-white w-[600px] h-[450px] rounded-xl">
            <div class="bg-transparent w-full h-[35px] flex ">
                <div class="bg-transparent w-[280px] h-full font-semibold text-[20px] flex pl-5">
                    Tambah Dokumentasi</div>
                <button class="bg-transparent w-[50px] h-full text-white flex items-center justify-center ml-80 "><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z">
                        </path>
                    </svg></button>
            </div>
            <div class="bg-black w-full h-1"></div>
            <div class="bg-transparent w-full h-[30px] mt-3 font-medium text-[18px] pl-5">Gambar</div>
            <div class="bg-transparent w-full h-[180px]">
                <div
                    class="bg-slate-50 w-[560px]  ml-5 h-full rounded-lg border-slate-200 border-2 shadow-md flex items-center justify-center relative overflow-hidden">
                    <button onclick="openFileDialog()">
                        <img id="cameraIcon" src="camera-plus.svg" alt="Kamera"
                            class="w-full h-full object-cover"></button>

                    <!-- Input File (Disembunyikan) -->
                    <input type="file" id="fileInput" style="display:none;" onchange="handleFileSelect()">

                    <script>
                    // Fungsi kanggo muka dialog file nalika klik ikon kamera
                    function openFileDialog() {
                        document.getElementById('fileInput').click();
                    }

                    // Fungsi pikeun nangkep file anu dipilih jeung nampilkeun gambar di ikon kamera
                    function handleFileSelect() {
                        const fileInput = document.getElementById('fileInput');
                        const file = fileInput.files[0];


                        if (file) {
                            // Baca file anu dipilih jadi URL
                            const reader = new FileReader();
                            reader.onload = function(event) {
                                // Ganti gambar ikon kamera ku gambar anu dipilih
                                const cameraIcon = document.getElementById('cameraIcon');
                                cameraIcon.src = event.target.result;
                            };
                            reader.readAsDataURL(file);
                        }
                    }
                    </script>
                </div>
            </div>
            <div class="bg-transparent w-full h-[30px] mt-5 font-medium text-[18px] pl-5">Judul</div>
            <div class="bg-transparent w-full h-[50px]">
                <input type="text"
                    class="bg-slate-50 w-[560px] h-full text-black pl-5 ml-5 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></input>
            </div>
            <div class="bg-transparent w-full h-[40px] mt-5 flex items-center justify-center">
                <button
                    class="bg-[#3B86FE] w-[560px] h-[40px] text-white flex items-center justify-center rounded-lg shadow-md hover:bg-[#336fd1]">Simpan</button>
            </div>
        </div>
    </div>
</body>

</html>