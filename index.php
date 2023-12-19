<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./home/style.css">
  <script async src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script defer src="./home/script.js"></script>
  <title>CimaTN</title>
</head>

<body>

  <header>
    <div id="header__container">
      <div id="header__left">
        <a class="title_container" href="index.php">
          <img width="40" src="./images/logo.png" alt="">
          <h1>
            CimaTN
          </h1>
        </a>
        <nav class="header__nav">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Movies</a></li>
            <li><a href="#">Tv Shows</a></li>
            <li><a href="#">Genre</a></li>
            <li><a href="#">Country</a></li>
            <li><a href="#">Account</a></li>
          </ul>
        </nav>
      </div>
      <div id="header__right" class="searchForm-container">
        <form method="POST" onsubmit="return check_search()" id="search_form">
          <input type="text" name="q" id="search_input">
          <button type="submit" class="searchSubmitBtn">
            <img width="20" src="./icons/search.svg" alt="Search">
          </button>
        </form>
        <button id="openSearch">
          <img width="20" src="./icons/search.svg" alt="">
        </button>
        <button id="openSideBar">
          <img width="20" src="./icons/menu.svg" alt="">
        </button>
      </div>
    </div>
  </header>

  <main>

    <section id="hero-section">
      <div id="hero-section__inner">
        <div id="hero__left">
          <div id="hero__movieInfoContainer">
            <h2>The Super Mario Bros</h2>
            <p>
              Un plombier nommé Mario parcourt un labyrinthe souterrain avec son frère, Luigi, essayant de sauver une princesse capturée. Adaptation cinématographique du célèbre jeu vidéo.
            </p>
            <a href="#" class="watchBtn">
              Watch Now
              <img height="30" src="./icons/watch.svg" alt="">
            </a>
            <div class="movieGenre-container">
              <a href="#">Animation</a>
              <a href="#">Adventure</a>
              <a href="#">Comedy</a>
            </div>
          </div>
          <div id="hero__movieActors">
            <div class="actor">
              <img src="./movies images/super_mario/actor1.jpeg" alt="">
              <span class="actorName">Anya Taylor Joy</span>
            </div>
            <div class="actor">
              <img src="./movies images/super_mario/actor2.jpeg" alt="">
              <span class="actorName">Chris Pratt</span>
            </div>
            <div class="actor">
              <img src="./movies images/super_mario/actor3.jpeg" alt="">
              <span class="actorName">Jack Black</span>
            </div>
            <div class="actor">
              <img src="./movies images/super_mario/actor4.jpeg" alt="">
              <span class="actorName">Charlie Day</span>
            </div>
            <div class="actor">
              <img src="./movies images/super_mario/actor5.jpeg" alt="">
              <span class="actorName">Charles Martinet</span>
            </div>
            <div class="actor">
              <img src="./movies images/super_mario/actor5.jpeg" alt="">
              <span class="actorName">Charles Martinet</span>
            </div>
            <div class="actor">
              <img src="./movies images/super_mario/actor5.jpeg" alt="">
              <span class="actorName">Charles Martinet</span>
            </div>
            <button id="nextActorBtn">
              <img width="40" style="opacity: .8;" src="./icons/next.svg" alt="">
            </button>
          </div>
        </div>
        <div id="hero__right">
          <button class="movie" data-movieId="33EF5#&">
            <img src="./movies images/super_mario/small_pic.jpg" alt="">
            <div class="front">
              <h3>The Super Mario Bros</h3>
            </div>
          </button>
          <button class="movie" data-movieId="Dos42x">
            <img src="./movies images/trailer1.jpg" alt="">
            <div class="front">
              <h3>Interpeller</h3>
            </div>
          </button>
          <button class="movie" data-movieId="Klmn@b">
            <img src="./movies images/the queens gambit/small_img.jpg" alt="">
            <div class="front">
              <h3>The Queen's gambit</h3>
            </div>
          </button>
        </div>
      </div>
    </section>

  </main>

  <footer>

  </footer>

</body>


</html>