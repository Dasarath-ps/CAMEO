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

  <!-- PIXORA SECTION -->
  <section class="event-section">

    <div class="event-container">

      <!-- Poster -->
      <div class="event-poster">
        <img src="asset/img/pixora.png" alt="PiXora Poster">

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
          <button class="cyber-btn" id="registerBtn" onclick="handleRegisterClick('pixora')">
            Register Now
          </button>

          <button class="cyber-btn cyber-btn-secondary share-icon" onclick="sharePixora()">
            <span class="material-symbols-outlined">
              share
            </span>
          </button>
        </div>
      </div>

      <!-- Content -->
      <div class="event-content">

        <!-- Glitch Heading -->
        <h1 style="font-size:48px; margin-bottom:20px;"
          class="glitch"
          data-text="PIXORA">
          PIXORA
        </h1>

        <!-- Tagline -->
        <p class="event-tagline">
          Capture creativity through your lens.
          Showcase your perspective, storytelling, and visual artistry.
        </p>

        <!-- Info Grid -->
        <div class="event-grid">

        <div class="event-info-card">
          <span>💰Price pool</span>
          <p>₹3,000</p>
        </div>

          <div class="event-info-card">
            <span>📸 Category</span>
            <p>Smartphone Photography</p>
          </div>

          <div class="event-info-card">
            <span>🖼 Entries</span>
            <p>Max 1 per Participant</p>
          </div>

          <div class="event-info-card">
            <span>🎯 Theme</span>
            <p>Given on Event Day</p>
          </div>

          <div class="event-info-card">
            <span>📂 Format</span>
            <p>JPEG / PNG / HEIF</p>
          </div>

        </div>

        <!-- Rules / Guidelines -->
        <div class="event-rules-card">
          <h3>RULES & GUIDELINES</h3>
          <ul>
            <li>Registration open to <strong>all participants</strong>.</li>
            <li>Each participant may submit <strong>only one entry</strong>.</li>
            <li>Photos must be taken using a <strong>smartphone</strong>.</li>
            <li>Photos must strictly follow the <strong>given theme</strong>.</li>
            <li>Images must be <strong>original and clicked by the participant</strong>.</li>
            <li>Copied images → <strong>immediate disqualification</strong>.</li>
            <li><strong>AI-generated images & editing</strong> are prohibited.</li>
            <li>No <strong>watermarks, logos, or overlays</strong> allowed.</li>
            <li>Accepted formats: <strong>JPEG / PNG / HEIF</strong>.</li>
            <li>File name must include <strong>participant & college name</strong>.</li>
            <li>Entries must be submitted within the <strong>time limit</strong>.</li>
            <li><strong>Late submissions will not be accepted</strong>.</li>
            <li>Judges’ decision will be <strong>final</strong>.</li>
          </ul>
        </div>

        <!-- Coordinators -->
        <div class="event-coordinator-card">
          <h3>EVENT COORDINATORS</h3>
          <p>Student Coordinator – <em>To Be Announced</em></p>
          <p>Faculty Coordinator – <em>To Be Announced</em></p>
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




  <!-- FOOTER SECTION  -->
  <?php include 'includes/footer.php' ?>
  <!-- Javascript  -->
  <script src="js/javaS.js"></script>
</body>

</html>