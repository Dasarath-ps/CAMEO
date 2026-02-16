<<<<<<< HEAD
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

  <!-- EVENT SECTION -->
  <section class="event-section">

    <div class="event-container">

      <!-- Poster -->
      <div class="event-poster">
        <img src="asset/img/codexsparkx.png" alt="Event Poster">
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
          <button class="cyber-btn" id="registerBtn" onclick="handleRegisterClick('codexsparkx')">
            Register Now
          </button>

          <button class="cyber-btn cyber-btn-secondary share-icon" onclick="shareCodeSparkX()">
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
          data-text="CODEX SPARK X">
          CODEX SPARK X
        </h1>

        <p class="event-tagline">
          Showcase your problem-solving and coding skills in a competitive programming challenge.
        </p>

        <!-- Info Grid -->
        <div class="event-grid">

        <div class="event-info-card">
          <span>💰Price pool</span>
          <p>₹8,000</p>
        </div>

          <div class="event-info-card">
            <span>👥 Team Size</span>
            <p>2 Members per Team</p>
          </div>

          <div class="event-info-card">
            <span>💻 Languages</span>
            <p>C, C++, Python</p>
          </div>


          <div class="event-info-card">
            <span>💰 Fee</span>
            <p>₹100 per Head</p>
          </div>

          <div class="event-info-card">
            <span>📅 Reporting Time</span>
            <p>Before 9:30 AM</p>
          </div>

          <div class="event-info-card">
            <span>📆 Date</span>
            <p>20th February 2026</p>
          </div>

        </div>

        <!-- Rules -->
        <div class="event-rules-card">
          <h3>RULES & REGULATIONS</h3>
          <ul>
            <li>Student from nirmala college can not participate.</li>
            <li>Each team must consist of <strong>2 members</strong>.</li>
            <li>Each participant can join <strong>only one team</strong>.</li>
            <li>Participants must report before <strong>9:30 AM</strong>.</li>
            <li><strong>No refund</strong> after registration.</li>
            <li>Discussion between participants is <strong>strictly prohibited</strong>.</li>
            <li><strong>No phone, internet, or outside help</strong> allowed.</li>
            <li>Judges' decision will be <strong>final</strong>.</li>
            <li><strong>College ID card is mandatory</strong>.</li>
          </ul>
        </div>

        <!-- Coordinators -->
        <div class="event-coordinator-card">
          <h3>EVENT COORDINATORS</h3>
          <p>Student Coordinator – Dhasarath P S
            (<a href="tel:+919946937663">99469 37663</a>)</p>

          <p>Faculty Coordinator – Biju Peter</p>
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

=======
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

  <!-- EVENT SECTION -->
  <section class="event-section">

    <div class="event-container">

      <!-- Poster -->
      <div class="event-poster">
        <img src="asset/img/codexsparkx.png" alt="Event Poster">
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
          <button class="cyber-btn" id="registerBtn" onclick="handleRegisterClick('codexsparkx')">
            Register Now
          </button>

          <button class="cyber-btn cyber-btn-secondary share-icon" onclick="shareCodeSparkX()">
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
          data-text="CODEX SPARK X">
          CODEX SPARK X
        </h1>

        <p class="event-tagline">
          Showcase your problem-solving and coding skills in a competitive programming challenge.
        </p>

        <!-- Info Grid -->
        <div class="event-grid">

        <div class="event-info-card">
          <span>💰Price pool</span>
          <p>₹8,000</p>
        </div>

          <div class="event-info-card">
            <span>👥 Team Size</span>
            <p>2 Members per Team</p>
          </div>

          <div class="event-info-card">
            <span>💻 Languages</span>
            <p>C, C++, Python</p>
          </div>


          <div class="event-info-card">
            <span>💰 Fee</span>
            <p>₹100 per Head</p>
          </div>

          <div class="event-info-card">
            <span>📅 Reporting Time</span>
            <p>Before 9:30 AM</p>
          </div>

          <div class="event-info-card">
            <span>📆 Date</span>
            <p>20th February 2026</p>
          </div>

        </div>

        <!-- Rules -->
        <div class="event-rules-card">
          <h3>RULES & REGULATIONS</h3>
          <ul>
            <li>Student from nirmala college can not participate.</li>
            <li>Each team must consist of <strong>2 members</strong>.</li>
            <li>Each participant can join <strong>only one team</strong>.</li>
            <li>Participants must report before <strong>9:30 AM</strong>.</li>
            <li><strong>No refund</strong> after registration.</li>
            <li>Discussion between participants is <strong>strictly prohibited</strong>.</li>
            <li><strong>No phone, internet, or outside help</strong> allowed.</li>
            <li>Judges' decision will be <strong>final</strong>.</li>
            <li><strong>College ID card is mandatory</strong>.</li>
          </ul>
        </div>

        <!-- Coordinators -->
        <div class="event-coordinator-card">
          <h3>EVENT COORDINATORS</h3>
          <p>Student Coordinator – Dhasarath P S
            (<a href="tel:+919946937663">99469 37663</a>)</p>

          <p>Faculty Coordinator – Biju Peter</p>
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

>>>>>>> 9cbf00501787b6805e108586ce3cf4674d688d9f
</html>