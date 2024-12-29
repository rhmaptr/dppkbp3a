<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smooth Scroll with Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="scroll-smooth">
    <!-- Navigasi -->
    <nav class="fixed top-0 left-0 w-full bg-gray-800 text-white p-4 flex space-x-4">
        <a href="#section1" class="hover:text-blue-400">Go to Section 1</a>
        <a href="#section2" class="hover:text-red-400">Go to Section 2</a>
        <a href="#section3" class="hover:text-green-400">Go to Section 3</a>
    </nav>

    <!-- Section 1 -->
    <div id="section1" class="h-screen bg-blue-500 flex justify-center items-center">
        <h1 class="text-white text-4xl">Section 1</h1>
    </div>

    <!-- Section 2 -->
    <div id="section2" class="h-screen bg-red-500 flex justify-center items-center">
        <h1 class="text-white text-4xl">Section 2</h1>
    </div>

    <!-- Section 3 -->
    <div id="section3" class="h-screen bg-green-500 flex justify-center items-center">
        <h1 class="text-white text-4xl">Section 3</h1>
    </div>
</body>
</html>
