<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>School Team</title>
  <link rel="stylesheet" href="styles.css" />
  <style>
  	/* Reset */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html, body {
  height: 100%;
  font-family: 'Times New Roman', Times, serif;
}

/* Layout helpers */
.container {
  max-width: 1100px;
  margin: 0 auto;
  padding: 1.25rem;
}

.header-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
}

/* Header */
.site-header {
  background: #942424;
  color: #fff;
  padding: 0.75rem 0;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
}

a .logo {
  background: #fff;
}

.main-nav a {
  color: #cfe8ff;
  text-decoration: none;
  margin-left: 1rem;
  font-size: 0.95rem;
}

/* Hero */
.hero {
  background: linear-gradient(180deg, #942424 0%, #942323 100%);
  color: #fff;
  padding: 3.5rem 0;
}

.hero .lead {
  opacity: 0.95;
  max-width: 760px;
  margin-top: 0.5rem;
}

/* Sections */
.intro {
  padding: 2.25rem 0;
}

.grid-2 {
  display: grid;
  grid-template-columns: 1fr 360px;
  gap: 1.5rem;
  align-items: start;
}

.card {
  background: #f7fbff;
  padding: 1rem;
  border-radius: 8px;
  box-shadow: 0 1px 4px rgba(6, 24, 40, 0.04);
}

.leadership {
  padding: 2rem 0;
}

.cards {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
}

.person {
  background: #fff;
  border-radius: 8px;
  padding: 1rem;
  width: 220px;
  text-align: center;
  box-shadow: 15px 14px 14px rgba(0, 0, 0, 0.06);
  cursor: pointer;
  transition: 0.3s ease-in-out;
}

.person:hover {
  transform: scale(1.1);
}
.person:active {
  transform: scale(0.9);
  opacity: 0.8;
}

.person img {
  width: 100%;
  height: 35vh;
  border-radius: 6px;
  margin-bottom: 0.6rem;
}

/* Values */
.values {
  padding: 2rem 0;
}

.grid-3 {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1rem;
}

.value {
  background: #fff;
  padding: 1rem;
  border-radius: 8px;
  box-shadow: 0 1px 4px rgba(2, 10, 20, 0.04);
}

/* New Gallery */
.gallery {
  padding: 2rem 0;
}

.photo-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1rem;
}

.photo-card {
  background: #fff;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  transition: transform 0.3s ease;
}

.photo-card:hover {
  transform: scale(1.05);
}

.photo-card img {
  width: 70%;
  height: 50vh;
  display: block;
}

/* Footer */
.footer {
  background: #aa2e2e;
  color: #dbeefa;
  padding: 1rem 0;
  margin-top: 2rem;
  text-align: center;
  font-size: 0.95rem;
}

/* Responsive */
@media (max-width: 768px) {
  body {
    font-size: 28px;
    padding: 5px 5px;
  }

  .grid-2 {
    grid-template-columns: 1fr;
  }

  .grid-3 {
    grid-template-columns: 1fr;
  }

  .cards {
    justify-content: center;
  }

  .main-nav {
    display: none;
  }

  .footer {
    font-size: 23px;
  }
}

  </style>
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a class="logo" href="/"></a>
      <nav class="main-nav">
        <a href="test.html">Home</a>
        <a href="/who-we-are">Alumni</a>
        <a href="/admissions">Admissions</a>
        <a href="/contact">Contact</a>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="container">
        <h1>Who We Are</h1>
        <p class="lead">
          A caring community where every student is inspired to thrive.
        </p>
      </div>
    </section>

    <section class="intro container">
      <div class="grid-2">
        <div>
          <h2>About Our School</h2>
          <p>
            Founded to provide an inclusive, high-quality education. We focus on
            academic excellence, character development, and community engagement.
          </p>
          <ul>
            <li>Strong academic programs</li>
            <li>Vibrant extracurriculars</li>
            <li>Student-centered pastoral care</li>
          </ul>
        </div>
        <div class="card">
          <h3>Our Mission</h3>
          <p>To empower learners with skills, confidence, and compassion.</p>
          <h3>Our Vision</h3>
          <p>To be a thriving school community where every child reaches their potential.</p>
        </div>
      </div>
    </section>

    <section class="leadership container">
      <h2>Leadership Team</h2>
      <div class="cards">
        <article class="person">
          <img src="Images/01.jpg">
          <h4>John Doe</h4>
          <p>Principal</p>
        </article>
        <article class="person">
          <img src="Images/1.jpg">
          <h4>Jane Smith</h4>
          <p>Vice Principal</p>
        </article>
        <article class="person">
          <img src="Images/30.jpg">
          <h4>Mary Johnson</h4>
          <p>VP Academics</p>
        </article>
		 <article class="person">
          <img  src="Images/31.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		ACADEMIC STAFF
		 <article class="person">
          <img src="Images/29.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img src="Images/2.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Studies 1</p>
        </article>
		 <article class="person">
          <img src="Images/3.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img  src="Images/4.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		 <article class="person">
          <img src="Images/5.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img  src="Images/31.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		 <article class="person">
          <img src="Images/29.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img  src="Images/31.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		 <article class="person">
          <img src="Images/29.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img  src="Images/31.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		 <article class="person">
          <img src="Images/29.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img  src="Images/31.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		 <article class="person">
          <img src="Images/29.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img  src="Images/31.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		 <article class="person">
          <img src="Images/29.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img  src="Images/31.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		 <article class="person">
          <img src="Images/29.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img  src="Images/31.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		 <article class="person">
          <img src="Images/29.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img  src="Images/31.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		 <article class="person">
          <img src="Images/29.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img  src="Images/31.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		 <article class="person">
          <img src="Images/29.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img  src="Images/31.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		 <article class="person">
          <img src="Images/29.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img  src="Images/31.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		 <article class="person">
          <img src="Images/29.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
		 <article class="person">
          <img  src="Images/31.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 1</p>
        </article>
		 <article class="person">
          <img src="Images/29.jpg">
          <h4>Jane Smith</h4>
          <p>Dean Of Discipline 2</p>
        </article>
      </div>
    </section>

    
    <!-- New Photo Gallery Section -->
    <section class="gallery container">
      <h2>School Moments</h2>
      <div class="photo-grid">
        <div class="photo-card"><img src="Images/1.jpg"</div>
        <div class="photo-card"><img src="/images/pic2.jpg" alt="Gallery Image 2"></div>
        <div class="photo-card"><img src="/images/pic3.jpg" alt="Gallery Image 3"></div>
        <div class="photo-card"><img src="/images/pic4.jpg" alt="Gallery Image 4"></div>
        <div class="photo-card"><img src="/images/pic5.jpg" alt="Gallery Image 5"></div>
        <div class="photo-card"><img src="/images/pic6.jpg" alt="Gallery Image 6"></div>
      </div>
    </section>
  </main>
<section class="values container">
      <h2>Our Values</h2>
      <div class="grid-3">
        <div class="value">
          <h4>Respect</h4>
          <p>We treat everyone with dignity.</p>
        </div>
        <div class="value">
          <h4>Curiosity</h4>
          <p>Learning through exploration.</p>
        </div>
        <div class="value">
          <h4>Resilience</h4>
          <p>We embrace challenge and growth.</p>
        </div>
      </div>
    </section>

  <footer class="footer">
    <div class="container">
      <p>
        © <span id="year"></span> Goshen College — All rights reserved.
      </p>
    </div>
  </footer>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
</body>
</html>
