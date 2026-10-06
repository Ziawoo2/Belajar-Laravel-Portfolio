<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Syazia Kamilah - Portfolio</title>
  
  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@700;800;900&family=Plus+Jakarta+Sans:wght@500;700;800&display=swap" rel="stylesheet">

  <style>
    /* ----------------------------------------------------
       1. COLOR PALETTE & BASE SETUP
       Limelight: #DFEF00 | Granny Smith: #B5D14C
       Oat: #F5DE8F | Ketchup: #D02618 | Red Wine: #910608
    ---------------------------------------------------- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      width: 100%;
      min-height: 100vh;
      overflow-x: hidden;
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #F5DE8F;
      background-image: radial-gradient(#B5D14C 3px, transparent 3px);
      background-size: 32px 32px;
      color: #910608;
      scroll-behavior: smooth;
    }

    .wrapper {
      width: 100%;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
    }

    .main-content {
      padding: 40px 8%;
      width: 100%;
      position: relative;
    }

    /* ----------------------------------------------------
       2. HEADER / NAVBAR
    ---------------------------------------------------- */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      margin-bottom: 50px;
      position: relative;
    }

    .brand-name {
      font-family: 'League Spartan', sans-serif;
      font-weight: 800;
      font-size: 1.6rem;
      color: #D02618;
      letter-spacing: 1px;
      position: relative;
    }

    .nav-links {
      display: flex;
      gap: 24px;
      align-items: center;
    }

    .nav-links a {
      text-decoration: none;
      color: #910608;
      font-weight: 800;
      font-size: 0.95rem;
      transition: color 0.2s;
    }

    .nav-links a:hover {
      color: #D02618;
    }

    .stars {
      color: #DFEF00;
      font-size: 1.5rem;
      letter-spacing: 3px;
      text-shadow: 1px 1px 0px #910608;
    }

    /* ----------------------------------------------------
       3. HERO SECTION (TITLE CENTERED)
    ---------------------------------------------------- */
    .hero-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      margin-bottom: 70px;
      position: relative;
    }

    .title-wrapper {
      position: relative;
      display: inline-block;
    }

    .main-title {
      font-family: 'League Spartan', sans-serif;
      font-size: 7rem;
      font-weight: 900;
      line-height: 0.9;
      color: #D02618;
      letter-spacing: 6px;
      text-transform: uppercase;
      text-shadow: 4px 4px 0px #910608;
    }

    .badge-2026 {
      position: absolute;
      top: -15px;
      right: -30px;
      background-color: #DFEF00;
      color: #910608;
      width: 85px;
      height: 85px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      font-family: 'League Spartan', sans-serif;
      font-weight: 800;
      font-size: 0.85rem;
      line-height: 1.1;
      transform: rotate(12deg);
      border: 3px solid #910608;
      box-shadow: 3px 3px 0px #910608;
    }

    .tag-designer {
      margin-top: 25px;
      background-color: #B5D14C;
      color: #910608;
      padding: 10px 28px;
      border-radius: 50px;
      font-family: 'League Spartan', sans-serif;
      font-weight: 800;
      font-size: 1rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      border: 3px solid #910608;
      box-shadow: 4px 4px 0px #910608;
      position: relative;
    }

    /* ----------------------------------------------------
       4. BIO SECTION
    ---------------------------------------------------- */
    .bio-section {
      margin-bottom: 80px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 40px;
      width: 100%;
      background: #ffffff;
      border: 4px solid #910608;
      padding: 40px;
      border-radius: 28px;
      box-shadow: 8px 8px 0px #D02618;
      position: relative;
    }

    .hello-title {
      font-family: 'League Spartan', sans-serif;
      font-size: 3.5rem;
      font-weight: 900;
      color: #D02618;
      letter-spacing: 2px;
    }

    .squiggly-line {
      width: 100px;
      height: 6px;
      background: #DFEF00;
      border: 2px solid #910608;
      margin-bottom: 20px;
      border-radius: 10px;
    }

    .bio-text {
      font-size: 1.05rem;
      line-height: 1.6;
      color: #910608;
    }

    .bio-text strong { color: #D02618; }
    .bio-text em { color: #910608; font-style: italic; font-weight: 700; }

    .photo-card {
      width: 320px;
      height: 230px;
      flex-shrink: 0;
      border-radius: 20px;
      overflow: hidden;
      border: 4px solid #910608;
      box-shadow: 6px 6px 0px #B5D14C;
      background-color: #fff;
      position: relative;
    }

    .photo-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* ----------------------------------------------------
       5. PROJECTS & CERTIFICATES COMMON STYLES
    ---------------------------------------------------- */
    .section-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      margin-bottom: 40px;
      border-bottom: 4px solid #910608;
      padding-bottom: 15px;
      position: relative;
    }

    .section-title {
      font-family: 'League Spartan', sans-serif;
      font-size: 3.2rem;
      font-weight: 900;
      color: #910608;
      line-height: 1;
      letter-spacing: 2px;
    }

    .section-subtitle {
      font-weight: 800;
      color: #D02618;
      font-size: 1.1rem;
    }

    /* Projects Grid */
    .projects-section {
      width: 100%;
      margin-top: 40px;
      margin-bottom: 80px;
    }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 35px;
      width: 100%;
    }

    .project-card {
      background: #ffffff;
      border: 4px solid #910608;
      border-radius: 24px;
      padding: 20px;
      box-shadow: 6px 6px 0px #910608;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
    }

    .project-card:hover {
      transform: translate(-4px, -4px);
      box-shadow: 10px 10px 0px #D02618;
    }

    .project-img-wrapper {
      width: 100%;
      height: 210px;
      border-radius: 14px;
      border: 3px solid #910608;
      overflow: hidden;
      margin-bottom: 18px;
      position: relative;
    }

    .project-img-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.4s ease;
    }

    .project-card:hover .project-img-wrapper img {
      transform: scale(1.08);
    }

    .project-category {
      position: absolute;
      top: 12px;
      left: 12px;
      background: #DFEF00;
      color: #910608;
      border: 2px solid #910608;
      padding: 4px 12px;
      border-radius: 20px;
      font-family: 'League Spartan', sans-serif;
      font-weight: 800;
      font-size: 0.8rem;
      text-transform: uppercase;
    }

    .project-info h3 {
      font-family: 'League Spartan', sans-serif;
      font-size: 1.5rem;
      font-weight: 800;
      margin-bottom: 8px;
      color: #910608;
      letter-spacing: 0.5px;
    }

    .project-info p {
      font-size: 0.95rem;
      color: #631213;
      line-height: 1.4;
      margin-bottom: 20px;
    }

    .project-tags {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
      margin-bottom: 15px;
    }

    .tag {
      font-size: 0.75rem;
      font-weight: 800;
      background: #F5DE8F;
      color: #910608;
      padding: 4px 10px;
      border-radius: 6px;
      border: 1.5px solid #910608;
    }

    .btn-project {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 12px;
      background: #D02618;
      color: #ffffff;
      text-decoration: none;
      font-family: 'League Spartan', sans-serif;
      font-weight: 800;
      font-size: 0.95rem;
      letter-spacing: 1px;
      border-radius: 12px;
      border: 2px solid #910608;
      transition: background 0.2s;
    }
    .btn-project:hover {
      background: #910608;
    }

    /* ----------------------------------------------------
       6. CERTIFICATES SECTION
    ---------------------------------------------------- */
    .certificates-section {
      width: 100%;
      margin-bottom: 80px;
    }

    .cert-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
    }

    .cert-card {
      background: #ffffff;
      border: 3px solid #910608;
      border-radius: 20px;
      padding: 18px;
      box-shadow: 5px 5px 0px #B5D14C;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: transform 0.2s;
      position: relative;
    }

    .cert-card:hover {
      transform: translateY(-4px);
    }

    .cert-img-wrapper {
      width: 100%;
      height: 160px;
      border-radius: 12px;
      border: 2px solid #910608;
      overflow: hidden;
      margin-bottom: 14px;
    }

    .cert-img-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .cert-info h4 {
      font-family: 'League Spartan', sans-serif;
      font-size: 1.2rem;
      font-weight: 800;
      color: #D02618;
      margin-bottom: 4px;
    }

    .cert-info p {
      font-size: 0.85rem;
      color: #910608;
      font-weight: 700;
      margin-bottom: 12px;
    }

    /* ----------------------------------------------------
       7. EXTRA TRINKETS & PERINTILAN RAME 🎀🍒🍭🍓
    ---------------------------------------------------- */
    .trinket {
      position: absolute;
      pointer-events: none;
      z-index: 10;
      user-select: none;
    }

    /* Header Trinket */
    .trinket-lollipop {
      top: -10px;
      right: -25px;
      font-size: 2rem;
      animation: spinSlow 8s linear infinite;
    }

    /* Title Trinkets */
    .trinket-ribbon-left {
      top: -20px;
      left: -60px;
      font-size: 3rem;
      animation: wiggle 3s infinite ease-in-out;
    }

    .trinket-ribbon-right {
      bottom: -15px;
      right: -50px;
      font-size: 2.5rem;
      transform: rotate(20deg);
      animation: wiggle 2.5s infinite ease-in-out reverse;
    }

    .trinket-strawberry {
      bottom: -18px;
      right: -15px;
      font-size: 2rem;
      animation: bounce 2s infinite alternate ease-in-out;
    }

    /* Bio Section Trinkets */
    .trinket-cherry {
      top: -20px;
      right: 25px;
      font-size: 2.8rem;
      transform: rotate(15deg);
    }

    .trinket-badge-cute {
      bottom: -18px;
      left: 30px;
      background: #DFEF00;
      color: #910608;
      border: 2px solid #910608;
      padding: 6px 14px;
      border-radius: 30px;
      font-family: 'League Spartan', sans-serif;
      font-weight: 800;
      font-size: 0.8rem;
      box-shadow: 3px 3px 0px #910608;
      transform: rotate(-5deg);
    }

    .trinket-cassette {
      top: -22px;
      left: -15px;
      font-size: 2.2rem;
      transform: rotate(-12deg);
    }

    .trinket-photo-bow {
      top: -12px;
      right: -12px;
      font-size: 1.8rem;
      z-index: 12;
    }

    /* Card Stickers & Stamps */
    .sticker-hot {
      position: absolute;
      top: -12px;
      right: -10px;
      background: #D02618;
      color: #fff;
      font-family: 'League Spartan', sans-serif;
      font-weight: 800;
      font-size: 0.75rem;
      padding: 4px 10px;
      border-radius: 12px;
      border: 2px solid #910608;
      transform: rotate(12deg);
      box-shadow: 2px 2px 0 #910608;
      z-index: 5;
    }

    .sticker-pickme {
      position: absolute;
      top: -12px;
      right: -10px;
      background: #DFEF00;
      color: #910608;
      font-family: 'League Spartan', sans-serif;
      font-weight: 800;
      font-size: 0.75rem;
      padding: 4px 10px;
      border-radius: 12px;
      border: 2px solid #910608;
      transform: rotate(-10deg);
      box-shadow: 2px 2px 0 #910608;
      z-index: 5;
    }

    .stamp-verified {
      position: absolute;
      top: -10px;
      right: -8px;
      background: #B5D14C;
      color: #910608;
      font-family: 'League Spartan', sans-serif;
      font-weight: 800;
      font-size: 0.7rem;
      padding: 3px 8px;
      border-radius: 8px;
      border: 2px solid #910608;
      transform: rotate(8deg);
      z-index: 5;
    }

    /* Floating Background Trinkets */
    .trinket-sparkle-1 {
      top: 32%;
      right: 4%;
      font-size: 2.5rem;
      color: #D02618;
      animation: float 2.5s infinite alternate ease-in-out;
    }

    .trinket-sparkle-2 {
      top: 65%;
      left: 2%;
      font-size: 2.8rem;
      color: #B5D14C;
      text-shadow: 2px 2px 0px #910608;
      animation: float 3.5s infinite alternate ease-in-out;
    }

    .trinket-flower-bg {
      top: 82%;
      right: 2%;
      font-size: 3rem;
      color: #DFEF00;
      text-shadow: 2px 2px 0 #910608;
      animation: spinSlow 12s linear infinite;
    }

    /* Keyframes */
    @keyframes wiggle {
      0%, 100% { transform: rotate(-8deg); }
      50% { transform: rotate(8deg); }
    }

    @keyframes float {
      from { transform: translateY(0px) rotate(0deg); }
      to { transform: translateY(-12px) rotate(15deg); }
    }

    @keyframes bounce {
      from { transform: translateY(0px); }
      to { transform: translateY(-8px); }
    }

    @keyframes spinSlow {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    /* ----------------------------------------------------
       8. MARQUEE & FOOTER
    ---------------------------------------------------- */
    .marquee-container {
      width: 100%;
      background: #D02618;
      color: #ffffff;
      overflow: hidden;
      white-space: nowrap;
      padding: 14px 0;
      border-top: 4px solid #910608;
      font-family: 'League Spartan', sans-serif;
      font-weight: 800;
      font-size: 1.1rem;
      letter-spacing: 2px;
    }

    .marquee-content {
      display: inline-block;
      animation: marquee 16s linear infinite;
    }

    @keyframes marquee {
      0% { transform: translateX(0%); }
      100% { transform: translateX(-50%); }
    }

    /* Responsive */
    @media (max-width: 900px) {
      .bio-section { flex-direction: column; align-items: flex-start; }
      .photo-card { width: 100%; max-width: 400px; }
    }

    @media (max-width: 768px) {
      .main-content { padding: 25px 20px; }
      .main-title { font-size: 4rem; }
      .section-title { font-size: 2.2rem; }
      .badge-2026 { width: 70px; height: 70px; font-size: 0.7rem; top: -10px; right: -10px; }
      .trinket-ribbon-left, .trinket-ribbon-right { display: none; }
    }
  </style>
</head>
<body>

  <div class="wrapper">
    <div class="main-content">
      
      <!-- NAVBAR -->
      <header class="header">
        <div class="brand-name">
          Syazia Kamilah
          <span class="trinket trinket-lollipop">🍭</span>
        </div>
        <nav class="nav-links">
          <a href="#about">About</a>
          <a href="#projects">Projects</a>
          <a href="#certificates">Certificates</a>
          <div class="stars">✦ ✦ ✦</div>
        </nav>
      </header>

      <!-- HERO BANNER -->
      <section class="hero-section">
        <div class="title-wrapper">
          <!-- Trinket Pita Kiri & Kanan -->
          <span class="trinket trinket-ribbon-left">🎀</span>
          <span class="trinket trinket-ribbon-right">🎀</span>

          <h1 class="main-title">PORTFOLIO</h1>
          <div class="badge-2026">
            2026<br>Edition
          </div>
        </div>

        <div class="tag-designer">
          Graphic Designer ✨
          <span class="trinket trinket-strawberry">🍓</span>
        </div>
      </section>

      <!-- BIO SECTION -->
      <section class="bio-section" id="about">
        <!-- Trinkets di Bio -->
        <span class="trinket trinket-cassette">📟</span>
        <span class="trinket trinket-cherry">🍒</span>
        <div class="trinket trinket-badge-cute">CREATIVE MIND ✨</div>

        <div class="bio-text-wrapper">
          <h2 class="hello-title">HELLO! 🌼</h2>
          <div class="squiggly-line"></div>

          <p class="bio-text">
            It's <strong>Syazia Kamilah</strong>! A graphic design student majored in 
            <em>Software Programmer</em> based in Makassar. I'm interested in challenging myself to 
            <strong>gaining new knowledge</strong> and <strong>developing my creativity</strong> in fun and retro-vibrant designs.
          </p>
        </div>

        <div class="photo-card">
          <span class="trinket trinket-photo-bow">🎀</span>
          <img src="cat.jpeg" alt="Cat Profile">
        </div>
      </section>

      <!-- PROJECTS SECTION -->
      <section class="projects-section" id="projects">
        <div class="section-header">
          <h2 class="section-title">FEATURED<br>WORKS 🎨</h2>
          <span class="section-subtitle">(2025 - 2026) ✦</span>
        </div>

        <div class="projects-grid">
          
          <!-- PROJECT 1 -->
          <div class="project-card">
            <span class="sticker-hot">HOT ITEM 💥</span>
            <div>
              <div class="project-img-wrapper">
                <span class="project-category">Media</span>
                <img src="insta feed.png" alt="Project 1">
              </div>
              <div class="project-info">
                <h3>FRUTIGER AERO Y2K INSTAGRAM FEED</h3>
                <p>Visual identity for an English club in SMK TELKOM MAKASSAR's Instagram.</p>
                <div class="project-tags">
                  <span class="tag">Affinity</span>
                  <span class="tag">Instagram</span>
                  <span class="tag">Media</span>
                </div>
              </div>
            </div>
            <a href="https://canva.link/ovn3l6va80pda83" target="_blank" class="btn-project">VIEW PROJECT ↗</a>
          </div>

          <!-- PROJECT 2 -->
          <div class="project-card">
            <span class="sticker-pickme">MUST SEE ⭐️</span>
            <div>
              <div class="project-img-wrapper">
                <span class="project-category" style="background:#D02618; color:#fff;">Poster Design</span>
                <img src="LSRFM.png" alt="Project 2">
              </div>
              <div class="project-info">
                <h3>LESSERAFIM ALBUM SPONSOR POSTER</h3>
                <p>New album sponsor poster series with vibrant elements and custom typography.</p>
                <div class="project-tags">
                  <span class="tag">Affinity</span>
                  <span class="tag">Poster</span>
                  <span class="tag">Typography</span>
                </div>
              </div>
            </div>
            <a href="https://pin.it/6rWMfJ5T8" target="_blank" class="btn-project">VIEW PROJECT ↗</a>
          </div>

          <!-- PROJECT 3 -->
          <div class="project-card">
            <span class="sticker-hot" style="background:#B5D14C; color:#910608;">NEW! 🌿</span>
            <div>
              <div class="project-img-wrapper">
                <span class="project-category" style="background:#B5D14C; color:#910608;">UI/UX</span>
                <img src="ecolore.png" alt="Project 3">
              </div>
              <div class="project-info">
                <h3>ECO FRIENDLY APP</h3>
                <p>Interactive mobile app design for Eco friendly and education about nature.</p>
                <div class="project-tags">
                  <span class="tag">Figma</span>
                  <span class="tag">Mobile App</span>
                  <span class="tag">UI/UX</span>
                </div>
              </div>
            </div>
            <a href="https://www.figma.com/design/SL6oIyD3IfVawMc2JFiUWX/EcoLore?node-id=0-1&p=f&t=zw09ke2esVlCx9lj-0" target="_blank" class="btn-project">VIEW PROJECT ↗</a>
          </div>

        </div>
      </section>

      <!-- CERTIFICATES SECTION -->
      <section class="certificates-section" id="certificates">
        <div class="section-header">
          <h2 class="section-title">MY<br>CERTIFICATES 📜</h2>
          <span class="section-subtitle">achievements & courses 🎖️</span>
        </div>

        <div class="cert-grid">
          
          <!-- CERTIFICATE 1 -->
          <div class="cert-card">
            <span class="stamp-verified">VERIFIED 🏆</span>
            <div>
              <div class="cert-img-wrapper">
                <img src="sertif1.png" alt="Certificate 1">
              </div>
              <div class="cert-info">
                <h4>Develop a company website with wix</h4>
                <p>Issued by Coursera • 2026</p>
              </div>
            </div>
            <a href="#" target="_blank" class="btn-project" style="padding: 8px; font-size: 0.8rem;">VIEW CREDENTIAL ↗</a>
          </div>

          <!-- CERTIFICATE 2 -->
          <div class="cert-card">
            <span class="stamp-verified">PASSED ⭐️</span>
            <div>
              <div class="cert-img-wrapper">
                <img src="sertif2.png" alt="Certificate 2">
              </div>
              <div class="cert-info">
                <h4>Graphic Design : Pop your linkedin with 3D Effects</h4>
                <p>Issued by Coursera • 2025</p>
              </div>
            </div>
            <a href="#" target="_blank" class="btn-project" style="padding: 8px; font-size: 0.8rem;">VIEW CREDENTIAL ↗</a>
          </div>

          <!-- CERTIFICATE 3 -->
          <div class="cert-card">
            <span class="stamp-verified">COMPLETED 🎓</span>
            <div>
              <div class="cert-img-wrapper">
                <img src="sertif3.png" alt="Certificate 3">
              </div>
              <div class="cert-info">
                <h4>Build a free website wordpress</h4>
                <p>Issued by Coursera • 2026</p>
              </div>
            </div>
            <a href="#" target="_blank" class="btn-project" style="padding: 8px; font-size: 0.8rem;">VIEW CREDENTIAL ↗</a>
          </div>

        </div>
      </section>

      <!-- FLOATING TRINKETS BACKGROUND -->
      <div class="trinket trinket-sparkle-1">✦</div>
      <div class="trinket trinket-sparkle-2">✧</div>
      <div class="trinket trinket-flower-bg">✿</div>

    </div>

    <!-- RUNNING TEXT -->
    <div class="marquee-container">
      <div class="marquee-content">
        ✦ GRAPHIC DESIGNER ✦ MAKASSAR BASED ✦ OPEN FOR FREELANCE ✦ PORTFOLIO 2026 ✦ GRAPHIC DESIGNER ✦ MAKASSAR BASED ✦ OPEN FOR FREELANCE ✦ PORTFOLIO 2026 ✦
      </div>
    </div>
  </div>

</body>
</html><?php /**PATH C:\Users\LENOVO\belajar-laravel\resources\views/welcome.blade.php ENDPATH**/ ?>