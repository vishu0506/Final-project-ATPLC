<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Language Learner</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: linear-gradient(120deg, #f0fff0, #d0ffd0, #f0fff5);
      background-size: 400% 400%;
      animation: gradientFlow 10s ease infinite;
      color: #333;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    @keyframes gradientFlow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    header {
      background-color: #2e7d32; /* Green */
      color: white;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    header h1 {
      font-size: 30px;
    }

    nav a {
      margin-left: 15px;
      text-decoration: none;
      background: white;
      color: #2e7d32;
      padding: 8px 16px;
      border-radius: 6px;
      font-weight: bold;
      transition: 0.3s ease;
    }

    nav a:hover {
      background: #c8e6c9;
    }

    .home-container {
      padding: 60px 20px;
      text-align: center;
      flex: 1;
    }

    .home-container h2 {
      font-size: 32px;
      margin-bottom: 10px;
      color: #1b5e20;
    }

    .home-container p {
      font-size: 18px;
      color: #444;
      margin-bottom: 30px;
    }

    .language-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 30px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .lang-card {
      background: white;
      padding: 30px 20px;
      border-radius: 12px;
      text-decoration: none;
      color: #2e7d32;
      font-size: 20px;
      font-weight: bold;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, border 0.3s ease;
      border: 2px solid transparent;
    }

    .lang-card:hover {
      transform: scale(1.07);
      border: 2px solid #2e7d32;
      background: #e8f5e9;
    }

    footer {
      background: #eeeeee;
      padding: 20px;
      text-align: center;
      font-size: 14px;
      color: #555;
    }

    #scrollBtn {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background: #2e7d32;
      color: white;
      border: none;
      padding: 12px 16px;
      border-radius: 50%;
      font-size: 18px;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      display: none;
      transition: background 0.3s;
    }

    #scrollBtn:hover {
      background: #1b5e20;
    }

    @media (max-width: 600px) {
      header h1 {
        font-size: 22px;
      }

      nav a {
        font-size: 14px;
        padding: 6px 12px;
      }

      .lang-card {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>🌐 Language Learner</h1>
    <nav>
      <a href="register.html">Register</a>
      <a href="login.html">Login</a>
    </nav>
  </header>

  <main class="home-container">
    <h2>📗 Select a Language to Learn</h2>
    <p>Explore a new language every day and grow your vocabulary!</p>
    <div class="language-grid">
      <a href="auth.php?lang=Spanish" class="lang-card">🇪🇸 Spanish</a>
      <a href="auth.php?lang=French" class="lang-card">🇫🇷 French</a>
      <a href="auth.php?lang=Hindi" class="lang-card">🇮🇳 Hindi</a>
      <a href="auth.php?lang=English" class="lang-card">🇬🇧 English</a>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 Language Learner | Learn One Word a Day! 🍀</p>
  </footer>

  <button onclick="scrollToTop()" id="scrollBtn" title="Go to top">↑</button>

  <script>
    // Show scroll button
    window.onscroll = () => {
      document.getElementById("scrollBtn").style.display = 
        window.scrollY > 300 ? "block" : "none";
    };

    // Scroll to top
    function scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  </script>

</body>
</html>
