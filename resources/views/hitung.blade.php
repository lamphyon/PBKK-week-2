<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator IPK - ITS Academic Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-950 text-gray-100 font-sans min-h-screen flex flex-col">
    <nav class="bg-gray-900 border-b border-gray-800 p-4 sticky top-0 z-50 shadow-lg">
        <div class="max-w-4xl mx-auto flex justify-center gap-6 text-sm font-semibold">
            <a href="/" class="text-gray-400 hover:text-gray-200 transition">Landing Page</a>
            <a href="/about" class="text-gray-400 hover:text-gray-200 transition">Department Profile</a>
            <a href="/project-idea" class="text-gray-400 hover:text-gray-200 transition">Project Plan</a>
            <a href="/hitung" class="text-emerald-400 hover:text-emerald-300 transition">Calculator</a>
            <a href="/agent" class="text-gray-400 hover:text-gray-200 transition">Agentic AI</a>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center py-12 px-6">
        <div class="w-full max-w-xl">
            <div class="bg-gray-900/80 border border-gray-800 rounded-2xl p-8 shadow-2xl">
                <p class="text-sm uppercase tracking-[0.25em] text-emerald-400 font-bold mb-3">
                    Kalkulator IPK
                </p>
                <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-6">
                    Masukkan IPK Anda
                </h1>

                <form method="GET" action="/hitung" id="calculatorForm" class="space-y-5">
                    <div>
                        <label for="ip1" class="block text-sm font-medium text-gray-300 mb-2">IP1</label>
                        <input
                            type="number"
                            step="0.01"
                            min="0"
                            max="4"
                            name="ip1"
                            id="ip1"
                            placeholder="Contoh: 3.50"
                            class="w-full rounded-xl border border-gray-700 bg-gray-950 px-4 py-3 text-white placeholder-gray-500 focus:border-emerald-500 focus:outline-none"
                            required
                        >
                    </div>

                    <div>
                        <label for="ip2" class="block text-sm font-medium text-gray-300 mb-2">IP2</label>
                        <input
                            type="number"
                            step="0.01"
                            min="0"
                            max="4"
                            name="ip2"
                            id="ip2"
                            placeholder="Contoh: 3.80"
                            class="w-full rounded-xl border border-gray-700 bg-gray-950 px-4 py-3 text-white placeholder-gray-500 focus:border-emerald-500 focus:outline-none"
                            required
                        >
                    </div>

                    <button type="submit" class="w-full rounded-xl bg-emerald-500 px-4 py-3 font-bold text-gray-950 transition hover:bg-emerald-400">
                        Hitung
                    </button>
                </form>
            </div>
        </div>
    </main>

    <script>
        const form = document.getElementById('calculatorForm');
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const ip1 = document.getElementById('ip1').value;
            const ip2 = document.getElementById('ip2').value;

            if (ip1 === '' || ip2 === '') {
                return;
            }

            window.location.href = `/hitung/${encodeURIComponent(ip1)}/${encodeURIComponent(ip2)}`;
        });
    </script>
</body>
</html>
