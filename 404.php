<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 System Error | CAMEO 2026</title>
    <!-- External Libraries -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Rajdhani:wght@300;400;500;600;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    
    <style>
        /* --- CUSTOM UTILITIES & ANIMATIONS --- */
        body {
            background-color: #050505;
            color: white;
            overflow-x: hidden;
            font-family: 'Rajdhani', sans-serif;
            cursor: none; /* Hiding default cursor for custom one */
        }

        /* Typography Override */
        .font-orbitron { font-family: 'Orbitron', sans-serif; }
        .font-mono { font-family: 'Share Tech Mono', monospace; }

        /* Custom Cursor */
        .cursor-dot,
        .cursor-outline,
        .cursor-trail {
            position: fixed;
            top: 0;
            left: 0;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: 9999;
            pointer-events: none;
        }
        .cursor-dot {
            width: 8px;
            height: 8px;
            background-color: #22d3ee; /* Cyan-400 */
        }
        .cursor-outline {
            width: 40px;
            height: 40px;
            border: 1px solid rgba(34, 211, 238, 0.5);
            transition: width 0.2s, height 0.2s, background-color 0.2s;
        }
        .cursor-trail {
            width: 20px;
            height: 20px;
            background-color: rgba(34, 211, 238, 0.1);
            filter: blur(4px);
            transition: transform 0.1s ease-out;
        }

        /* Glitch Animation for Text */
        .glitch-wrapper {
            position: relative;
            display: inline-block;
        }
        .glitch {
            position: relative;
            color: white;
            font-size: 6rem;
            font-weight: 900;
            letter-spacing: -2px;
            z-index: 1;
        }
        .glitch::before,
        .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #050505;
        }
        .glitch::before {
            left: 2px;
            text-shadow: -1px 0 #ff00c1;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim 5s infinite linear alternate-reverse;
        }
        .glitch::after {
            left: -2px;
            text-shadow: -1px 0 #00fff9;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim2 5s infinite linear alternate-reverse;
        }

        @keyframes glitch-anim {
            0% { clip: rect(30px, 9999px, 10px, 0); }
            5% { clip: rect(70px, 9999px, 90px, 0); }
            10% { clip: rect(20px, 9999px, 50px, 0); }
            15% { clip: rect(80px, 9999px, 100px, 0); }
            20% { clip: rect(10px, 9999px, 40px, 0); }
            100% { clip: rect(50px, 9999px, 80px, 0); }
        }
        @keyframes glitch-anim2 {
            0% { clip: rect(60px, 9999px, 10px, 0); }
            5% { clip: rect(20px, 9999px, 60px, 0); }
            10% { clip: rect(90px, 9999px, 20px, 0); }
            15% { clip: rect(10px, 9999px, 50px, 0); }
            20% { clip: rect(40px, 9999px, 70px, 0); }
            100% { clip: rect(30px, 9999px, 90px, 0); }
        }

        /* Cyber Button Style */
        .cyber-btn {
            position: relative;
            padding: 15px 40px;
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #22d3ee;
            background: transparent;
            border: 1px solid #22d3ee;
            overflow: hidden;
            transition: 0.3s;
            clip-path: polygon(10% 0, 100% 0, 100% 70%, 90% 100%, 0 100%, 0 30%);
        }
        .cyber-btn:hover {
            background: rgba(34, 211, 238, 0.1);
            color: white;
            text-shadow: 0 0 10px #22d3ee;
            box-shadow: 0 0 20px rgba(34, 211, 238, 0.4);
        }
        .cyber-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(34, 211, 238, 0.4), transparent);
            transition: 0.5s;
        }
        .cyber-btn:hover::before {
            left: 100%;
        }

        /* Floating Animation */
        .float-anim {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        /* Scanline Overlay */
        .scanlines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255,0) 50%, rgba(0,0,0,0.2) 50%, rgba(0,0,0,0.2));
            background-size: 100% 4px;
            pointer-events: none;
            z-index: 50;
            opacity: 0.3;
        }
    </style>
</head>
<body class="antialiased selection:bg-cyan-500 selection:text-black h-screen w-screen flex flex-col relative">

    <!-- --- BACKGROUND CANVAS --- -->
    <div id="canvas-container" class="absolute inset-0 z-0">
        <canvas id="main-canvas"></canvas>
    </div>

    <!-- --- SCANLINES --- -->
    <div class="scanlines"></div>

    <!-- --- CURSOR --- -->
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>
    <div class="cursor-trail"></div>

    <!-- --- MAIN CONTENT --- -->
    <main class="relative z-10 flex-grow flex flex-col justify-center items-center text-center px-4">
        
        <!-- Glitch 404 Text -->
        <div class="glitch-wrapper mb-4">
            <h1 class="glitch font-orbitron" data-text="404">404</h1>
        </div>

        <!-- Error Message -->
        <h2 class="text-2xl md:text-4xl font-bold font-orbitron text-white mb-2 tracking-widest">
            SYSTEM FAILURE
        </h2>
        <p class="text-gray-400 font-mono text-lg md:text-xl max-w-lg mb-8 border-l-2 border-cyan-500 pl-4 text-left">
            > SIGNAL LOST<br>
            > SECTOR NOT FOUND<br>
            > RETURNING TO BASE...
        </p>

        <!-- Navigation Buttons -->
        <div class="flex flex-col md:flex-row gap-6">
            <a href="index.php" class="cyber-btn interactive-hover text-sm md:text-base">
                Initialize Home
            </a>
        </div>

        <!-- Decorative Elements -->
        <div class="mt-16 grid grid-cols-3 gap-4 text-cyan-900 font-mono text-xs md:text-sm opacity-60">
            <div>ERR_CODE: 0x404</div>
            <div>SYS_STATUS: OFFLINE</div>
            <div>LOC: UNKNOWN</div>
        </div>
    </main>

    <!-- --- FOOTER --- -->
    <footer class="relative z-10 w-full py-6 text-center text-gray-600 font-mono text-xs border-t border-gray-900 bg-black/80 backdrop-blur-sm">
        <p>&copy; 2026 CAMEO | NIRMALA COLLEGE MCA | SYSTEM V.2.0.6</p>
    </footer>

    <!-- --- JAVASCRIPT --- -->
    <script>
        // --- CUSTOM CURSOR LOGIC ---
        const cursorDot = document.querySelector('.cursor-dot');
        const cursorOutline = document.querySelector('.cursor-outline');
        const cursorTrail = document.querySelector('.cursor-trail');
        const interactives = document.querySelectorAll('.interactive-hover, a, button');

        // Mouse Move Event
        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;

            // Dot follows immediately
            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;

            // Trail follows with slight delay via CSS transition (smoothed by JS here for precision)
            cursorTrail.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, { duration: 500, fill: "forwards" });

            // Outline follows with standard lag
            cursorOutline.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, { duration: 500, fill: "forwards" });
        });

        // Hover Effects
        interactives.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursorOutline.style.width = '60px';
                cursorOutline.style.height = '60px';
                cursorOutline.style.backgroundColor = 'rgba(34, 211, 238, 0.1)';
                cursorDot.style.transform = 'translate(-50%, -50%) scale(1.5)';
            });
            el.addEventListener('mouseleave', () => {
                cursorOutline.style.width = '40px';
                cursorOutline.style.height = '40px';
                cursorOutline.style.backgroundColor = 'transparent';
                cursorDot.style.transform = 'translate(-50%, -50%) scale(1)';
            });
        });

        // --- CANVAS BACKGROUND ANIMATION (The "Matrix/Cyber" Rain Effect) ---
        const canvas = document.getElementById('main-canvas');
        const ctx = canvas.getContext('2d');

        let width, height;
        
        function resizeCanvas() {
            width = window.innerWidth;
            height = window.innerHeight;
            canvas.width = width;
            canvas.height = height;
        }
        
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        // Particles
        const particles = [];
        const particleCount = 60; // Adjust for density

        class Particle {
            constructor() {
                this.x = Math.random() * width;
                this.y = Math.random() * height;
                this.size = Math.random() * 2 + 1;
                this.speedY = Math.random() * 2 + 0.5;
                this.color = Math.random() > 0.8 ? '#22d3ee' : '#0f172a'; // Cyan or Dark Blue
                this.opacity = Math.random() * 0.5 + 0.1;
            }

            update() {
                this.y += this.speedY;
                if (this.y > height) {
                    this.y = -10;
                    this.x = Math.random() * width;
                }
            }

            draw() {
                ctx.fillStyle = this.color;
                ctx.globalAlpha = this.opacity;
                ctx.beginPath();
                // Draw a small vertical line instead of circle for "digital rain" feel
                ctx.rect(this.x, this.y, 2, this.size * 4);
                ctx.fill();
            }
        }

        function initParticles() {
            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, width, height);
            
            // Draw subtle grid
            drawGrid();

            particles.forEach(p => {
                p.update();
                p.draw();
            });

            requestAnimationFrame(animateParticles);
        }

        function drawGrid() {
            ctx.strokeStyle = 'rgba(34, 211, 238, 0.05)';
            ctx.lineWidth = 1;
            const gridSize = 100;
            
            // Perspective Grid effect (floor)
            // Only draw vertical lines and horizontal lines for a tech background
            for (let x = 0; x <= width; x += gridSize) {
                ctx.beginPath();
                ctx.moveTo(x, 0);
                ctx.lineTo(x, height);
                ctx.stroke();
            }
            for (let y = 0; y <= height; y += gridSize) {
                ctx.beginPath();
                ctx.moveTo(0, y);
                ctx.lineTo(width, y);
                ctx.stroke();
            }
        }

        initParticles();
        animateParticles();

    </script>
</body>
=======
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 System Error | CAMEO 2026</title>
    <!-- External Libraries -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Rajdhani:wght@300;400;500;600;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    
    <style>
        /* --- CUSTOM UTILITIES & ANIMATIONS --- */
        body {
            background-color: #050505;
            color: white;
            overflow-x: hidden;
            font-family: 'Rajdhani', sans-serif;
            cursor: none; /* Hiding default cursor for custom one */
        }

        /* Typography Override */
        .font-orbitron { font-family: 'Orbitron', sans-serif; }
        .font-mono { font-family: 'Share Tech Mono', monospace; }

        /* Custom Cursor */
        .cursor-dot,
        .cursor-outline,
        .cursor-trail {
            position: fixed;
            top: 0;
            left: 0;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: 9999;
            pointer-events: none;
        }
        .cursor-dot {
            width: 8px;
            height: 8px;
            background-color: #22d3ee; /* Cyan-400 */
        }
        .cursor-outline {
            width: 40px;
            height: 40px;
            border: 1px solid rgba(34, 211, 238, 0.5);
            transition: width 0.2s, height 0.2s, background-color 0.2s;
        }
        .cursor-trail {
            width: 20px;
            height: 20px;
            background-color: rgba(34, 211, 238, 0.1);
            filter: blur(4px);
            transition: transform 0.1s ease-out;
        }

        /* Glitch Animation for Text */
        .glitch-wrapper {
            position: relative;
            display: inline-block;
        }
        .glitch {
            position: relative;
            color: white;
            font-size: 6rem;
            font-weight: 900;
            letter-spacing: -2px;
            z-index: 1;
        }
        .glitch::before,
        .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #050505;
        }
        .glitch::before {
            left: 2px;
            text-shadow: -1px 0 #ff00c1;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim 5s infinite linear alternate-reverse;
        }
        .glitch::after {
            left: -2px;
            text-shadow: -1px 0 #00fff9;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim2 5s infinite linear alternate-reverse;
        }

        @keyframes glitch-anim {
            0% { clip: rect(30px, 9999px, 10px, 0); }
            5% { clip: rect(70px, 9999px, 90px, 0); }
            10% { clip: rect(20px, 9999px, 50px, 0); }
            15% { clip: rect(80px, 9999px, 100px, 0); }
            20% { clip: rect(10px, 9999px, 40px, 0); }
            100% { clip: rect(50px, 9999px, 80px, 0); }
        }
        @keyframes glitch-anim2 {
            0% { clip: rect(60px, 9999px, 10px, 0); }
            5% { clip: rect(20px, 9999px, 60px, 0); }
            10% { clip: rect(90px, 9999px, 20px, 0); }
            15% { clip: rect(10px, 9999px, 50px, 0); }
            20% { clip: rect(40px, 9999px, 70px, 0); }
            100% { clip: rect(30px, 9999px, 90px, 0); }
        }

        /* Cyber Button Style */
        .cyber-btn {
            position: relative;
            padding: 15px 40px;
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #22d3ee;
            background: transparent;
            border: 1px solid #22d3ee;
            overflow: hidden;
            transition: 0.3s;
            clip-path: polygon(10% 0, 100% 0, 100% 70%, 90% 100%, 0 100%, 0 30%);
        }
        .cyber-btn:hover {
            background: rgba(34, 211, 238, 0.1);
            color: white;
            text-shadow: 0 0 10px #22d3ee;
            box-shadow: 0 0 20px rgba(34, 211, 238, 0.4);
        }
        .cyber-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(34, 211, 238, 0.4), transparent);
            transition: 0.5s;
        }
        .cyber-btn:hover::before {
            left: 100%;
        }

        /* Floating Animation */
        .float-anim {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        /* Scanline Overlay */
        .scanlines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255,0) 50%, rgba(0,0,0,0.2) 50%, rgba(0,0,0,0.2));
            background-size: 100% 4px;
            pointer-events: none;
            z-index: 50;
            opacity: 0.3;
        }
    </style>
</head>
<body class="antialiased selection:bg-cyan-500 selection:text-black h-screen w-screen flex flex-col relative">

    <!-- --- BACKGROUND CANVAS --- -->
    <div id="canvas-container" class="absolute inset-0 z-0">
        <canvas id="main-canvas"></canvas>
    </div>

    <!-- --- SCANLINES --- -->
    <div class="scanlines"></div>

    <!-- --- CURSOR --- -->
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>
    <div class="cursor-trail"></div>

    <!-- --- MAIN CONTENT --- -->
    <main class="relative z-10 flex-grow flex flex-col justify-center items-center text-center px-4">
        
        <!-- Glitch 404 Text -->
        <div class="glitch-wrapper mb-4">
            <h1 class="glitch font-orbitron" data-text="404">404</h1>
        </div>

        <!-- Error Message -->
        <h2 class="text-2xl md:text-4xl font-bold font-orbitron text-white mb-2 tracking-widest">
            SYSTEM FAILURE
        </h2>
        <p class="text-gray-400 font-mono text-lg md:text-xl max-w-lg mb-8 border-l-2 border-cyan-500 pl-4 text-left">
            > SIGNAL LOST<br>
            > SECTOR NOT FOUND<br>
            > RETURNING TO BASE...
        </p>

        <!-- Navigation Buttons -->
        <div class="flex flex-col md:flex-row gap-6">
            <a href="index.php" class="cyber-btn interactive-hover text-sm md:text-base">
                Initialize Home
            </a>
        </div>

        <!-- Decorative Elements -->
        <div class="mt-16 grid grid-cols-3 gap-4 text-cyan-900 font-mono text-xs md:text-sm opacity-60">
            <div>ERR_CODE: 0x404</div>
            <div>SYS_STATUS: OFFLINE</div>
            <div>LOC: UNKNOWN</div>
        </div>
    </main>

    <!-- --- FOOTER --- -->
    <footer class="relative z-10 w-full py-6 text-center text-gray-600 font-mono text-xs border-t border-gray-900 bg-black/80 backdrop-blur-sm">
        <p>&copy; 2026 CAMEO | NIRMALA COLLEGE MCA | SYSTEM V.2.0.6</p>
    </footer>

    <!-- --- JAVASCRIPT --- -->
    <script>
        // --- CUSTOM CURSOR LOGIC ---
        const cursorDot = document.querySelector('.cursor-dot');
        const cursorOutline = document.querySelector('.cursor-outline');
        const cursorTrail = document.querySelector('.cursor-trail');
        const interactives = document.querySelectorAll('.interactive-hover, a, button');

        // Mouse Move Event
        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;

            // Dot follows immediately
            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;

            // Trail follows with slight delay via CSS transition (smoothed by JS here for precision)
            cursorTrail.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, { duration: 500, fill: "forwards" });

            // Outline follows with standard lag
            cursorOutline.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, { duration: 500, fill: "forwards" });
        });

        // Hover Effects
        interactives.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursorOutline.style.width = '60px';
                cursorOutline.style.height = '60px';
                cursorOutline.style.backgroundColor = 'rgba(34, 211, 238, 0.1)';
                cursorDot.style.transform = 'translate(-50%, -50%) scale(1.5)';
            });
            el.addEventListener('mouseleave', () => {
                cursorOutline.style.width = '40px';
                cursorOutline.style.height = '40px';
                cursorOutline.style.backgroundColor = 'transparent';
                cursorDot.style.transform = 'translate(-50%, -50%) scale(1)';
            });
        });

        // --- CANVAS BACKGROUND ANIMATION (The "Matrix/Cyber" Rain Effect) ---
        const canvas = document.getElementById('main-canvas');
        const ctx = canvas.getContext('2d');

        let width, height;
        
        function resizeCanvas() {
            width = window.innerWidth;
            height = window.innerHeight;
            canvas.width = width;
            canvas.height = height;
        }
        
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        // Particles
        const particles = [];
        const particleCount = 60; // Adjust for density

        class Particle {
            constructor() {
                this.x = Math.random() * width;
                this.y = Math.random() * height;
                this.size = Math.random() * 2 + 1;
                this.speedY = Math.random() * 2 + 0.5;
                this.color = Math.random() > 0.8 ? '#22d3ee' : '#0f172a'; // Cyan or Dark Blue
                this.opacity = Math.random() * 0.5 + 0.1;
            }

            update() {
                this.y += this.speedY;
                if (this.y > height) {
                    this.y = -10;
                    this.x = Math.random() * width;
                }
            }

            draw() {
                ctx.fillStyle = this.color;
                ctx.globalAlpha = this.opacity;
                ctx.beginPath();
                // Draw a small vertical line instead of circle for "digital rain" feel
                ctx.rect(this.x, this.y, 2, this.size * 4);
                ctx.fill();
            }
        }

        function initParticles() {
            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, width, height);
            
            // Draw subtle grid
            drawGrid();

            particles.forEach(p => {
                p.update();
                p.draw();
            });

            requestAnimationFrame(animateParticles);
        }

        function drawGrid() {
            ctx.strokeStyle = 'rgba(34, 211, 238, 0.05)';
            ctx.lineWidth = 1;
            const gridSize = 100;
            
            // Perspective Grid effect (floor)
            // Only draw vertical lines and horizontal lines for a tech background
            for (let x = 0; x <= width; x += gridSize) {
                ctx.beginPath();
                ctx.moveTo(x, 0);
                ctx.lineTo(x, height);
                ctx.stroke();
            }
            for (let y = 0; y <= height; y += gridSize) {
                ctx.beginPath();
                ctx.moveTo(0, y);
                ctx.lineTo(width, y);
                ctx.stroke();
            }
        }

        initParticles();
        animateParticles();

    </script>
</body>
>>>>>>> 9cbf00501787b6805e108586ce3cf4674d688d9f
</html>