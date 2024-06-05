<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - News App</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="index.css" />
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
    <button onclick="redirectTo('home.php')">News</button>
    <button onclick="redirectTo('video.php')">Video</button>
  </div>

  <script>
    const loginForm = document.getElementById('loginForm');
    const popupContainer = document.getElementById('popupContainer');
    const popupOverlay = document.getElementById('popupOverlay');

    loginForm.addEventListener('submit', function(event) {
      event.preventDefault();
      popupContainer.style.display = 'block';
      popupOverlay.style.display = 'block';
    });

    function redirectTo(page) {
      // Here you can handle any additional logic before redirecting
      window.location.href = page;
    }

    popupOverlay.addEventListener('click', function() {
      popupContainer.style.display = 'none';
      popupOverlay.style.display = 'none';
    });
  </script>
</body>
</html>