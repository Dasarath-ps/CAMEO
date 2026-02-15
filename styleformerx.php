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

  <!-- STYLEFORMERX SECTION -->
  <section class="event-section event-cyan">

    <div class="event-container">

      <!-- Poster -->
      <div class="event-poster">
        <img src="asset/img/styleformex.png" alt="StyleformerX Poster">

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
            <li>
              <input type="checkbox" id="agreeCheck">
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
          <button class="cyber-btn" id="registerBtn" onclick="handleRegisterClick('styleformerx')">
            Register Now
          </button>

          <button class="cyber-btn cyber-btn-secondary share-icon" onclick="shareStyleFormerX()">
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
          data-text="STYLE FORMER X">
          STYLE FORMER X
        </h1>

        <p class="event-tagline">
          Design. Style. Precision.
          Craft stunning layouts and bring creativity to life through pure CSS.
        </p>

        <!-- Info Grid -->
        <div class="event-grid">

        <div class="event-info-card">
          <span>💰Price pool</span>
          <p>₹5,000</p>
        </div>

          <div class="event-info-card">
            <span>👤 Participation</span>
            <p>Individual / Team of 2</p>
          </div>

          <div class="event-info-card">
            <span>💻 Platform</span>
            <p>Systems Provided</p>
          </div>

          <div class="event-info-card">
            <span>🧩 Round</span>
            <p>HTML & CSS (Preliminary)</p>
          </div>

          <div class="event-info-card">
            <span>🤖 Restrictions</span>
            <p>No AI / Templates</p>
          </div>

        </div>

        <!-- Rules -->
        <div class="event-rules-card">
          <h3>EVENT GUIDELINES</h3>
          <ul>
            <li>Individual and <strong>two-member team</strong> participation allowed.</li>
            <li>Systems will be provided by organizers. Personal laptops <strong>not allowed</strong>.</li>
            <li>Valid <strong>college ID card is mandatory</strong>.</li>
            <li><strong>No refunds</strong> once registered.</li>
            <li>A preliminary round based on <strong>HTML & CSS</strong> may be conducted.</li>
            <li>Participants must maintain <strong>proper discipline</strong>.</li>
            <li>Any misconduct, cheating, or disruption → <strong>immediate disqualification</strong>.</li>
            <li>Use of <strong>AI tools, external packages, or templates is prohibited</strong>.</li>
            <li>Judging panel decisions are <strong>final and binding</strong>.</li>
            <li>Event begins strictly on time. <strong>No extra time granted</strong>.</li>
            <li>Organizers are not responsible for overlaps with other events.</li>
          </ul>
        </div>

        <!-- Coordinators -->
        <div class="event-coordinator-card">
          <h3>EVENT COORDINATORS</h3>
          <p>Vishnu PG – <a href="tel:+919020857997">9020857997</a></p>
          <p>Tony K Anil – <a href="tel:+918848203175">88482 03175</a></p>
        </div>

      </div>

    </div>
<audio id="bgMusic" loop>
  <source src="asset/bg-music/FLY - MARSHMELLO _ RINGTONE DOWNLOAD_ Download From Description(MP3_160K).mp3" type="audio/mpeg">
</audio>

<button id="musicBtn" class="music-btn" onclick="toggleMusic()">
  ▶
</button>
  </section>


  <!--MUSIC PLAYER-->
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

  <!-- FOOTER SECTION  -->
  <?php include 'includes/footer.php' ?>
  <!-- Javascript  -->
  <script src="js/javaS.js"></script>
</body>

</html>