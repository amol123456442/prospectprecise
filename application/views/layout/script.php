<script>
    // Add "scrolled" class on scroll
    window.addEventListener("scroll", function() {
        let navbar = document.querySelector(".navbar");
        navbar.classList.toggle("scrolled", window.scrollY > 50);
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const hero = document.querySelector('.hero');

    hero.addEventListener('mousemove', (e) => {
        const rect = hero.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        // Create a new bubble
        const bubble = document.createElement('div');
        bubble.className = 'cursor-bubble';

        // Random offset to create a trailing effect
        const offsetX = Math.random() * 10 - 5;
        const offsetY = Math.random() * 10 - 5;

        // Random size between 8px and 12px
        const size = Math.random() * 4 + 8;
        bubble.style.width = `${size}px`;
        bubble.style.height = `${size}px`;

        bubble.style.left = `${x + offsetX}px`;
        bubble.style.top = `${y + offsetY}px`;

        hero.appendChild(bubble);

        // Remove bubble after animation completes
        setTimeout(() => {
            bubble.remove();
        }, 800); // Matches animation duration
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("show"); // Image visible karna
                    }
                });
            }, {
                threshold: 0.3
            } // 30% section viewport me aane par trigger hoga
        );

        const priorityImage = document.querySelector(".priority-image");
        if (priorityImage) {
            observer.observe(priorityImage);
        }
    });
</script>

<script>
    const canvas = document.getElementById("particles");
    const ctx = canvas.getContext("2d");

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    let particles = [];

    class Particle {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.radius = Math.random() * 3 + 1;
            this.color = "rgba(0,114,188,0.7)"; // blue
            this.speedX = (Math.random() - 0.5) * 1;
            this.speedY = (Math.random() - 0.5) * 1;
        }
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
            ctx.fillStyle = this.color;
            ctx.fill();
        }
        update() {
            this.x += this.speedX;
            this.y += this.speedY;

            if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
            if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;

            this.draw();
        }
    }

    function initParticles(count) {
        particles = [];
        for (let i = 0; i < count; i++) {
            particles.push(new Particle());
        }
    }

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => p.update());
        requestAnimationFrame(animate);
    }

    window.addEventListener("resize", () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        initParticles(80); // number of particles
    });

    initParticles(80);
    animate();
</script>
<script>
    // Logo array
    const logos = [{
            src: "asset/images/microsoft.jpg",
            alt: "Microsoft"
        },
        {
            src: "asset/images/google.jpg",
            alt: "Google"
        },
        {
            src: "asset/images/dell.jpg",
            alt: "Dell"
        },
        {
            src: "asset/images/ibm.webp",
            alt: "IBM"
        },
        {
            src: "asset/images/samsung.jpg",
            alt: "Samsung"
        },
        {
            src: "asset/images/hp.png",
            alt: "HP"
        }
    ];

    function createScrollContent(rowId) {
        const row = document.getElementById(rowId);
        const wrapper = document.createElement("div");
        wrapper.classList.add("scroll-wrapper");

        // ek hi set ko do baar repeat karna
        for (let i = 0; i < 5; i++) {
            const content = document.createElement("div");
            content.classList.add("scroll-content");
            logos.forEach(logo => {
                const box = document.createElement("div");
                box.classList.add("logo-box");
                box.innerHTML = `<img src="${logo.src}" alt="${logo.alt}">`;
                content.appendChild(box);
            });
            wrapper.appendChild(content);
        }

        row.appendChild(wrapper);
    }

    // Generate rows
    createScrollContent("row1");
    createScrollContent("row2");
</script>

<!-- Navbar -->
 <script>
function setupSidebar(linkSelector, sidebarId) {
  const link = document.querySelector(linkSelector);
  const sidebar = document.getElementById(sidebarId);
  const links = sidebar.querySelectorAll("a");

  link.addEventListener("mouseenter", () => sidebar.classList.add("active"));
  sidebar.addEventListener("mouseenter", () => sidebar.classList.add("active"));
  sidebar.addEventListener("mouseleave", () => sidebar.classList.remove("active"));
  link.addEventListener("mouseleave", () => {
    setTimeout(() => {
      if (!sidebar.matches(":hover")) sidebar.classList.remove("active");
    }, 200);
  });
  links.forEach(a => a.addEventListener("click", () => sidebar.classList.remove("active")));
}

// Apply to all
setupSidebar(".about-link", "aboutSidebar");
setupSidebar(".contact-link", "contactSidebar");
setupSidebar(".audience-link", "audienceSidebar");
setupSidebar(".insights-link", "insightsSidebar");
</script>