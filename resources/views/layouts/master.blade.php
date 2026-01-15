<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel Blog')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <nav class="bg-blue-600 text-white px-6 py-4">
        <h1 class="text-xl font-bold">Laravel Blog</h1>
    </nav>

    <!-- Content -->
    <main class="container mx-auto mt-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4 mt-10">
        © {{ date('Y') }} Laravel Blog
    </footer>

</body>
</html>