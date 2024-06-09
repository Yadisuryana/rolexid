<!DOCTYPE html>
<html>
<head>
  <title>Rolex Watch Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #111;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      overflow-x: hidden;
      overflow-y: auto;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
      padding: 20px;
      box-sizing: border-box;
    }

    .border {
      text-align: center;
      text-decoration: none;
      color: inherit;
      margin: 20px auto;
      padding: 10px;
      background-color: rgba(128, 128, 128, 0.4);
      border-radius: 40px;
      display: inline-block;
      width: auto;
    }

    .no-underline {
      text-decoration: none;
      color: inherit;
      display: inline-block;
      padding: 10px 20px;
    }

    h5 {
      font-size: 1.2em;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    h2 {
      font-size: 2.5em;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .header {
      background-color: gray;
      padding: 10px;
      text-align: center;
      font-size: 1.2em;
      position: fixed;
      width: 100%;
      top: 0;
      transition: top 0.5s;
      z-index: 1000;
    }

    .logo-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .logo {
      width: 50px;
      height: 50px;
    }

    .video-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      object-fit: cover;
      z-index: -1;
      filter: brightness(0.9);
    }

    @media (max-width: 768px) {
      .container {
        padding: 10px;
      }

      h2 {
        font-size: 2em;
      }

      h5 {
        font-size: 1em;
      }

      .border {
        width: 100%;
        padding: 10px;
      }
    }

  </style>
</head>
<body>
<header class="header">
  <div class="logo-container">
    <img src="logo.png" alt="Logo" class="logo">
  </div>
</header>
<div class="container">
  <h5>Koleksi</h5>
  <h2>ROLEX</h2>
  <div class="border">
    <a href="mainhome.php" class="no-underline">Lebih Lanjut ></a>
  </div>
</div>
<div class="video-background">
  <video src="Rolex Cosmograph Daytona.mp4" autoplay loop muted id="video-1"></video>
</div>
<script>
  const header = document.querySelector('.header');
  let lastScrollTop = 0;

  window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY;
    if (scrollTop < lastScrollTop) {
      header.style.top = '0';
    } else {
      header.style.top = '-80px';
    }
    lastScrollTop = scrollTop;
  });
</script>
</body>
</html>
