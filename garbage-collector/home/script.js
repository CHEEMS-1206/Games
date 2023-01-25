const [container] = document.getElementsByClassName("container");
const pauseModal = document.getElementById("modal");
let modalScore = document.getElementById("modalScore");
let modalHead = document.getElementById("modalHead");
let modalP = document.getElementById("modalP");
var t = 60;
const form = document.getElementById("autoform");
let score = document.getElementById("score");
let savescore = document.getElementById("savescore")
savescore.value = 0
window.onload = function(){
  alert("Welcome to the game!!")
}

window.onabort = function(){
  alert("Do you want to logOut?")
}

function RETRY() {
  window.location.replace(window.location);
  score.innerHTML = 0;
  t = 60;
}

function PAUSE() {
  pauseModal.style.visibility = "visible";
  clearInterval(timeOut);
  container.classList.add("pointingNone");
  modalScore.innerHTML = score.innerHTML;
}
const submit = document.getElementById("clickButton");
submit.addEventListener("click",function(){
      const form = document.getElementById("autoform");
      form.submit();
})
function timeSet() {
  if (t <= 60 && t > 0) {
    t -= 1;
    timer.innerHTML = t + " sec";
  } else if (t == 0) {
    timer.innerHTML = t + " sec";
    PAUSE();
    savescore.value = score.innerHTML
    modalHead.innerHTML = "Game over";
    modalP.innerHTML = `Click 'submit' to save score and retry`;
    play.style.display = "none";
    submit.style.display = "inline"
    submit.style.backgroundColor = "#2ecc71";
    clearInterval(timeOut);
  }
}

const retry = document.getElementById("retry");
retry.addEventListener("click", RETRY);

const retry1 = document.getElementById("retry1");
retry1.addEventListener("click", RETRY);

const play = document.getElementById("play");
play.addEventListener("click", function(){
  pauseModal.style.visibility = "hidden";
  timeOut = setInterval(timeSet, 1000);
  container.classList.remove("pointingNone");
});

const pause = document.getElementById("pause");
pause.addEventListener("click", PAUSE);

const logOut = document.getElementById("logout");
logOut.addEventListener("click",function(){
  window.location.replace(
    "address of the host page"
  );
})

let timer = document.getElementById("time");
timer.innerHTML = t + " sec";
let timeOut = setInterval(timeSet, 1000);

//

//


//

//

const litters = document.getElementsByClassName("litterContainer");
const litter1s = document.getElementsByClassName("litter1");
const litter2s = document.getElementsByClassName("litter2");
const litter3s = document.getElementsByClassName("litter3");
const litter4s = document.getElementsByClassName("litter4");
let i = 0;
let litterLeft = "50px";
let litterTop = "50px";
let color;
// console.log(litter1s);
const colorArray = [
  "#2ecc71",
  "#e74c3c",
  "#3498db",
  "#9b59b6",
  "#2d3436",
  "#22a6b3",
  "#f0932b",
  "#6ab04c",
  "#f6e58d",
  "#4834d4",
];

function setValues() {
  litterTop = 80 + Math.ceil(Math.random() * 290);
  litterLeft = Math.ceil(Math.random() * 900);
  color = Math.ceil(Math.random() * 10);

  litters[i].style.top = `${litterTop}px`;
  litters[i].style.left = `${litterLeft}px`;
  litters[i].style.display = "flex";
  litter1s[i].style.backgroundColor = colorArray[color];
  litter2s[i].style.backgroundColor = colorArray[color];
  litter3s[i].style.backgroundColor = colorArray[color];
  litter4s[i].style.backgroundColor = colorArray[color];
}
document.addEventListener(
  "dragend",
  function () {
    // console.log("hello");
    i++;
    setValues();
  },
  true
);
setValues();
// positioning the litters randomly on the screen

function dragStart(event) {
  event.dataTransfer.setData("text", event.target.id);
  event.target.style.opacity = "0.01";
}

function dragging(event) {
  // console.log("dragging");
}

function allowDrop(event) {
  event.preventDefault();
}

function drop(event) {
  // console.log(event);
  event.preventDefault();
  if (event.target.id == "b") {
    score.innerHTML = Number(score.innerHTML) + 2;
    savescore.innerHTML = score.innerHTML;
    console.log("yes");
  } else{
    score.innerHTML--;
    console.log("no");
  }
}
//saving in the database