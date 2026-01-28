<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cześć, nazywam sie Kuba. Mam 17 lat. Interesuje sie technologiami backendowymi oraz kryptografią.">
    <meta name="keywords" content="Security, glueeed, Glueeed,GlueCrypt,GlueNews, Glue, Cryptopraphy, Ciphers, AES, Hash, Kryptografia, Bezpieczeństwo">
    <meta name="author" content="Glueeed">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Glueeed.dev</title>

    @vite('resources/css/app.css')

    @livewireStyles
</head>
<body class="antialiased bg-gray-950 text-gray-100 min-h-screen flex flex-col">
<main class="flex-1">
    {{ $slot }}
</main>



<footer class=" h-80 mt-20 border-t border-violet-800/30 bg-gradient-to-b from-violet-950/20 to-indigo-950/10 ">
    <div class="container mx-auto px-6 z-10">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 mt-15 md:mb-0">
                <h3 class="text-violet-400 font-semibold tracking-wide">Glueeed.dev</h3>
                <p class="mt-2 text-sm text-violet-200/70 italic">glue and nonces in my dreams since forever</p>
            </div>
        </div>
        <div class="border-t text-xs text-violet-200/60 mt-10 p-6 text-center">
            <div class=" mt-5 font-mono">Laravel • Livewire • Tailwind</div>
            <p class="mt-3 text-xs text-violet-300/80 font-mono italic">
                Stworzone z ❤️ przez Glueeed
            </p>
            <a href="https://github.com/Glueeeeed/glueeeddev" target="_blank" rel="noopener noreferrer" class=" mt-2 flex justify-center gap-1  text-violet-400/70 hover:text-violet-300 transition-colors duration-200">
                GitHub
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.377.202 2.394.1 2.647.64.699 1.026 1.592 1.026 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12c0-5.523-4.478-10-10-10z"/>
                </svg>
            </a>
        </div>
    </div>

</footer>

@livewireScripts
</body>
</html>
