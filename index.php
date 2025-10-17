<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web1 — Made by Arta</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body {
      background: linear-gradient(135deg, #6c63ff, #2b2d42);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
      flex-direction: column;
      transition: background 1s ease;
    }
    h1 {
      font-size: 2.8rem;
      font-weight: 600;
      margin-bottom: 10px;
      letter-spacing: 1px;
    }
    p {
      font-size: 1.1rem;
      opacity: 0.9;
      margin-bottom: 30px;
    }
    button {
      background: #fff;
      color: #2b2d42;
      border: none;
      padding: 12px 25px;
      font-size: 1rem;
      font-weight: 600;
      border-radius: 25px;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    button:hover {
      background: #2b2d42;
      color: #fff;
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }
    footer {
      position: absolute;
      bottom: 15px;
      font-size: 0.9rem;
      opacity: 0.7;
    }
  </style>
</head>
<body>
  <h1>Welcome to My Web App 🚀</h1>
  <p>Created and Deployed by <strong>Arta</strong> — powered by GitHub Actions & Oracle Cloud.</p>
  <button onclick="window.location.href='https://github.com/Artazzz/web1-app'">View Source on GitHub</button>
  <footer>© <?php echo date('Y'); ?> Arta DevOps Simulation</footer>
</body>
</html>
