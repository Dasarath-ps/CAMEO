<<<<<<< HEAD
/**
 * CAMEO 2026 SYSTEM CORE
 * Handles: Canvas Animation, Custom Cursor, Scroll Effects, Countdown, Loader, Hacker Text
 */

document.addEventListener("DOMContentLoaded", () => {
  initSystem();
});

function initSystem() {
  initLoader();
  initCanvas();
  initCursor();
  initScrollReveal();
  initCountdown();
  initCounters();
  initMobileMenu();
  initTiltEffect();
}

// --- 1. SYSTEM LOADER (FIXED) ---
function initLoader() {
  const loader = document.getElementById("system-loader");
  const text = document.getElementById("loader-text");

  // Guard: if either element doesn't exist, exit early
  if (!loader || !text) return;

  let progress = 0;
  const interval = setInterval(() => {
    progress += Math.random() * 5;
    if (progress > 100) progress = 100;
    text.innerText = `INITIALIZING CORE... ${Math.floor(progress)}%`;
    if (progress === 100) {
      clearInterval(interval);
      text.innerText = "SYSTEM READY";
      setTimeout(() => {
        loader.style.opacity = "0";
        loader.style.pointerEvents = "none";
        setTimeout(() => {
          loader.remove();
        }, 800);
      }, 500);
    }
  }, 50);
}

// --- 2. CANVAS PARTICLE NETWORK ---
function initCanvas() {
  const canvas = document.getElementById("main-canvas");
  const ctx = canvas.getContext("2d");

  let width, height;
  let particles = [];

  // Responsive config
  const config = {
    particleCount: window.innerWidth < 768 ? 60 : 120,
    connectionDist: 150,
    mouseDist: 200,
    baseSpeed: 0.3,
  };

  let mouse = { x: null, y: null };

  // Resize Handling
  function resize() {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
    initParticles();
  }

  window.addEventListener("resize", resize);
  window.addEventListener("mousemove", (e) => {
    mouse.x = e.x;
    mouse.y = e.y;
  });

  class Particle {
    constructor() {
      this.x = Math.random() * width;
      this.y = Math.random() * height;
      this.vx = (Math.random() - 0.5) * config.baseSpeed;
      this.vy = (Math.random() - 0.5) * config.baseSpeed;
      this.size = Math.random() * 2 + 1;
      this.color =
        Math.random() > 0.5 ? "rgba(0, 243, 255," : "rgba(188, 19, 254,"; // Cyan or Purple
    }

    update() {
      this.x += this.vx;
      this.y += this.vy;

      // Bounce edges
      if (this.x < 0 || this.x > width) this.vx *= -1;
      if (this.y < 0 || this.y > height) this.vy *= -1;

      // Mouse repulsion
      if (mouse.x) {
        let dx = mouse.x - this.x;
        let dy = mouse.y - this.y;
        let dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < config.mouseDist) {
          const force = (config.mouseDist - dist) / config.mouseDist;
          const angle = Math.atan2(dy, dx);
          const moveX = Math.cos(angle) * force * 3;
          const moveY = Math.sin(angle) * force * 3;
          this.x -= moveX;
          this.y -= moveY;
        }
      }
    }

    draw() {
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
      ctx.fillStyle = this.color + "0.8)";
      ctx.fill();
    }
  }

  function initParticles() {
    particles = [];
    for (let i = 0; i < config.particleCount; i++) {
      particles.push(new Particle());
    }
  }

  function animate() {
    ctx.clearRect(0, 0, width, height);

    // Draw particles and connections
    for (let i = 0; i < particles.length; i++) {
      particles[i].update();
      particles[i].draw();

      for (let j = i; j < particles.length; j++) {
        let dx = particles[i].x - particles[j].x;
        let dy = particles[i].y - particles[j].y;
        let distance = Math.sqrt(dx * dx + dy * dy);

        if (distance < config.connectionDist) {
          ctx.beginPath();
          let opacity = 1 - distance / config.connectionDist;
          ctx.strokeStyle = `rgba(100, 100, 150, ${opacity * 0.2})`;
          ctx.lineWidth = 1;
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.stroke();
        }
      }
    }
    requestAnimationFrame(animate);
  }

  resize();
  animate();
}

// --- 3. ADVANCED CURSOR ---
function initCursor() {
  const dot = document.querySelector(".cursor-dot");
  const outline = document.querySelector(".cursor-outline");
  const trail = document.querySelector(".cursor-trail");
  const targets = document.querySelectorAll(".interactive-hover, a, button");

  document.addEventListener("mousemove", (e) => {
    // Instant Dot
    dot.style.left = `${e.clientX}px`;
    dot.style.top = `${e.clientY}px`;

    // Smooth Outline
    outline.animate(
      {
        left: `${e.clientX}px`,
        top: `${e.clientY}px`,
      },
      { duration: 500, fill: "forwards" },
    );

    // Lagging Trail
    trail.animate(
      {
        left: `${e.clientX}px`,
        top: `${e.clientY}px`,
      },
      { duration: 100, fill: "forwards" },
    );
  });

  // Hover States
  targets.forEach((target) => {
    target.addEventListener("mouseenter", () =>
      document.body.classList.add("hovering"),
    );
    target.addEventListener("mouseleave", () =>
      document.body.classList.remove("hovering"),
    );
  });
}

// --- 4. SCROLL REVEAL OBSERVER ---
function initScrollReveal() {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active");
          // Optional: stop observing once revealed
          // observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1 },
  );

  document
    .querySelectorAll(".reveal-element, .reveal-scale")
    .forEach((el) => observer.observe(el));

  // Navbar Background on Scroll
  const navbar = document.getElementById("navbar");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.add(
        "bg-black/80",
        "backdrop-blur-lg",
        "shadow-lg",
        "py-4",
      );
    } else {
      navbar.classList.remove(
        "bg-black/80",
        "backdrop-blur-lg",
        "shadow-lg",
        "py-4",
      );
    }
  });
}

// --- 5. COUNTDOWN TIMER (FIXED) ---
function initCountdown() {
  const daysEl = document.getElementById("days");
  const hoursEl = document.getElementById("hours");
  const minutesEl = document.getElementById("minutes");
  const secondsEl = document.getElementById("seconds");

  // Guard: if any countdown element is missing, exit early
  if (!daysEl || !hoursEl || !minutesEl || !secondsEl) return;

  const targetDate = new Date("February 20, 2026 09:00:00").getTime();

  const timer = setInterval(() => {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance < 0) {
      clearInterval(timer);
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60),
    );
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    daysEl.innerText = days < 10 ? `0${days}` : days;
    hoursEl.innerText = hours < 10 ? `0${hours}` : hours;
    minutesEl.innerText = minutes < 10 ? `0${minutes}` : minutes;
    secondsEl.innerText = seconds < 10 ? `0${seconds}` : seconds;
  }, 1000);
}

// --- 6. NUMBER COUNTER ANIMATION ---
function initCounters() {
  const counters = document.querySelectorAll(".counter");
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          const target = +counter.getAttribute("data-target");
          const duration = 2000;
          const increment = target / (duration / 16);

          let current = 0;
          const updateCounter = () => {
            current += increment;
            if (current < target) {
              counter.innerText = Math.ceil(current);
              requestAnimationFrame(updateCounter);
            } else {
              counter.innerText = target;
            }
          };
          updateCounter();
          observer.unobserve(counter);
        }
      });
    },
    { threshold: 0.5 },
  );

  counters.forEach((c) => observer.observe(c));
}

// --- 7. MOBILE MENU ---
function initMobileMenu() {
  const btn = document.getElementById("mobile-toggle");
  const menu = document.getElementById("mobile-menu");
  const links = document.querySelectorAll(".mobile-link");

  btn.addEventListener("click", () => {
    menu.classList.toggle("translate-x-full");
  });

  links.forEach((link) => {
    link.addEventListener("click", () => {
      menu.classList.add("translate-x-full");
    });
  });
}

// --- 8. 3D TILT EFFECT ---
function initTiltEffect() {
  const cards = document.querySelectorAll(".tilt-card");

  cards.forEach((card) => {
    card.addEventListener("mousemove", (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      const rotateX = ((y - centerY) / centerY) * -10; // Max rotation deg
      const rotateY = ((x - centerX) / centerX) * 10;

      card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    });

    card.addEventListener("mouseleave", () => {
      card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg)`;
    });
  });
}

// --- 9. HACKER TEXT DECODER (Bonus) ---
// Finds elements with .glitch class or specific spans and randomizes text on load
const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
document.querySelectorAll(".glitch").forEach((element) => {
  element.onmouseover = (event) => {
    let iteration = 0;
    const originalText = event.target.dataset.text;

    clearInterval(event.target.interval);

    event.target.interval = setInterval(() => {
      event.target.innerText = originalText
        .split("")
        .map((letter, index) => {
          if (index < iteration) return originalText[index];
          return letters[Math.floor(Math.random() * 26)];
        })
        .join("");

      if (iteration >= originalText.length) {
        clearInterval(event.target.interval);
      }

      iteration += 1 / 3;
    }, 30);
  };
});

function sendMessage() {
  const input = document.getElementById("userInput");
  const text = input.value.toLowerCase().trim();
  if (!text) return;

  addMessage("You", input.value);

  let reply =
    "I’m not sure 🤔 Try asking about events, date, time, prize or registration.";

  if (hasAny(text, ["hi", "hello", "hey"]))
    reply = `

    I can help with:
    • Events
    • Date & Time
    • Prize details
    • Registration
    • Venue

    Try asking something like:
    "When is the fest?"
    "What is the prize money?"
    `;
  else if (hasAny(text, ["event", "competition", "contest", "program"]))
    reply =
      "We have  events:- Hackathon - EvolveX,Tresure Hunt - Opti Quest ,CSS coding - Style FormerX ,Debugging Challenge - CodeSparkX ,Online Games - Cyber Clash ,Reels Competition - Zyreel ,Photography -PiXora and ,Spot choreo-Byte Beatzz ";
  else if (hasAny(text, ["date", "day", "when"]))
    reply = "Events start at **8:00 AM** on **February 20, 2026**.";
  else if (hasAny(text, ["time", "timing", "start", "schedule"]))
    reply = "Events start at **8:00 AM**.";
  else if (hasAny(text, ["prize", "reward", "money", "cash"]))
    reply = "Total Prize: 50,500💰";
  else if (hasAny(text, ["register", "registration", "apply", "join"]))
    reply = "You can register using the link on the homepage.";
  else if (hasAny(text, ["venue", "location", "where", "place"]))
    reply = "Nirmala College, Muvattupuzha | MCA Department";

  setTimeout(() => addMessage("Bot", reply, true), 400);
  input.value = "";
}

function hasAny(text, keywords) {
  return keywords.some((word) => text.includes(word));
}

function typeWriter(element, text, speed = 25) {
  let i = 0;

  function typing() {
    if (i < text.length) {
      element.innerHTML += text.charAt(i);
      i++;
      setTimeout(typing, speed);
    }
  }

  typing();
}

function addMessage(sender, message, isTyping = false) {
  const chat = document.getElementById("chatMessages");

  const msgElement = document.createElement("p");
  msgElement.innerHTML = `<b>${sender}:</b> <span></span>`;
  chat.appendChild(msgElement);

  const span = msgElement.querySelector("span");

  if (isTyping) {
    typeWriter(span, message);
  } else {
    span.innerHTML = message;
  }

  chat.scrollTop = chat.scrollHeight;
}

const chatToggle = document.getElementById("chatToggle");
const chatWindow = document.getElementById("chatWindow");
const closeChat = document.getElementById("closeChat");

chatToggle.onclick = () => {
  chatWindow.classList.toggle("hidden");
};

closeChat.onclick = () => {
  chatWindow.classList.add("hidden");
};

/*GET IN TOUCH*/
const cards = document.querySelectorAll(".tilt-card");
cards.forEach((card) => {
  card.addEventListener("mousemove", (e) => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    const centerX = rect.width / 2;
    const centerY = rect.height / 2;
    const rotateX = ((y - centerY) / centerY) * -10;
    const rotateY = ((x - centerX) / centerX) * 10;
    card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
  });
  card.addEventListener(
    "mouseleave",
    () => (card.style.transform = `rotateX(0deg) rotateY(0deg)`),
  );
});

/* share button */
function shareZyreel() {
  const shareData = {
    title: "ZYREEL – Reel Making Competition",
    text: "One Reel. Unlimited Impact. Join ZYREEL at CAMEO IT Fest 🎬✨",
    url: window.location.href,
  };

  if (navigator.share) {
    navigator
      .share(shareData)
      .catch((err) => console.log("Share cancelled:", err));
  } else {
    navigator.clipboard
      .writeText(shareData.url)
      .then(() => alert("Event link copied to clipboard ✅"))
      .catch(() => prompt("Copy this link:", shareData.url));
  }
}

function shareStyleFormerX() {
  const shareData = {
    title: "StyleFormerX – CSS Design Challenge",
    text: "Design. Style. Precision. Join StyleFormerX at CAMEO IT Fest 🎨✨",
    url: window.location.href,
  };

  if (navigator.share) {
    navigator
      .share(shareData)
      .catch((err) => console.log("Share cancelled:", err));
  } else {
    navigator.clipboard
      .writeText(shareData.url)
      .then(() => alert("Event link copied to clipboard ✅"))
      .catch(() => prompt("Copy this link:", shareData.url));
  }
}

function sharePixora() {
  if (navigator.share) {
    navigator.share({
      title: "PiXora – Photography Event",
      text: "Join PiXora at CAMEO IT Fest 📸",
      url: window.location.href,
    });
  } else {
    alert("Sharing not supported on this browser.");
  }
}

function shareEvent() {
  if (navigator.share) {
    navigator.share({
      title: "EvolveX Hackathon",
      text: "Join the EvolveX Hackathon at Cameo 2026!",
      url: window.location.href,
    });
  } else {
    alert("Sharing not supported on this browser.");
  }
}

function shareBGMI() {
  const shareData = {
    title: "Cyber Clash – BGMI",
    text: "Enter the battleground. Compete in BGMI at Cyber Clash 🎮🔥",
    url: window.location.href,
  };
  handleShare(shareData);
}

function shareEFootball() {
  const shareData = {
    title: "Cyber Clash – E-Football",
    text: "Show your football skills in E-Football at Cyber Clash ⚽🎮",
    url: window.location.href,
  };
  handleShare(shareData);
}

function shareMiniMilitia() {
  const shareData = {
    title: "Cyber Clash – Mini Militia",
    text: "Fast. Tactical. Explosive. Join Mini Militia at Cyber Clash 💣🎮",
    url: window.location.href,
  };
  handleShare(shareData);
}

/* Reusable Share Handler */
function handleShare(data) {
  if (navigator.share) {
    navigator.share(data).catch((err) => console.log("Share cancelled:", err));
  } else {
    navigator.clipboard
      .writeText(data.url)
      .then(() => alert("Event link copied to clipboard ✅"))
      .catch(() => prompt("Copy this link:", data.url));
  }
}

function shareCodeSparkX() {
  const shareData = {
    title: "CodeSpark X – Debugging & Coding Challenge",
    text: "Think fast. Debug smart. Join CodeSpark X at CAMEO IT Fest 💻🔥",
    url: window.location.href,
  };

  if (navigator.share) {
    navigator
      .share(shareData)
      .catch((err) => console.log("Share cancelled:", err));
  } else {
    navigator.clipboard
      .writeText(shareData.url)
      .then(() => alert("Event link copied to clipboard ✅"))
      .catch(() => alert("Copy failed. Please copy manually."));
  }
}

function sharebytebeatzz() {
  if (navigator.share) {
    navigator.share({
      title: "BYTE BEATZZ",
      text: "Join BYTE BEATZZ (Spot-Choreo) at Cameo 2026!",
      url: window.location.href,
    });
  } else {
    alert("Sharing not supported on this browser.");
  }
}

function shareOptiQuest() {
  if (navigator.share) {
    navigator
      .share({
        title: "OPTIQUEST",
        text: "Join OPTIQUEST at Cameo 2026 for an amazing experience!",
        url: window.location.href,
      })
      .then(() => console.log("Successfully shared"))
      .catch((error) => console.error("Error sharing:", error));
  } else {
    alert("Sharing is not supported on this browser.");
  }
}
function handleRegisterClick(eventName) {
  // ❌ NOT allowed for Nirmala students
  const nirmalaNotAllowedEvents = [
    "codexsparkx",
    "styleformerx",
    "pixora",
    "evolvex",
    "cyberclash",
    "optiquest",
  ];

  // ✅ No college selection needed
  const noCollegeRequired = ["zyreel", "bytebeatzz"];

  const agreeCheck = document.getElementById("agreeCheck");

  if (!agreeCheck.checked) {
    document.getElementById("agreePopup").classList.remove("hidden");
    return;
  }

  // ✅ If event doesn't need college → allow directly
  if (noCollegeRequired.includes(eventName)) {
    window.location.href = `payment-pages/${eventName}-payment.php`;
    return;
  }

  const collegeType = document.getElementById("collegeType").value;

  if (!collegeType) {
    alert("Please select your college.");
    return;
  }

  // 🔥 Block Nirmala students from restricted events
  if (
    collegeType === "nirmala" &&
    nirmalaNotAllowedEvents.includes(eventName)
  ) {
    alert(
      "Nirmala College students are not allowed to participate in this event.",
    );
    return;
  }

  // ✅ Otherwise allow
  window.location.href = `payment-pages/${eventName}-payment.php`;
}

function closePopup() {
  document.getElementById("agreePopup").classList.add("hidden");
}

const agreeCheck = document.getElementById("agreeCheck");
const registerBtn = document.getElementById("registerBtn");

agreeCheck.addEventListener("change", function () {
  registerBtn.disabled = !this.checked;
});
=======
/**
 * CAMEO 2026 SYSTEM CORE
 * Handles: Canvas Animation, Custom Cursor, Scroll Effects, Countdown, Loader, Hacker Text
 */

document.addEventListener("DOMContentLoaded", () => {
  initSystem();
});

function initSystem() {
  initLoader();
  initCanvas();
  initCursor();
  initScrollReveal();
  initCountdown();
  initCounters();
  initMobileMenu();
  initTiltEffect();
}

// --- 1. SYSTEM LOADER (FIXED) ---
function initLoader() {
  const loader = document.getElementById("system-loader");
  const text = document.getElementById("loader-text");

  // Guard: if either element doesn't exist, exit early
  if (!loader || !text) return;

  let progress = 0;
  const interval = setInterval(() => {
    progress += Math.random() * 5;
    if (progress > 100) progress = 100;
    text.innerText = `INITIALIZING CORE... ${Math.floor(progress)}%`;
    if (progress === 100) {
      clearInterval(interval);
      text.innerText = "SYSTEM READY";
      setTimeout(() => {
        loader.style.opacity = "0";
        loader.style.pointerEvents = "none";
        setTimeout(() => {
          loader.remove();
        }, 800);
      }, 500);
    }
  }, 50);
}

// --- 2. CANVAS PARTICLE NETWORK ---
function initCanvas() {
  const canvas = document.getElementById("main-canvas");
  const ctx = canvas.getContext("2d");

  let width, height;
  let particles = [];

  // Responsive config
  const config = {
    particleCount: window.innerWidth < 768 ? 60 : 120,
    connectionDist: 150,
    mouseDist: 200,
    baseSpeed: 0.3,
  };

  let mouse = { x: null, y: null };

  // Resize Handling
  function resize() {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
    initParticles();
  }

  window.addEventListener("resize", resize);
  window.addEventListener("mousemove", (e) => {
    mouse.x = e.x;
    mouse.y = e.y;
  });

  class Particle {
    constructor() {
      this.x = Math.random() * width;
      this.y = Math.random() * height;
      this.vx = (Math.random() - 0.5) * config.baseSpeed;
      this.vy = (Math.random() - 0.5) * config.baseSpeed;
      this.size = Math.random() * 2 + 1;
      this.color =
        Math.random() > 0.5 ? "rgba(0, 243, 255," : "rgba(188, 19, 254,"; // Cyan or Purple
    }

    update() {
      this.x += this.vx;
      this.y += this.vy;

      // Bounce edges
      if (this.x < 0 || this.x > width) this.vx *= -1;
      if (this.y < 0 || this.y > height) this.vy *= -1;

      // Mouse repulsion
      if (mouse.x) {
        let dx = mouse.x - this.x;
        let dy = mouse.y - this.y;
        let dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < config.mouseDist) {
          const force = (config.mouseDist - dist) / config.mouseDist;
          const angle = Math.atan2(dy, dx);
          const moveX = Math.cos(angle) * force * 3;
          const moveY = Math.sin(angle) * force * 3;
          this.x -= moveX;
          this.y -= moveY;
        }
      }
    }

    draw() {
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
      ctx.fillStyle = this.color + "0.8)";
      ctx.fill();
    }
  }

  function initParticles() {
    particles = [];
    for (let i = 0; i < config.particleCount; i++) {
      particles.push(new Particle());
    }
  }

  function animate() {
    ctx.clearRect(0, 0, width, height);

    // Draw particles and connections
    for (let i = 0; i < particles.length; i++) {
      particles[i].update();
      particles[i].draw();

      for (let j = i; j < particles.length; j++) {
        let dx = particles[i].x - particles[j].x;
        let dy = particles[i].y - particles[j].y;
        let distance = Math.sqrt(dx * dx + dy * dy);

        if (distance < config.connectionDist) {
          ctx.beginPath();
          let opacity = 1 - distance / config.connectionDist;
          ctx.strokeStyle = `rgba(100, 100, 150, ${opacity * 0.2})`;
          ctx.lineWidth = 1;
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.stroke();
        }
      }
    }
    requestAnimationFrame(animate);
  }

  resize();
  animate();
}

// --- 3. ADVANCED CURSOR ---
function initCursor() {
  const dot = document.querySelector(".cursor-dot");
  const outline = document.querySelector(".cursor-outline");
  const trail = document.querySelector(".cursor-trail");
  const targets = document.querySelectorAll(".interactive-hover, a, button");

  document.addEventListener("mousemove", (e) => {
    // Instant Dot
    dot.style.left = `${e.clientX}px`;
    dot.style.top = `${e.clientY}px`;

    // Smooth Outline
    outline.animate(
      {
        left: `${e.clientX}px`,
        top: `${e.clientY}px`,
      },
      { duration: 500, fill: "forwards" },
    );

    // Lagging Trail
    trail.animate(
      {
        left: `${e.clientX}px`,
        top: `${e.clientY}px`,
      },
      { duration: 100, fill: "forwards" },
    );
  });

  // Hover States
  targets.forEach((target) => {
    target.addEventListener("mouseenter", () =>
      document.body.classList.add("hovering"),
    );
    target.addEventListener("mouseleave", () =>
      document.body.classList.remove("hovering"),
    );
  });
}

// --- 4. SCROLL REVEAL OBSERVER ---
function initScrollReveal() {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active");
          // Optional: stop observing once revealed
          // observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1 },
  );

  document
    .querySelectorAll(".reveal-element, .reveal-scale")
    .forEach((el) => observer.observe(el));

  // Navbar Background on Scroll
  const navbar = document.getElementById("navbar");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.add(
        "bg-black/80",
        "backdrop-blur-lg",
        "shadow-lg",
        "py-4",
      );
    } else {
      navbar.classList.remove(
        "bg-black/80",
        "backdrop-blur-lg",
        "shadow-lg",
        "py-4",
      );
    }
  });
}

// --- 5. COUNTDOWN TIMER (FIXED) ---
function initCountdown() {
  const daysEl = document.getElementById("days");
  const hoursEl = document.getElementById("hours");
  const minutesEl = document.getElementById("minutes");
  const secondsEl = document.getElementById("seconds");

  // Guard: if any countdown element is missing, exit early
  if (!daysEl || !hoursEl || !minutesEl || !secondsEl) return;

  const targetDate = new Date("February 20, 2026 09:00:00").getTime();

  const timer = setInterval(() => {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance < 0) {
      clearInterval(timer);
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60),
    );
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    daysEl.innerText = days < 10 ? `0${days}` : days;
    hoursEl.innerText = hours < 10 ? `0${hours}` : hours;
    minutesEl.innerText = minutes < 10 ? `0${minutes}` : minutes;
    secondsEl.innerText = seconds < 10 ? `0${seconds}` : seconds;
  }, 1000);
}

// --- 6. NUMBER COUNTER ANIMATION ---
function initCounters() {
  const counters = document.querySelectorAll(".counter");
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          const target = +counter.getAttribute("data-target");
          const duration = 2000;
          const increment = target / (duration / 16);

          let current = 0;
          const updateCounter = () => {
            current += increment;
            if (current < target) {
              counter.innerText = Math.ceil(current);
              requestAnimationFrame(updateCounter);
            } else {
              counter.innerText = target;
            }
          };
          updateCounter();
          observer.unobserve(counter);
        }
      });
    },
    { threshold: 0.5 },
  );

  counters.forEach((c) => observer.observe(c));
}

// --- 7. MOBILE MENU ---
function initMobileMenu() {
  const btn = document.getElementById("mobile-toggle");
  const menu = document.getElementById("mobile-menu");
  const links = document.querySelectorAll(".mobile-link");

  btn.addEventListener("click", () => {
    menu.classList.toggle("translate-x-full");
  });

  links.forEach((link) => {
    link.addEventListener("click", () => {
      menu.classList.add("translate-x-full");
    });
  });
}

// --- 8. 3D TILT EFFECT ---
function initTiltEffect() {
  const cards = document.querySelectorAll(".tilt-card");

  cards.forEach((card) => {
    card.addEventListener("mousemove", (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      const rotateX = ((y - centerY) / centerY) * -10; // Max rotation deg
      const rotateY = ((x - centerX) / centerX) * 10;

      card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    });

    card.addEventListener("mouseleave", () => {
      card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg)`;
    });
  });
}

// --- 9. HACKER TEXT DECODER (Bonus) ---
// Finds elements with .glitch class or specific spans and randomizes text on load
const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
document.querySelectorAll(".glitch").forEach((element) => {
  element.onmouseover = (event) => {
    let iteration = 0;
    const originalText = event.target.dataset.text;

    clearInterval(event.target.interval);

    event.target.interval = setInterval(() => {
      event.target.innerText = originalText
        .split("")
        .map((letter, index) => {
          if (index < iteration) return originalText[index];
          return letters[Math.floor(Math.random() * 26)];
        })
        .join("");

      if (iteration >= originalText.length) {
        clearInterval(event.target.interval);
      }

      iteration += 1 / 3;
    }, 30);
  };
});

function sendMessage() {
  const input = document.getElementById("userInput");
  const text = input.value.toLowerCase().trim();
  if (!text) return;

  addMessage("You", input.value);

  let reply =
    "I’m not sure 🤔 Try asking about events, date, time, prize or registration.";

  if (hasAny(text, ["hi", "hello", "hey"]))
    reply = `

    I can help with:
    • Events
    • Date & Time
    • Prize details
    • Registration
    • Venue

    Try asking something like:
    "When is the fest?"
    "What is the prize money?"
    `;
  else if (hasAny(text, ["event", "competition", "contest", "program"]))
    reply =
      "We have  events:- Hackathon - EvolveX,Tresure Hunt - Opti Quest ,CSS coding - Style FormerX ,Debugging Challenge - CodeSparkX ,Online Games - Cyber Clash ,Reels Competition - Zyreel ,Photography -PiXora and ,Spot choreo-Byte Beatzz ";
  else if (hasAny(text, ["date", "day", "when"]))
    reply = "Events start at **8:00 AM** on **February 20, 2026**.";
  else if (hasAny(text, ["time", "timing", "start", "schedule"]))
    reply = "Events start at **8:00 AM**.";
  else if (hasAny(text, ["prize", "reward", "money", "cash"]))
    reply = "Total Prize: 50,500💰";
  else if (hasAny(text, ["register", "registration", "apply", "join"]))
    reply = "You can register using the link on the homepage.";
  else if (hasAny(text, ["venue", "location", "where", "place"]))
    reply = "Nirmala College, Muvattupuzha | MCA Department";

  setTimeout(() => addMessage("Bot", reply, true), 400);
  input.value = "";
}

function hasAny(text, keywords) {
  return keywords.some((word) => text.includes(word));
}

function typeWriter(element, text, speed = 25) {
  let i = 0;

  function typing() {
    if (i < text.length) {
      element.innerHTML += text.charAt(i);
      i++;
      setTimeout(typing, speed);
    }
  }

  typing();
}

function addMessage(sender, message, isTyping = false) {
  const chat = document.getElementById("chatMessages");

  const msgElement = document.createElement("p");
  msgElement.innerHTML = `<b>${sender}:</b> <span></span>`;
  chat.appendChild(msgElement);

  const span = msgElement.querySelector("span");

  if (isTyping) {
    typeWriter(span, message);
  } else {
    span.innerHTML = message;
  }

  chat.scrollTop = chat.scrollHeight;
}

const chatToggle = document.getElementById("chatToggle");
const chatWindow = document.getElementById("chatWindow");
const closeChat = document.getElementById("closeChat");

chatToggle.onclick = () => {
  chatWindow.classList.toggle("hidden");
};

closeChat.onclick = () => {
  chatWindow.classList.add("hidden");
};

/*GET IN TOUCH*/
const cards = document.querySelectorAll(".tilt-card");
cards.forEach((card) => {
  card.addEventListener("mousemove", (e) => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    const centerX = rect.width / 2;
    const centerY = rect.height / 2;
    const rotateX = ((y - centerY) / centerY) * -10;
    const rotateY = ((x - centerX) / centerX) * 10;
    card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
  });
  card.addEventListener(
    "mouseleave",
    () => (card.style.transform = `rotateX(0deg) rotateY(0deg)`),
  );
});

/* share button */
function shareZyreel() {
  const shareData = {
    title: "ZYREEL – Reel Making Competition",
    text: "One Reel. Unlimited Impact. Join ZYREEL at CAMEO IT Fest 🎬✨",
    url: window.location.href,
  };

  if (navigator.share) {
    navigator
      .share(shareData)
      .catch((err) => console.log("Share cancelled:", err));
  } else {
    navigator.clipboard
      .writeText(shareData.url)
      .then(() => alert("Event link copied to clipboard ✅"))
      .catch(() => prompt("Copy this link:", shareData.url));
  }
}

function shareStyleFormerX() {
  const shareData = {
    title: "StyleFormerX – CSS Design Challenge",
    text: "Design. Style. Precision. Join StyleFormerX at CAMEO IT Fest 🎨✨",
    url: window.location.href,
  };

  if (navigator.share) {
    navigator
      .share(shareData)
      .catch((err) => console.log("Share cancelled:", err));
  } else {
    navigator.clipboard
      .writeText(shareData.url)
      .then(() => alert("Event link copied to clipboard ✅"))
      .catch(() => prompt("Copy this link:", shareData.url));
  }
}

function sharePixora() {
  if (navigator.share) {
    navigator.share({
      title: "PiXora – Photography Event",
      text: "Join PiXora at CAMEO IT Fest 📸",
      url: window.location.href,
    });
  } else {
    alert("Sharing not supported on this browser.");
  }
}

function shareEvent() {
  if (navigator.share) {
    navigator.share({
      title: "EvolveX Hackathon",
      text: "Join the EvolveX Hackathon at Cameo 2026!",
      url: window.location.href,
    });
  } else {
    alert("Sharing not supported on this browser.");
  }
}

function shareBGMI() {
  const shareData = {
    title: "Cyber Clash – BGMI",
    text: "Enter the battleground. Compete in BGMI at Cyber Clash 🎮🔥",
    url: window.location.href,
  };
  handleShare(shareData);
}

function shareEFootball() {
  const shareData = {
    title: "Cyber Clash – E-Football",
    text: "Show your football skills in E-Football at Cyber Clash ⚽🎮",
    url: window.location.href,
  };
  handleShare(shareData);
}

function shareMiniMilitia() {
  const shareData = {
    title: "Cyber Clash – Mini Militia",
    text: "Fast. Tactical. Explosive. Join Mini Militia at Cyber Clash 💣🎮",
    url: window.location.href,
  };
  handleShare(shareData);
}

/* Reusable Share Handler */
function handleShare(data) {
  if (navigator.share) {
    navigator.share(data).catch((err) => console.log("Share cancelled:", err));
  } else {
    navigator.clipboard
      .writeText(data.url)
      .then(() => alert("Event link copied to clipboard ✅"))
      .catch(() => prompt("Copy this link:", data.url));
  }
}

function shareCodeSparkX() {
  const shareData = {
    title: "CodeSpark X – Debugging & Coding Challenge",
    text: "Think fast. Debug smart. Join CodeSpark X at CAMEO IT Fest 💻🔥",
    url: window.location.href,
  };

  if (navigator.share) {
    navigator
      .share(shareData)
      .catch((err) => console.log("Share cancelled:", err));
  } else {
    navigator.clipboard
      .writeText(shareData.url)
      .then(() => alert("Event link copied to clipboard ✅"))
      .catch(() => alert("Copy failed. Please copy manually."));
  }
}

function sharebytebeatzz() {
  if (navigator.share) {
    navigator.share({
      title: "BYTE BEATZZ",
      text: "Join BYTE BEATZZ (Spot-Choreo) at Cameo 2026!",
      url: window.location.href,
    });
  } else {
    alert("Sharing not supported on this browser.");
  }
}

function shareOptiQuest() {
  if (navigator.share) {
    navigator
      .share({
        title: "OPTIQUEST",
        text: "Join OPTIQUEST at Cameo 2026 for an amazing experience!",
        url: window.location.href,
      })
      .then(() => console.log("Successfully shared"))
      .catch((error) => console.error("Error sharing:", error));
  } else {
    alert("Sharing is not supported on this browser.");
  }
}
function handleRegisterClick(eventName) {
  // ❌ NOT allowed for Nirmala students
  const nirmalaNotAllowedEvents = [
    "codexsparkx",
    "styleformerx",
    "pixora",
    "evolvex",
    "cyberclash",
    "optiquest",
  ];

  // ✅ No college selection needed
  const noCollegeRequired = ["zyreel", "bytebeatzz"];

  const agreeCheck = document.getElementById("agreeCheck");

  if (!agreeCheck.checked) {
    document.getElementById("agreePopup").classList.remove("hidden");
    return;
  }

  // ✅ If event doesn't need college → allow directly
  if (noCollegeRequired.includes(eventName)) {
    window.location.href = `payment-pages/${eventName}-payment.php`;
    return;
  }

  const collegeType = document.getElementById("collegeType").value;

  if (!collegeType) {
    alert("Please select your college.");
    return;
  }

  // 🔥 Block Nirmala students from restricted events
  if (
    collegeType === "nirmala" &&
    nirmalaNotAllowedEvents.includes(eventName)
  ) {
    alert(
      "Nirmala College students are not allowed to participate in this event.",
    );
    return;
  }

  // ✅ Otherwise allow
  window.location.href = `payment-pages/${eventName}-payment.php`;
}

function closePopup() {
  document.getElementById("agreePopup").classList.add("hidden");
}

const agreeCheck = document.getElementById("agreeCheck");
const registerBtn = document.getElementById("registerBtn");

agreeCheck.addEventListener("change", function () {
  registerBtn.disabled = !this.checked;
});
>>>>>>> 9cbf00501787b6805e108586ce3cf4674d688d9f
