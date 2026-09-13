<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa - {{ $nrp }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-950 text-gray-100 font-sans min-h-screen">

    <!-- Navbar -->
    <nav class="bg-gray-900 border-b border-gray-800 p-4">
        <div class="max-w-5xl mx-auto flex justify-center gap-6 text-sm font-semibold">
            <a href="/" class="text-gray-400 hover:text-gray-200 transition">
                Landing Page
            </a>

            <a href="/about" class="text-gray-400 hover:text-gray-200 transition">
                Department Profile
            </a>

            <a href="/project-idea" class="text-gray-400 hover:text-gray-200 transition">
                Project Plan
            </a>

            <a href="/hitung" class="text-gray-400 hover:text-gray-200 transition">
                Calculator
            </a>

            <a href="/agent" class="text-gray-400 hover:text-gray-200 transition">
                Agentic AI
            </a>
        </div>
    </nav>

    <!-- Profile -->
    <main class="min-h-[calc(100vh-73px)] flex items-center justify-center px-6 py-12">

        <div class="w-full max-w-3xl">

            <div class="text-center mb-10">
                <p class="text-emerald-400 text-sm font-bold tracking-[0.25em] uppercase mb-3">
                    Student Profile
                </p>

                <h1 class="text-4xl md:text-5xl font-extrabold text-white">
                    Abdullah Sultan Barizy
                </h1>

                <p class="text-gray-400 mt-3">
                    Informasi Profil Mahasiswa
                </p>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 shadow-2xl">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <p class="text-gray-500 text-sm mb-1">
                            Nama Lengkap
                        </p>
                        <p class="text-white font-semibold text-lg">
                            Abdullah Sultan Barizy
                        </p>
                    </div>

                    <div>
                        <p class="text-gray-500 text-sm mb-1">
                            NRP
                        </p>
                        <p class="text-emerald-400 font-semibold text-lg">
                            {{ $nrp }}
                        </p>
                    </div>

                    <div>
                        <p class="text-gray-500 text-sm mb-1">
                            Departemen
                        </p>
                        <p class="text-white font-semibold">
                            Teknik Informatika
                        </p>
                    </div>

                    <div>
                        <p class="text-gray-500 text-sm mb-1">
                            Institusi
                        </p>
                        <p class="text-white font-semibold">
                            Institut Teknologi Sepuluh Nopember
                        </p>
                    </div>

                    <div>
                        <p class="text-gray-500 text-sm mb-1">
                            Program Studi
                        </p>
                        <p class="text-white font-semibold">
                            Teknik Informatika
                        </p>
                    </div>

                    <div>
                        <p class="text-gray-500 text-sm mb-1">
                            Status
                        </p>
                        <p class="text-emerald-400 font-semibold">
                            Mahasiswa Aktif
                        </p>
                    </div>

                </div>

                <div class="border-t border-gray-800 mt-8 pt-6">
                    <p class="text-gray-500 text-sm mb-2">
                        Tentang Mahasiswa
                    </p>

                    <p class="text-gray-400 leading-relaxed">
                        Abdullah Sultan Barizy merupakan mahasiswa Teknik
                        Informatika ITS yang terdaftar dengan NRP
                        {{ $nrp }}.
                    </p>
                </div>

            </div>

        </div>

    </main>

</body>
</html>