    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&family=Story+Script&display=swap"
      rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Story+Script&display=swap" rel="stylesheet">

    <style>
      body {
        font-family: "Open Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "wdth" 100;
      }
    </style>
    <style>
      /* Navbar Base */
      .navbar {
        background: transparent;
        transition: all 0.4s ease-in-out;
        padding: 18px 0;
      }

      /* When scrolled */
      .navbar.scrolled {
        background: rgba(255, 255, 255, 0.97);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.12);
        padding: 10px 0;
      }

      /* Brand */
      .navbar-brand {
        font-size: 1.8rem;
        font-weight: bold;
        color: #fff;
        transition: color 0.3s ease;
      }

      .navbar.scrolled .navbar-brand {
        color: #000;
      }

      /* Nav Links */
      .nav-link {
        position: relative;
        color: #fff !important;
        font-size: 1.1rem;
        margin: 0 12px;
        transition: all 0.3s ease;
      }

      .navbar.scrolled .nav-link {
        color: #000 !important;
      }

      .nav-link::after {
        content: "";
        position: absolute;
        width: 0;
        height: 3px;
        bottom: -4px;
        left: 50%;
        transform: translateX(-50%);
        background: currentColor;
        border-radius: 3px;
        transition: width 0.3s ease;
      }

      .nav-link:hover::after {
        width: 60%;
      }

      .nav-link:hover {
        transform: translateY(-3px);
      }

      /* Search Box */
      .search-box {
        position: relative;
        transition: all 0.3s ease;
      }

      .search-box input {
        padding: 8px 40px 8px 15px;
        border-radius: 25px;
        border: 2px solid transparent;
        outline: none;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
      }

      .search-box input::placeholder {
        color: rgba(255, 255, 255, 0.8);
      }

      .navbar.scrolled .search-box input {
        background: rgba(255, 255, 255, 0.8);
        border: 2px solid #000;
        color: #000;
      }

      .navbar.scrolled .search-box input::placeholder {
        color: rgba(0, 0, 0, 0.6);
      }

      .search-box input:focus {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      }

      .search-box .bi-search {
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.2rem;
        color: #fff;
        transition: color 0.3s ease;
      }

      .navbar.scrolled .search-box .bi-search {
        color: #000;
      }

      /* Sections */



      html {
        scroll-behavior: smooth;
      }
    </style>
    <style>
      :root {
        --brand-navy: #081f3a;
        --brand-navy-2: #0d2b4f;
        --brand-orange: #0072BC;
        --tile-purple: #6b5cff;
        --tile-blue: #2d8ecb;
        --tile-navy: #1d3e63;
      }



      .hero {
        /* position: relative; */
        overflow: hidden;
        color: #ffffff;
        background: var(--brand-navy);
        min-height: 90vh;
        display: flex;
        align-items: center;
      }

      .hero .media-right {
        position: absolute;
        top: 0;
        right: 0;
        height: 92%;
        width: clamp(520px, 50vw, 900px);
      }

      .hero .media-right video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: saturate(1.05);
      }

      .hero .media-gradient {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg,
            var(--brand-navy) 0%,
            rgba(8, 31, 58, 0.85) 38%,
            rgba(8, 31, 58, 0.35) 56%,
            rgba(8, 31, 58, 0.12) 70%,
            rgba(8, 31, 58, 0.0) 82%);
        pointer-events: none;
      }

      .hero h5 {
        letter-spacing: 1px;
        font-weight: 700;
        opacity: 0.9;

      }

      .hero h1 {
        font-size: clamp(3rem, 7vw, 7rem);
        line-height: 0.95;
        font-weight: 900;
        margin: 8px 0 16px 0;
      }

      .hero p {
        font-size: clamp(1rem, 1.2vw, 1.25rem);
        margin: 20px 0 28px 0;
        max-width: 720px;
      }

      .btn-orange {
        background: var(--brand-orange);
        color: #fff;
        font-weight: 800;
        padding: 14px 28px;
        border-radius: 999px;
        border: none;
        box-shadow: 0 8px 22px rgba(255, 106, 0, 0.35);
      }

      .steps-wrapper {
        position: absolute;
        bottom: 24px;
        left: 0;
        right: 0;
        padding: 0 24px;
        pointer-events: none;
        display: flex;
        justify-content: center;

      }

      .steps-wrapper:before,
      .steps-wrapper:after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        width: 80px;
        pointer-events: none;
      }

      /* .steps-wrapper:before {
            left: 0;
            background: linear-gradient(90deg, rgba(8, 31, 58, 0.9), rgba(8, 31, 58, 0));
        } */

      .steps-wrapper:after {
        right: 0;

      }

      .steps {
        display: grid;
        grid-template-columns: repeat(4, 290px);
        gap: 20px;
        padding: 0;
        height: 150px;
        pointer-events: auto;
        width: fit-content;
        margin: 0 auto;
      }

      .step {
        position: relative;
        color: #ffffff;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.9rem;
        padding: 22px 90px 22px 28px;
        display: flex;
        align-items: center;
        min-height: 92px;
        border-radius: 18px 0 0 18px;
        overflow: hidden;
        transform: skewX(-18deg);
      }

      .step>* {
        transform: skewX(18deg);
      }

      .step .arrow {
        position: absolute;
        right: 22px;
        font-size: 1.4rem;
        line-height: 1;
      }

      .step a {
        color: #ffffff;
        text-decoration: none;
        display: inline-block;
      }

      .step:first-child,
      .step:last-child {
        opacity: 0.9;
      }

      .step:nth-child(1) {
        background: linear-gradient(135deg, #ff6a00 0%, #ff7f2a 100%);
        z-index: 1;
      }

      .step:nth-child(2) {
        background: linear-gradient(135deg, #6b5cff 0%, #8a79ff 100%);
      }

      .step:nth-child(3) {
        background: linear-gradient(135deg, #2d8ecb 0%, #3ca9e2 100%);
      }

      .step:nth-child(4) {
        background: linear-gradient(135deg, #0427ee 0%, #061de7bd 100%);
      }

      /* Content Section Styles */
      .content-section {
        padding: 120px 0;
        background: #ffffff;
      }

      .main-title {
        font-size: clamp(2.5rem, 5vw, 3rem);
        font-weight: 900;
        line-height: 1.1;
        color: #1c3c70;
        text-align: center;
        margin-bottom: 40px;
        letter-spacing: -0.02em;
      }

      .content-text {
        font-size: clamp(1.1rem, 1.3vw, 1.25rem);
        line-height: 1.6;
        color: #4a4a4a;
        text-align: center;
        max-width: 900px;
        margin: 0 auto;
        font-weight: 400;
      }

      .content-text strong {
        font-weight: 700;
        color: #1a1a1a;
      }



      .content-box {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 16px;
        padding: 40px 50px;
        height: 100%;
        position: relative;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        z-index: 10;
        margin: 0 -50px;
      }

      .content-box-top {
        margin-top: -60px;
      }

      .content-box-bottom {
        margin-top: 60px;
      }



      .content-box h3 {
        font-size: 1.5rem;
        font-weight: 800;
        color: #1c3c70;
        margin-bottom: 16px;
        line-height: 1.3;
      }

      .content-box p {
        font-size: 1rem;
        line-height: 1.6;
        color: #1c3c70;
        margin: 0;
      }

      .content-box strong {
        font-weight: 700;
      }

      /* SVG Section Styles */
      .svg-section {
        padding: 80px 0;
        background: #ffffff;
      }

      .svg-container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        height: 400px;
        /* padding: 40px 20px; */
      }

      .svg-container.right {
        align-items: flex-end;
      }

      .svg-image {
        width: 100%;
        /* max-width: 500px;     */
        height: auto;
      }


      .center-content {
        color: #1c3c70;
        text-align: center;
        padding: 40px 20px;
      }

      .center-content h3 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #1c3c70;
        margin-bottom: 20px;
      }

      .center-content p {
        font-size: 1rem;
        line-height: 1.6;
        color: #1c3c70;
        margin: 0;
      }

      /* Book Background */
      .book-background {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 500px;
        overflow: hidden;
        z-index: 1;
      }

      .book-image {
        width: 100%;
        max-width: 800px;
        height: auto;
        object-fit: contain;
        filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.15));
        z-index: 1;
      }

      /* Add subtle overlay effect to blend with content boxes */
      .book-background::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* background: radial-gradient(circle at center, transparent 0%, rgba(255, 255, 255, 0.1) 100%); */
        z-index: 2;
        pointer-events: none;
      }

      /* Responsive */
      @media (max-width: 992px) {
        .features-section {
          padding: 60px 0;
        }

        .content-box {
          margin-bottom: 40px;
          padding: 30px 20px;
        }

        .book-background {
          height: 250px;
          margin: 40px 0;
        }

        .book-image {
          max-width: 400px;
        }
      }

      .cursor-bubble {
        position: absolute;

        background: rgba(255, 38, 0, 0.945);
        border-radius: 50%;
        pointer-events: none;
        z-index: 10;
        animation: fadeOut 0.8s ease forwards;
      }

      @keyframes fadeOut {
        0% {
          opacity: 0.5;
          transform: scale(1);
        }

        100% {
          opacity: 0;
          transform: scale(1.5);
        }
      }

      @media (max-width: 992px) {
        .hero {
          min-height: 100vh;
        }

        .hero .media-right {
          position: absolute;
          width: 100%;
          opacity: 0.25;
        }

        .steps-wrapper {
          position: static;
          padding: 24px;
          justify-content: stretch;
        }

        .steps-wrapper:before,
        .steps-wrapper:after {
          display: none;
        }

        .steps {
          grid-template-columns: 1fr;
          padding: 0;
          max-width: 720px;
        }

        .step {
          border-radius: 14px;
          padding-right: 48px;
          transform: none;
        }

        .step>* {
          transform: none;
        }
      }
    </style>
    <style>
      .cta-carousel {
        border-radius: 12px;
        overflow: hidden;
      }

      .cta-item {
        height: 350px;
        display: flex;
        align-items: center;
        padding: 60px;
        color: #fff;
        border-radius: 12px;
      }

      .cta-item h2 {
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 20px;
        max-width: 600px;
      }

      .cta-item .btn-custom {
        background: transparent;
        border: 2px solid #fff;
        color: #fff;
        font-weight: 600;
        padding: 10px 20px;
        border-radius: 50px;
        transition: 0.3s;
        text-transform: uppercase;
      }

      .cta-item .btn-custom:hover {
        background: #fff;
        color: #003c88;
      }

      /* Carousel controls */
      .carousel-control-prev,
      .carousel-control-next {
        width: 5%;
      }

      .carousel-indicators [data-bs-target] {
        background-color: #fff;
      }
    </style>
    <style>
      .priority-wrapper {
        position: relative;
        overflow: hidden;
        padding: 80px 0;
      }

      .priority-section h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #0b2e65;
        margin-bottom: 20px;
      }

      .priority-section .sub-text {
        font-size: 1.15rem;
        font-weight: 600;
        color: #0b2e65;
      }

      .priority-section .description {
        color: #555;
        margin-top: 10px;
      }

      /* Gradient Border Card */
      .priority-card {
        position: relative;
        border-radius: 25px;
        padding: 2rem;
        margin: 20px 0;
        backdrop-filter: blur(12px);
        overflow: hidden;
        transition: all 0.4s ease;
        z-index: 1;
      }

      .priority-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 25px;
        padding: 2px;
        /* border ki width */
        background: linear-gradient(135deg, #0b2e65, #1e90ff, #00ffcc);
        -webkit-mask:
          linear-gradient(#fff 0 0) content-box,
          linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        z-index: -1;
      }

      .priority-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      }

      .priority-icon {
        font-size: 45px;
        margin-right: 20px;
        background: linear-gradient(135deg, #0b2e65, #1e90ff);
        color: #fff;
        width: 65px;
        height: 65px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        flex-shrink: 0;
      }



      .priority-image img {
        max-height: 900px;
        width: auto;
      }

      .priority-image {
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%) translateX(100px);
        /* Pehle hidden rahe */
        opacity: 0;
        transition: all 1s ease;
      }

      /* Jab active class lagegi */
      .priority-image.show {
        transform: translateY(-50%) translateX(0);
        opacity: 1;
      }

      /* Video Styling */
      .video-wrapper {
        position: relative;
        overflow: hidden;

      }

      .video-wrapper video {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 25px;
        object-fit: cover;
      }
    </style>
    <style>
      .demand-section {
        padding: 130px 0;
        position: relative;
        text-align: center;
        background: url("https://img.freepik.com/free-photo/abstract-flowing-neon-wave-background_53876-101942.jpg?semt=ais_incoming&w=740&q=80") no-repeat center center/cover;
        color: #fff;
        overflow: hidden;
      }

      /* Overlay for opacity */
      .demand-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        /* yaha se opacity control hogi */
        z-index: 0;
      }

      /* Content ko overlay ke upar lana */
      .demand-section>* {
        position: relative;
        z-index: 1;
      }

      .demand-section::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(11, 44, 95, 0.7);
        /* dark overlay */
      }

      .demand-section h2 {
        font-weight: 700;
        margin: 40px 0;
        position: relative;
        z-index: 1;
        font-size: 36px;
        line-height: 1.3;
      }

      .demand-card {
        background: white;
        color: rgba(11, 45, 95, 0.932);
        border-radius: 20px;
        padding: 18px;
        width: 280px;
        backdrop-filter: blur(8px);
        border: 2px solid transparent;
        background-clip: padding-box;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
        z-index: 1;
      }

      .demand-card::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 20px;
        padding: 2px;
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        pointer-events: none;
      }

      .demand-card h5 {
        font-weight: 700;
        font-size: 16px;
        margin-bottom: 10px;

      }

      .demand-card p {
        font-size: 14px;
        margin: 0;

      }

      .demand-card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.35);
      }

      /* Card positioning */
      .demand-wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        position: relative;
      }

      .demand-wrapper .demand-card {
        position: absolute;
      }

      .card-top-left {
        top: 0;
        left: 10%;
      }

      .card-top-right {
        top: 0;
        right: 10%;
      }

      .card-bottom-left {
        bottom: 0;
        left: 10%;
      }

      .card-bottom-right {
        bottom: 0;
        right: 10%;
      }

      .card-bottom-center {
        bottom: -120px;
        left: 50%;
        transform: translateX(-50%);
      }
    </style>
    <style>
      .footer {
        background-color: #0b2149;
        /* Dark Blue */
        color: #fff;
        position: relative;
      }

      /* White curved logo block */
      .footer-logo {
        background: #fff;
        border-bottom-right-radius: 120px;
        padding: 30px 50px 25px 30px;
        display: inline-block;
        position: absolute;
        top: -48px;
        /* half outside */
        width: 500px;
        margin-left: -291px;

        left: 0;
        /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); */
      }

      .footer-logo img {
        height: 65px;
      }

      /* Links */
      .footer a {
        color: #ddd;
        transition: 0.3s;
      }

      .footer a:hover {
        color: #ff6600;
      }

      /* Form */
      .footer .form-control {
        background-color: #1c335f;
        border: none;
        color: #fff;
        padding: 12px 15px;
      }

      .footer .form-control::placeholder {
        color: #bbb;
      }

      .footer .btn-orange {
        background-color: #ff6600;
        color: #fff;
        font-weight: bold;
        border: none;
        padding: 12px;
        transition: 0.3s;
      }

      .footer .btn-orange:hover {
        background-color: #e65500;
      }

      /* Bottom row */
      .footer-bottom {
        border-top: 1px solid #2a406e;
        margin-top: 30px;
        padding-top: 15px;
        font-size: 14px;
      }
    </style>
    <!-- rounded animation -->
    <style>
      :root {
        --rotate-speed: 40;
        --count: 8;
        /* Default count, the DOM element should override this */
        --easeInOutSine: cubic-bezier(0.37, 0, 0.63, 1);
        --easing: cubic-bezier(0.000, 0.37, 1.000, 0.63);
      }


      #main-wrapper {
        width: 100%;
        /* padding: 20px; */
      }

      #container {
        width: 100%;
        /* max-width: 1000px; */
        margin: auto;
        position: relative;
        aspect-ratio: 1 / 1;
        padding: 50px;
      }

      #item-list:hover * {
        animation-play-state: paused;
      }

      #item-list {
        list-style-type: none;
        margin: 0;
        padding: 0;
        position: relative;
        width: 100%;
        aspect-ratio: 1 / 1;
        outline: 2px dotted magenta;
        z-index: 1;
      }

      #item-list li {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        animation: rotateCW calc(var(--rotate-speed) * 1s) var(--easing) infinite;
      }

      #item-1,
      #item-2,
      #item-3,
      #item-4,
      #item-5,
      #item-6 {
        width: 27%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 16px 24px;
        gap: 8px;
        background: #FFFFFF;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1), 0px 16px 32px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        font-family: 'Inter', sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
        color: #535062;
        animation: rotateCCW calc(var(--rotate-speed) * 1s) var(--easing) infinite;
      }

      a {
        text-decoration: none;
        color: unset;
      }

      #title-1,
      #title-2,
      #title-3,
      #title-4,
      #title-5,
      #title-6 {
        font-weight: 500;
        font-size: 18px;
        line-height: 150%;
        color: #3B2ED0;
        display: block;
      }

      #item-list li:nth-child(2),
      #item-list li:nth-child(2) #item-2 {
        animation-delay: calc((var(--rotate-speed)/var(--count)) * -1s);
      }

      #item-list li:nth-child(3),
      #item-list li:nth-child(3) #item-3 {
        animation-delay: calc((var(--rotate-speed)/var(--count)) * -2s);
      }

      #item-list li:nth-child(4),
      #item-list li:nth-child(4) #item-4 {
        animation-delay: calc((var(--rotate-speed)/var(--count)) * -3s);
      }

      #item-list li:nth-child(5),
      #item-list li:nth-child(5) #item-5 {
        animation-delay: calc((var(--rotate-speed)/var(--count)) * -4s);
      }

      #item-list li:nth-child(6),
      #item-list li:nth-child(6) #item-6 {
        animation-delay: calc((var(--rotate-speed)/var(--count)) * -5s);
      }

      #item-list li:nth-child(7),
      #item-list li:nth-child(7) #item-7 {
        animation-delay: calc((var(--rotate-speed)/var(--count)) * -6s);
      }

      #item-list li:nth-child(8),
      #item-list li:nth-child(8) #item-8 {
        animation-delay: calc((var(--rotate-speed)/var(--count)) * -7s);
      }

      @keyframes rotateCW {
        from {
          transform: translate3d(0px, -50%, -1px) rotate(-45deg);
        }

        to {
          transform: translate3d(0px, -50%, 0px) rotate(-315deg);
        }
      }

      @keyframes rotateCCW {
        from {
          transform: rotate(45deg);
        }

        to {
          transform: rotate(315deg);
        }
      }

      @keyframes pulseGlow {
        from {
          background-size: 60%;
        }

        to {
          background-size: 100%;
        }
      }

      #inner-ring {
        position: absolute;
        width: 230px;
        aspect-ratio: 1 / 1;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        background: #FFFFFF;
        box-shadow: 0px 18px 36px -18px rgba(12, 5, 46, 0.3), 0px 30px 60px -12px rgba(12, 5, 46, 0.25);
        border-radius: 50%;
      }

      #middle-ring {
        position: absolute;
        width: 40%;
        aspect-ratio: 1 / 1;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        background: #F5F4FE;
        opacity: 0.5;
        box-shadow: 0px 18px 36px -18px rgba(12, 5, 46, 0.3), 0px 30px 60px -12px rgba(12, 5, 46, 0.25);
        border-radius: 50%;
      }

      #outer-ring {
        position: absolute;
        width: 66%;
        aspect-ratio: 1 / 1;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        background: #F5F4FE;
        opacity: 0.25;
        box-shadow: 0px 18px 36px -18px rgba(12, 5, 46, 0.3), 0px 30px 60px -12px rgba(12, 5, 46, 0.25);
        border-radius: 50%;
      }

      #wrapper {
        -webkit-mask-image: linear-gradient(90deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 1) 50%, rgba(0, 0, 0, 1));
      }

      #overlay {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 50%;
        animation: pulseGlow 5s linear infinite alternate;
        background-position: 100% 50%;
        background-repeat: no-repeat;
        background-image: radial-gradient(100% 50% at 100% 50%, rgba(60, 26, 229, 0.25) 0%, rgba(60, 26, 229, 0.247904) 11.79%, rgba(59, 26, 229, 0.241896) 21.38%, rgba(58, 26, 229, 0.2324) 29.12%, rgba(57, 26, 229, 0.219837) 35.34%, rgba(55, 26, 229, 0.20463) 40.37%, rgba(53, 26, 229, 0.1872) 44.56%, rgba(51, 26, 229, 0.16797) 48.24%, rgba(48, 26, 229, 0.147363) 51.76%, rgba(46, 26, 229, 0.1258) 55.44%, rgba(44, 26, 229, 0.103704) 59.63%, rgba(41, 26, 229, 0.0814963) 64.66%, rgba(39, 26, 229, 0.0596) 70.88%, rgba(36, 26, 229, 0.038437) 78.62%, rgba(34, 26, 229, 0.0184296) 88.21%, rgba(32, 26, 229, 0) 100%);
      }

      #overlay:after {
        content: "";
        position: absolute;
        width: 1px;
        height: 100%;
        right: 0;
        display: block;
        background-image: linear-gradient(180deg, rgba(60, 26, 229, 0) 0%, #3C1AE5 50%, rgba(60, 26, 229, 0) 100%);
      }

      /* Responsive Adjustments */
      @media screen and (max-width: 576px) {
        #container {
          max-width: 350px;
          padding: 20px;
        }

        #item-1,
        #item-2,
        #item-3,
        #item-4,
        #item-5,
        #item-6 {
          width: 40%;
          padding: 10px 14px;
          font-size: 10px;
          border-radius: 8px;
        }

        #title-1,
        #title-2,
        #title-3,
        #title-4,
        #title-5,
        #title-6 {
          font-size: 14px;
        }

        #inner-ring {
          width: 120px;
        }

        #middle-ring {
          width: 45%;
        }

        #outer-ring {
          width: 70%;
        }

        #item-list {
          --count: 3;
          /* Adjust count for 3 cards on mobile */
        }

        #item-4,
        #item-5,
        #item-6 {
          display: none;
          /* Hide extra cards on mobile */
        }
      }

      @media screen and (min-width: 577px) and (max-width: 768px) {
        #container {
          max-width: 600px;
          padding: 30px;
        }

        #item-1,
        #item-2,
        #item-3,
        #item-4,
        #item-5,
        #item-6 {
          width: 35%;
          padding: 12px 18px;
          font-size: 12px;
        }

        #title-1,
        #title-2,
        #title-3,
        #title-4,
        #title-5,
        #title-6 {
          font-size: 16px;
        }

        #inner-ring {
          width: 180px;
        }

        #middle-ring {
          width: 40%;
        }

        #outer-ring {
          width: 65%;
        }
      }

      @media screen and (min-width: 769px) and (max-width: 992px) {
        #container {
          max-width: 800px;
          padding: 40px;
        }

        #item-1,
        #item-2,
        #item-3,
        #item-4,
        #item-5,
        #item-6 {
          width: 30%;
          padding: 14px 20px;
          font-size: 13px;
        }

        #title-1,
        #title-2,
        #title-3,
        #title-4,
        #title-5,
        #title-6 {
          font-size: 17px;
        }

        #inner-ring {
          width: 200px;
        }

        #middle-ring {
          width: 38%;
        }

        #outer-ring {
          width: 63%;
        }
      }

      @media screen and (min-width: 993px) {
        #container {
          max-width: 1000px;
          padding: 50px;
        }

        #item-1,
        #item-2,
        #item-3,
        #item-4,
        #item-5,
        #item-6 {
          width: 27%;
          padding: 16px 24px;
          font-size: 14px;
        }

        #title-1,
        #title-2,
        #title-3,
        #title-4,
        #title-5,
        #title-6 {
          font-size: 18px;
        }

        #inner-ring {
          width: 230px;
        }

        #middle-ring {
          width: 40%;
        }

        #outer-ring {
          width: 66%;
        }
      }
    </style>
    <style>
      .logo-box {
        /* background-color: #f7f7f7; */
        padding: 20px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px;
        transition: transform 0.3s ease;
      }
    </style>
    <!-- Additional Responsive Styles -->
    <style>
      /* General Responsive Adjustments */
      @media (max-width: 1200px) {
        .hero .media-right {
          width: 45vw;
        }

        .steps {
          grid-template-columns: repeat(4, 280px);
          gap: 16px;
        }

        .step {
          font-size: 0.85rem;
          padding: 18px 70px 18px 20px;
        }

        .book-background {
          height: 400px;
        }

        .book-image {
          max-width: 600px;
        }

        .content-box {
          padding: 30px 40px;
          margin: 0 -30px;
        }
      }

      @media (max-width: 992px) {
        /* Hero already has some styles */

        /* Content Section */
        .content-section {
          padding: 80px 0;
        }

        .main-title {
          font-size: clamp(2rem, 5vw, 2.5rem);
        }

        .content-text {
          font-size: clamp(1rem, 1.3vw, 1.1rem);
        }

        /* Book Section */
        .content-box {
          margin: 0;
          margin-bottom: 30px;
        }

        .content-box-top,
        .content-box-bottom {
          margin-top: 0;
        }

        .book-background {
          height: 300px;
        }

        .book-image {
          max-width: 500px;
        }

        /* SVG Section */
        .svg-section {
          padding: 60px 0;
        }

        .svg-container {
          height: 300px;
        }

        .center-content h3 {
          font-size: 1.6rem;
        }

        .center-content p {
          font-size: 0.95rem;
        }

        /* CTA Carousel */
        .cta-item {
          height: 300px;
          padding: 40px;
        }

        .cta-item h2 {
          font-size: 1.8rem;
          max-width: 500px;
        }

        /* Priority Section */
        .priority-wrapper {
          padding: 60px 0;
        }

        .priority-section h2 {
          font-size: 2.2rem;
        }

        .priority-section .sub-text {
          font-size: 1.05rem;
        }

        .priority-card {
          padding: 1.5rem;
        }

        .priority-icon {
          font-size: 35px;
          width: 55px;
          height: 55px;
        }

        .priority-image img {
          max-height: 600px;
        }

        /* Demand Section */
        .demand-section {
          padding: 100px 0;
        }

        .demand-section h2 {
          font-size: 28px;
        }

        .demand-card {
          width: 240px;
          padding: 15px;
        }

        .demand-card h5 {
          font-size: 14px;
        }

        .demand-card p {
          font-size: 12px;
        }

        .card-bottom-center {
          bottom: -80px;
        }

        /* Footer */
        .footer-logo {
          top: -30px;
          padding: 20px 40px 20px 20px;
        }

        .footer-logo img {
          height: 50px;
        }
      }

      @media (max-width: 768px) {

        /* Navbar */
        .navbar-brand {
          font-size: 1.5rem;
        }

        .nav-link {
          font-size: 1rem;
          margin: 0 8px;
        }

        .search-box input {
          padding: 6px 30px 6px 10px;
        }

        .search-box .bi-search {
          font-size: 1rem;
          right: 10px;
        }

        /* Hero */
        .hero h1 {
          font-size: clamp(2.5rem, 7vw, 5rem);
        }

        .hero p {
          font-size: clamp(0.9rem, 1.2vw, 1rem);
        }

        .btn-orange {
          padding: 12px 24px;
        }

        .steps {
          grid-template-columns: 1fr;
          height: auto;
        }

        .step {
          min-height: auto;
          padding: 15px 40px 15px 20px;
          border-radius: 12px;
          transform: none;
        }

        .step>* {
          transform: none;
        }

        .step .arrow {
          right: 15px;
          font-size: 1.2rem;
        }

        /* Content Section */
        .content-section {
          padding: 60px 0;
        }

        .main-title {
          font-size: clamp(1.8rem, 5vw, 2.2rem);
        }

        .content-text {
          font-size: 1rem;
        }

        /* Book Section */
        .row.align-items-center {
          flex-direction: column;
        }

        .content-box {
          padding: 25px;
          margin: 20px 0;
        }

        .book-background {
          height: 200px;
          margin: 20px 0;
        }

        .book-image {
          max-width: 300px;
        }

        /* SVG Section */
        .svg-section {
          padding: 40px 0;
        }

        .svg-container {
          height: 200px;
          align-items: center !important;
        }

        .svg-image {
          max-width: 80%;
        }

        .center-content {
          padding: 30px 15px;
        }

        .center-content h3 {
          font-size: 1.4rem;
        }

        .center-content p {
          font-size: 0.9rem;
        }

        /* CTA Carousel */
        .cta-item {
          height: 250px;
          padding: 30px;
          text-align: center;
        }

        .cta-item h2 {
          font-size: 1.5rem;
          max-width: 100%;
        }

        .cta-item .btn-custom {
          padding: 8px 16px;
        }

        /* Priority Section */
        .priority-wrapper {
          padding: 40px 0;
        }

        .priority-section h2 {
          font-size: 2rem;
        }

        .priority-section .sub-text {
          font-size: 1rem;
        }

        .priority-card {
          padding: 1.2rem;
          margin: 15px 0;
        }

        .priority-icon {
          font-size: 30px;
          width: 50px;
          height: 50px;
          margin-right: 15px;
        }

        .priority-image {
          display: none;
          /* Hide decorative image on small screens */
        }

        .video-wrapper video {
          border-radius: 15px;
        }

        /* Demand Section */
        .demand-section {
          padding: 80px 0;
        }

        .demand-section h2 {
          font-size: 24px;
          margin: 20px 0;
        }

        .demand-wrapper {
          position: static;
          flex-direction: column;
          height: auto;
          gap: 20px;
        }

        .demand-wrapper .demand-card {
          position: static;
          transform: none;
          width: 90%;
          margin: 0 auto;
        }

        .card-bottom-center {
          bottom: auto;
        }

        /* Footer */
        .footer {
          padding-top: 60px;
          /* Adjust for logo */
        }

        .footer-logo {
          position: static;
          margin-bottom: 20px;
          border-bottom-right-radius: 0;
          padding: 20px;
          display: block;
        }

        .footer .col-lg-3,
        .footer .col-lg-2,
        .footer .col-lg-5 {
          margin-bottom: 30px;
        }

        .footer-bottom {
          text-align: center;
        }

        .footer-bottom .col-md-6 {
          margin-bottom: 10px;
        }
      }

      @media (max-width: 576px) {

        /* Extra small devices */
        .navbar-brand {
          font-size: 1.3rem;
        }

        .nav-link {
          font-size: 0.9rem;
        }

        .hero h1 {
          font-size: clamp(2rem, 7vw, 4rem);
        }

        .hero p {
          font-size: 0.9rem;
        }

        .btn-orange {
          padding: 10px 20px;
          font-size: 0.9rem;
        }

        .step {
          font-size: 0.8rem;
          padding: 12px 30px 12px 15px;
        }

        .content-section {
          padding: 40px 0;
        }

        .main-title {
          font-size: 1.8rem;
        }

        .content-text {
          font-size: 0.95rem;
        }

        .content-box h3 {
          font-size: 1.3rem;
        }

        .content-box p {
          font-size: 0.9rem;
        }

        .svg-container {
          height: 150px;
        }

        .center-content h3 {
          font-size: 1.2rem;
        }

        .center-content p {
          font-size: 0.85rem;
        }

        .cta-item {
          height: 200px;
          padding: 20px;
        }

        .cta-item h2 {
          font-size: 1.3rem;
        }

        .priority-section h2 {
          font-size: 1.8rem;
        }

        .priority-card h4 {
          font-size: 1.2rem;
        }

        .priority-card p {
          font-size: 0.9rem;
        }

        .demand-section h2 {
          font-size: 20px;
        }

        .demand-card {
          width: 100%;
          padding: 12px;
        }

        .demand-card h5 {
          font-size: 13px;
        }

        .demand-card p {
          font-size: 11px;
        }

        .footer .btn-orange {
          padding: 10px;
        }

        .footer-bottom {
          font-size: 12px;
        }
      }
    </style>