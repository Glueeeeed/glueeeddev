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



<footer class=" h-70 mt-20 border-t border-violet-800/30 bg-gradient-to-b from-violet-950/20 to-indigo-950/10 ">
    <div class="container mx-auto px-6 z-10">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 mt-15 md:mb-0">
                <h3 class="text-violet-400 font-semibold tracking-wide">Glueeed.dev</h3>
                <p class="mt-2 text-sm text-violet-200/70 italic">glue and nonces in my dreams since forever</p>
            </div>
        </div>
        <div class="border-t text-xs text-violet-200/60 mt-10 p-6 text-center">
            <p class="font-bold">© {{ date('Y') }} Glueeed</p>
            <p> Wszelkie prawa zastrzeżone.</p>
            <div class=" mt-5 font-mono">Laravel • Livewire • Tailwind</div>
        </div>
    </div>

</footer>

@livewireScripts
</body>
</html>
