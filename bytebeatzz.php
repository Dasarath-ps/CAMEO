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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=share" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="antialiased selection:bg-cyan-500 selection:text-black">
    <!-- HEADER SECTION  -->
    <?php include 'includes/header.php' ?>

    <!-- BYTE BEATZZ SECTION -->
<section class="event-section">

  <div class="event-container">

    <!-- Poster -->
    <div class="event-poster">
      <img src="asset/img/byte.png" alt="BYTE BEATZZ Poster">

    <!-- PAYMENT INSTRUCTIONS -->
  <div class="payment-card" style="margin-top:20px;">
    <h3>PAYMENT PROCESS</h3>
    <ul>
      <li>Complete the registration fee payment via <strong>UPI / QR Code</strong>.</li>
      <li>Take a <strong>screenshot</strong> of the successful payment.</li>
      <li>Note your <strong>Transaction ID</strong>.</li>
      <li>Click <strong>Register Now</strong> below.</li>
      <li>Upload the screenshot & enter Transaction ID in the form.</li>
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
<button class="cyber-btn" id="registerBtn" onclick="handleRegisterClick('bytebeatzz')">
  Register Now
</button>

        <button class="cyber-btn cyber-btn-secondary share-icon" onclick="sharebytebeatzz()">
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
          data-text="BYTE BEATZZ">
          BYTE BEATZZ
      </h1>

      <!-- Tagline -->
      <p class="event-tagline">
        Feel the rhythm. Own the stage.  
        Express your energy, creativity, and presence in an electrifying spot choreo battle.
      </p>

      <!-- Info Grid -->
      <div class="event-grid">

      <div class="event-info-card">
          <span>💰Price pool</span>
          <p>₹5,000</p>
      </div>

        <div class="event-info-card">
          <span>👤 Participation</span>
          <p>Single Participant</p>
        </div>

        <div class="event-info-card">
          <span>🎯 Rounds</span>
          <p>3 Rounds</p>
        </div>

        <div class="event-info-card">
          <span>💰 Fee</span>
          <p>₹100</p>
        </div>

        <div class="event-info-card">
          <span>🎵 Music</span>
          <p>Provided by Organizers</p>
        </div>

      </div>

      <!-- Rules -->
      <div class="event-rules-card">
        <h3>RULES & REGULATIONS</h3>
        <ul>
          <li>Single participant event.</li>
          <li>Competition consists of <strong>3 rounds</strong>.</li>
          <li>Registration fee: <strong>₹100</strong>.</li>
          <li>Songs will be provided by the organizers.</li>
          <li><strong>Personal props are not allowed</strong>.</li>
          <li>Participants must carry valid <strong>college ID card</strong>.</li>
          <li>Judging based on <strong>expression, creativity & stage presence</strong>.</li>
          <li>Costumes must be <strong>neat, decent & comfortable</strong>.</li>
          <li>Judges’ decision will be <strong>final and binding</strong>.</li>
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
  <source src="asset/bg-music/Pirates Of The Caribbean Theme Song(MP3_160K).mp3" type="audio/mpeg">
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
    btn.innerHTML = "❚❚";  // Pause icon
  } else {
    music.pause();
    btn.innerHTML = "▶";   // Play icon
  }
}
</script>


    <!-- FOOTER SECTION  -->
    <?php include 'includes/footer.php' ?>
    <!-- Javascript  -->
    <script src="js/javaS.js" ></script>
</body>
</html>