<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>
    <style>
    .step {
        display: none;
    }

    .step.active {
        display: block;
    }
    </style>
</head>

<body>
    <div class="bg-transparent w-screen no-scrollbar">
        <x-navbar></x-navbar>
        <form id="multiStepForm" method="POST" action="{{ route('tindakankb.submitMultiStep') }}">
            @csrf
            <div class="bg-white no-scrollbar flex flex-col">
                <div class="step active">
                    <div class="bg-white w-[275px] h-[45px] mt-16 ml-10 font-semibold text-[25px]">Pusat Tindakan PPKB
                    </div>
                    <h1>Step 1: Data Pribadi</h2>
                        <div class="bg-transparent w-[620px] h-[500px] mt-3 ml-10">
                            <div class="bg-white w-[125px] h-[25px] text-slate-900 font-semibold text-[15px]">Nama
                                Lengkap
                            </div>
                            <input type="text" name="name" id="name" required
                                class="w-[1280px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Nomor
                                Induk Kependudukan (NIK)</div>
                            <input type="text" name="nik" id="nik" required
                                class="w-[1280px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">
                                Tempat,
                                Tanggal lahir</div>
                            <input type="date" name="ttl" id="ttl" required
                                class="w-[1280px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">
                                Alamat
                                Lengkap</div>
                            <input type="text" name="alamat" id="alamat" required
                                class="w-[1280px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Nomor
                                HP
                            </div>
                            <input type="text" name="no_hp" id="no_hp" required
                                class="w-[1280px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <button type="button" onclick="nextStep()"
                                class="bg-blue-500 w-[1280px] h-[40px] text-white pl-[15px] pb-[2px] rounded-xl shadow-md mt-7 hover:bg-[#336fd1]">Selanjutnya</button>
                        </div>
                </div>

                <div class="step">
                    <div class="pl-10 mt-[100px]">
                        <h1>Step 1: Data Pribadi</h2>
                            <div class="bg-white w-[125px] h-[25px] text-slate-900 font-semibold text-[15px]">Status
                                Perkawinan</div>
                            <input type="text" name="status" id="status"
                                class="w-[1280px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">
                                Jumlah
                                Anak</div>
                            <input type="number" name="jml_anak" id="jml_anak"
                                class="w-[1280px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Umur
                                Anak
                            </div>
                            <input type="number" name="umur_anak" id="umur_anak"
                                class="w-[1280px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">
                                Jumlah
                                Anggota Keluarga Dalam Satu Rumah</div>
                            <input type="number" name="jml_anggota" id="jml_anggota"
                                class="w-[1280px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                            <div class="bg-white w-[325px] h-[25px] mt-3 text-slate-900 font-semibold text-[15px]">Jenis
                                Program</div>
                            <select name="category" id="category"
                                class="w-[1280px] h-[40px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md">
                                <option value="" disabled selected>Pilih Jenis Program</option>
                                <option value="belum pernah">Belum Pernah</option>
                                <option value="metode hormonal">Metode Hormonal</option>
                                <option value="metode non hormonal">Metode non Hormonal</option>
                                <option value="metode permanen">Metode Permanen</option>
                                <option value="metode alami">Metode Alami</option>
                                <option value="metode darurat">Metode Daruart</option>
                            </select>
                            <button type="button" onclick="prevStep()"
                                class="bg-blue-500 w-[500px] h-[40px] text-white pl-[15px] pb-[2px] rounded-xl shadow-md mt-7 hover:bg-[#336fd1]">Sebelumnya</button>
                            <button type="button" onclick="nextStep()"
                                class="bg-blue-500 w-[500px] h-[40px] text-white pl-[15px] pb-[2px] rounded-xl shadow-md mt-7 hover:bg-[#336fd1]">Selanjutnya</button>
                    </div>
                </div>

                <div class="step">
                    <div class="bg-white w-[125px] h-[25px] text-slate-900 font-semibold text-[15px] mt-[100px] pl-10">Tuliskan
                        Keluhan</div>
                    <textarea name="keluhan" id="keluhan"
                        class=" w-[620px] h-[250px] text-black pl-[15px] pb-[2px] border-2 border-slate-300 rounded-lg shadow-md"></textarea>
                    <button type="button" onclick="prevStep()"
                        class="bg-blue-500 w-[500px] h-[40px] text-white pl-[15px] pb-[2px] rounded-xl shadow-md mt-7 hover:bg-[#336fd1]">Sebelumnya</button>
                    <button type="submit" id="submitButton"
                        class="bg-blue-500 w-[500px] h-[40px] text-white pl-[15px] pb-[2px] rounded-xl shadow-md mt-7">Kirim
                    </button>
                </div>
            </div>
        </form>

        <script>
        let currentStep = 0;
        const steps = document.querySelectorAll('.step');

        function showStep(stepIndex) {
            steps.forEach((step, index) => {
                step.classList.toggle('active', index === stepIndex);
            });
        }

        function nextStep() {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }
        </script>

</body>

</html>