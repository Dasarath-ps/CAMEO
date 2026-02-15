<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMEO 2026 | Nirmala College MCA </title>
    <!-- External Libraries (No Frameworks, just Fonts and Tailwind) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Rajdhani:wght@300;400;500;600;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="antialiased selection:bg-cyan-500 selection:text-black">

    <!-- loading SECTION  -->
    <?php include 'includes/loading.php' ?>
    
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
            <a href="index.php" class="text-3xl font-bold font-[Orbitron] tracking-tighter interactive-hover group relative">
                <span class="text-white group-hover:text-cyan-400 transition-colors">CAMEO</span>
                <span class="text-cyan-400 group-hover:text-white transition-colors">.26</span>
                <div class="absolute -bottom-2 left-0 w-0 h-0.5 bg-cyan-400 group-hover:w-full transition-all duration-300"></div>
            </a>

            <!-- Desktop Menu -->
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
                <a href="#location" class="nav-link text-sm font-bold tracking-widest hover:text-cyan-400 transition-colors relative interactive-hover">
                    Location
                    
                </a>
                <a href="#contact" class="nav-link text-sm font-bold tracking-widest hover:text-cyan-400 transition-colors relative interactive-hover">
                    CONTACT US
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cyan-400 transition-all"></span>
                </a>
                
                <!-- CTA Button
                <button class="cyber-btn interactive-hover">
                    Connect
                </button> -->
            </div>

            <!-- Mobile Toggle -->
            <button id="mobile-toggle" class="lg:hidden text-white interactive-hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>
        </div>
    </nav>

    <!-- --- MOBILE MENU --- -->
    <div id="mobile-menu" class="fixed inset-0 bg-black/95 z-40 transform translate-x-full transition-transform duration-500 flex flex-col justify-center items-center gap-8 backdrop-blur-xl">
        <a href="#home" class="text-3xl font-bold font-[Orbitron] hover:text-cyan-400 transition-colors mobile-link">HOME</a>
        <a href="#about" class="text-3xl font-bold font-[Orbitron] hover:text-cyan-400 transition-colors mobile-link">SYSTEM</a>
        <a href="#events" class="text-3xl font-bold font-[Orbitron] hover:text-cyan-400 transition-colors mobile-link">EVENTS</a>
        <a href="#location" class="text-3xl font-bold font-[Orbitron] hover:text-cyan-400 transition-colors mobile-link">LOCATION</a>
        <a href="#contact" class="text-3xl font-bold font-[Orbitron] hover:text-cyan-400 transition-colors mobile-link">CONTACT US</a>
        
    </div>

    <!-- Home SECTION  -->
    <?php include 'includes/home.php' ?>

    <!-- System SECTION  -->
    <?php include 'includes/system.php' ?>

    <!-- event SECTION  -->
    <?php include 'includes/events.php' ?>

    <!--location SECTION--->
    <?php include 'includes/location.php'?>

    <!-- timeline SECTION  -->
    <?php include 'includes/contact.php' ?>

    <!-- chatbot SECTION  -->
    <?php include 'includes/chatbot.php' ?>

    <!-- FOOTER SECTION  -->
    <?php include 'includes/footer.php' ?>
    <!-- Javascript  -->
    <script src="js/javaS.js" ></script>
</body>
</html>