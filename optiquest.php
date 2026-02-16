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

  <!-- OPTI QUEST SECTION -->
  <section class="event-section">

    <div class="event-container">

      <!-- Poster -->
      <div class="event-poster">
        <img src="asset/img/optiquest.png" alt="Opti Quest Poster">

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
                          <label for="collegeType" style="color:white;">Select College</label>
<br><br>

<select id="collegeType">
  <option value="">Select College</option>
  <option value="nirmala">Nirmala College</option>
  <option value="other">Other College</option>
</select>
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
          <button class="cyber-btn" id="registerBtn" onclick="handleRegisterClick('optiquest')">
            Register Now
          </button>

          <button class="cyber-btn cyber-btn-secondary share-icon" onclick="shareOptiQuest()">
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
          data-text="OPTI QUEST">
          OPTI QUEST
        </h1>

        <p class="event-tagline">
          Decode the clues. Race against time. Outsmart the challenge.
        </p>

        <!-- Info Grid -->
        <div class="event-grid">

        <div class="event-info-card">
          <span>💰Price pool</span>
          <p>₹10,000</p>
        </div>

          <div class="event-info-card">
            <span>👥 Team Size</span>
            <p>4 Members (Same College)</p>
          </div>

          <div class="event-info-card">
            <span>⏰ Reporting Time</span>
            <p>Before 9:30 AM</p>
          </div>

          <div class="event-info-card">
            <span>🚀 Start Time</span>
            <p>10:30 AM</p>
          </div>

          <div class="event-info-card">
            <span>🪪 ID Card</span>
            <p>Mandatory</p>
          </div>

          <div class="event-info-card">
            <span>💰 Fee</span>
            <p>₹400 per Team</p>
          </div>

          <div class="event-info-card">
            <span>🏫 Eligibility</span>
            <p>External Colleges Only</p>
          </div>

        </div>

        <!-- Rules -->
        <div class="event-rules-card">
          <h3>RULES & REGULATIONS</h3>
          <ul>
            <li>Student from nirmala college can not participate.</li>
            <li>Each team must have <strong>4 members from the same college</strong>.</li>
            <li>Each participant can join <strong>only one team</strong>.</li>
            <li>Carry your <strong>college ID card</strong> during the event.</li>
            <li>Clues must be solved <strong>in order</strong>. No skipping allowed.</li>
            <li>The event starts <strong>on time</strong>, regardless of other schedules.</li>
            <li>Participants must report <strong>before 9:30 AM</strong>. Late arrivals will be disqualified.</li>
            <li><strong>No phones, internet, or outside help</strong> allowed.</li>
            <li>Results published by the judging panel will be <strong>final</strong>.</li>
            <li><strong>No refunds</strong> after registration.</li>
          </ul>
        </div>

        <!-- Coordinators -->
        <div class="event-coordinator-card">
          <h3>EVENT COORDINATORS</h3>

          <p>Faculty Coordinator –
            <a href="tel:+918547412406">Asha Joseph (8547412406)</a>
          </p>

          <p>Student Coordinators –</p>
          <p>
            <a href="tel:+918891829079">Anu Balachandran (8891829079)</a><br>
            <a href="tel:+918590878440">Ashna Thomas (8590878440)</a>
          </p>
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