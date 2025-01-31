<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>
</head>

<body>
    <div class="bg-white w-screen h-screen flex">
        <x-side2></x-side2>
        <div class="bg-blue-400 w-full h-screen ">
            <div class="bg-red-300 w-full h-[35px] flex">
                <div class="bg-slate-400 w-[32px] h-full ml-8 flex items-center justify-center "><svg
                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3b86fe" viewBox="0 0 256 256">
                        <path
                            d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-68-76a12,12,0,1,1-12-12A12,12,0,0,1,140,132Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,132ZM96,172a12,12,0,1,1-12-12A12,12,0,0,1,96,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,140,172Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,172Z">
                        </path>
                    </svg></div>
                <div class="bg-transparent h-full flex items-center justify-center">
                    <?php
                  setlocale(LC_TIME, "id_ID.utf8");
                  echo strftime("%A, %d %B %Y"); // Format: Hari, Tanggal Bulan Tahun
                ?>
                </div>
            </div>
            <div class="bg-green-300 w-[1100px] h-[550px] mt-10 ml-8 rounded-lg shadow-lg flex-col">
                <div class="bg-transparent w-full h-[35px] font-semibold text-[20px] pt-1 pl-3">Berita</div>
                <div class="bg-yellow-300 w-full h-[35px] font-semibold text-[20px] pl-3 flex items-center">
                    <form class="relative max-w-md">
                        <input type="text" placeholder="Telusuri..."
                            class="w-full px-1 py-1 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-[15px]" />
                        <button type="submit"
                            class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                viewBox="0 0 256 256">
                                <path
                                    d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                </path>
                            </svg>
                        </button>
                    </form>

                    <button id="openPopupBtn1"
                        class="bg-[#3B86FE] w-[110px] h-[35px] ml-[750px] rounded-lg flex items-center justify-center font-semibold text-white text-[15px] hover:bg-[#336fd1] shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffffff"
                            viewBox="0 0 256 256">
                            <path
                                d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z">
                            </path>
                        </svg> <span class="pl-2">Tambah</span>
                    </button>

                    <div id="popupbtn1" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
                        style="display:none;">
                        <div class="bg-white rounded-lg p-6 w-[600px]">
                            <!-- <div id="popupContent1"></div> -->
                            <div class="flex items-center justify-center opacity-z">
                                <div class="bg-white w-[600px] h-[580px] rounded-xl">
                                    <div class="bg-transparent w-full h-[35px] flex justify-between">
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
                                    <div class="bg-black w-full h-1"></div>
                                    <div class="bg-transparent w-full h-[30px] mt-3 font-medium text-[18px] pl-5">Gambar
                                    </div>
                                    <div class="bg-transparent w-full h-[140px]">
                                        <div name="image"
                                            class="bg-slate-50 w-[560px]  ml-5 h-full rounded-lg border-slate-200 border-2 shadow-md flex items-center justify-center relative overflow-hidden">
                                            <button onclick="openFileDialog()">
                                                <img id="cameraIcon" src="camera-plus.svg" alt="Kamera"
                                                    class="w-full h-full object-cover"></button>
                                            <!-- Input File (Disembunyikan) -->
                                            <input type="file" id="fileInput" style="display:none;"
                                                onchange="handleFileSelect()"></input>
                                        </div>
                                    </div>
                                    <div for="dateInput"
                                        class="bg-transparent w-full h-[30px] mt-3 font-medium text-[18px] pl-5">Tanggal
                                    </div>
                                    <div class="bg-transparent w-full h-[50px]">
                                        <input type="date" id="dateInput"
                                            class="bg-slate-50 w-[560px] border border-gray-300 rounded-lg px-3 py-2 ml-5 pl-5 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700"></input>
                                    </div>
                                    <div class="bg-transparent w-full h-[30px] mt-1 font-medium text-[18px] pl-5">Judul
                                    </div>
                                    <div class="bg-transparent w-full h-[50px]">
                                        <input type="text" name="title"
                                            class="bg-slate-50 w-[560px] h-full text-black pl-5 ml-5 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></input>
                                    </div>
                                    <div class="bg-transparent w-full h-[30px] mt-2 font-medium text-[18px] pl-5">
                                        Artikel</div>
                                    <div class="bg-transparent w-full h-[40px]">
                                        <textarea name="content"
                                            class="bg-slate-50 w-[560px] h-[80px] text-black ml-5 pl-5  border border-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                    </div>
                                    <div class="bg-transparent w-full h-[40px] mt-16 flex items-center justify-center">
                                        <button
                                            class="bg-[#3B86FE] w-[560px] h-[40px] text-white flex items-center justify-center rounded-lg shadow-md hover:bg-[#336fd1]">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                    document.getElementById('openPopupBtn1').addEventListener('click', openPopup);

                    function openPopup() {
                        // alert('Test')
                        // fetch('/tambah_berita')
                        //     .then(response => response.text())
                        //     .then(data => {
                        //         document.getElementById('popupContent1').innerHTML = data;
                                document.getElementById('popupbtn1').style.display = 'flex';
                                addPopupEventListeners();
                        //     });
                    }

                    function closePopup() {
                        document.getElementById('popupbtn1').style.display = 'none';
                    }

                    function addPopupEventListeners() {
                        document.getElementById('cameraIcon').addEventListener('click', openFileDialog);
                        document.getElementById('fileInput').addEventListener('change', handleFileSelect);
                    }

                    function openFileDialog() {
                        document.getElementById('fileInput').click();
                    }

                    function handleFileSelect() {
                        const fileInput = document.getElementById('fileInput');
                        const file = fileInput.files[0];

                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function(event) {
                                const cameraIcon = document.getElementById('cameraIcon').querySelector('img');
                                cameraIcon.src = event.target.result;
                            };
                            reader.readAsDataURL(file);
                        }
                    }
                    </script>
                </div>

                <!-- bagian tabel -->
                <div class="bg-transparent w-[1070px] h-[450px] mt-2 ml-3 rounded-lg shadow-lg flex-col">
                    <div class="bg-transparent w-[1040px] h-full ml-3 overflow-y-auto">
                        <div class="overflow-x-auto">
                            <table class="table-auto border-collapse border border-gray-200 w-full">
                                <thead>
                                    <tr class="bg-[#3B86FE] text-white">
                                        <th class="px-4 py-2">No</th>
                                        <th class="px-4 py-2">gambar</th>
                                        <th class="px-4 py-2">Tanggal</th>
                                        <th class="px-4 py-2">Judul</th>
                                        <th class="px-4 py-2">Artikel</th>
                                        <th class="px-4 py-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-gray-50 ">
                                        <td class=" px-4 py-2 text-center">1</td>
                                        <td class=" px-4 py-2 text-center flex items-center justify-center">
                                            <div class="bg-red-300 w-16 h-10 "></div>
                                        </td>
                                        <td class=" px-4 py-2 text-center">16 desember 2024</td>
                                        <td class=" px-4 py-2 text-center">kb</td>
                                        <td class=" px-4 py-2 text-center">kb</td>
                                        <td class=" px-4 py-2  flex items-center justify-center">
                                            <div class="bg-yellow-300 w-[70px] h-[30px] flex">
                                                <button
                                                    class="bg-red-300 w-[35px] h-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="#59a1ee" viewBox="0 0 256 256">
                                                        <path
                                                            d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM192,108.68,147.31,64l24-24L216,84.68Z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <div
                                                    class="bg-transparent w-[35px] h-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="#ea3939" viewBox="0 0 256 256">
                                                        <path
                                                            d="M224,56a8,8,0,0,1-8,8h-8V208a16,16,0,0,1-16,16H64a16,16,0,0,1-16-16V64H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,56ZM88,32h80a8,8,0,0,0,0-16H88a8,8,0,0,0,0,16Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 border-2 border-gray-300">
                                        <td class=" px-4 py-2 text-center">2</td>
                                        <td class=" px-4 py-2 text-center flex items-center justify-center">
                                            <div class="bg-red-300 w-16 h-10 "></div>
                                        </td>
                                        <td class=" px-4 py-2 text-center">14 desember</td>
                                        <td class=" px-4 py-2 text-center">perlindungan anak</td>
                                        <td class=" px-4 py-2 text-center">perlindungan anak</td>
                                        <td class=" px-4 py-2 flex items-center justify-center">
                                            <div class="bg-transparent w-[70px] h-[30px] flex">
                                                <div
                                                    class="bg-transarent w-[35px] h-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="#59a1ee" viewBox="0 0 256 256">
                                                        <path
                                                            d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM192,108.68,147.31,64l24-24L216,84.68Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div
                                                    class="bg-transparent w-[35px] h-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="#ea3939" viewBox="0 0 256 256">
                                                        <path
                                                            d="M224,56a8,8,0,0,1-8,8h-8V208a16,16,0,0,1-16,16H64a16,16,0,0,1-16-16V64H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,56ZM88,32h80a8,8,0,0,0,0-16H88a8,8,0,0,0,0,16Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>