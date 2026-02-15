<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CAMEO 2026 | Nirmala College MCA </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Rajdhani:wght@300;400;500;600;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="antialiased selection:bg-cyan-500 selection:text-black">

  <?php include 'includes/header.php' ?>

  <section class="event-section">
    <div class="event-container">

      <!-- Poster -->
      <div class="event-poster">
        <img src="asset/img/evolvex.png" alt="EvolveX Hackathon Poster">

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

        <!-- TEAM SIZE SELECTION -->
        <div class="payment-card" style="margin-top:20px;">
          <h3>TEAM SIZE</h3>
          <ul>
            <li><input type="radio" name="teamSize" id="member2" value="2"> <span>2 Members</span></li>
            <li><input type="radio" name="teamSize" id="member3" value="3"> <span>3 Members</span></li>
            <li><input type="radio" name="teamSize" id="member4" value="4"> <span>4 Members</span></li>
          </ul>
        </div>

        <!-- Validation Popup -->
        <div id="agreePopup" class="popup hidden">
          <div class="popup-box">
            <p id="popupMessage">⚠ Please agree to continue</p>
            <button onclick="closePopup()">OK</button>
          </div>
        </div>

        <!-- Buttons BELOW Poster -->
        <div class="event-poster-buttons">
          <button class="cyber-btn" id="registerBtn" onclick="handleRegisterClick('evolvex')">
            Register Now
          </button>
          <button class="cyber-btn cyber-btn-secondary share-icon" onclick="shareEvent()">
            <span class="material-symbols-outlined">share</span>
          </button>
        </div>
      </div>

      <!-- Content -->
      <div class="event-content">
        <h1 style="font-size:48px; margin-bottom:20px;" class="glitch" data-text="EVOLVEX">EVOLVEX</h1>
        <p class="event-tagline">6 Hours. Endless Innovation. Build, brainstorm, and transform ideas into impactful solutions.</p>

        <!-- Info Grid -->
        <div class="event-grid">
          <div class="event-info-card"><span>💰Price pool</span><p>₹10,000</p></div>
          <div class="event-info-card"><span>⏳ Duration</span><p>6-Hour Continuous Event</p></div>
          <div class="event-info-card"><span>👥 Team Size</span><p>2 – 4 Members</p></div>
          <div class="event-info-card"><span>💻 Requirements</span><p>Bring Your Own Laptop</p></div>
          <div class="event-info-card"><span>🪪 ID Card</span><p>Mandatory for Registration</p></div>
        </div>

        <!-- Rules -->
        <div class="event-rules-card">
          <h3>RULES & REGULATIONS</h3>
          <ul>
            <li>All participants must adhere to <strong>Cameo 2026 general rules</strong>.</li>
            <li>The hackathon is a <strong>6-hour continuous event</strong>.</li>
            <li>Each team must consist of <strong>2 – 4 members</strong>.</li>
            <li><strong>On-the-spot registration is strictly prohibited</strong>.</li>
            <li>Valid <strong>college-issued ID card is mandatory</strong>.</li>
            <li>Project proposals evaluated by the <strong>Evaluation Committee</strong>.</li>
            <li>Only <strong>highest-rated proposals</strong> shortlisted.</li>
            <li>Mandatory <strong>progress reviews</strong> during event.</li>
            <li>Participants must present progress when instructed.</li>
            <li><strong>Final presentation is compulsory</strong>.</li>
            <li>Judges’ decisions are <strong>final and binding</strong>.</li>
            <li>Participants must bring laptops, chargers & tools.</li>
            <li>Organizers are <strong>not responsible for loss/damage</strong>.</li>
            <li>Personal mentors <strong>not allowed inside venue</strong>.</li>
            <li>No refunds once registered.</li>
          </ul>
        </div>

        <!-- Coordinators -->
        <div class="event-coordinator-card">
          <h3>EVENT COORDINATORS</h3>
          <p>Faculty Coordinator –</p>
          <p>Student Coordinators –</p>
        </div>
      </div>
    </div>

    <audio id="bgMusic" loop>
      <source src="asset/bg-music/rootKali.mp3" type="audio/mpeg">
    </audio>
    <button id="musicBtn" class="music-btn" onclick="toggleMusic()">▶</button>
  </section>

  <!-- JavaScript -->
  <script>
  function handleRegisterClick(eventName) {
    const agreeCheck = document.getElementById("agreeCheck");
    const teamSize = document.querySelector('input[name="teamSize"]:checked');
    const popup = document.getElementById("agreePopup");
    const popupMessage = document.getElementById("popupMessage");

    if (!agreeCheck.checked) {
      popupMessage.textContent = "⚠ Please agree to the payment & registration rules";
      popup.classList.remove("hidden");
      return;
    }
    if (!teamSize) {
      popupMessage.textContent = "⚠ Please select a team size (2, 3, or 4 members)";
      popup.classList.remove("hidden");
      return;
    }

    // Redirect immediately based on team size
    if (teamSize.value === "2") {
      window.location.href = "payment-pages/evolvex2-payment.php"; // Replace with your URL
    } else if (teamSize.value === "3") {
      window.location.href = "payment-pages/evolvex1-payment.php"; // Replace with your URL
    } else if (teamSize.value === "4") {
      window.location.href = "payment-pages/evolvex-payment.php"; // Replace with your URL
    }
  }

  function closePopup() {
    document.getElementById("agreePopup").classList.add("hidden");
  }

  const music = document.getElementById("bgMusic");
  const btn = document.getElementById("musicBtn");

  window.addEventListener("load", () => {
    const playPromise = music.play();
    if (playPromise !== undefined) {
      playPromise.then(() => { btn.innerHTML = "❚❚"; })
                 .catch(() => { btn.innerHTML = "▶"; console.log("Autoplay blocked"); });
    }
  });

  function toggleMusic() {
    if (music.paused) { music.play(); btn.innerHTML = "❚❚"; }
    else { music.pause(); btn.innerHTML = "▶"; }
  }
  </script>

  <script src="js/javaS.js"></script>

  <?php include 'includes/footer.php' ?>