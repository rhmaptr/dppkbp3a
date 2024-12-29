<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DPPKBP3A</title>
</head>
<body>
<div class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center z-50" id="popup">
  <div class="bg-white rounded-lg shadow-lg p-6 w-80">
    <h2 class="text-lg font-semibold text-gray-800 flex justify-center items-center">Konfirmasi</h2>
    <p class="text-sm text-gray-600 flex justify-center items-center">Apakah Anda yakin ingin menghapus?</p>
    <div class="flex justify-center items-center mt-4">
      <button 
        class="px-4 py-1 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 mr-2" 
        onclick="closePopup()">
        Batal
      </button>
      <button 
        class="px-4 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600" 
        onclick="deleteItem()">
        Hapus
      </button>
    </div>
  </div>
</div>

</body>
</html>