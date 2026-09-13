<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - ITS Academic Profile</title>
    <!-- Menggunakan CDN Tailwind agar kamu bisa melihat desainnya tanpa perlu Node.js -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-950 text-gray-100 font-sans min-h-screen flex flex-col">

    <nav class="bg-gray-900 border-b border-gray-800 p-4 sticky top-0 z-50 shadow-lg">
        <div class="max-w-4xl mx-auto flex justify-center gap-6 text-sm font-semibold">
            <a href="/" class="text-emerald-400 hover:text-emerald-300 transition">Landing Page</a>
            <a href="/about" class="text-gray-400 hover:text-gray-200 transition">Department Profile</a>
            <a href="/project-idea" class="text-gray-400 hover:text-gray-200 transition">Project Plan</a>
            <a href="/hitung" class="text-gray-400 hover:text-gray-200 transition">Calculator</a>
            <a href="/agent" class="text-gray-400 hover:text-gray-200 transition">Agentic AI</a>
        </div>
    </nav>


    <main class="flex-grow flex items-center justify-center py-12 px-6">
        <div class="w-full max-w-6xl grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- Left Side: Hero Text & Rotating Team -->
            <div class="space-y-6">
                <h1 class="text-4xl lg:text-5xl font-extrabold text-emerald-400 tracking-wide">
                    Welcome to Our Website
                </h1>

                <div class="space-y-3">
                    <p class="text-sm uppercase tracking-wider text-gray-400 font-semibold">The team consists of:</p>
                    <div class="p-4 bg-gray-900/80 backdrop-blur rounded-xl border border-gray-800 shadow-lg min-h-[80px] flex items-center justify-center text-center">
                        <span id="dynamic-team" class="font-bold text-white text-lg transition-opacity duration-300">Addien Zafriyan Al Akhsan - 5025241058</span>
                    </div>
                </div>

                <div class="p-4 rounded-xl border border-gray-800/60">
                    <p class="text-gray-400 text-sm leading-relaxed">This is the homepage of the ITS Student Profile Static Information System.</p>
                </div>

                <a href="/dashboard/mahasiswa/5025241092"
                    class="inline-block mt-4 px-6 py-3 bg-emerald-500 hover:bg-emerald-400 text-gray-950 font-bold rounded-xl transition"> 
                    Menuju Profil Abdullah Sultan Barizy
                </a>
            </div>

            <!-- Right Side: Decorators -->
            <div class="relative flex items-center justify-center p-6 bg-gray-900/60 backdrop-blur rounded-2xl border border-gray-800 overflow-hidden min-h-[300px] shadow-2xl">
                <!-- Background Glow Effects -->
                <div class="absolute -top-12 -right-12 w-32 h-32 bg-emerald-500/10 rounded-full blur-2xl"></div>
                <div class="absolute -bottom-12 -left-12 w-32 h-32 bg-emerald-600/10 rounded-full blur-2xl"></div>

                <!-- Decorator Card Content -->
                <div class="relative z-10 w-full space-y-4">
                    <div class="flex items-center justify-between border-b border-gray-800 pb-3">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-red-500/80 inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-500/80 inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-emerald-500/80 inline-block"></span>
                        </div>
                        <span class="text-xs text-gray-500 font-mono">system.status // active</span>
                    </div>

                    <div class="space-y-2 font-mono text-xs text-gray-400">
                        <p class="text-emerald-400">&gt; initializing profile_system...</p>
                        <p>&gt; loading team credentials [OK]</p>
                        <p>&gt; database connection established...</p>
                        <div class="p-3 bg-emerald-950/30 border border-emerald-500/20 rounded-lg text-emerald-300 flex items-center gap-2 mt-4">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                            </span>
                            <span>Live Rotation Active (1s interval)</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script>
        const teamMembers = [
            "Addien Zafriyan Al Akhsan - 5025241058",
            "Aji Zaenul Musthofa - 5025241065",
            "Anak Agung Putu Arda N - 5025241074",
            "Willy Dava Nugraha - 5025241090",
            "Abdullah Sultan Barizy - 5025241092",
            "Raden Kurniawan Agung Fitrianto - 5025241104"
        ];

        let currentIndex = 0;
        const teamElement = document.getElementById('dynamic-team');

        setInterval(() => {
            currentIndex = (currentIndex + 1) % teamMembers.length;
            teamElement.style.opacity = '0';
            setTimeout(() => {
                teamElement.textContent = teamMembers[currentIndex];
                teamElement.style.opacity = '1';
            }, 150);
        }, 1000);

        // Add smooth transition style via JS
        teamElement.style.transition = 'opacity 0.15s ease-in-out';
    </script>
</body>
</html>
