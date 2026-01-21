<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Apexiol Digital — Marketing Agency</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
:root {
  --bg-color:#c0c0c0;      /* Logo background gray */
  --accent:#1f2e5f;        /* Dark blue bars */
  --highlight:#e0b800;     /* Slightly softer golden accent */
  --text-dark:#1a1a1a;
  --text-muted:#555;
  --section-bg:#f7f7f7;
  --border:#ddd;
}

/* GENERAL */
*{margin:0;padding:0;box-sizing:border-box;font-family:Inter,sans-serif;}
html{scroll-behavior:smooth;}
body{background:var(--bg-color);color:var(--text-dark);}
a{text-decoration:none;color:inherit;}
section{padding:100px 20px;max-width:1200px;margin:auto;}

/* NAVIGATION */
nav{
  position:fixed;width:100%;top:0;z-index:1000;
  background:rgba(255,255,255,0.95);backdrop-filter:blur(10px);
  border-bottom:1px solid var(--border);
}
.nav-container{max-width:1200px;margin:auto;padding:18px 20px;display:flex;justify-content:space-between;align-items:center;}
.nav-container .brand{font-weight:800;font-size:24px;color:var(--accent);}
.nav-links a{margin-left:28px;font-size:14px;color:var(--text-muted);transition:color .3s;}
.nav-links a:hover{color:var(--highlight);}

/* HERO */
.hero{
  display:flex;flex-wrap:wrap;align-items:center;justify-content:flex-start;
  max-width:1200px;margin:auto;padding:140px 20px 100px;
}
.hero-text{flex:1;min-width:300px;}
.hero-text h1{font-size:58px;line-height:1.1;color:var(--text-dark);}
.hero-text h1 span{color:var(--highlight);}
.hero-text p{margin-top:24px;font-size:18px;color:var(--text-muted);}
.hero-cta{
  margin-top:40px;display:inline-block;padding:16px 44px;
  border-radius:40px;background:var(--accent);color:#fff;font-weight:600;
  transition:transform .3s ease,box-shadow .3s ease;
}
.hero-cta:hover{transform:translateY(-4px);box-shadow:0 20px 60px rgba(31,46,95,.3);
}

/* SECTION TITLES */
.section-title{text-align:center;margin-bottom:60px;}
.section-title h2{font-size:40px;}
.section-title span{color:var(--highlight);}
.section-title p{margin-top:14px;color:var(--text-muted);max-width:650px;margin:auto;}

/* SERVICES */
.services{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:32px;}
.service-card{
  background:var(--section-bg);padding:40px;border-radius:20px;border:1px solid var(--border);
  transition:transform .35s ease,box-shadow .35s ease;
}
.service-card:hover{transform:translateY(-8px);box-shadow:0 20px 60px rgba(0,0,0,.08);}
.service-card h3{margin-bottom:14px;color:var(--accent);}
.service-card p{color:var(--text-muted);line-height:1.7;font-size:15px;}

/* PROCESS */
.process{display:flex;flex-wrap:wrap;gap:30px;justify-content:center;}
.step{flex:1;min-width:220px;padding:28px;background:var(--section-bg);border-left:3px solid var(--accent);border-radius:15px;transition:transform .3s ease;}
.step:hover{transform:translateY(-6px);}
.step h4{margin-bottom:10px;}

/* ABOUT */
.about{background:var(--section-bg);border-radius:28px;padding:80px;text-align:center;}
.about h2{margin-bottom:20px;}
.about p{color:var(--text-muted);font-size:18px;line-height:1.8;max-width:900px;margin:auto;}

/* CONTACT */
.contact{background:var(--bg-color);border-radius:30px;padding:90px 20px;text-align:center;}
.contact p{font-size:18px;margin-bottom:10px;color:var(--text-muted);}
.socials a{margin:0 14px;color:var(--accent);font-weight:600;transition:color .3s;}
.socials a:hover{color:var(--highlight);}

/* FOOTER */
footer{padding:40px 20px;text-align:center;color:var(--text-muted);font-size:14px;border-top:1px solid var(--border);}

/* RESPONSIVE */
@media(max-width:900px){.hero{flex-direction:column;align-items:flex-start}.hero h1{font-size:40px}.nav-links{display:none}}
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-container">
    <div class="brand">APEXIOL</div>
    <div class="nav-links">
      <a href="#services">Services</a>
      <a href="#process">Process</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-text">
    <h1>Grow Your Brand with <span>Clarity</span></h1>
    <p>We create structured marketing strategies that deliver results without noise. From planning to execution, we cover every step.</p>
    <a href="#contact" class="hero-cta">Get Started</a>
  </div>
</section>

<!-- SERVICES -->
<section id="services">
  <div class="section-title">
    <h2>Our <span>Services</span></h2>
    <p>Complete marketing solutions to grow your brand strategically.</p>
  </div>
  <div class="services">
    <div class="service-card">
      <h3>Digital Strategy</h3>
      <p>Personalized marketing plans based on your brand, audience, and objectives to maximize impact across channels.</p>
    </div>
    <div class="service-card">
      <h3>Social Media Management</h3>
      <p>Consistent, engaging content across platforms to strengthen your brand’s voice and audience interaction.</p>
    </div>
    <div class="service-card">
      <h3>Paid Advertising</h3>
      <p>Optimized campaigns to maximize ROI with clear targeting and measurable results.</p>
    </div>
    <div class="service-card">
      <h3>Brand Positioning</h3>
      <p>Define a clear identity and messaging strategy to differentiate your brand in a competitive market.</p>
    </div>
    <div class="service-card">
      <h3>Content Marketing</h3>
      <p>Create high-quality content that educates, informs, and converts while supporting your brand strategy.</p>
    </div>
    <div class="service-card">
      <h3>SEO & Analytics</h3>
      <p>Optimize online visibility and track results for sustained growth and data-driven decision making.</p>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section id="process">
  <div class="section-title">
    <h2>Our <span>Process</span></h2>
  </div>
  <div class="process">
    <div class="step"><h4>01. Discover</h4><p>Analyze your business, audience, and competitors to understand needs clearly.</p></div>
    <div class="step"><h4>02. Plan</h4><p>Create detailed strategies with channels, messages, and measurable goals.</p></div>
    <div class="step"><h4>03. Execute</h4><p>Implement campaigns and content with consistency across all platforms.</p></div>
    <div class="step"><h4>04. Optimize</h4><p>Continuous monitoring and refinement for maximum impact and ROI.</p></div>
  </div>
</section>

<!-- ABOUT -->
<section id="about" class="about">
  <h2>About <span>Apexiol Digital</span></h2>
  <p>A modern marketing agency focused on clarity, strategy, and measurable results. We grow brands without gimmicks, emphasizing structure, creativity, and performance.</p>
</section>

<!-- CONTACT -->
<section id="contact" class="contact">
  <h2>Connect With Us</h2>
  <p>Email: apexioldigital@gmail.com</p>
  <p>Phone: +92 311 0728099</p>
  <div class="socials">
    <a href="https://www.instagram.com/apexiol_digital" target="_blank">Instagram</a>
    <a href="https://www.facebook.com/Apexiol" target="_blank">Facebook</a>
  </div>
</section>

<footer>© 2026 Apexiol Digital. All rights reserved.</footer>

</body>
</html>
