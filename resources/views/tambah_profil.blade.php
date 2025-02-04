<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>
    <style>
    .camera-icon-small {
        width: 50px;
        height: 50px;
        object-fit: contain;
    }

    .camera-icon-full {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    </style>
</head>

<body>
    <div class="flex bg-slate-500 w-screen h-screen">
        <x-side2></x-side2>
        <div class="bg-[#fafafa] w-full flex items-center justify-center shadow-sm">
            <div class="bg-white w-[600px] h-[530px] rounded-xl">
                <div class="bg-transparent w-full h-[35px] flex">
                    <div class="bg-transparent w-[280px] h-full font-semibold text-[20px] flex pl-5">
                        Tambah Profil</div>
                    <button id="closebutton"
                        class="bg-transparent w-[50px] h-full text-white flex items-center justify-center ml-80 "><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                            viewBox="0 0 256 256">
                            <path
                                d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z">
                            </path>
                        </svg></button>
                </div>
                <div class="bg-black w-full h-1"></div>
                <form method="POST" action="{{ route('tambah_profil.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="bg-transparent w-full h-[30px] mt-3 font-medium text-[18px] pl-5">Gambar</div>
                    <div class="bg-transparent w-full h-[150px]">
                        <div
                            class="bg-slate-50 w-[560px]  ml-5 h-full rounded-lg border-slate-200 border-2 shadow-md flex items-center justify-center relative overflow-hidden">

                            <!-- Input File (Disembunyikan) -->
                            <input style="display:none" name="foto" type="file" id="fileInput"
                                onchange="handleFileSelect(event)">
                            <label for="fileInput"
                                class="absolute inset-0 flex items-center justify-center cursor-pointer">
                                <img id="cameraIcon" src="camera-plus.svg" alt="Kamera"
                                    class="camera-icon-small"></label>

                            <script>
                            // Fungsi kanggo muka dialog file nalika klik ikon kamera
                            function openFileDialog() {
                                document.getElementById('fileInput').click();
                            }

                            // Fungsi pikeun nangkep file anu dipilih jeung nampilkeun gambar di ikon kamera
                            function handleFileSelect(event) {
                                event.stopPropagation();
                                const fileInput = document.getElementById('fileInput');
                                const file = fileInput.files[0];

                                if (file) {
                                    // Baca file yang dipilih sebagai URL
                                    const reader = new FileReader();
                                    reader.onload = function(event) {
                                        // Ganti gambar ikon kamera dengan gambar yang dipilih
                                        const cameraIcon = document.getElementById('cameraIcon');
                                        cameraIcon.src = event.target.result;
                                        cameraIcon.classList.remove('camera-icon-small');
                                        cameraIcon.classList.add('camera-icon-full');
                                    };
                                    reader.readAsDataURL(file);
                                }
                            }

                            function closePopup(event) {
                                event.preventDefault();
                                // Add your logic to close the popup
                                alert("Close button clicked");
                            }
                            document.getElementById('closeButton').addEventListener('click', closePopup);
                            </script>
                        </div>
                    </div>
                    <div class="bg-transparent w-full h-[30px] mt-5 font-medium text-[18px] pl-5">Artikel</div>
                    <div class="bg-transparent w-full h-[50px]">
                        <input type="text" name="title"
                            class="bg-slate-50 w-[560px] h-[150px] text-black ml-5 pl-5  border border-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </input>
                    </div>
                    <div class="bg-transparent w-full h-[40px] mt-32 flex items-center justify-center">
                        <button
                            class="bg-[#3B86FE] w-[560px] h-[40px] text-white flex items-center justify-center rounded-lg shadow-md hover:bg-[#336fd1]">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>