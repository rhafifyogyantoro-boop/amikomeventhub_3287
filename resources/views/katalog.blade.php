<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Katalog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white p-8 rounded-xl shadow-lg border border-slate-200 text-center max-w-md w-full">
        <h1 class="text-3xl font-bold text-slate-800 mb-2">Katalog Layanan</h1>
        <p class="text-slate-500 mb-6">Pilih kategori yang ingin Anda jelajahi</p>

        <div class="grid grid-cols-1 gap-3 mb-8">
            <div class="p-3 border border-slate-100 rounded-lg bg-slate-50 hover:bg-indigo-50 transition cursor-pointer">
                <p class="font-semibold text-slate-700">📂 Pengembangan Website</p>
            </div>
            <div class="p-3 border border-slate-100 rounded-lg bg-slate-50 hover:bg-indigo-50 transition cursor-pointer">
                <p class="font-semibold text-slate-700">📱 Aplikasi Mobile</p>
            </div>
            <div class="p-3 border border-slate-100 rounded-lg bg-slate-50 hover:bg-indigo-50 transition cursor-pointer">
                <p class="font-semibold text-slate-700">📊 Analisis Sistem</p>
            </div>
        </div>

        <div class="border-t pt-4 mb-6">
            <p class="text-xs text-slate-400 uppercase tracking-widest mb-2">Dikelola Oleh</p>
            <p class="text-slate-600 font-medium">Rhafif Yogiantoro (24.12.3287)</p>
            <p class="text-slate-500 text-xs">Sistem Informasi - SI04</p>
        </div>

        <div class="flex flex-wrap justify-center gap-4">
            <a href="/profil" class="inline-block bg-red-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-red-700 hover:shadow-md transition duration-300">
                Profil
            </a>
            <a href="/bantuan" class="inline-block bg-yellow-500 text-white font-semibold py-2 px-6 rounded-lg hover:bg-yellow-600 hover:shadow-md transition duration-300">
                Bantuan
            </a>
            <a href="/contact" class="inline-block bg-green-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-green-700 hover:shadow-md transition duration-300">
                Contact
            </a>
        </div>
    </div>

</body>
</html>