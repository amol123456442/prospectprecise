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