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
    <!-- Navbar -->
    <style>
      /* -------------------- Navbar Base -------------------- */
      .navbar {
        background: transparent;
        transition: all 0.4s ease-in-out;
        padding: 18px 0;
      }

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

      /* -------------------- Search Box -------------------- */
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

      /* -------------------- Navbar Toggler -------------------- */
      .navbar-toggler {
        border: none;
        outline: none;
      }

      .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255,255,255,1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
      }

      .navbar.scrolled .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%280,0,0,1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
      }

      /* -------------------- Sidebar Dropdown -------------------- */
      .sidebar-dropdown {
        position: fixed;
        top: 0;
        right: -350px;
        width: 350px;
        height: 100vh;
        background: linear-gradient(135deg, #0072BC, #0072BC);
        color: #fff;
        box-shadow: -6px 0 25px rgba(0, 0, 0, 0.3);
        transition: right 0.7s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        z-index: 9999;
        padding: 50px 25px;
        overflow-y: auto;
      }

      .sidebar-dropdown.active {
        right: 0;
      }

      .sidebar-dropdown h3 {
        font-size: 1.6rem;
        margin-bottom: 30px;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.3);
        padding-bottom: 12px;
      }

      .sidebar-dropdown ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .sidebar-dropdown ul li {
        margin: 15px 0;
        opacity: 0;
        transform: translateX(40px);
      }

      .sidebar-dropdown.active ul li {
        animation: slideIn 0.6s forwards;
      }

      .sidebar-dropdown.active ul li:nth-child(1) {
        animation-delay: 0.15s;
      }

      .sidebar-dropdown.active ul li:nth-child(2) {
        animation-delay: 0.3s;
      }

      .sidebar-dropdown.active ul li:nth-child(3) {
        animation-delay: 0.45s;
      }

      .sidebar-dropdown.active ul li:nth-child(4) {
        animation-delay: 0.6s;
      }

      .sidebar-dropdown.active ul li:nth-child(5) {
        animation-delay: 0.75s;
      }

      .sidebar-dropdown.active ul li:nth-child(6) {
        animation-delay: 0.9s;
      }

      @keyframes slideIn {
        to {
          opacity: 1;
          transform: translateX(0);
        }
      }

      .sidebar-dropdown ul li a {
        text-decoration: none;
        color: #fff;
        font-size: 1.15rem;
        font-weight: 500;
        display: block;
        transition: all 0.3s ease;
        padding: 12px 15px;
        border-radius: 6px;
        position: relative;
      }

      .sidebar-dropdown ul li a::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background: #ff7f50;
        border-radius: 0 4px 4px 0;
        transform: scaleY(0);
        transition: transform 0.3s ease;
      }

      .sidebar-dropdown ul li a:hover::before {
        transform: scaleY(1);
      }

      .sidebar-dropdown ul li a:hover {
        background: rgba(255, 255, 255, 0.1);
        color: #ffdfb3;
        transform: translateX(8px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.25);
      }

      /* -------------------- Responsive -------------------- */
      @media (max-width: 768px) {
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
      }

      @media (max-width: 576px) {
        .navbar-brand {
          font-size: 1.3rem;
        }

        .nav-link {
          font-size: 0.9rem;
        }

        .search-box input {
          font-size: 0.9rem;
        }
      }

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

      #particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        /* video ke upar, text ke niche */
        pointer-events: none;
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
        height: 90%;
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
        background: #043369ff;
        /* Navy Blue */
      }

      .step:nth-child(2) {
        background: #1E3A8A;
        /* Indigo Blue */
      }

      .step:nth-child(3) {
        background: #2563EB;
        /* Royal Blue */
      }

      .step:nth-child(4) {
        background: #38BDF8;
        /* Sky Blue */
      }

      .step {
        opacity: 1 !important;
        color: #fff;
        border-radius: 12px;
        padding: 18px;
        transition: all 0.3s ease;
        border: none;
      }

      /* Hover effect */
      .step:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 22px rgba(30, 64, 175, 0.45);
        /* soft blue glow */
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

        background-image: url("https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDI0LTAyL3Jhd3BpeGVsX29mZmljZV8yM19ibHVlX2dsaXR0ZXJfb2Zfb2N0YWdvbl9pY29uX3NoYXBlX2NsaXBhcnRfdF9kZjkxZWY2Ny1lMzEzLTRhMzUtOGMzMy1kOTNhODgyMzIwM2FfMS5qcGc.jpg");
        background-size: contain;
        /* ya px me fix kar sakte ho */
        background-repeat: no-repeat;
        background-position: center top;

        animation: floatUpDown 10s ease-in-out infinite alternate;
      }

      #overlay:after {
        content: "";
        position: absolute;
        width: 1px;
        height: 100%;
        right: 0;
        display: block;
        background-image: linear-gradient(180deg,
            rgba(60, 26, 229, 0) 0%,
            #3C1AE5 50%,
            rgba(60, 26, 229, 0) 100%);
      }

      /* Up-Down animation */
      @keyframes floatUpDown {
        0% {
          background-position: center top;
        }

        50% {
          background-position: center bottom;
        }

        100% {
          background-position: center top;
        }
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
      .scroll-row {
        overflow: hidden;
        white-space: nowrap;
        margin: 20px 0;
        position: relative;
      }

      .scroll-wrapper {
        display: flex;
        width: max-content;
      }

      .scroll-content {
        display: flex;
      }

      .logo-box {
        min-width: 120px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .logo-box img {
        max-height: 80px;
        max-width: 100%;
      }

      /* Animations */
      .scroll-right-to-left .scroll-wrapper {
        animation: scroll-rtl 20s linear infinite;
      }

      .scroll-left-to-right .scroll-wrapper {
        animation: scroll-ltr 20s linear infinite;
      }

      @keyframes scroll-rtl {
        0% {
          transform: translateX(0);
        }

        100% {
          transform: translateX(-50%);
        }

        /* sirf aadha move karega */
      }

      @keyframes scroll-ltr {
        0% {
          transform: translateX(-50%);
        }

        100% {
          transform: translateX(0);
        }
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
    </style>
    <!-- about.php -->
    <style>
      ::selection {
        background: #87cd33;
        color: white;
      }

      .a1 {
        width: 100%;
        height: auto;
        background: #f0f0f0;
      }

      .a2 {
        padding-left: 1rem;
        list-style: none;
      }

      .a3 {
        flex-shrink: 0;
        width: clamp(500px, 60vw, 800px);
        padding-right: 1rem;
      }

      /* Reduce image size in first section */
      section.a10:nth-child(2) .a3 {
        width: clamp(300px, 40vw, 600px);
      }

      /* Reduce padding in second section */
      section.a10:nth-child(3) .a2 {
        padding-left: 0.5rem;
      }

      section.a10:nth-child(3) .a3 {
        padding-right: 0.5rem;
      }

      section.a10:not(.a13) {
        padding-bottom: 0.5rem;
      }

      .a4 {
        display: flex;
      }

      .a5 {
        align-items: center;
      }

      .a6 {
        justify-content: center;
      }

      .a7 {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: black;
        color: white;
        z-index: 1000;
      }

      .a8 {
        overflow-x: hidden;
      }

      .a9 {
        display: flex;
      }

      .a11 .a12 {
        font-size: clamp(10rem, 15vw, 10rem);
        line-height: 1;
        font-weight: 900;
      }
    </style>
    <!-- about section 3 -->
    <style>
      .xyzkjlmn {
        border: none;
        border-radius: 15px;
        background: #ffffff;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        position: relative;
        overflow: hidden;
      }

      .xyzkjlmn:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
      }

      .xyzkjlmn .fghjklwe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(0, 114, 188, 0.1), rgba(0, 196, 180, 0.1));
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 0;
      }

      .xyzkjlmn:hover .fghjklwe {
        opacity: 1;
      }

      .hjklpoiu {
        color: #0072BC;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s ease, transform 0.3s ease;
      }

      .hjklpoiu:hover {
        color: #00c4b4;
        transform: translateX(5px);
      }

      .qwertypo {
        font-size: 1.5rem;
        font-weight: 700;
        letter-spacing: -0.02em;
      }

      .mnbvcxza {
        font-size: 1rem;
        line-height: 1.6;
      }

      .zxcvbnmp {
        z-index: 1;
      }

      .asdjklwe {
        font-size: 2.25rem;
        line-height: 1.3;
        letter-spacing: -0.03em;
      }

      .lkjhgfdq {
        position: absolute;
      }

      @media (max-width: 768px) {
        .asdjklwe {
          font-size: 1.75rem;
        }

        .qwertypo {
          font-size: 1.25rem;
        }
      }
    </style>
    <!-- section 3 new -->
    <style>
      .content-container {
        display: flex;
      }

      .content-container>* {
        width: 50%;
      }

      .right-content {
        padding-right: 15px;

      }

      .left-content {
        height: 100vh;
        position: relative;
      }

      .left-content>* {
        position: absolute;
        left: 50%;
        top: 50%;
        opacity: 0;
        visibility: hidden;
      }

      @media screen and (max-width: 800px) {
        .left-content {
          display: none;
        }

        .right-content {
          padding-left: 15px;
          width: 100%;
        }

        .content-container {
          flex-direction: column;
        }
      }

      .header-section {
        text-align: center;
        padding: 1rem 6rem;
      }

      .gsap-logo {
        display: block;
        margin: 1rem auto;
        text-align: center;
      }

      .gsap-logo img {
        max-width: 100px;
      }

      .imageToShow {
        width: 400px;
        height: auto;
      }
    </style>
    <!-- scroll animation about -->
    <style>
      .hdfjdg,
      .jhhdfsjdfs {
        position: relative;
        width: 100%;
        z-index: 1;
      }

      .jhhdfsjdfs {
        overflow-x: hidden;
      }

      .jhhdfsjdfs .fsdjhhfsdjhhdfs {
        width: 100%;
        height: 100vh;
      }

      .jhhdfsjdfs .fsdjhhfsdjhhdfs.hdfjdg {
        background-image: url("https://images.unsplash.com/photo-1589848315097-ba7b903cc1cc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
      }

      .image-container {
        width: 100%;
        height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 2;
        perspective: 500px;
        overflow: hidden;
      }

      .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
      }
    </style>

    <style>
      .content-container {
        display: flex;
      }

      .content-container>* {
        width: 50%;
      }

      .right-content {
        padding-right: 15px;

      }

      .left-content {
        height: 100vh;
        position: relative;
      }

      .left-content>* {
        position: absolute;
        left: 50%;
        top: 50%;
        opacity: 0;
        visibility: hidden;
      }

      @media screen and (max-width: 800px) {
        .left-content {
          display: none;
        }

        .right-content {
          padding-left: 15px;
          width: 100%;
        }

        .content-container {
          flex-direction: column;
        }
      }

      .header-section {
        text-align: center;
        padding: 1rem 6rem;
      }

      .gsap-logo {
        display: block;
        margin: 1rem auto;
        text-align: center;
      }

      .gsap-logo img {
        max-width: 100px;
      }

      .imageToShow {
        width: 400px;
        height: auto;
      }
    </style>

    <!-- about /meettheteam.php -->

    <style>
      .team_hdjhdskjh_container {
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        flex-wrap: wrap;
      }

      .team_hdjhdskjh_container:after {
        content: "";
        width: 20%;
        min-width: 180px;
      }

      .team_hdjhdskjh_card {
        width: 20%;
        min-width: 180px;
        margin-bottom: 16px;
        position: relative;
      }

      .team_hdjhdskjh_card figure {
        width: 85%;
      }

      .team_hdjhdskjh_card .team_hdjhdskjh_overflow-wrapper {
        width: 85%;
        overflow: hidden;
        position: relative;
      }

      .team_hdjhdskjh_card .team_hdjhdskjh_overflow-wrapper figure {
        width: 100%;
      }

      .team_hdjhdskjh_card .team_hdjhdskjh_front {
        position: relative;
        z-index: 2;
        margin: 0 auto;
        background-color: white;
      }

      .team_hdjhdskjh_card .team_hdjhdskjh_front img {
        width: 100%;
      }

      .team_hdjhdskjh_card .team_hdjhdskjh_back {
        height: 100%;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        padding: 0;
        text-align: left;
        background-color: #556AA5;
        color: white;
        font-weight: 400;
      }

      .team_hdjhdskjh_card .team_hdjhdskjh_back>* {
        padding: 0 16px;
      }

      .team_hdjhdskjh_card .team_hdjhdskjh_back h5 {
        padding-top: 16px;
        font-size: 2vw;
        line-height: 2.2vw;
      }

      .team_hdjhdskjh_card .team_hdjhdskjh_back .team_hdjhdskjh_title {
        padding-bottom: 0.8vw;
        color: #51C3C3;
      }

      .team_hdjhdskjh_card .team_hdjhdskjh_back .team_hdjhdskjh_bio {
        padding-bottom: 1vw;
        font-size: 1vw;
        line-height: 1.3vw;
      }

      .team_hdjhdskjh_card .team_hdjhdskjh_back .team_hdjhdskjh_social {
        width: 100%;
        justify-content: flex-start;
        padding-bottom: 16px;
      }

      .team_hdjhdskjh_card .team_hdjhdskjh_back .team_hdjhdskjh_icon {
        width: 2.5vw;
        height: 2.5vw;
        position: relative;
        margin-right: 6px;
        border-radius: 100%;
        background-color: white;
      }

      .team_hdjhdskjh_card .team_hdjhdskjh_back .team_hdjhdskjh_icon:before {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1.6vw;
        color: #556AA5;
      }

      .team_hdjhdskjh_flipY {
        perspective: 1500px;
      }

      .team_hdjhdskjh_flipY:hover .team_hdjhdskjh_flip-container {
        transform: rotateY(180deg);
      }

      .team_hdjhdskjh_flip-container {
        transition: all 500ms ease-in;
        transform-style: preserve-3d;
      }

      .team_hdjhdskjh_flip-container figure {
        backface-visibility: hidden;
      }

      .team_hdjhdskjh_flip-container .team_hdjhdskjh_back {
        transform: translateX(-50%) rotateY(180deg);
      }

      .team_hdjhdskjh_slideDown .team_hdjhdskjh_front {
        z-index: 0;
      }

      .team_hdjhdskjh_slideDown .team_hdjhdskjh_back {
        max-height: 0;
        overflow: hidden;
        transition: all 500ms linear;
      }

      .team_hdjhdskjh_slideDown:hover .team_hdjhdskjh_back {
        max-height: 100%;
      }

      .team_hdjhdskjh_slideUp .team_hdjhdskjh_front {
        z-index: 0;
      }

      .team_hdjhdskjh_slideUp .team_hdjhdskjh_back {
        bottom: 0;
        top: auto;
        max-height: 0;
        overflow: hidden;
        transition: all 500ms linear;
      }

      .team_hdjhdskjh_slideUp:hover .team_hdjhdskjh_back {
        max-height: 100%;
      }

      .team_hdjhdskjh_slideLeft .team_hdjhdskjh_front {
        z-index: 0;
      }

      .team_hdjhdskjh_slideLeft .team_hdjhdskjh_back {
        left: -100%;
        transform: none;
        transition: all 500ms linear;
      }

      .team_hdjhdskjh_slideLeft:hover .team_hdjhdskjh_back {
        left: 0;
      }

      .team_hdjhdskjh_fadeIn:hover .team_hdjhdskjh_front {
        opacity: 0;
        transition: opacity 500ms linear;
      }
    </style>

     <style>
        /*  Team Starts */
        .team-members {
            transform: rotate(-45deg);
        }

        .team-members li>div {
            float: left;
            width: 20%;
        }

        .team-members li:nth-child(2)>div:first-child {
            margin-left: 20%;
        }

        .team-members li:last-child>div:first-child {
            margin-left: 40%;
        }

        .member-details>div {
            background-color: #ddd;
            margin: 5px;
        }

        .member-details img {
            transform: rotate(45deg) translate(0, 15px) scale(1.2);
            display: block;
            width: 100%;
            height: 100%;
        }

        /* hover content - style */
        .member-details>div {
            position: relative;
            overflow: hidden;
        }

        .member-info {
            position: absolute;
            top: 50%;
            transform: rotate(45deg) translate(-12px, 15px);
            left: 0;
            right: 0;
            z-index: 2;
            text-align: center;
        }

        .member-info h3,
        .member-info p {
            margin: 0;
            color: #fff;
            position: relative;
            opacity: 0;
            visibility: hidden;
        }

        .member-info h3 {
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 400;
            top: -100px;
        }

        .member-info p {
            font-weight: 300;
            font-size: 12px;
            bottom: -150px;
        }

        .member-details>div:after {
            content: '';
            background-image: linear-gradient(45deg, rgba(14, 124, 226, 0.8) 50%, transparent 50%);
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;
            opacity: 0;
            visibility: hidden;
        }

        /* hover content - onhover */
        .member-details *,
        .member-details>div:after {
            cursor: pointer;
            transition: all .4s ease;
        }

        .member-details:hover *,
        .member-details:hover>div:after {
            opacity: 1;
            visibility: visible;
        }

        .member-details:hover .member-info h3 {
            top: 0;
        }

        .member-details:hover .member-info p {
            bottom: 0;
        }

        /* Team overview */
        .team-overview {
            padding-right: 15px;
        }

        .team-overview h2 {
            text-transform: uppercase;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .team-overview>a {
            margin-bottom: 30px;
            display: block;
        }

        .team-overview>a:before {
            content: '';
            width: 10px;
            height: 2px;
            position: relative;
            top: -3px;
            margin-right: 5px;
            background-color: #ccc;
            display: inline-block;
        }


        /* For centering elements - optional - Can use table,tablecell instead */
        .flex-center {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .flex-center>div:first-child {
            order: 2;
        }

        /* RESPONSIVE */
        @media only screen and (max-width : 992px) {
            .sm-no-flex {
                display: block;
            }

            .sm-no-float {
                float: none !important;
            }

            .sm-text-center {
                text-align: center;
            }
        }

        @media only screen and (max-width : 550px) {
            .team-members li {
                text-align: center;
            }

            .team-members li>div {
                float: none;
                display: inline-block;
                width: 30%;
                margin: 0 !important;
            }

            .team-members {
                transform: rotate(0);
            }

            .member-details img {
                transform: rotate(0) translate(0, 0);
            }

            .team-overview {
                padding: 15px;
            }

        }

        @media only screen and (max-width : 399px) {
            .team-members li>div {
                width: 48%;
            }
        }

        /* extra */
        .copyright {
            text-align: center;
            margin-top: 30px;
            font-size: 1.6rem;
            background-color: #ededed;
        }

        .copyright a {
            display: inline-block;
            padding: 15px 2px;
        }

        .copyright a:not(:last-child):after {
            content: "/";
            margin-left: 10px;
        }

        .toptal {
            color: #204ecf;
        }

        .upstack {
            color: #008bf7;
        }

        .upwork {
            color: #37a000;
        }

        .fiverr {
            color: #1dbf73;
        }

        .jobs {
            color: magenta;
            text-decoration: underline;
            margin-top: -15px;
        }
    </style>
    