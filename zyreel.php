<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMEO 2026 | Nirmala College MCA </title>
    <!-- External Libraries (No Frameworks, just Fonts and Tailwind) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Rajdhani:wght@300;400;500;600;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=share" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="antialiased selection:bg-cyan-500 selection:text-black">
    <!-- HEADER SECTION  -->
    <?php include 'includes/header.php' ?>

<!-- ZYREEL SECTION -->
<section class="event-section">

  <div class="event-container">

<!-- Poster -->
<div class="event-poster">
  <img src="asset/img/zyreel.png" alt="ZYREEL Poster">

  <!-- PAYMENT INSTRUCTIONS -->
  <div class="payment-card" style="margin-top:20px;">
    <h3>PAYMENT PROCESS</h3>
    <ul>
      <li>Complete the registration fee payment via <strong>UPI / QR Code</strong>.</li>
      <li>Take a <strong>screenshot</strong> of the successful payment.</li>
      <li>Note your <strong>Transaction ID</strong>.</li>
      <li>Click <strong>Register Now</strong> below.</li>
      <li>Upload the screenshot & enter Transaction ID in the form.</li>
      <li><strong>Registration is valid ONLY after payment details submission.</strong></li>
      <li></li>
      <li>
        <input type="checkbox" id="agreeCheck" >
        <span>I agree to the payment & registration rules</span>
      </li>
    </ul>
  </div>

<div id="agreePopup" class="popup hidden">
  <div class="popup-box">
    <p>⚠ Please agree to continue</p>
    <button onclick="closePopup()">OK</button>
  </div>
</div>

  <!-- Buttons BELOW Poster -->
  <div class="event-poster-buttons">
<button class="cyber-btn" id="registerBtn" onclick="handleRegisterClick('zyreel')">
  Register Now
</button>


    <button class="cyber-btn cyber-btn-secondary share-icon" onclick="shareZyreel()">
      <span class="material-symbols-outlined">
share
</span>
    </button>
  </div>
  
</div>

    <!-- Content -->
    <div class="event-content">

      <h1 style="font-size:48px; margin-bottom:20px;" 
          class="glitch" 
          data-text="ZYREEL">
          ZYREEL
      </h1>

      <p class="event-tagline">
        One Reel. Unlimited Impact.  
        Blend creativity, storytelling, and editing into a masterpiece in motion.
      </p>

      <!-- Info Grid -->
      <div class="event-grid">

      <div class="event-info-card">
          <span>💰Price pool</span>
          <p>₹5,000</p>
      </div>

        <div class="event-info-card">
          <span>👥 Team Size</span>
          <p>Maximum 3 Members</p>
        </div>

        <div class="event-info-card">
          <span>🎬 Reel Duration</span>
          <p>60 – 90 Seconds</p>
        </div>

        <div class="event-info-card">
          <span>📱 Format</span>
          <p>9:16 (Vertical), MP4</p>
        </div>

        <div class="event-info-card">
          <span>📝 Topic</span>
          <p>Announced at the Beginning</p>
        </div>

        <div class="event-info-card">
          <span>⏰ Start Time</span>
          <p>10:00 AM</p>
        </div>

        <div class="event-info-card">
          <span>📤 Deadline</span>
          <p>Before 2:00 PM</p>
        </div>

        <div class="event-info-card">
          <span>💰 Fee</span>
          <p>₹150 per Team</p>
        </div>

      </div>

      <!-- Rules -->
      <div class="event-rules-card">
        <h3>RULES & REGULATIONS</h3>
        <ul>
          <li>All content must be <strong>100% original</strong>.</li>
          <li>Late submissions will <strong>NOT</strong> be accepted.</li>
          <li>College ID card is mandatory.</li>
          <li>No refunds once registered.</li>
          <li>Judges’ decision is final.</li>
        </ul>
      </div>

      <!-- Coordinators -->
      <div class="event-coordinator-card">
        <h3>EVENT COORDINATORS</h3>
        <p>Rose Maria – <a href="tel:+917306350738">7306350738</a></p>
        <p>Libin Joseph – <a href="tel:+919645279958">9645279958</a></p>
      </div>

    </div>
  </div>

<audio id="bgMusic" loop>
  <source src="asset/bg-music/Enigma - Sadeness(zyreel).mp3" type="audio/mpeg">
</audio>

<button id="musicBtn" class="music-btn" onclick="toggleMusic()">
  ▶
</button>

</section>

<!-- MUSIC PLAYER -->
<script>
const music = document.getElementById("bgMusic");
const btn = document.getElementById("musicBtn");

// Autoplay when page opens
window.addEventListener("load", () => {
  const playPromise = music.play();

  if (playPromise !== undefined) {
    playPromise
      .then(() => {
        btn.innerHTML = "❚❚"; // Show pause icon if autoplay works
      })
      .catch(() => {
        btn.innerHTML = "▶"; // Browser blocked autoplay
        console.log("Autoplay blocked");
      });
  }
});

function toggleMusic() {
  if (music.paused) {
    music.play();
    btn.innerHTML = "❚❚";
  } else {
    music.pause();
    btn.innerHTML = "▶";
  }
}
</script>


<script>

</script>


    <!-- FOOTER SECTION  -->
    <?php include 'includes/footer.php' ?>
    <!-- Javascript  -->
    <script src="js/javaS.js" ></script>
</body>
</html>