<?php
include("koneksi.php");

$sql = "SELECT * FROM videos";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Gallery</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="video.css">
</head>
<body>
  <nav class="navbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="main-video">
      <h4>NOW PLAYING</h4>
      <div class="video-container">
        <iframe id="main-video-iframe" width="100%" height="100%" src="" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="video-controls">
        <h2 id="main-video-title">judul</h2>
      </div>
    </div>
    <div class="sidebar">
      <h4>Latest Videos</h4>
      <div class="video-list">
      <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="video-item" onclick="playVideo(\'' . $row["url"] . '\', \'' . $row["title"] . '\')">';
                echo '<img src="' . $row["thumbnail"] . '" alt="' . $row["title"] . '">';
                echo '<div class="video-info">';
                echo '<p>' . $row["title"] . '</p>';
                echo '<span>' . $row["duration"] . '</span>';
                echo '</div></div>';
            }
        } else {
            echo "No videos found.";
        }
        $conn->close();
        ?>

    </div>
    </div>
</div>

<script>
    var videoPlayer = document.getElementById('main-video-iframe');
    var videoTitle = document.getElementById('main-video-title');
    var isPlaying = false;

    function playVideo(url, title) {
    videoPlayer.src = url;
    videoTitle.innerText = title;
    videoPlayer.play();
    isPlaying = true;
    updatePlayButton();
    }
</script>
</body>
</html>
