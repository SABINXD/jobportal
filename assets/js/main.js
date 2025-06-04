const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

ScrollReveal().reveal(".header__container h2", {
  ...scrollRevealOption,
});
ScrollReveal().reveal(".header__container h1", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".header__container p", {
  ...scrollRevealOption,
  delay: 1000,
});
ScrollReveal().reveal(".header__btns", {
  ...scrollRevealOption,
  delay: 1500,
});

ScrollReveal().reveal(".steps__card", {
  ...scrollRevealOption,
  interval: 500,
});

ScrollReveal().reveal(".explore__card", {
  duration: 1000,
  interval: 500,
});

ScrollReveal().reveal(".job__card", {
  ...scrollRevealOption,
  interval: 500,
});

ScrollReveal().reveal(".offer__card", {
  ...scrollRevealOption,
  interval: 500,
});

const swiper = new Swiper(".swiper", {
  loop: true,
});
// js for the gsap
let mouseX = 0,
  mouseY = 0;
let ballX = 0,
  ballY = 0;

const followBall = document.getElementById("ball");

document.addEventListener("mousemove", (e) => {
  mouseX = e.clientX;
  mouseY = e.clientY;
});

function animate() {
  const distX = mouseX - ballX;
  const distY = mouseY - ballY;

  ballX += distX * 0.1;
  ballY += distY * 0.1;

  followBall.style.left = `${ballX}px`;
  followBall.style.top = `${ballY}px`;

  requestAnimationFrame(animate);
}

animate();

// Update this part to use window instead of document.body
window.addEventListener("click", (event) => {
  createConfetti(event.clientX, event.clientY);
});

function createConfetti(x, y) {
  for (let i = 0; i < 15; i++) {
    const confetti = document.createElement("div");
    confetti.style.position = "fixed"; // Change to fixed positioning
    confetti.style.width = "10px";
    confetti.style.height = "10px";
    confetti.style.backgroundColor = `hsl(${Math.random() * 360}, 100%, 50%)`;
    confetti.style.borderRadius = "50%";
    confetti.style.left = `${x}px`;
    confetti.style.top = `${y}px`;
    confetti.style.pointerEvents = "none"; // Prevent confetti from interfering with clicks
    document.body.appendChild(confetti);

    gsap.to(confetti, {
      x: Math.random() * 200 - 100,
      y: Math.random() * 200 - 100,
      scale: 0,
      opacity: 0,
      duration: 1,
      ease: "power1.out",
      onComplete: () => {
        confetti.remove();
      },
    });
  }
}

// Add this function to handle scroll events
function handleScroll() {
  // Update ball position on scroll
  ballX = mouseX;
  ballY = mouseY;
  followBall.style.left = `${ballX}px`;
  followBall.style.top = `${ballY}px`;
}

// Add scroll event listener
window.addEventListener("scroll", handleScroll);
document.getElementById('toggleJobForm').addEventListener('click', function() {
  var container = document.getElementById('jobFormContainer');
  if (container.style.display === 'none') {
    container.style.display = 'block';
    fetch('job-post-form.php')
      .then(response => response.text())
      .then(data => {
        container.innerHTML = data;
      });
  } else {
    container.style.display = 'none';
  }
});