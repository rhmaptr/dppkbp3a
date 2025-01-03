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
        <div class="bg-white w-[270px] h-screen flex-col shadow-lg">
            <!-- beranda -->
            <div onclick="window.location.href='http://localhost:8000/beranda'" name="beranda" class="bg-white w-full h-[40px] mt-3 flex hover:bg-[#f3f1f1] hover:bg-opacity-30">
                <div class="bg-transparent w-[45px] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M240,208H224V136l2.34,2.34A8,8,0,0,0,237.66,127L139.31,28.68a16,16,0,0,0-22.62,0L18.34,127a8,8,0,0,0,11.32,11.31L32,136v72H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM48,120l80-80,80,80v88H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48Zm96,88H112V160h32Z">
                        </path>
                    </svg>
                </div>
                <div
                    class="bg-transparent w-[174px] flex items-center font-normal text-[17px] hover:font-medium cursor-pointer">
                    Beranda</div>
            </div>
            <!-- pengaduan -->
            <div onclick="window.location.href='http://localhost:8000/pengaduan'" name="pengaduan" class="bg-white w-full h-[40px] flex hover:bg-[#f3f1f1] hover:bg-opacity-30">
                <div class="bg-transparent w-[45px] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M168,112a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,112Zm-8,24H96a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16Zm72-8A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z">
                        </path>
                    </svg>
                </div>
                <div
                    class="bg-transparent w-[174px] flex items-center font-normal text-[17px] hover:font-medium cursor-pointer">
                    Pengaduan</div>
            </div>
            <!-- poster -->
            <div onclick="window.location.href='http://localhost:8000/poster'" name="poster" class="bg-white w-full h-[40px] flex hover:bg-[#f3f1f1] hover:bg-opacity-30">
                <div class="bg-transparent w-[45px] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,16V158.75l-26.07-26.06a16,16,0,0,0-22.63,0l-20,20-44-44a16,16,0,0,0-22.62,0L40,149.37V56ZM40,172l52-52,80,80H40Zm176,28H194.63l-36-36,20-20L216,181.38V200ZM144,100a12,12,0,1,1,12,12A12,12,0,0,1,144,100Z">
                        </path>
                    </svg>
                </div>
                <div
                    class="bg-transparent w-[174px] flex items-center font-normal text-[17px] hover:font-medium cursor-pointer">
                    Poster</div>
            </div>
            <!-- visi misi -->
            <div onclick="window.location.href='http://localhost:8000/visi_admin'" name="visi" class="w-full h-[40px] flex bg-[#f3f1f1] bg-opacity-50">
                <div class="bg-transparent w-[45px] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M176,232a8,8,0,0,1-8,8H88a8,8,0,0,1,0-16h80A8,8,0,0,1,176,232Zm40-128a87.55,87.55,0,0,1-33.64,69.21A16.24,16.24,0,0,0,176,186v6a16,16,0,0,1-16,16H96a16,16,0,0,1-16-16v-6a16,16,0,0,0-6.23-12.66A87.59,87.59,0,0,1,40,104.49C39.74,56.83,78.26,17.14,125.88,16A88,88,0,0,1,216,104Zm-16,0a72,72,0,0,0-73.74-72c-39,.92-70.47,33.39-70.26,72.39a71.65,71.65,0,0,0,27.64,56.3A32,32,0,0,1,96,186v6h64v-6a32.15,32.15,0,0,1,12.47-25.35A71.65,71.65,0,0,0,200,104Zm-16.11-9.34a57.6,57.6,0,0,0-46.56-46.55,8,8,0,0,0-2.66,15.78c16.57,2.79,30.63,16.85,33.44,33.45A8,8,0,0,0,176,104a9,9,0,0,0,1.35-.11A8,8,0,0,0,183.89,94.66Z">
                        </path>
                    </svg>
                </div>
                <div class="bg-transparent w-[174px] flex items-center text-[17px] font-medium cursor-pointer">Visi Misi
                </div>
                <div class="bg-blue-500 w-[5px] h-full"></div>
            </div>
            <!-- layanan -->
            <div onclick="window.location.href='http://localhost:8000/layanan_admin'" name="layanan"
                class="bg-white w-full h-[40px] flex hover:bg-[#f3f1f1] hover:bg-opacity-30">
                <div class="bg-transparent w-[45px] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M232,48H160a40,40,0,0,0-32,16A40,40,0,0,0,96,48H24a8,8,0,0,0-8,8V200a8,8,0,0,0,8,8H96a24,24,0,0,1,24,24,8,8,0,0,0,16,0,24,24,0,0,1,24-24h72a8,8,0,0,0,8-8V56A8,8,0,0,0,232,48ZM96,192H32V64H96a24,24,0,0,1,24,24V200A39.81,39.81,0,0,0,96,192Zm128,0H160a39.81,39.81,0,0,0-24,8V88a24,24,0,0,1,24-24h64ZM160,88h40a8,8,0,0,1,0,16H160a8,8,0,0,1,0-16Zm48,40a8,8,0,0,1-8,8H160a8,8,0,0,1,0-16h40A8,8,0,0,1,208,128Zm0,32a8,8,0,0,1-8,8H160a8,8,0,0,1,0-16h40A8,8,0,0,1,208,160Z">
                        </path>
                    </svg>
                </div>
                <div
                    class="bg-transparent w-[174px] flex items-center font-normal text-[17px] hover:font-medium cursor-pointer">
                    Layanan</div>
            </div>
            <!-- dokumentasi -->
            <div onclick="window.location.href='http://localhost:8000/dokumentasi'" name="dokumentasi" class="bg-white w-full h-[40px] flex hover:bg-[#f3f1f1] hover:bg-opacity-30">
                <div class="bg-transparent w-[45px] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M216,40H72A16,16,0,0,0,56,56V72H40A16,16,0,0,0,24,88V200a16,16,0,0,0,16,16H184a16,16,0,0,0,16-16V184h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM72,56H216v62.75l-10.07-10.06a16,16,0,0,0-22.63,0l-20,20-44-44a16,16,0,0,0-22.62,0L72,109.37ZM184,200H40V88H56v80a16,16,0,0,0,16,16H184Zm32-32H72V132l36-36,49.66,49.66a8,8,0,0,0,11.31,0L194.63,120,216,141.38V168ZM160,84a12,12,0,1,1,12,12A12,12,0,0,1,160,84Z">
                        </path>
                    </svg>
                </div>
                <div
                    class="bg-transparent w-[174px] flex items-center font-normal text-[17px] hover:font-medium cursor-pointer">
                    Dokumentasi</div>
            </div>
            <!-- berita -->
            <div onclick="window.location.href='http://localhost:8000/berita_admin'" name="berita" class="bg-white w-full h-[40px] flex hover:bg-[#f3f1f1] hover:bg-opacity-30">
                <div class="bg-transparent w-[45px] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M216,40H40A16,16,0,0,0,24,56V216a8,8,0,0,0,11.58,7.15L64,208.94l28.42,14.21a8,8,0,0,0,7.16,0L128,208.94l28.42,14.21a8,8,0,0,0,7.16,0L192,208.94l28.42,14.21A8,8,0,0,0,232,216V56A16,16,0,0,0,216,40Zm0,163.06-20.42-10.22a8,8,0,0,0-7.16,0L160,207.06l-28.42-14.22a8,8,0,0,0-7.16,0L96,207.06,67.58,192.84a8,8,0,0,0-7.16,0L40,203.06V56H216ZM136,112a8,8,0,0,1,8-8h48a8,8,0,0,1,0,16H144A8,8,0,0,1,136,112Zm0,32a8,8,0,0,1,8-8h48a8,8,0,0,1,0,16H144A8,8,0,0,1,136,144ZM64,168h48a8,8,0,0,0,8-8V96a8,8,0,0,0-8-8H64a8,8,0,0,0-8,8v64A8,8,0,0,0,64,168Zm8-64h32v48H72Z">
                        </path>
                    </svg>
                </div>
                <div
                    class="bg-transparent w-[174px] flex items-center font-normal text-[17px] hover:font-medium cursor-pointer">
                    Berita</div>
            </div>
            <!-- keluar -->
            <div name="keluar" class="bg-white w-full h-[40px] flex hover:bg-[#f3f1f1] hover:bg-opacity-30 mt-[270px]">
                <div class="bg-transparent w-[45px] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M120,216a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H56V208h56A8,8,0,0,1,120,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L204.69,120H112a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,229.66,122.34Z">
                        </path>
                    </svg>
                </div>
                <div
                    class="bg-transparent w-[174px] flex items-center font-normal text-[17px] hover:font-medium cursor-pointer">
                    <!-- Kalimat untuk memicu pop-up -->
                    <p class="text-lg font-semibold">
                        <span id="logoutText" class=" cursor-pointer hover:underline">Keluar</span>
                    </p>
                    <!-- Pop-up -->
                    <div id="popup" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center flex z-50">
                        <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                            <h2 class="text-lg font-bold text-gray-800 mb-4 text-center">Apakah Anda ingin keluar?</h2>
                            <div class="flex justify-center space-x-4">
                                <!-- Tombol Ya -->
                                <form method="POST">
                                    <button name="confirmYes"
                                        class="px-7 py-2 bg-green-500 text-white font-semibold rounded hover:bg-green-600">
                                        Ya</button>
                                </form>
                                <!-- Tombol Tidak -->
                                <button id="confirmNo"
                                    class="px-4 py-2 bg-red-500 text-white font-semibold rounded hover:bg-red-700">Tidak</button>
                            </div>
                        </div>
                    </div>

                    <script>
                    const logoutText = document.getElementById('logoutText');
                    const popup = document.getElementById('popup');
                    const confirmNo = document.getElementById('confirmNo');

                    // Tampilkan pop-up saat kalimat "Keluar" diklik
                    logoutText.addEventListener('click', () => {
                        popup.classList.remove('hidden');
                    });

                    // Sembunyikan pop-up jika tombol "Tidak" diklik
                    confirmNo.addEventListener('click', () => {
                        popup.classList.add('hidden');
                    });
                    </script>

                    <?php
    // Tangani aksi logout
    if (isset($_POST['confirmYes'])) {
        echo "<script>alert('Anda telah keluar.');</script>";
    // Redirect atau aksi lain dapat ditambahkan di sini
    // Contoh redirect:
    // header('Location: login.php');
    // exit();
  }
  ?>
                </div>
            </div>
        </div>

        <div class="bg-transparent w-full h-screen ">
            <div class="bg-white w-full h-[35px] flex">
                <div class="bg-white w-[32px] h-full ml-8 flex items-center justify-center "><svg
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
            <div class="bg-transparent w-[1100px] h-[550px] mt-10 ml-8 rounded-lg shadow-lg flex-col">
                <div class="bg-transparent w-full h-[35px] font-semibold text-[20px] pt-1 pl-3">Visi Misi</div>
                <div class="bg-transparent w-full h-[35px] font-semibold text-[20px] pl-3 flex">
                    <form class="relative max-w-md">
                        <input type="text" placeholder="Telusuri..."
                            class="w-full px-1 py-1 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-[15px]" />
                        <button type="submit"
                            class="absolute right-2 top-[18px] transform -translate-y-1/2 text-gray-500 hover:text-blue-500"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                viewBox="0 0 256 256">
                                <path
                                    d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                </path>
                            </svg></button>
                    </form>
                    <button type="submit"
                        class="bg-[#3B86FE] w-[110px] h-[35px] ml-[750px] rounded-lg flex items-center justify-center font-semibold text-white text-[15px] hover:bg-[#336fd1] shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffffff"
                            viewBox="0 0 256 256">
                            <path
                                d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z">
                            </path>
                        </svg> <span class="pl-2">Tambah</span>
                    </button>
                </div>

                <!-- bagian tabel -->
                <div class="bg-transparent w-[1070px] h-[450px] mt-2 ml-3 rounded-lg shadow-lg flex-col">
                    <div class="bg-transparent w-[1040px] h-full ml-3 overflow-y-auto">
                        <div class="overflow-x-auto">
                            <table class="table-auto border-collapse border border-gray-200 w-full">
                                <thead>
                                    <tr class="bg-[#3B86FE] text-white">
                                        <th class="px-4 py-2">No</th>
                                        <th class="px-4 py-2">Visi</th>
                                        <th class="px-4 py-2">Misi</th>
                                        <th class="px-4 py-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-gray-50 ">
                                        <td class=" px-4 py-2 text-center">1</td>
                                        <td class=" px-4 py-2 text-center">Lorem ipsum, dolor sit amet consectetur
                                            adipisicing elit. Omnis, dolores.</td>
                                        <td class=" px-4 py-2 text-center">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, totam!
                                            </p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, totam!
                                            </p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, totam!
                                            </p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, totam!
                                            </p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, totam!
                                            </p>
                                        </td>
                                        <td class=" px-4 py-2  flex items-center justify-center">
                                            <div class="bg-transparent w-[70px] h-[30px] flex">
                                                <div
                                                    class="bg-transarent w-[35px] h-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="#59a1ee" viewBox="0 0 256 256">
                                                        <path
                                                            d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM192,108.68,147.31,64l24-24L216,84.68Z">
                                                        </path>
                                                    </svg></div>
                                                <div
                                                    class="bg-transparent w-[35px] h-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="#ea3939" viewBox="0 0 256 256">
                                                        <path
                                                            d="M224,56a8,8,0,0,1-8,8h-8V208a16,16,0,0,1-16,16H64a16,16,0,0,1-16-16V64H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,56ZM88,32h80a8,8,0,0,0,0-16H88a8,8,0,0,0,0,16Z">
                                                        </path>
                                                    </svg></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 border-2 border-gray-300">
                                        <td class=" px-4 py-2 text-center">2</td>
                                        <td class=" px-4 py-2 text-center">Lorem ipsum dolor sit amet.</td>
                                        <td class=" px-4 py-2 text-center"></td>
                                        <td class=" px-4 py-2 flex items-center justify-center">
                                            <div class="bg-transparent w-[70px] h-[30px] flex">
                                                <div
                                                    class="bg-transarent w-[35px] h-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="#59a1ee" viewBox="0 0 256 256">
                                                        <path
                                                            d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM192,108.68,147.31,64l24-24L216,84.68Z">
                                                        </path>
                                                    </svg></div>
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