<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMEO 2026 | Cyber Clash</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Rajdhani:wght@300;400;500;600;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <style>
      .hidden-section {
        display: none;
      }
      
      .popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 9999;
      }
      
      .popup.show {
        display: flex;
      }
      
      .popup-box {
        background: #1a1a2e;
        padding: 30px;
        border-radius: 10px;
        border: 2px solid #00ff41;
        text-align: center;
        animation: popIn 0.3s ease;
      }

      @keyframes popIn {
        from {
          transform: scale(0.8);
          opacity: 0;
        }
        to {
          transform: scale(1);
          opacity: 1;
        }
      }
      
      .popup-box p {
        color: #fff;
        font-size: 18px;
        margin-bottom: 20px;
      }
      
      .popup-box button {
        background: #00ff41;
        color: #000;
        padding: 10px 30px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
      }
      
      .popup-box button:hover {
        background: #00cc33;
      }
    </style>
</head>

<body class="antialiased selection:bg-cyan-500 selection:text-black">

<!-- HEADER -->
<?php 
$returnLink = './#events';
include 'includes/header.php'; 
?>

<!-- MAIN HEADER -->
<section class="event-sectionn">
  <div class="event-content" style="text-align:center; width:100%;">
    
    <h1 style="font-size:64px; margin-bottom:20px;"
        class="glitch"
        data-text="CYBER CLASH">
        CYBER CLASH
    </h1>

    <p class="event-tagline">
      Enter the Ultimate Digital Battlefield
    </p>

    <div style="margin-top:30px; display:flex; gap:15px; justify-content:center; flex-wrap:wrap;">
      <button class="cyber-btn" onclick="switchGame('pubg')">PUBG</button>
      <button class="cyber-btn" onclick="switchGame('efootball')">E-Football</button>
      <button class="cyber-btn" onclick="switchGame('minimilitia')">Mini-Militia</button>
    </div>
  </div>
</section>

<!-- PUBG SECTION -->
<section class="event-sectionn hidden-section" id="pubg-section">
  <div class="event-container">

    <div class="event-poster">
      <img src="asset/img/bgmi.png" alt="PUBG Poster">

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
            <input type="checkbox" id="agree-pubg" class="agreement-checkbox">
            <span>I agree to the payment & registration rules</span>
          </li>
        </ul>
      </div>

      <div class="event-poster-buttons">
        <button class="cyber-btn" data-game="bgmi" data-section="pubg" onclick="registerNow(this)">
          Register Now
        </button>

        <button class="cyber-btn cyber-btn-secondary share-icon" onclick="shareGame('PUBG')">
          <span class="material-symbols-outlined">share</span>
        </button>
      </div>
    </div>

    <div class="event-content">
      <h1 style="font-size:48px; margin-bottom:20px;"
          class="glitch"
          data-text="PUBG">
          PUBG
      </h1>

      <p class="event-tagline">
        Tactical combat. Fast reflexes. Pure survival.
      </p>

      <div class="event-rules-card">
        <h3>RULES & REGULATIONS</h3>
        <ul>
          <li>Mode: <strong>TDM (2 VS 2)</strong></li>
          <li>Registration Fee: <strong>₹100 per team</strong></li>
          <li>Tournament starts at <strong>11:00 AM</strong></li>
          <li>Valid College ID Card is mandatory</li>
          <li>Allowed: M416, SCAR-L, Grenades, Level 3 Vest</li>
          <li>Not Allowed: Pistols, Suicide, Slides</li>
          <li>Misconduct → Immediate Disqualification</li>
          <li>Rule violation → Direct Disqualification</li>
          <li>Players must use their own internet</li>
          <li>Organizer's decision is final</li>
        </ul>
      </div>
    </div>

  </div>
</section>

<!-- EFOOTBALL SECTION -->
<section class="event-sectionn hidden-section" id="efootball-section">
  <div class="event-container">

    <div class="event-poster">
      <img src="asset/img/pes.png" alt="E-Football Poster">

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
            <input type="checkbox" id="agree-efootball" class="agreement-checkbox">
            <span>I agree to the payment & registration rules</span>
          </li>
        </ul>
      </div>

      <div class="event-poster-buttons">
        <button class="cyber-btn" data-game="efootball" data-section="efootball" onclick="registerNow(this)">
          Register Now
        </button>

        <button class="cyber-btn cyber-btn-secondary share-icon" onclick="shareGame('E-Football')">
          <span class="material-symbols-outlined">share</span>
        </button>
      </div>
    </div>

    <div class="event-content">
      <h1 style="font-size:48px; margin-bottom:20px;"
          class="glitch"
          data-text="E-FOOTBALL">
          E-FOOTBALL
      </h1>

      <p class="event-tagline">
        Precision. Strategy. Championship mindset.
      </p>

      <div class="event-rules-card">
        <h3>RULES & REGULATIONS</h3>
        <ul>
          <li>Registration Fee: <strong>₹50 per head</strong></li>
          <li>Event begins at <strong>11:00 AM</strong></li>
          <li>Match Duration: <strong>8 minutes</strong></li>
          <li>Match Conditions: Random</li>
          <li>Format: Knockout</li>
          <li>Dream Team allowed</li>
          <li>Smart Assist must be OFF</li>
          <li>Stable internet required</li>
          <li>Misconduct → Disqualification</li>
          <li>Event head decision is final</li>
        </ul>
      </div>
    </div>

  </div>
</section>

<!-- MINI MILITIA SECTION -->
<section class="event-sectionn hidden-section" id="minimilitia-section">
  <div class="event-container">

    <div class="event-poster">
      <img src="asset/img/min.png" alt="Mini-Militia Poster">

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
            <input type="checkbox" id="agree-minimilitia" class="agreement-checkbox">
            <span>I agree to the payment & registration rules</span>
          </li>
        </ul>
      </div>

      <div class="event-poster-buttons">
        <button class="cyber-btn" data-game="minimilitia" data-section="minimilitia" onclick="registerNow(this)">
          Register Now
        </button>

        <button class="cyber-btn cyber-btn-secondary share-icon" onclick="shareGame('Mini-Militia')">
          <span class="material-symbols-outlined">share</span>
        </button>
      </div>
    </div>

    <div class="event-content">
      <h1 style="font-size:48px; margin-bottom:20px;"
          class="glitch"
          data-text="MINI-MILITIA">
          MINI-MILITIA
      </h1>

      <p class="event-tagline">
        Chaos. Explosions. Ultimate kill race.
      </p>

      <div class="event-rules-card">
        <h3>RULES & REGULATIONS</h3>
        <ul>
          <li>Team Size: <strong>3 Members</strong></li>
          <li>3 Teams per match</li>
          <li>3 Matches per team</li>
          <li>Winner → Most Kills</li>
          <li>Fee: <strong>₹50 per head</strong></li>
          <li>Valid College ID mandatory</li>
          <li>No cheating / mod APK</li>
          <li>Provided APK must be used</li>
        </ul>
      </div>
    </div>

  </div>
</section>

<!-- AGREEMENT POPUP -->
<div class="popup" id="agreementPopup">
  <div class="popup-box">
    <p>⚠ Please agree to continue</p>
    <button onclick="hidePopup()">OK</button>
  </div>
</div>

<!-- MUSIC PLAYER -->
<audio id="bgMusic" loop></audio>
<button id="musicBtn" class="music-btn" onclick="toggleMusic()">❚❚</button>

<!-- FOOTER -->
<?php include 'includes/footer.php'; ?>

<!-- JAVASCRIPT -->
<script>
// Page initialization
document.addEventListener('DOMContentLoaded', function() {
    console.log('Page loaded');
    switchGame('pubg');
    initMusic();
});

// Switch between game sections
function switchGame(gameId) {
    console.log('Switching to:', gameId);
    
    var sections = document.querySelectorAll('.event-sectionn.hidden-section');
    
    // Hide all sections
    for (var i = 0; i < sections.length; i++) {
        sections[i].style.display = 'none';
    }
    
    // Show selected section
    var targetSection = document.getElementById(gameId + '-section');
    if (targetSection) {
        targetSection.style.display = 'block';
        targetSection.scrollIntoView({ behavior: 'smooth' });
    } else {
        console.error('Section not found:', gameId);
    }
}

// Registration handler
function registerNow(button) {
    var game = button.getAttribute('data-game');
    var section = button.getAttribute('data-section');
    
    console.log('Register clicked:', game, section);
    
    var checkbox = document.getElementById('agree-' + section);
    
    if (!checkbox) {
        console.error('Checkbox not found for:', section);
        alert('Error: Please refresh the page');
        return;
    }
    
    console.log('Checkbox checked:', checkbox.checked);
    
    if (!checkbox.checked) {
        showPopup();
        return;
    }
    
    // Redirect to payment page
    var url = 'payment-pages/' + game + '-payment.php';
    console.log('Redirecting to:', url);
    
    window.location.href = url;
}

// Popup functions
function showPopup() {
    var popup = document.getElementById('agreementPopup');
    if (popup) {
        popup.classList.add('show');
    }
}

function hidePopup() {
    var popup = document.getElementById('agreementPopup');
    if (popup) {
        popup.classList.remove('show');
    }
}

// Share function
function shareGame(gameName) {
    var shareData = {
        title: gameName + ' - Cyber Clash 2026',
        text: 'Join the ' + gameName + ' tournament at CAMEO 2026!',
        url: window.location.href
    };
    
    if (navigator.share) {
        navigator.share(shareData).catch(function(err) {
            console.log('Share cancelled');
        });
    } else {
        if (navigator.clipboard) {
            navigator.clipboard.writeText(window.location.href).then(function() {
                alert('Link copied to clipboard!');
            }).catch(function() {
                prompt('Copy this link:', window.location.href);
            });
        } else {
            prompt('Copy this link:', window.location.href);
        }
    }
}

// Music player
function initMusic() {
    var music = document.getElementById('bgMusic');
    var btn = document.getElementById('musicBtn');
    
    if (!music || !btn) {
        console.log('Music elements not found');
        return;
    }
    
    var tracks = [
        'asset/bg-music/PUBG_MOBILE_OFFICIAL_TRACK_(mp3.pm).mp3',
        'asset/bg-music/Doodle Army 2 .mp3',
        'asset/bg-music/People Watching - Sam Fender.mp3'
    ];
    
    var randomIndex = Math.floor(Math.random() * tracks.length);
    music.src = tracks[randomIndex];
    
    // Try autoplay
    music.play().catch(function() {
        btn.innerHTML = '▶';
    });
    
    // Play on first interaction
    document.addEventListener('click', function() {
        if (music.paused) {
            music.play();
            btn.innerHTML = '❚❚';
        }
    }, { once: true });
}

function toggleMusic() {
    var music = document.getElementById('bgMusic');
    var btn = document.getElementById('musicBtn');
    
    if (!music || !btn) return;
    
    if (music.paused) {
        music.play();
        btn.innerHTML = '❚❚';
    } else {
        music.pause();
        btn.innerHTML = '▶';
    }
}
</script>

<script src="js/javaScript.js"></script>

</body>
</html>
