<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>
</head>

<body>
    <div class="bg-gray-100 w-screen h-screen flex">
        <x-side2></x-side2>
        <div class="bg-[#fafafa] w-full flex items-center justify-center shadow-sm">
            <div class="bg-white w-[600px] h-[450px] rounded-xl">
                <div class="bg-transparent w-full h-[35px] flex">
                    <div class="bg-transparent w-[280px] h-full font-semibold text-[20px] flex pl-5">Tambah Dokumentasi
                    </div>
                </div>
                <div class="bg-black w-full h-1"></div>
                <form method="POST" action="{{ route('tambah_dokumentasi.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="bg-transparent w-full h-[30px] mt-3 font-medium text-[18px] pl-5">Gambar</div>
                    <div class="bg-transparent w-full h-[180px]">
                        <div
                            class="bg-slate-50 w-[560px] ml-5 h-full rounded-lg border-slate-200 border-2 shadow-md flex items-center justify-center relative overflow-hidden">
                            <button type="button" onclick="openFileDialog()">
                                <img id="cameraIcon" src="camera-plus.svg" alt="Kamera"
                                    class="w-full h-full object-cover"></button>
                            <input name="image" type="file" id="image" accept="image/*" style="display:none;"
                                onchange="handleFileSelect()">
                        </div>
                    </div>
                    <div class="bg-transparent w-full h-[30px] mt-5 font-medium text-[18px] pl-5">Judul</div>
                    <div class="bg-transparent w-full h-[50px]">
                        <input type="text" name="title"
                            class="bg-slate-50 w-[560px] h-full text-black pl-5 ml-5 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="bg-transparent w-full h-[40px] mt-5 flex items-center justify-center">
                        <button type="submit"
                            class="bg-[#3B86FE] w-[560px] h-[40px] text-white flex items-center justify-center rounded-lg shadow-md hover:bg-[#336fd1]">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    function openFileDialog() {
        document.getElementById('image').click();
    }

    function handleFileSelect() {
        const image = document.getElementById('image');
        const file = image.files[0];

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