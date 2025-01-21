<div class="bg-white w-[270px] h-screen flex-col shadow-lg">
    <!-- beranda -->
    <a href="/beranda"
        class="{{ request()->is('beranda') ? 'border-blue-500 font-medium cursor-pointer border-r-[5px] bg-slate-200' : 'bg-white hover:bg-slate-100 '}} h-[40px] flex  items-center pl-3 gap-x-3 font-medium ">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M240,208H224V136l2.34,2.34A8,8,0,0,0,237.66,127L139.31,28.68a16,16,0,0,0-22.62,0L18.34,127a8,8,0,0,0,11.32,11.31L32,136v72H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM48,120l80-80,80,80v88H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48Zm96,88H112V160h32Z">
                </path>
            </svg>
        </div>
        <p class="">Beranda
        </p>
    </a>

    <a href="/pengaduan"
        class="{{ request()->is('pengaduan') ? 'border-blue-500 font-medium cursor-pointer border-r-[5px] bg-slate-200' : 'bg-white hover:bg-slate-100 '}} h-[40px] flex items-center pl-3 gap-x-3 font-medium relative group">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M168,112a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,112Zm-8,24H96a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16Zm72-8A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z">
                </path>
            </svg>
        </div>
        <p class="">Pengaduan</p>
        <div class="ml-auto bg-pink-600 pt-2">
            <svg id="dropdownIconPengaduan" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                viewBox="0 0 256 256" class="">
                <path id="dropdownIconPathPengaduan"
                    d="M208.49,115.89A15.94,15.94,0,0,1,196.69,120h-1.38L128,60.69,64.69,120H63.31a15.94,15.94,0,0,1-11.8-4.11,16.1,16.1,0,0,1-1.63-22.6L116.69,36.1a16,16,0,0,1,22.62,0L210.12,93.28A16.1,16.1,0,0,1,208.49,115.89Z">
                </path>
            </svg>
        </div>
    </a>
    <div class="hidden" id="dropdownMenuPengaduan">
        <a href="/pengaduan" class="block px-4 py-2 text-black hover:bg-gray-200 dropdown-item">Pengaduan</a>
        <a href="/pengaduan_2" class="block px-4 py-2 text-black hover:bg-gray-200 dropdown-item">Konten</a>
    </div>

    <script>
    const pengaduanLink = document.querySelector('a[href="/pengaduan"]');
    const dropdownMenuPengaduan = document.getElementById('dropdownMenuPengaduan');
    const dropdownIconPengaduan = document.getElementById('dropdownIconPengaduan');
    const dropdownIconPathPengaduan = document.getElementById('dropdownIconPathPengaduan');
    const dropdownItemsPengaduan = document.querySelectorAll('.dropdown-item');

    pengaduanLink.addEventListener('click', function(event) {
        event.preventDefault();
        dropdownMenuPengaduan.classList.toggle('hidden');
        if (dropdownMenuPengaduan.classList.contains('hidden')) {
            dropdownIconPathPengaduan.setAttribute('d',
                'M208.49,115.89A15.94,15.94,0,0,1,196.69,120h-1.38L128,60.69,64.69,120H63.31a15.94,15.94,0,0,1-11.8-4.11,16.1,16.1,0,0,1-1.63-22.6L116.69,36.1a16,16,0,0,1,22.62,0L210.12,93.28A16.1,16.1,0,0,1,208.49,115.89Z'
            );
        } else {
            dropdownIconPathPengaduan.setAttribute('d', 'M64,96L128,156.69,192,96Z');
        }
    });

    dropdownItemsPengaduan.forEach(item => {
        item.addEventListener('click', function(event) {
            event.stopPropagation(); // This will prevent the menu from closing
        });
    });
    </script>






    <a href="/poster"
        class="{{ request()->is('poster') ? 'border-blue-500 font-medium cursor-pointer border-r-[5px] bg-slate-200' : 'bg-white hover:bg-slate-100 '}} h-[40px] flex   items-center pl-3 gap-x-3 font-medium ">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,16V158.75l-26.07-26.06a16,16,0,0,0-22.63,0l-20,20-44-44a16,16,0,0,0-22.62,0L40,149.37V56ZM40,172l52-52,80,80H40Zm176,28H194.63l-36-36,20-20L216,181.38V200ZM144,100a12,12,0,1,1,12,12A12,12,0,0,1,144,100Z">
                </path>
            </svg>
        </div>
        <p class="">Poster
        </p>
    </a>

    <a href="/visi_admin"
        class="{{ request()->is('visi_admin') ? 'border-blue-500 font-medium cursor-pointer border-r-[5px] bg-slate-200' : 'bg-white hover:bg-slate-100 '}} h-[40px] flex items-center pl-3 gap-x-3 font-medium ">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M176,232a8,8,0,0,1-8,8H88a8,8,0,0,1,0-16h80A8,8,0,0,1,176,232Zm40-128a87.55,87.55,0,0,1-33.64,69.21A16.24,16.24,0,0,0,176,186v6a16,16,0,0,1-16,16H96a16,16,0,0,1-16-16v-6a16,16,0,0,0-6.23-12.66A87.59,87.59,0,0,1,40,104.49C39.74,56.83,78.26,17.14,125.88,16A88,88,0,0,1,216,104Zm-16,0a72,72,0,0,0-73.74-72c-39,.92-70.47,33.39-70.26,72.39a71.65,71.65,0,0,0,27.64,56.3A32,32,0,0,1,96,186v6h64v-6a32.15,32.15,0,0,1,12.47-25.35A71.65,71.65,0,0,0,200,104Zm-16.11-9.34a57.6,57.6,0,0,0-46.56-46.55,8,8,0,0,0-2.66,15.78c16.57,2.79,30.63,16.85,33.44,33.45A8,8,0,0,0,176,104a9,9,0,0,0,1.35-.11A8,8,0,0,0,183.89,94.66Z">
                </path>
            </svg>
        </div>
        <p class="">Profil
        </p>
        <div class="ml-auto bg-pink-600 pt-2">
            <svg id="dropdownIcon1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                viewBox="0 0 256 256" class="">
                <path id="dropdownIconPath1"
                    d="M208.49,115.89A15.94,15.94,0,0,1,196.69,120h-1.38L128,60.69,64.69,120H63.31a15.94,15.94,0,0,1-11.8-4.11,16.1,16.1,0,0,1-1.63-22.6L116.69,36.1a16,16,0,0,1,22.62,0L210.12,93.28A16.1,16.1,0,0,1,208.49,115.89Z">
                </path>
            </svg>
        </div>
    </a>
    <div class="hidden" id="dropdownMenu1">
        <a href="/profil_landing" class="block px-4 py-2 text-black hover:bg-gray-200 dropdown-item">konten Profil
            Landing Page</a>
        <a href="/visi_admin" class="block px-4 py-2 text-black hover:bg-gray-200 dropdown-item">Visi Misi</a>
        <a href="/tugas_pokok" class="block px-4 py-2 text-black hover:bg-gray-200 dropdown-item">Tugas Pokok</a>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Code to be executed when the DOM is ready
        var cur_url = window.location.href;
        var menu_profil = document.getElementById("dropdownMenu1");
        var menu_pengaduan = document.getElementById("dropdownMenuPengaduan");
        // alert(cur_url)
        // ["profil_landing", "visi_admin", "tugas_pokok"]
        //untuk menu profil
        if(cur_url.includes("profil_landing") || cur_url.includes("visi_admin") || cur_url.includes("tugas_pokok")){
            menu_profil.classList.remove("hidden");
        }else{
            menu_profil.setAttribute("class", "hidden");
        }

        // untuk menu pengaduan
    });
    const visi_adminLink = document.querySelector('a[href="/visi_admin"]');
    const dropdownMenu1 = document.getElementById('dropdownMenu1');
    const dropdownIcon1 = document.getElementById('dropdownIcon1');
    const dropdownIconPath1 = document.getElementById('dropdownIconPath1');
    const dropdownItems1 = document.querySelectorAll('.dropdown-item');

    visi_adminLink.addEventListener('click', function(event) {
        event.preventDefault();
        dropdownMenu1.classList.toggle('hidden');
        if (dropdownMenu1.classList.contains('hidden')) {
            //kondisi untuk menyembunykan
            dropdownIconPath1.setAttribute('d',
                'M208.49,115.89A15.94,15.94,0,0,1,196.69,120h-1.38L128,60.69,64.69,120H63.31a15.94,15.94,0,0,1-11.8-4.11,16.1,16.1,0,0,1-1.63-22.6L116.69,36.1a16,16,0,0,1,22.62,0L210.12,93.28A16.1,16.1,0,0,1,208.49,115.89Z'
            );
        } else {
            //kondisi untuk menampilkan
            dropdownIconPath1.setAttribute('d', 'M64,96L128,156.69,192,96Z');
        }
    });

    dropdownItems1.forEach(item => {
        item.addEventListener('click', function(event) {
            event.stopPropagation(); // This will prevent the menu from closing
        });
    });
    </script>



    <a href="/layanan_admin"
        class="{{ request()->is('layanan_admin') ? 'border-blue-500 font-medium cursor-pointer border-r-[5px] bg-slate-200' : 'bg-white hover:bg-slate-100 '}} h-[40px] flex   items-center pl-3 gap-x-3 font-medium ">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M232,48H160a40,40,0,0,0-32,16A40,40,0,0,0,96,48H24a8,8,0,0,0-8,8V200a8,8,0,0,0,8,8H96a24,24,0,0,1,24,24,8,8,0,0,0,16,0,24,24,0,0,1,24-24h72a8,8,0,0,0,8-8V56A8,8,0,0,0,232,48ZM96,192H32V64H96a24,24,0,0,1,24,24V200A39.81,39.81,0,0,0,96,192Zm128,0H160a39.81,39.81,0,0,0-24,8V88a24,24,0,0,1,24-24h64ZM160,88h40a8,8,0,0,1,0,16H160a8,8,0,0,1,0-16Zm48,40a8,8,0,0,1-8,8H160a8,8,0,0,1,0-16h40A8,8,0,0,1,208,128Zm0,32a8,8,0,0,1-8,8H160a8,8,0,0,1,0-16h40A8,8,0,0,1,208,160Z">
                </path>
            </svg>
        </div>
        <p class="">Layanan
        </p>
    </a>

    <a href="/dokumentasi"
        class="{{ request()->is('dokumentasi') ? 'border-blue-500 font-medium cursor-pointer border-r-[5px] bg-slate-200' : 'bg-white hover:bg-slate-100 '}} h-[40px] flex   items-center pl-3 gap-x-3 font-medium ">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M216,40H72A16,16,0,0,0,56,56V72H40A16,16,0,0,0,24,88V200a16,16,0,0,0,16,16H184a16,16,0,0,0,16-16V184h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM72,56H216v62.75l-10.07-10.06a16,16,0,0,0-22.63,0l-20,20-44-44a16,16,0,0,0-22.62,0L72,109.37ZM184,200H40V88H56v80a16,16,0,0,0,16,16H184Zm32-32H72V132l36-36,49.66,49.66a8,8,0,0,0,11.31,0L194.63,120,216,141.38V168ZM160,84a12,12,0,1,1,12,12A12,12,0,0,1,160,84Z">
                </path>
            </svg>
        </div>
        <p class="">Dokumentasi
        </p>
    </a>

    <a href="/berita_admin"
        class="{{ request()->is('berita_admin') ? 'border-blue-500 font-medium cursor-pointer border-r-[5px] bg-slate-200' : 'bg-white hover:bg-slate-100 '}} h-[40px] flex   items-center pl-3 gap-x-3 font-medium ">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M216,40H40A16,16,0,0,0,24,56V216a8,8,0,0,0,11.58,7.15L64,208.94l28.42,14.21a8,8,0,0,0,7.16,0L128,208.94l28.42,14.21a8,8,0,0,0,7.16,0L192,208.94l28.42,14.21A8,8,0,0,0,232,216V56A16,16,0,0,0,216,40Zm0,163.06-20.42-10.22a8,8,0,0,0-7.16,0L160,207.06l-28.42-14.22a8,8,0,0,0-7.16,0L96,207.06,67.58,192.84a8,8,0,0,0-7.16,0L40,203.06V56H216ZM136,112a8,8,0,0,1,8-8h48a8,8,0,0,1,0,16H144A8,8,0,0,1,136,112Zm0,32a8,8,0,0,1,8-8h48a8,8,0,0,1,0,16H144A8,8,0,0,1,136,144ZM64,168h48a8,8,0,0,0,8-8V96a8,8,0,0,0-8-8H64a8,8,0,0,0-8,8v64A8,8,0,0,0,64,168Zm8-64h32v48H72Z">
                </path>
            </svg>
        </div>
        <p class="">Berita
        </p>
    </a>

    <!-- keluar -->
    <div name="keluar" class="bg-white w-full h-[40px] flex hover:bg-[#f3f1f1] hover:bg-opacity-30 mt-[270px]">
        <div class="bg-transparent w-[45px] flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M120,216a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H56V208h56A8,8,0,0,1,120,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L204.69,120H112a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,229.66,122.34Z">
                </path>
            </svg>
        </div>
        <div class="bg-transparent  flex items-center font-normal text-[17px] hover:font-medium cursor-pointer">
            <!-- Kalimat untuk memicu pop-up -->
            <p class="text-lg font-semibold">
                <span id="logoutText" class=" cursor-pointer hover:underline">Keluar</span>
            </p>
            <!-- Pop-up -->
            <div id="popup" class="fixed hidden inset-0 bg-black bg-opacity-50 items-center justify-center flex z-50">
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