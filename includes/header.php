
    <!-- --- BACKGROUND --- -->
    <div id="canvas-container">
        <canvas id="main-canvas"></canvas>
    </div>

    <!-- --- CURSOR --- -->
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>
    <div class="cursor-trail"></div>

    <!-- --- NAVIGATION --- -->
    <nav class="fixed top-0 w-full z-50 transition-all duration-500 py-6" id="navbar">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <!-- Logo -->
            <a href="" class="text-3xl font-bold font-[Orbitron] tracking-tighter interactive-hover group relative">
                <span class="text-white group-hover:text-cyan-400 transition-colors">CAMEO</span>
                <span class="text-cyan-400 group-hover:text-white transition-colors">.26</span>
                <div class="absolute -bottom-2 left-0 w-0 h-0.5 bg-cyan-400 group-hover:w-full transition-all duration-300"></div>
            </a>

            <!-- Desktop Menu 
            <div class="hidden lg:flex items-center gap-10">
                <a href="#home" class="nav-link text-sm font-bold tracking-widest hover:text-cyan-400 transition-colors relative interactive-hover">
                    HOME
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cyan-400 transition-all"></span>
                </a>
                <a href="#about" class="nav-link text-sm font-bold tracking-widest hover:text-cyan-400 transition-colors relative interactive-hover">
                    SYSTEM
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cyan-400 transition-all"></span>
                </a>
                <a href="#events" class="nav-link text-sm font-bold tracking-widest hover:text-cyan-400 transition-colors relative interactive-hover">
                    EVENTS
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cyan-400 transition-all"></span>
                </a>
                <a href="#schedule" class="nav-link text-sm font-bold tracking-widest hover:text-cyan-400 transition-colors relative interactive-hover">
                    TIMELINE
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cyan-400 transition-all"></span>
                </a>-->
                
                <!-- CTA Button -->
<a href="<?php echo $returnLink ?? './#events'; ?>">
    <button class="cyber-btn interactive-hover">
        RETURN
    </button>
</a>


    </nav>


    
    