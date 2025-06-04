let mouseX = 0,
  mouseY = 0
let ballX = 0,
  ballY = 0

const followBall = document.getElementById("ball")

document.addEventListener("mousemove", (e) => {
  mouseX = e.clientX
  mouseY = e.clientY
})

function animate() {
  const distX = mouseX - ballX
  const distY = mouseY - ballY

  ballX += distX * 0.1
  ballY += distY * 0.1

  followBall.style.left = ballX + "px"
  followBall.style.top = ballY + "px"

  requestAnimationFrame(animate)
}

animate()

document.body.addEventListener("click", (event) => {
  for (let i = 0; i < 15; i++) {
    const confetti = document.createElement("div")
    confetti.style.position = "absolute"
    confetti.style.width = "10px"
    confetti.style.height = "10px"
    confetti.style.backgroundColor = `hsl(${Math.random() * 360}, 100%, 50%)`
    confetti.style.borderRadius = "50%"
    confetti.style.left = `${event.clientX}px`
    confetti.style.top = `${event.clientY}px`
    document.body.appendChild(confetti)

    gsap.to(confetti, {
      x: Math.random() * 200 - 100,
      y: Math.random() * 200 - 100,
      scale: 0,
      opacity: 0,
      duration: 1,
      ease: "power1.out",
      onComplete: () => {
        confetti.remove()
      },
    })
  }
});
