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
        <form method="POST" action="{{ url('tindakankb3') }}">
            @csrf
            <div class="bg-white w-full h-full no-scrollbar flex">
                <div class="bg-transparent w-[720px] h-full">
                    <div class="bg-white w-[275px] h-[45px] mt-10 ml-10 font-semibold text-[25px]">Pusat Tindakan
                        DPPKBP
                    </div>
                    <div class="bg-transparent w-[620px] h-[500px] mt-5 ml-10">
                        <div class="bg-white w-[125px] h-[25px] text-slate-900 font-semibold text-[15px]">Tuliskan
                            Keluhan</div>
                        <textarea name="keluhan"
                            class=" w-[620px] h-[250px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></textarea>
                        <button id="submitButton"
                            class="bg-blue-500 w-[620px] h-[40px] text-white pl-[15px] pb-[2px] rounded-xl shadow-md mt-7">Kirim
                            <div id="popup"
                                class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center hidden">
                                <div class="bg-white p-12 rounded-lg shadow-lg max-w-sm text-center ">
                                    <h2 class="text-xl font-semibold text-gray-800">Data Anda Sudah Terkirim</h2>
                                    <p class="text-gray-600 mt-1">Terima kasih atas partisipasi Anda.</p>
                                </div>
                                <script>
                                document.addEventListener('DOMContentLoaded', () => {
                                    const submitButton = document.getElementById('submitButton');
                                    const popup = document.getElementById('popup');
                                    const closePopup = document.getElementById('closePopup');

                                    // Tampilkan pop-up saat tombol diklik
                                    submitButton.addEventListener('click', () => {
                                        popup.classList.remove('hidden');
                                    });

                                    // Sembunyikan pop-up saat tombol "Tutup" diklik
                                    closePopup.addEventListener('click', () => {
                                        popup.classList.add('hidden');
                                    });
                                });
                                </script>
                            </div>

                        </button>
                    </div>
                </div>
            </div>
        </form>
</body>

</html>