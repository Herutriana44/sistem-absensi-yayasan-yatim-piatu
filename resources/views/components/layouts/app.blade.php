<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Sistem Absensi Yayasan' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-white border-b border-gray-200 p-4">
        <div class="container mx-auto">
            <h1 class="text-xl font-bold">Yayasan Yatim Piatu</h1>
        </div>
    </nav>

    <main class="container mx-auto p-4">
        {{ $slot }}
    </main>
</body>
</html>
