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
    setupSidebar(".audience-link", "audienceSidebar");
    setupSidebar(".insights-link", "insightsSidebar");
</script>

<!-- about us page about.php -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined" || typeof imagesLoaded === "undefined" || typeof SplitText === "undefined" || typeof Physics2DPlugin === "undefined") {
            console.error("Required libraries failed to load.");
            return;
        }

        gsap.registerPlugin(ScrollTrigger, SplitText, Physics2DPlugin);

        // Image array
        const imageUrls = [
            "https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", // SEO Services
            "https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", // PPC Campaign
            "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", // Social Media
            "https://images.unsplash.com/photo-1516321310762-4794371446b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", // Client Success
            "https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", // Client Feedback
            "https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", // Team Collaboration
            "https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", // Campaign 1
            "https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", // Campaign 2
            "https://images.unsplash.com/photo-1557426272-fc759fdf7a8d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", // Campaign 3
            "https://images.unsplash.com/photo-1516321310762-4794371446b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", // Get Started
            "https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", // Contact Us
            "https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", // Grow Now
            "https://cdn.prod.website-files.com/681a615bf5a0f1ba3cb1ca38/681a62d0bb34b74d3514ecab_shape-squigle-1.png", // Falling Text 1
            "https://cdn.prod.website-files.com/681a615bf5a0f1ba3cb1ca38/681a62d0bb34b74d3514ecad_shape-squigle-2.png", // Falling Text 2
            "https://cdn.prod.website-files.com/681a615bf5a0f1ba3cb1ca38/681a62d0bb34b74d3514ecaf_shape-squigle-3.png" // Falling Text 3
        ];

        // Populate images dynamically
        document.querySelectorAll(".dynamic-img").forEach(img => {
            const imgId = parseInt(img.getAttribute("data-img-id"));
            if (imageUrls[imgId]) {
                img.src = imageUrls[imgId];
            }
        });

        const images = gsap.utils.toArray(".dynamic-img");
        const loader = document.querySelector(".a14");

        // Loader progress
        const updateProgress = (instance) => {
            const progress = Math.round(instance.progressedCount * 100 / images.length);
            loader.textContent = `${progress}%`;
        };

        const showDemo = () => {
            document.body.style.overflow = "auto";
            document.scrollingElement.scrollTo(0, 0);
            gsap.to(document.querySelector(".a7"), {
                autoAlpha: 0,
                duration: 0.7,
                ease: "power2.out"
            });

            // Animate hero section content
            gsap.fromTo(".hero-content", {
                y: 80,
                opacity: 0
            }, {
                y: 0,
                opacity: 1,
                duration: 1.6,
                ease: "power4.out",
                scrollTrigger: {
                    trigger: ".hero",
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            });

            // Animate hero video
            gsap.fromTo(".media-right video", {
                opacity: 0,
                scale: 1.08
            }, {
                opacity: 1,
                scale: 1,
                duration: 2,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: ".hero",
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            });

            // Animate each section wrapper (slide effect)
            gsap.utils.toArray("section").forEach((section, index) => {
                const w = section.querySelector(".a9");
                if (!w) return;

                const [x, xEnd] = (index % 2) ? ["100%", (w.scrollWidth - section.offsetWidth) * -1] : [w.scrollWidth * -1, 0];

                gsap.fromTo(w, {
                    x
                }, {
                    x: xEnd,
                    ease: "none",
                    scrollTrigger: {
                        trigger: section,
                        scrub: 1
                    }
                });
            });

            // Animate images (parallax + fade-in + scale)
            gsap.utils.toArray(".dynamic-img").forEach((img) => {
                gsap.fromTo(img, {
                    opacity: 0,
                    scale: 0.95,
                    y: 80,
                    rotate: -3
                }, {
                    opacity: 1,
                    scale: 1,
                    y: 0,
                    rotate: 0,
                    duration: 1.8,
                    ease: "expo.out",
                    scrollTrigger: {
                        trigger: img,
                        start: "top 85%",
                        toggleActions: "play none none reverse"
                    }
                });
            });

            // Animate big text sections (split + stagger)
            gsap.utils.toArray(".a11 .a12").forEach((textBlock) => {
                const chars = textBlock.textContent.split("");
                textBlock.innerHTML = chars.map(c => `<span style="display:inline-block">${c}</span>`).join("");

                gsap.fromTo(textBlock.querySelectorAll("span"), {
                    y: 100,
                    opacity: 0,
                    rotateX: 80
                }, {
                    y: 0,
                    opacity: 1,
                    rotateX: 0,
                    duration: 1.4,
                    stagger: 0.04,
                    ease: "back.out(1.8)",
                    scrollTrigger: {
                        trigger: textBlock,
                        start: "top 80%",
                        end: "bottom 20%",
                        toggleActions: "play none none reverse"
                    }
                });
            });

            // Initialize falling text animation
            function initFallingTextGravity() {
                new SplitText("[data-drop-text]", {
                    type: "lines, chars",
                    autoSplit: true,
                    linesClass: "pouytr",
                    onSplit(self) {
                        let ctx = gsap.context(() => {
                            self.lines.forEach((line) => {
                                gsap.timeline({
                                        scrollTrigger: {
                                            trigger: line,
                                            start: "top top-=10",
                                            end: "bottom 20%",
                                            toggleActions: "play none none reverse"
                                        }
                                    })
                                    .to(line.children, {
                                        duration: "random(1.8, 3.2)",
                                        physics2D: {
                                            velocity: "random(200, 600)", // smoother
                                            angle: 90,
                                            gravity: 1500
                                        },
                                        rotation: "random(-60, 60)",
                                        ease: "none"
                                    })
                                    .to(line.children, {
                                        autoAlpha: 0,
                                        duration: 0.3
                                    }, "-=.2");
                            });
                        });
                        return ctx;
                    }
                });
            }

            initFallingTextGravity();
        };

        if (images.length === 0) {
            showDemo();
        } else {
            imagesLoaded(images)
                .on("progress", updateProgress)
                .on("always", showDemo)
                .on("fail", showDemo);
        }
    });
</script>

<!-- about us page about.php image change on scroll -->
<script>
    console.clear();
    gsap.defaults({
        overwrite: 'auto'
    });
    gsap.set(".left-content > *", {
        xPercent: -50,
        yPercent: -50
    });
    const ST = ScrollTrigger.create({
        trigger: ".content-container",
        start: "top top",
        end: "bottom bottom",
        onUpdate: getCurrentSection,
        pin: ".left-content"
    });
    const contentMarkers = gsap.utils.toArray(".contentMarker");
    contentMarkers.forEach(marker => {
        marker.content = document.querySelector(`#${marker.dataset.markerContent}`);
        if (marker.content.tagName === "IMG") {
            gsap.set(marker.content, {
                transformOrigin: "center"
            });
            marker.content.enter = function() {
                gsap.fromTo(marker.content, {
                    autoAlpha: 0,
                    rotateY: -30
                }, {
                    duration: 0.3,
                    autoAlpha: 1,
                    rotateY: 0
                });
            }
        } else if (marker.content.tagName === "BLOCKQUOTE") {
            gsap.set(marker.content, {
                transformOrigin: "left center"
            });
            marker.content.enter = function() {
                gsap.fromTo(marker.content, {
                    autoAlpha: 0,
                    rotateY: 50
                }, {
                    duration: 0.3,
                    autoAlpha: 1,
                    rotateY: 0
                });
            }
        }
        marker.content.leave = function() {
            gsap.to(marker.content, {
                duration: 0.1,
                autoAlpha: 0
            });
        }
    });
    let lastContent;

    function getCurrentSection() {
        let newContent;
        const currScroll = scrollY;
        contentMarkers.forEach(marker => {
            if (currScroll > marker.offsetTop) {
                newContent = marker.content;
            }
        });
        if (newContent && (lastContent == null || !newContent.isSameNode(lastContent))) {
            if (lastContent) {
                lastContent.leave();
            }
            newContent.enter();
            lastContent = newContent;
        }
    }
    const media = window.matchMedia("screen and (max-width: 600px)");
    ScrollTrigger.addEventListener("refreshInit", checkSTState);
    checkSTState();

    function checkSTState() {
        if (media.matches) {
            ST.disable();
        } else {
            ST.enable();
        }
    }
</script>

<!-- about us page about.php image zoom on scroll -->
<script>
    console.clear();
    gsap.registerPlugin(ScrollTrigger);
    window.addEventListener("load", () => {
        gsap
            .timeline({
                scrollTrigger: {
                    trigger: ".hdfjdg",
                    start: "top top",
                    end: "+=150%",
                    pin: true,
                    scrub: true,
                    markers: false
                }
            })
            .to(".image-container img", {
                scale: 2,
                z: 350,
                transformOrigin: "center center",
                ease: "power1.inOut"
            })
            .to(
                ".fsdjhhfsdjhhdfs.hdfjdg", {
                    scale: 1.1,
                    transformOrigin: "center center",
                    ease: "power1.inOut"
                },
                "<"
            );
    });
</script>

<!-- about /meettheteam.php -->

    <script>
        // Array of team members with image URLs, names, and roles
        const teamMembers = [{
                image: "https://i.postimg.cc/zG5c7T02/168-1685371-corporate-headshot-pic-png-transparent-png.png",
                name: "Jennifer Tilly",
                role: "UI Designer"
            },
            {
                image: "http://gocheckers.com/images/roster/josh_wesley_headshot_1718.png",
                name: "John Doe",
                role: "UI Designer"
            },
            {
                image: "https://i.postimg.cc/FKqR0FNp/Andrew-Stader-Headshot-Low-Res-Transparent-Background.png",
                name: "David Warner",
                role: "UI Designer"
            },
            {
                image: "https://i.postimg.cc/50n49xjb/888-8883444-headshot-no-background-scarf.png",
                name: "John Doe",
                role: "UI Designer"
            },
            {
                image: "http://gocheckers.com/images/roster/josh_wesley_headshot_1718.png",
                name: "John Doe",
                role: "UI Designer"
            },
            {
                image: "http://gocheckers.com/images/roster/josh_wesley_headshot_1718.png",
                name: "John Doe",
                role: "UI Designer"
            },
            {
                image: "https://i.postimg.cc/50n49xjb/888-8883444-headshot-no-background-scarf.png",
                name: "John Doe",
                role: "UI Designer"
            },
            {
                image: "https://i.postimg.cc/50n49xjb/888-8883444-headshot-no-background-scarf.png",
                name: "John Doe",
                role: "UI Designer"
            },
            {
                image: "https://i.postimg.cc/50n49xjb/888-8883444-headshot-no-background-scarf.png",
                name: "Sara Khan",
                role: "UI Designer"
            }
        ];

        // Function to display team members
        function displayTeamMembers() {
            const teamList = document.getElementById('team-members-list');
            let currentRow = null;

            teamMembers.forEach((member, index) => {
                // Start a new row for every 3 members
                if (index % 3 === 0) {
                    currentRow = document.createElement('li');
                    currentRow.className = 'clearfix';
                    teamList.appendChild(currentRow);
                }

                // Create member details
                const memberDiv = document.createElement('div');
                memberDiv.className = 'member-details';

                const innerDiv = document.createElement('div');
                const img = document.createElement('img');
                img.src = member.image;
                img.alt = member.role;

                const memberInfo = document.createElement('div');
                memberInfo.className = 'member-info';

                const name = document.createElement('h3');
                name.textContent = member.name;

                const role = document.createElement('p');
                role.textContent = member.role;

                memberInfo.appendChild(name);
                memberInfo.appendChild(role);
                innerDiv.appendChild(img);
                innerDiv.appendChild(memberInfo);
                memberDiv.appendChild(innerDiv);
                currentRow.appendChild(memberDiv);
            });
        }

        // Call the function to display team members
        displayTeamMembers();
    </script>