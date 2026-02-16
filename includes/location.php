<!-- LOCATION SECTION -->
<section id="location" 
class="min-h-screen flex flex-col items-center justify-center text-center px-6 relative overflow-hidden">

    <h1 class="text-4xl font-bold text-cyan-400 mb-12 font-[Orbitron] tracking-wider">
        EVENT LOCATION
    </h1>

    <!-- ICON WRAPPER -->
    <div id="locationIcon"
        class="text-cyan-400 transition-all duration-1000 ease-[cubic-bezier(.22,1,.36,1)]
               opacity-0 translate-y-[-80px] scale-75 blur-md">

        <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 24 24"
                class="w-32 h-32 mx-auto drop-shadow-[0_0_25px_cyan]">
                <path fill-rule="evenodd"
                    d="M12 2a7 7 0 00-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 00-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </div>

    <!-- MAP -->
    <div id="mapContainer"
        class="w-full max-w-4xl mt-10 opacity-0 translate-y-10 scale-95 
               transition-all duration-1000 ease-[cubic-bezier(.22,1,.36,1)]">

        <?php
        function showClickablePlace($place) {
            $url = "https://www.google.com/maps/search/" . urlencode($place);

            echo "
            <a href='$url' target='_blank' class='w-full block'>
                <div class='relative w-full rounded-2xl overflow-hidden shadow-2xl backdrop-blur-lg border border-cyan-400/20'
                     style='padding-top:56.25%; transform: perspective(1000px);'>
                    <iframe 
                        class='absolute top-0 left-0 w-full h-full'
                        style='border:0; pointer-events:none;'
                        loading='lazy'
                        src='https://www.google.com/maps?q=" . urlencode($place) . "&output=embed'>
                    </iframe>
                </div>
            </a>
            ";
        }

        showClickablePlace("Nirmala College Muvattupuzha");
        ?>
    </div>

</section>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const section = document.getElementById("location");
    const icon = document.getElementById("locationIcon");
    const map = document.getElementById("mapContainer");

    let hasAnimated = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated) {

                hasAnimated = true;

                // 1️⃣ Icon drop-in (instant feel)
                icon.classList.remove("opacity-0", "translate-y-[-80px]", "scale-75", "blur-md");
                icon.classList.add("opacity-100", "translate-y-0", "scale-100", "blur-0");

                // 2️⃣ Flip + shrink faster
                setTimeout(() => {
                    icon.style.transform = "rotateY(180deg) scale(0.55)";
                }, 500);

                // 3️⃣ Map reveal quickly after
                setTimeout(() => {
                    icon.classList.add("opacity-0");

                    map.classList.remove("opacity-0", "translate-y-10", "scale-95");
                    map.classList.add("opacity-100", "translate-y-0", "scale-100");

                }, 900);

                observer.unobserve(section);
            }
        });
    }, { threshold: 0.4 });

    observer.observe(section);

});
</script>

