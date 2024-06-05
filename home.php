<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>News App</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="heading-container">
    <h4>News Sphere</h4>
    <button class="logout-button" id="logoutButton">Logout</button>
  </div>
  <div class="options-container"></div>
  <div class="container"></div>
  <script>
    document.getElementById("logoutButton").addEventListener("click", function() {
    window.location.href = "index.php";
});
  </script>
  <script type="module" src="script.js"></script>
</body>
</html>