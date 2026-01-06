

<div>
    <section>
        <div>
            <h1 class=" text-8xl max-xl:text-7xl max-lg:text-6xl max-md:text-5xl max-sm:text-4xl mt-[5%] font-800 text-center font-extrabold text-violet-600 tracking-wider drop-shadow-[0_0_10px_#a78bfa] drop-shadow-[0_0_25px_#a78bfa]  drop-shadow-[0_0_60px_#7c3aed] animate-glow-pulse">
                {{$data['text1']}}
            </h1>
            <p class=" text-xl max-xl:text-lg max-lg:text-md max-md:text-sm max-sm:text-xs font-mono font-bold text-gray-300 text-center mt-8 "> // {{$data['text2']}} </p>
        </div>
    </section>
    <section class="mt-[5%]">
        <div class=" text-5xl max-xl:text-4xl max-lg:text-3xl max-md:text-2xl max-sm:text-xl text-violet-600 font-bold flex justify-center space-x-6 ">
            <h2 ><<div class="text-white inline"> {{$data['text3']}} </div>/></h2>
        </div>
        <div class="max-w-3xl mx-auto mt-[3%] px-4">
            <div class="group  wrap-break-word relative rounded-2xl border border-violet-800/50 bg-gradient-to-b from-violet-900/30 to-indigo-900/10 p-6 md:p-8 shadow-lg shadow-violet-900/20 transition-all duration-300 hover:-translate-y-1 hover:border-violet-400/70 hover:shadow-2xl hover:shadow-violet-800/30">
                <div class="absolute inset-0 rounded-2xl opacity-0 blur-xl transition-opacity duration-300 group-hover:opacity-30 bg-[radial-gradient(ellipse_at_top_right,theme(colors.violet.500/.35),transparent_50%),radial-gradient(ellipse_at_bottom_left,theme(colors.indigo.500/.35),transparent_50%)]"></div>
                <div class="relative">
                    <p class="text-violet-200/90 text-lg leading-relaxed font-mono">{{$data['text4']}}</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class=" text-5xl max-xl:text-4xl max-lg:text-3xl max-md:text-2xl max-sm:text-xl text-violet-600 font-bold flex justify-center space-x-6 mt-[5%] ">
            <h2 >{ <div class="text-white inline"> {{$data['text5']}} </div> }</h2>
        </div>
        <div class=" mt-[3%] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 max-w-7xl mx-auto">

            <div  class="wrap-break-word group relative rounded-2xl border border-violet-800/50 bg-gradient-to-b from-violet-900/30 to-indigo-900/10 p-6 shadow-lg shadow-violet-900/20 transition-all duration-300 hover:-translate-y-1 hover:border-violet-400/70 hover:shadow-2xl hover:shadow-violet-800/30">
                <div class="absolute inset-0 rounded-2xl opacity-0 blur-xl transition-opacity duration-300 group-hover:opacity-30 bg-[radial-gradient(ellipse_at_top_right,theme(colors.violet.500/.35),transparent_50%),radial-gradient(ellipse_at_bottom_left,theme(colors.indigo.500/.35),transparent_50%)]"></div>
                <div class="relative flex h-full flex-col">
                    <div class="mb-4 flex items-center justify-between">
                        <span class="text-xs font-mono tracking-widest text-violet-300/80">{{$data['box1_Text1']}}</span>
                    </div>
                    <h3 class="text-2xl font-semibold text-white">{{$data['box1_Text1']}}</h3>
                    <p class="mt-2 text-violet-200/90">{{$data['box1_Text2']}}</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="rounded-full border border-violet-700/60 bg-violet-900/30 px-3 py-1 text-xs text-violet-200">{{$data['box1_Text3']}}</span>
                        <span class="rounded-full border border-violet-700/60 bg-violet-900/30 px-3 py-1 text-xs text-violet-200">{{$data['box1_Text4']}}</span>
                        <span class="rounded-full border border-violet-700/60 bg-violet-900/30 px-3 py-1 text-xs text-violet-200">{{$data['box1_Text5']}}</span>
                    </div>

                    @if ($decrypted)
                        <div class="mt-6">
                            <a href="#" class="inline-flex items-center gap-2 rounded-lg bg-gray-600/90 px-4 py-2 text-sm font-semibold text-white transition hover:bg-gray-700/90">
                                Wkrótce
                            </a>
                        </div>
                    @endif
                </div>
            </div>


            <div class=" wrap-break-word group relative rounded-2xl border border-violet-800/50 bg-gradient-to-b from-violet-900/30 to-indigo-900/10 p-6 shadow-lg shadow-violet-900/20 transition-all duration-300 hover:-translate-y-1 hover:border-violet-400/70 hover:shadow-2xl hover:shadow-violet-800/30">
                <div class="absolute inset-0 rounded-2xl opacity-0 blur-xl transition-opacity duration-300 group-hover:opacity-30 bg-[radial-gradient(ellipse_at_top_right,theme(colors.violet.500/.35),transparent_50%),radial-gradient(ellipse_at_bottom_left,theme(colors.indigo.500/.35),transparent_50%)]"></div>
                <div class="relative flex h-full flex-col">
                    <div class="mb-4 flex items-center justify-between">
                        <span class="text-xs font-mono tracking-widest text-violet-300/80">{{$data['box2_Text1']}}</span>
                    </div>
                    <h3 class="text-2xl font-semibold text-white">{{$data['box2_Text1']}}</h3>
                    <p class="mt-2 text-violet-200/90">{{$data['box2_Text2']}} <a  class="text-violet-600" href="https://en.wikipedia.org/wiki/Zero-knowledge_proof">{{$data['box2_Text3']}}</a></p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="rounded-full border border-violet-700/60 bg-violet-900/30 px-3 py-1 text-xs text-violet-200">{{$data['box2_Text4']}}</span>
                        <span class="rounded-full border border-violet-700/60 bg-violet-900/30 px-3 py-1 text-xs text-violet-200">{{$data['box2_Text5']}}</span>
                        <span class="rounded-full border border-violet-700/60 bg-violet-900/30 px-3 py-1 text-xs text-violet-200">{{$data['box2_Text6']}}</span>
                        <span class="rounded-full border border-violet-700/60 bg-violet-900/30 px-3 py-1 text-xs text-violet-200">{{$data['box2_Text7']}}</span>

                    </div>

                    @if ($decrypted)
                    <div class="mt-6">
                        <a href="#" class="inline-flex items-center gap-2 rounded-lg bg-violet-600/90 px-4 py-2 text-sm font-semibold text-white transition hover:bg-violet-500/90">
                            Demo <span class="transition-transform group-hover:translate-x-0.5">↗</span>
                        </a>
                    </div>
                    @endif
                </div>
            </div>


            <div class=" wrap-break-word  group relative rounded-2xl border border-violet-800/50 bg-gradient-to-b from-violet-900/30 to-indigo-900/10 p-6 shadow-lg shadow-violet-900/20 transition-all duration-300 hover:-translate-y-1 hover:border-violet-400/70 hover:shadow-2xl hover:shadow-violet-800/30">
                <div class="absolute inset-0 rounded-2xl opacity-0 blur-xl transition-opacity duration-300 group-hover:opacity-30 bg-[radial-gradient(ellipse_at_top_right,theme(colors.violet.500/.35),transparent_50%),radial-gradient(ellipse_at_bottom_left,theme(colors.indigo.500/.35),transparent_50%)]"></div>
                <div class="relative flex h-full flex-col">
                    <div class="mb-4 flex items-center justify-between">
                        <span class="text-xs font-mono tracking-widest text-violet-300/80">{{$data['box3_Text1']}}</span>
                    </div>
                    <h3 class="text-2xl font-semibold text-white">{{$data['box3_Text1']}}</h3>
                    <p class="mt-2 text-violet-200/90">{{$data['box3_Text2']}}</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="rounded-full border border-violet-700/60 bg-violet-900/30 px-3 py-1 text-xs text-violet-200">{{$data['box3_Text3']}}</span>
                        <span class="rounded-full border border-violet-700/60 bg-violet-900/30 px-3 py-1 text-xs text-violet-200">{{$data['box3_Text4']}}</span>
                    </div>
                    @if ($decrypted)
                    <div class="mt-8">
                        <a href="#" class="inline-flex items-center gap-2 rounded-lg bg-gray-600/90 px-4 py-2 text-sm font-semibold text-white transition hover:bg-gray-700/90">
                            Wkrótce
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <div class=" wrap-break-word group relative rounded-2xl border border-violet-800/50 bg-gradient-to-b from-violet-900/30 to-indigo-900/10 p-6 shadow-lg shadow-violet-900/20 transition-all duration-300 hover:-translate-y-1 hover:border-violet-400/70 hover:shadow-2xl hover:shadow-violet-800/30">
                <div class="absolute inset-0 rounded-2xl opacity-0 blur-xl transition-opacity duration-300 group-hover:opacity-30 bg-[radial-gradient(ellipse_at_top_right,theme(colors.violet.500/.35),transparent_50%),radial-gradient(ellipse_at_bottom_left,theme(colors.indigo.500/.35),transparent_50%)]"></div>
                <div class="relative flex h-full flex-col">
                    <div class="mb-4 flex items-center justify-between">
                        <span class="text-xs font-mono tracking-widest text-violet-300/80">{{$data['box4_Text1']}}</span>
                    </div>
                    <h3 class="text-2xl font-semibold text-white">{{$data['box4_Text1']}}</h3>
                    <p class="mt-2 text-violet-200/90">{{$data['box4_Text2']}}</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="rounded-full border border-violet-700/60 bg-violet-900/30 px-3 py-1 text-xs text-violet-200">{{$data['box4_Text3']}}</span>
                        <span class="rounded-full border border-violet-700/60 bg-violet-900/30 px-3 py-1 text-xs text-violet-200">{{$data['box4_Text4']}}</span>
                        <span class="rounded-full border border-violet-700/60 bg-violet-900/30 px-3 py-1 text-xs text-violet-200">{{$data['box4_Text5']}}</span>
                        <span class="rounded-full border border-violet-700/60 bg-violet-900/30 px-3 py-1 text-xs text-violet-200">{{$data['box4_Text6']}}</span>
                    </div>
                    @if ($decrypted)
                        <div class="mt-6">
                            <a href="https://glueeed.dev:6969/login" class="inline-flex items-center gap-2 rounded-lg bg-violet-600/90 px-4 py-2 text-sm font-semibold text-white transition hover:bg-violet-500/90">
                                Demo <span class="transition-transform group-hover:translate-x-0.5">↗</span>
                            </a>
                        </div>
                    @endif
                </div>

            </div>

            @if (!$decrypted)
               <button wire:click="decryptData" class="inline-flex items-center gap-2 rounded-lg bg-violet-600/90 px-4 mt-20 py-2 text-sm font-semibold text-white transition hover:bg-violet-500/90" >
                   Odszyfruj
                </button>
            @else
                <button wire:click="encryptData" class="inline-flex items-center gap-2 rounded-lg bg-violet-600/90 px-4 mt-20 py-2 text-sm font-semibold text-white transition hover:bg-violet-500/90" >
                    Zaszyfruj
                </button>
            @endif
        </div>
    </section>
</div>


