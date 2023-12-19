const actors = document.querySelectorAll("#hero__movieActors .actor ");
const movies = document.querySelectorAll("#hero__right .movie");

let moviePosterTime = 10;
let currentMovieIndex = 0;
let movieTimer = 0;
let movieTimerInterval = setInterval(() => {
  $(movies[currentMovieIndex]).css(
    "--timer-width",
    `${(movieTimer * 100) / moviePosterTime}%`
  );
  movieTimer += 0.1;
  if (movieTimer >= moviePosterTime) {
    $(movies[currentMovieIndex]).css("--timer-width", `0%`);
    movieTimer = 0;
    currentMovieIndex++;
    if (currentMovieIndex >= movies.length) {
      currentMovieIndex = 0;
    }
    changeHeroMovie($(movies[currentMovieIndex]).attr("data-movieId"));
  }
}, 100);

let actorCount = 0;
document.getElementById("nextActorBtn").addEventListener("click", () => {
  if (actorCount < actors.length - 5) {
    actorCount++;
  } else {
    actorCount = 0;
  }
  hideActor(0);
});

function hideActor(i) {
  if (i < actorCount) {
    $(actors[i]).hide(400);
  } else if (i > actorCount + 4) {
    $(actors[i]).hide(400);
  } else {
    $(actors[i]).show(400);
  }

  if (i < actors.length) {
    i++;
    hideActor(i);
  } else {
    return;
  }
}

function changeHeroMovie(movieId) {
  console.log(movieId);
}
