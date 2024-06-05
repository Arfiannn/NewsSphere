<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - News App</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  </head>
<body>
  <div class="login-container">
    <h2>News Sphere</h2>
    <form id="loginForm">
      <button type="submit">Masuk</button>
    </form>
  </div>

  <div class="popup-overlay" id="popupOverlay"></div>
  <div class="popup-container" id="popupContainer">
    <h3>Choose an option</h3>
    <button onclick="redirectTo('')">News</button>
    <button onclick="redirectTo('')">Video</button>
  </div>

  </body>
</html>