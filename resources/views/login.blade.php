<!DOCTYPE html>
<!-- <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>
</head>

<body>
    <div class="relative w-screen h-screen">
        <img src="login.png" class="w-full h-full object-cover" />
        <div class="absolute inset-0 flex items-center justify-center text-white">
            <div class="bg-[#ffff]/70 w-[400px] h-[380px] rounded-[30px] flex-col flex items-center justify-center">
                <div
                    class="bg-transparent w-full h-[50px] flex items-center justify-center font-semibold text-[25px] text-black">
                    Masuk</div>
                <div class="bg-transparent w-full h-[20px] flex items-center justify-center text-gray-500">Selamat
                    Datang! Silahkan Masukan</div>
                <div class="bg-transparent w-full h-[20px] flex items-center justify-center text-gray-500">Nama Pengguna
                    Dan Kata Sandi Untuk Masuk</div>
                <form action="" method="POST">
                    <div class="bg-transparent w-full h-[70px] mt-[20px] flex-col">
                        <div class="bg-transparent w-[200px] h-[25px] text-black font-medium ml-[10px]">Nama Pengguna
                        </div>
                        <input type="text" id="username" name="username" placeholder="Masukkan Nama Pengguna"
                            class="w-[340px] h-[38px] rounded-[20px] text-black pl-[15px] pb-[2px] border-2 border-blue-200 required:"></input>
                    </div>
                    <div class="bg-transparent w-full h-[70px] flex-col">
                        <div class="bg-transparent w-[200px] h-[25px] text-black font-medium ml-[10px]">Kata Sandi</div>
                        <input type="password" id="password" name="password" placeholder="Masukkan Kata Sandi"
                            class="w-[340px] h-[38px] rounded-[20px] text-black pl-[15px] border-2 border-blue-200 required:"></input>
                    </div>
                    <div class="bg-transparent w-full h-[40px] mt-[15px]">
                        <button type="submit" name="masuk"
                            class="bg-[#5e87c7] w-[340px] h-[40px] rounded-[20px] flex items-center justify-center text-white font-medium hover:bg-[#3b86fe]">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPPK</title>
</head>
<body>
    <form method="POST" action="{{ route('login.submit') }}">
    @csrf
    <input type="text" name="name" placeholder="Nama" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
</body>
</html>