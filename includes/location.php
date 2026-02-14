<!-- LOCATION SECTION -->
<section id="location" class="min-h-screen flex flex-col items-center justify-center text-center px-6">
    
    <h1 class="text-4xl font-bold text-cyan-400 mb-10 font-[Orbitron]">
        EVENT LOCATION
    </h1>

    <?php
    function showClickablePlace($place) {
        $url = "https://www.google.com/maps/search/" . urlencode($place);

        echo "
        <a href='$url' target='_blank' class='w-full max-w-4xl'>
            <div class='relative w-full' style='padding-top: 56.25%;'>
                <iframe 
                    class='absolute top-0 left-0 w-full h-full rounded-xl shadow-2xl'
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
</section>
