<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Expert-Ease')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">

    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center gap-2">
                    <div class="bg-indigo-600 text-white font-bold w-8 h-8 flex items-center justify-center rounded">E</div>
                    <span class="text-xl font-extrabold text-gray-900 tracking-tight">Expert<span class="text-indigo-600">-Ease</span></span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-indigo-600 text-sm font-medium">Beranda</a>
                    <a href="{{ route('ahli.index') }}" class="text-gray-600 hover:text-indigo-600 text-sm font-medium">Cari Expert</a>
                </div>
                <div class="flex items-center gap-3">
                    <button class="text-sm font-medium text-gray-700 px-4 py-2">Masuk</button>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium">Daftar</button>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white border-t border-gray-200 py-8 text-center text-sm text-gray-500">
        &copy; 2026 Expert-Ease Project UTS.
    </footer>

</body>
</html>