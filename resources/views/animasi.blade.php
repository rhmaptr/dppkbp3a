<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smooth Scroll with Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=""scroll-smooth> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Dropdown</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex">
  <!-- Sidebar -->
  <div class="w-64 bg-gray-800 h-screen p-4">
    <ul class="space-y-2">
      <!-- Item biasa -->
      <li class="text-gray-200 hover:bg-gray-700 p-2 rounded">
        <a href="#">Dashboard</a>
      </li>

      <!-- Dropdown -->
      <li class="relative">
        <button 
          id="dropdownButton" 
          class="w-full text-left text-gray-200 hover:bg-gray-700 p-2 rounded flex items-center justify-between">
          Fitur Dropdown
          <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>

        <!-- Dropdown Menu -->
        <ul 
          id="dropdownMenu" 
          class="hidden bg-gray-700 mt-2 rounded shadow-lg overflow-hidden">
          <li class="text-gray-200 hover:bg-gray-600 p-2">
            <a href="#">Submenu 1</a>
          </li>
          <li class="text-gray-200 hover:bg-gray-600 p-2">
            <a href="#">Submenu 2</a>
          </li>
          <li class="text-gray-200 hover:bg-gray-600 p-2">
            <a href="#">Submenu 3</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>

  

  <script>
    const dropdownButton = document.getElementById("dropdownButton");
    const dropdownMenu = document.getElementById("dropdownMenu");

    dropdownButton.addEventListener("click", () => {
      dropdownMenu.classList.toggle("hidden");
    });
  </script>
</body>
</html>

    <!-- Navigasi
    <nav class="fixed top-0 left-0 w-full bg-gray-800 text-white p-4 flex space-x-4">
        <a href="#section1" class="hover:text-blue-400">Go to Section 1</a>
        <a href="#section2" class="hover:text-red-400">Go to Section 2</a>
        <a href="#section3" class="hover:text-green-400">Go to Section 3</a>
    </nav>

    <!-- Section 1 -->
    <!-- <div id="section1" class="h-screen bg-blue-500 flex justify-center items-center">
        <h1 class="text-white text-4xl">Section 1</h1>
    </div> -->

    <!-- Section 2 -->
    <!-- <div id="section2" class="h-screen bg-red-500 flex justify-center items-center">
        <h1 class="text-white text-4xl">Section 2</h1>
    </div> -->

    <!-- Section 3 -->
    <!-- <div id="section3" class="h-screen bg-green-500 flex justify-center items-center">
        <h1 class="text-white text-4xl">Section 3</h1>
    </div>
</body>
</html> --> -->
