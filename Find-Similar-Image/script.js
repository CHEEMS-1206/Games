//calculating scores
let point = document.getElementById("pointBoard");
let points = 50;

document.getElementById("container").addEventListener("click", function () {
  points -= 2;
  point.innerHTML = `${points}`;
  moves.innerHTML -= 1;
});

// maintaining the points
let score =
  document.getElementById("score").firstElementChild.nextElementSibling;

// mantaining the number of moves
let moves =
  document.getElementById("moves").firstElementChild.nextElementSibling;

// mantaining the highscore
let highScore =
  document.getElementById("highscore").firstElementChild.nextElementSibling;
window.localStorage.setItem("HIGHSCORE", localStorage.getItem("HIGHSCORE"));
highScore.innerHTML = localStorage.getItem("HIGHSCORE");
if (localStorage.getItem("HIGHSCORE") == null) {
  localStorage.setItem("HIGHSCORE", 0);
}

// dynamic effect on the pointbar
let pointBar = document.getElementById("pointbar");

let hidePointbar1 = document.getElementById("hide2");
hidePointbar1.addEventListener("click", function () {
  hidePointbar1.classList.add("hide");
  pointBar.classList.add("hide");
  showPointbar1.classList.remove("hide");
});
let showPointbar1 = document.getElementById("show2");
showPointbar1.addEventListener("click", function () {
  pointBar.classList.remove("hide");
  showPointbar1.classList.add("hide");
  hidePointbar1.classList.remove("hide");
});

// dynamic effect on the btnholder
let btnHolder = document.getElementById("buttonholder");

let hideBtnholder = document.getElementById("hide1");
hideBtnholder.addEventListener("click", function () {
  hideBtnholder.classList.add("hide");
  btnHolder.classList.add("hide");
  showBtnholder.classList.remove("hide");
});
let showBtnholder = document.getElementById("show1");
showBtnholder.addEventListener("click", function () {
  btnHolder.classList.remove("hide");
  showBtnholder.classList.add("hide");
  hideBtnholder.classList.remove("hide");
});

// function of the retry button
document.getElementById("retry").addEventListener("click", RETRY);
function RETRY() {
  window.location.assign(window.location);
}

// function of reset button
document.getElementById("reset").addEventListener("click", function () {
  window.localStorage.setItem("HIGHSCORE", 0);
  RETRY();
});

// function of pause button
document.getElementById("pause").addEventListener("click", OVERLAY);
function OVERLAY() {
  document.getElementById("overlay").style.visibility = "visible";
  document.getElementById("container").classList.add("pointingNone");
  document.getElementById("buttonholder").classList.add("pointingNone");
  document.getElementById("pointbar").classList.add("pointingNone");
  document.getElementById("hide2").classList.add("pointingNone");
  document.getElementById("show2").classList.add("pointingNone");
  document.getElementById("hide1").classList.add("pointingNone");
  document.getElementById("show1").classList.add("pointingNone");
  document.getElementById("findimage").classList.add("pointingNone");
  document.getElementById("pointBoard").classList.add("pointingNone");
}

// ok and retry buttons in the overlay
document.getElementById("overlayOkBtn").addEventListener("click", NOTOVERLAY);
function NOTOVERLAY() {
  document.getElementById("overlay").style.visibility = "hidden";

  document.getElementById("container").classList.remove("pointingNone");
  document.getElementById("buttonholder").classList.remove("pointingNone");
  document.getElementById("pointbar").classList.remove("pointingNone");
  document.getElementById("hide2").classList.remove("pointingNone");
  document.getElementById("show2").classList.remove("pointingNone");
  document.getElementById("hide1").classList.remove("pointingNone");
  document.getElementById("show1").classList.remove("pointingNone");
  document.getElementById("findimage").classList.remove("pointingNone");
  document.getElementById("pointBoard").classList.remove("pointingNone");
}
document
  .getElementById("overlayRetryBtn")
  .addEventListener("click", function () {
    RETRY();
  });
window.addEventListener("keydown", function (event) {
  if (event.key == "Escape") {
    document.getElementById("overlay").style.visibility = "hidden";
    NOTOVERLAY();
  }
  console.log(event.key);
});

// storing image locations and their names
const cardArray = [
  {
    Name: "candy",
    url: "images\\CANDY-3.png",
  },
  {
    Name: "cat",
    url: "images\\cat-7.jpg",
  },
  {
    Name: "danger",
    url: "images\\danger-9.webp",
  },
  {
    Name: "dog",
    url: "images\\dog-6.webp",
  },
  {
    Name: "girl",
    url: "images\\GIRL-4.webp",
  },
  {
    Name: "ice-cream",
    url: "images\\ICE-CREAM-2.gif",
  },
  {
    Name: "rat",
    url: "images\\rat-8.jpg",
  },
  {
    Name: "pizza",
    url: "images\\PIZZA-5.jpg",
  },
  {
    Name: "candy",
    url: "images\\CANDY-3.png",
  },
  {
    Name: "cat",
    url: "images\\cat-7.jpg",
  },
  {
    Name: "radioactive",
    url: "images\\radioactive-10.jpg",
  },
  {
    Name: "dog",
    url: "images\\dog-6.webp",
  },
  {
    Name: "girl",
    url: "images\\GIRL-4.webp",
  },
  {
    Name: "ice-cream",
    url: "images\\ICE-CREAM-2.gif",
  },
  {
    Name: "rat",
    url: "images\\rat-8.jpg",
  },
  {
    Name: "pizza",
    url: "images\\PIZZA-5.jpg",
  },
];

// fetching all html image divs for theri manipulation
const cardArrayBeta = document.getElementsByClassName("card");

// sorting the cardarray for different images everytime
cardArray.sort(() => 0.5 - Math.random());

// setting the first image that is to be found and the findimage
cardArrayBeta[0].firstElementChild.setAttribute("src", cardArray[0].url);
document.getElementById("image").setAttribute("src", cardArray[0].url);
let code = cardArray[0].Name;
if (code == "danger" || code == "radioactive") {
  RETRY();
}

// console.log(localStorage.getItem("HIGHSCORE"))
// allocating random images in place of "click me" image on click
for (let i = 1; i < 16; i++) {
  cardArrayBeta[i].addEventListener("click", function () {
    cardArrayBeta[i].firstElementChild.setAttribute("src", cardArray[i].url);
    if (cardArray[i].Name == code) {
      score.innerHTML = `${points}`;
      // alert("you win")
      if (points > highScore.innerHTML) {
        highScore.innerHTML = points;
        localStorage.setItem("HIGHSCORE", points);
      }
      points += 2;
      point.innerHTML = `${points}`;
      setTimeout(lesssGo, 1000);
      function lesssGo() {
        OVERLAY();
        document.getElementById("overlayHeading").innerHTML = "YOU WON !";
        document.getElementById(
          "overlayparas"
        ).innerHTML = `<p>Your score: ${points} </p>
                                                                     <p>Highscore:  ${highScore.innerHTML}`;
        document.getElementById("overlayOkBtn").style.display = "none";
        document.getElementById("overlayRetryBtn").innerHTML = "Replay";
      }
    } else if (
      cardArray[i].Name == "danger" ||
      moves.innerHTML == 1 ||
      points <= 0
    ) {
      // score turns 0 and moves become 0.
      moves.innerHTML = 1;
      points = 0;
      score.innerHTML = `${points}`;
      points += 2;
      point.innerHTML = `${points}`;
      localStorage.setItem("HIGHSCORE", localStorage.getItem("HIGHSCORE"));
      setTimeout(oopsGo, 1000);
      function oopsGo() {
        OVERLAY();
        document.getElementById("overlayHeading").innerHTML = "YOU LOSE !";
        document.getElementById(
          "overlayparas"
        ).innerHTML = `<p>Your score: ${points} </p>
                                                                     <p>Highscore:  ${highScore.innerHTML}`;
        document.getElementById("overlayOkBtn").style.display = "none";
        document.getElementById("overlayRetryBtn").innerHTML = "Replay";
      }
    } else if (cardArray[i].Name == "radioactive") {
      // score is halved
      points += 4;
      points /= 2;
      point.innerHTML = `${points}\+`;
      alert("scores halved");
    } else {
      setTimeout(function () {
        cardArrayBeta[i].firstElementChild.setAttribute(
          "src",
          "images\\cover.png"
        );
      }, 800);
    }
  });
}
