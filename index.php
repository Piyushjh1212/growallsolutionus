<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta property="og:image"
    content="https://res.cloudinary.com/dieboinjz/image/upload/v1739719838/mern-uploads/ejrkwcxdmqfjdxwyieo9.jpg" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Grow All Coaching" />
  <meta property="og:description"
    content="Grow All Coaching – Tech & Solutions helps you learn modern web technologies like HTML, CSS, JavaScript, and more, while also providing smart tech solutions for businesses and startups. Learn. Build. Grow with Grow All Coaching." />
  <meta property="og:url" content="https://growallcoaching.online" />

  <link rel="icon" type="image/png"
    href="https://res.cloudinary.com/dieboinjz/image/upload/v1739719838/mern-uploads/ejrkwcxdmqfjdxwyieo9.jpg" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <script src="Grow.js"></script>
  <title>Grow All Coaching</title>
</head>

<body>
  <header>
    <div class="container">
      <nav>
        <div class="logo">
          <img src="https://res.cloudinary.com/dieboinjz/image/upload/v1739719838/mern-uploads/ejrkwcxdmqfjdxwyieo9.jpg"
            alt="image" height="60" width="60" />
          <h3 class="heading-Gac">
            Grow All Coaching — Education & IT Solutions
          </h3>
          <div class="navbar-icon" onclick="HandleIconClick()" >
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
        <ul id="menuList">
          <li><a href="#about">About</a></li>
          <li><a href="#products">Services</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="#">Investors</a></li>
          <li><a href="./ContactPage/contact.html">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero-container">
    <div class="container-homecontainer">
      <div class="hero-text">
        <div class="hero-text-1">
          <h1>
            Build Web Solutions That
            <span class="highlight">Grow Your Business</span>
          </h1>
          <p>
            From responsive websites to full-stack applications, GAC Solutions
            delivers high-quality, scalable, and secure software tailored to
            your goals.
          </p>
        </div>

        <div class="hero-image">
          <img src="./Image/HomeDeg.png" alt="Web development illustration" />
        </div>
      </div>

    </div>
  </section>

  <section id="about" class="about-section">
    <div class="container about-container">
      <!-- Left: Image -->
      <div class="about-image">
        <img src="https://res.cloudinary.com/dieboinjz/image/upload/v1739719838/mern-uploads/ejrkwcxdmqfjdxwyieo9.jpg"
          alt="About GAC Team" height="300" width="300" />
      </div>

      <!-- Right: Content -->
      <div class="about-text">
        <h2>About Us</h2>
        <p>
          At <strong>Grow All Coaching (GAC)</strong>, we combine education
          with technology to deliver innovative IT solutions. Our mission is
          to empower businesses, students, and professionals with the right
          tools and skills for growth.
        </p>
        <ul>
          <li>Web & Mobile App Development</li>
          <li>IT Training & Career Guidance</li>
          <li>Scalable & Secure Software Solutions</li>
          <li>Long-term Client Partnerships</li>
        </ul>
        <a href="./About/About.html" class="btn-primary">Learn More</a>
      </div>
    </div>
  </section>

  <!-- services section start -->

  <section id="products" class="product-section">
    <div class="container">
      <h2 class="section-title">Our Services</h2>
      <p class="section-subtitle">
        Explore our digital solutions designed to help businesses, students,
        and professionals succeed.
      </p>

      <div class="product-grid">
        <!-- Product 1 -->
       
        <?php include './DisplayProducts.php'; ?>
       

        <!-- Product 2 -->
        <div class="product-card">
          <img src="./Image/businesswebite.png" alt="Product 2" />
          <h3>Business Website Package</h3>
          <p>Start your online journey with just ₹49/month!</p>
          <p>
            <b>A perfect plan for small businesses, startups, and
              professionals who want to build a beautiful, secure, and fast
              website without spending thousands upfront.</b>
          </p>
          <div class="business-plan">
            <h4>Features Included:</h4>
            <ul>
              <li>✔ Custom Domain Name</li>
              <li>✔ SSL Certificate for Security</li>
              <li>✔ Responsive Design</li>
              <li>✔ Basic SEO Optimization</li>
              <li>✔ 24/7 Customer Support</li>
            </ul>
          </div>

          <p>
            React Js | Node.js | HTML and CSS | javascript | PHP | MongoDB
          </p>
          <a href="./products/businessclass.html" class="btn-primary">View Details</a>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
          <img src="./Image/mobileappdevelopment.png" alt="Product 3" />
          <h3>Mobile App Development</h3>
          <p>Bring your ideas to life — anywhere, anytime.</p>
          <p>
            A perfect plan for startups and businesses to build stunning,
            secure, and high-performing mobile apps that help you grow faster
            in the digital world.
          </p>

          <div class="business-plan">
            <h4>Features Included:</h4>
            <ul>
              <li>✔ Custom mobile app (Android + iOS)</li>
              <li>✔ Modern UI/UX design</li>
              <li>✔ Fast and responsive performance</li>
              <li>✔ API integration & backend support</li>
              <li>✔ Play Store & App Store deployment</li>
            </ul>
          </div>

          <p>React Native | Flutter | Node.js | Firebase | MongoDB</p>

          <a href="./products/businessclass.html" class="btn-primary">View Details</a>
        </div>
        <!-- Product 4 -->
        <div class="product-card">
          <img src="./Image/ebabff8d-fecf-4d19-99ce-3cb6ca30a422.png" alt="MERN Stack Website Development" />
          <h3>MERN Stack – High-Build Website (One-Time Plan)</h3>
          <p>Build a powerful, scalable, and high-performance website with full-stack control.</p>
          <p>
            <b>A premium one-time website development service for businesses, startups, and
              personal brands who want dynamic features, fast performance, and complete
              ownership — without any monthly cost.</b>
          </p>

          <div class="business-plan">
            <h4>Included in This Service:</h4>
            <ul>
              <li>✔ Full-stack development using MongoDB, Express, React, and Node.js</li>
              <li>✔ Custom dynamic pages with admin dashboard</li>
              <li>✔ Secure authentication (JWT, bcrypt, etc.)</li>
              <li>✔ API integration and cloud database setup</li>
              <li>✔ Deployment on live server (Vercel / Render / Cloud)</li>
              <li>✔ One-time payment – Lifetime website ownership</li>
            </ul>
          </div>

          <p><strong>Technologies:</strong> MongoDB | Express.js | React.js | Node.js | Cloud Hosting</p>

          <a href="./products/MERNStack.html" class="btn-primary">View Details</a>
        </div>

           <!-- Product 5 -->
        <div class="product-card">
          <img src="./Image/mernstackwebsite.png" alt="MERN Stack Website Development" />
          <h3>AI & Automation Solution</h3>
          <p>Build a powerful, scalable, and high-performance website with full-stack control.</p>
          <p>
            <b>A premium one-time website development service for businesses, startups, and
              personal brands who want dynamic features, fast performance, and complete
              ownership — without any monthly cost.</b>
          </p>

          <div class="business-plan">
            <h4>Included in This Service:</h4>
            <ul>
              <li>✔ Full-stack development using MongoDB, Express, React, and Node.js</li>
              <li>✔ Custom dynamic pages with admin dashboard</li>
              <li>✔ Secure authentication (JWT, bcrypt, etc.)</li>
              <li>✔ API integration and cloud database setup</li>
              <li>✔ Deployment on live server (Vercel / Render / Cloud)</li>
              <li>✔ One-time payment – Lifetime website ownership</li>
            </ul>
          </div>

          <p><strong>Technologies:</strong> MongoDB | Express.js | React.js | Node.js | Cloud Hosting</p>

          <a href="./products/MERNStack.html" class="btn-primary">View Details</a>
        </div>

           <!-- Product 6 -->
        <div class="product-card">
          <img src="./Image/mernstackwebsite.png" alt="MERN Stack Website Development" />
          <h3>Digital marketing and Branding</h3>
          <p>Build a powerful, scalable, and high-performance website with full-stack control.</p>
          <p>
            <b>A premium one-time website development service for businesses, startups, and
              personal brands who want dynamic features, fast performance, and complete
              ownership — without any monthly cost.</b>
          </p>

          <div class="business-plan">
            <h4>Included in This Service:</h4>
            <ul>
              <li>✔ Full-stack development using MongoDB, Express, React, and Node.js</li>
              <li>✔ Custom dynamic pages with admin dashboard</li>
              <li>✔ Secure authentication (JWT, bcrypt, etc.)</li>
              <li>✔ API integration and cloud database setup</li>
              <li>✔ Deployment on live server (Vercel / Render / Cloud)</li>
              <li>✔ One-time payment – Lifetime website ownership</li>
            </ul>
          </div>

          <p><strong>Technologies:</strong> MongoDB | Express.js | React.js | Node.js | Cloud Hosting</p>

          <a href="./products/MERNStack.html" class="btn-primary">View Details</a>
        </div>

      </div>
    </div>
  </section>


  <footer class="footer">
    <div class="container footer-container">
      <!-- Company Info -->
      <div class="footer-about">
        <img src="https://res.cloudinary.com/dieboinjz/image/upload/v1739719838/mern-uploads/ejrkwcxdmqfjdxwyieo9.jpg"
          alt="GAC Logo" width="60" height="60" />
        <h3>Grow All Coaching</h3>
        <p>
          Empowering businesses and individuals with innovative IT and
          education solutions.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="footer-links">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#services">Services</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#products">Products</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="footer-contact">
        <h4>Contact Us</h4>
        <p>
          Email:
          <a href="mailto:growallcoaching@gmail.com">growallcoaching.com</a>
        </p>
        <p>Phone: +91 70246 18290</p>
        <p>Address: Bhopal, MP, India</p>
      </div>
    </div>

    <!-- <div class="container footer-container">
          <div class="footer-contact">
        <h4>Contact Us</h4>
        <p>
          Email:
          <a href="mailto:growallcoaching@gmail.com">growallcoaching.com</a>
        </p>
        <p>Phone: +91 70246 18290</p>
        <p>Address: Bhopal, MP, India</p>
      </div>
    </div> -->

    <!-- Bottom -->
    <div class="footer-bottom">
      <p>© 2025 Grow All Coaching — All Rights Reserved.</p>
    </div>
  </footer>

  <!-- Floating WhatsApp Button -->
  <a href="https://wa.me/917024618290" class="whatsapp-float" target="_blank" title="Chat on WhatsApp">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="40" height="40" />
  </a>
</body>

</html>