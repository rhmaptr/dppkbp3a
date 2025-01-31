<style type="text/tailwindcss">
    @layer utilities {
        .menu-link {
            @apply relative font-semibold text-gray-500 hover:text-blue-900 px-4 py-2;
        }
        .menu-link::after {
            @apply content-[''] bg-blue-900 rounded-xl h-1 w-[0%] left-0 -bottom-1 absolute duration-200;
        }
        .menu-link:hover:after {
            @apply w-[100%];
        }
    }
</style>

<nav class="bg-white w-full fixed shadow-md shadow-blue-400 px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16 z-50">
    <div class="flex items-center space-x-4">
        <a href="#beranda" class="menu-link hidden md:inline-block">Beranda</a>
        <a href="#profil" class="menu-link hidden md:inline-block">Profil</a>
        <a href="#pusat" class="menu-link hidden md:inline-block">Pusat Tindakan</a>
    </div>
    <div class="bg-white w-24 h-24 rounded-full border-b-4 border-blue-400 flex items-center justify-center">
        <img src="logo_kb.png" class="w-28 h-28">
    </div>
    <div class="flex items-center space-x-4 ">
        <a href="#layanan" class="menu-link hidden md:inline-block">Layanan</a>
        <a href="#dokumentasi" class="menu-link hidden md:inline-block">Dokumentasi</a>
        <a href="#berita" class="menu-link hidden md:inline-block">Berita</a>
    </div>
    
    <!-- Mobile Menu Button -->
    <button id="menu-toggle" class="md:hidden text-blue-900 focus:outline-none text-3xl">
        &#9776;
    </button>
</nav>

<!-- Mobile Menu -->
<div id="navMobile" class="hidden md:hidden absolute top-16 left-0 w-full bg-white shadow-lg border-t border-blue-400 flex flex-col items-center py-4 space-y-2 transition-all duration-300 z-50">
    <a href="#beranda" class="menu-link block">Beranda</a>
    <a href="#profil" class="menu-link block">Profil</a>
    <a href="#pusat" class="menu-link block">Pusat Tindakan</a>
    <a href="#layanan" class="menu-link block">Layanan</a>
    <a href="#dokumentasi" class="menu-link block">Dokumentasi</a>
    <a href="#berita" class="menu-link block">Berita</a>
</div>
<script>
const menuToggle = document.getElementById('menu-toggle');
const mobileNav = document.getElementById('navMobile');
const navLinks = mobileNav.querySelectorAll('a');

// Fungsi untuk toggle menu
function toggleMenu() {
    mobileNav.classList.toggle('hidden');
}

// Pasang event listener pada tombol hamburger
menuToggle.addEventListener('click', toggleMenu);

// Tutup menu saat salah satu link diklik dan pastikan tombol hamburger tetap berfungsi
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        mobileNav.classList.add('hidden');
        menuToggle.addEventListener('click', toggleMenu);
    });
});

// Reset navigasi mobile saat layar diperbesar ke md
window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) {
        mobileNav.classList.add('hidden');
        menuToggle.addEventListener('click', toggleMenu);
    }
});

</script>



