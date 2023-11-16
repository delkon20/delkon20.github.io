
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GMOVIE STREAMING</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .poster-card {
      background-color: white;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
      display: flex;
      flex-direction: column;
      align-items: center;
      max-width: 400px;
      position: relative;
    }
    .poster-image {
      width: 250px;
      height: 375px;
      border: 5px solid red;
      margin-bottom: 20px;
      overflow: hidden;
      position: relative;
    }
    .poster-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .details {
      text-align: center;
    }
    .details h2 {
      font-size: 20px;
      margin: 0;
    }
    .details p {
      font-size: 16px;
      margin: 5px 0;
    }
    .play-button {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: red;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      border: none;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      font-size: 24px;
      color: white;
      transition: background-color 0.3s;
    }
    .play-button:hover {
      background-color: darkred;
    }
    .watch-button {
      background-color: red;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.3s;
    }
    .watch-button:hover {
      background-color: darkred;
    }
  </style>
</head>
<body>
  <div class="poster-card">
    <div class="poster-image">
      <img src="" alt="Film Poster" id="poster-image">
      <button class="play-button" id="play-button">&#9658;</button>
    </div>
    <div class="details">
      <h2 id="movie-title">Movie Title</h2>
      <p id="release-date">Release Date: </p>
      <button class="watch-button" id="watch-button">CLICK TO WATCH</button>
    </div>
  </div>

  <script>
    const API_KEY = "3ed72f657ce5c5779383b2191d6d0111";
    const movieId = new URLSearchParams(window.location.search).get

("watch_id");
    const posterImage = document.getElementById("poster-image");
    const movieTitle = document.getElementById("movie-title");
    const releaseDate = document.getElementById("release-date");
    const watchButton = document.getElementById("watch-button");
    const playButton = document.getElementById("play-button");

    // Fetch movie details from TMDB API
    fetch(`https://api.themoviedb.org/3/movie/${movieId}?api_key=${API_KEY}`)
      .then(response => response.json())
      .then(data => {
        const imageUrl = `https://image.tmdb.org/t/p/w500/${data.poster_path}`;
        const title = data.original_title;
        const release = data.release_date;

        posterImage.src = imageUrl;
        movieTitle.innerText = title;
        releaseDate.innerText = `Release Date: ${release}`;

        // Set the watch button link
        watchButton.addEventListener("click", () => {
          window.location.href = `https://15486454.blogspot.com/movie/${movieId}`;
        });

        // Set the play button click event
        playButton.addEventListener("click", () => {
          window.location.href = `https://15486454.blogspot.com/movie/${movieId}`;
        });
      })
      .catch(error => console.error(error));
  </script>
</body>
</html>
