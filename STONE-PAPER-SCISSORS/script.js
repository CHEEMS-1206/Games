let incrementor = 0;
let wait = 2000;

let rock = document.getElementById("rock");
let paper = document.getElementById("paper");
let scissor = document.getElementById("Scissors");

let ourDisplay = document.getElementById("yourChosenImage");
let compDisplay = document.getElementById("compChosenImage");

let roundResult = document.getElementById("roundWinner");

let overallResult = document.getElementById("overallWinner");

let oneToTenYou = document.getElementsByClassName("yourChoice");
let oneToTenComp = document.getElementsByClassName("compChoice");
let oneToTenResults = document.getElementsByClassName("winnerOp");

// clone all the images

let clonedRock = rock.cloneNode(false);
let clonedPaper = paper.cloneNode(false);
let clonedScissor = scissor.cloneNode(false);
let clonedRock1 = rock.cloneNode(false);
let clonedPaper1 = paper.cloneNode(false);
let clonedScissor1 = scissor.cloneNode(false);

let compDisplayNew;
let ourDisplayNew;
let choiceGenerator;

let compChoice = function () {
  let ESM = Math.ceil(3 * Math.random());
  // console.log(ESM)
  switch (ESM) {
    case 1:
      choiceGenerator = "rock";
      GETRESULTS();
      break;
    case 2:
      choiceGenerator = "scissor";
      GETRESULTS();
      break;
    case 3:
      choiceGenerator = "paper";
      GETRESULTS();
      break;
  }

  if (choiceGenerator == "rock") {
    compDisplayNew = compDisplay.parentElement.replaceChild(
      clonedRock,
      compDisplay
    );
    clonedRock.classList.add("imageChosen");
    // console.log(compDisplayNew)
  } else if (choiceGenerator == "scissor") {
    compDisplayNew = compDisplay.parentElement.replaceChild(
      clonedScissor,
      compDisplay
    );
    clonedScissor.classList.add("imageChosen");
    // console.log(compDisplayNew)
  } else if (choiceGenerator == "paper") {
    compDisplayNew = compDisplay.parentElement.replaceChild(
      clonedPaper,
      compDisplay
    );
    clonedPaper.classList.add("imageChosen");
    // console.log(compDisplayNew)
  }
};

let EPS; // our chosen element
rock.addEventListener("click", function () {
  EPS = "rock";
  // GETRESULTS()
  ourChoice(EPS);
  setTimeout(compChoice, 500);
});
scissor.addEventListener("click", function () {
  EPS = "scissor";
  // GETRESULTS()
  ourChoice(EPS);
  setTimeout(compChoice, 500);
});
paper.addEventListener("click", function () {
  EPS = "paper";
  // GETRESULTS()
  ourChoice(EPS);
  setTimeout(compChoice, 500);
});

let ourChoice = function (ESP) {
  if (ESP == "rock") {
    ourDisplayNew = ourDisplay.parentElement.replaceChild(
      clonedRock1,
      ourDisplay
    );
    clonedRock1.classList.add("imageChosen");
    // console.log( ourDisplayNew)
  } else if (ESP == "scissor") {
    ourDisplayNew = ourDisplay.parentElement.replaceChild(
      clonedScissor1,
      ourDisplay
    );
    clonedScissor1.classList.add("imageChosen");
    // console.log( ourDisplayNew)
  } else if (ESP == "paper") {
    ourDisplayNew = ourDisplay.parentElement.replaceChild(
      clonedPaper1,
      ourDisplay
    );
    clonedPaper1.classList.add("imageChosen");
    // console.log( ourDisplayNew)
  }
};

// getting the scores

let retryBtn = document.getElementById("retry");
retryBtn.addEventListener("click", RETRY);
function RETRY() {
  let locate = window.location;
  window.location.assign(locate);
  incrementor = 0;
}

let nextRoundBtn = document.getElementById("nextRound");
nextRoundBtn.addEventListener("click", NEXTROUND);
function NEXTROUND() {
  if (EPS == "rock") {
    clonedRock1.insertAdjacentElement("afterend", ourDisplayNew);
    clonedRock1 = clonedRock1.parentElement.removeChild(clonedRock1);
    ourDisplayNew.classList.add("imageChosen");

    if (choiceGenerator == "rock") {
      clonedRock.insertAdjacentElement("afterend", compDisplayNew);
      clonedRock = clonedRock.parentElement.removeChild(clonedRock);
      ourDisplayNew.classList.add("imageChosen");
    } else if (choiceGenerator == "scissor") {
      clonedScissor.insertAdjacentElement("afterend", compDisplayNew);
      clonedScissor = clonedScissor.parentElement.removeChild(clonedScissor);
      ourDisplayNew.classList.add("imageChosen");
    } else if (choiceGenerator == "paper") {
      clonedPaper.insertAdjacentElement("beforebegin", compDisplayNew);
      clonedPaper = clonedPaper.parentElement.removeChild(clonedPaper);
      ourDisplayNew.classList.add("imageChosen");
    }
  } else if (EPS == "scissor") {
    clonedScissor1.insertAdjacentElement("afterend", ourDisplayNew);
    clonedScissor1 = clonedScissor1.parentElement.removeChild(clonedScissor1);
    ourDisplayNew.classList.add("imageChosen");

    if (choiceGenerator == "rock") {
      clonedRock.insertAdjacentElement("afterend", compDisplayNew);
      clonedRock = clonedRock.parentElement.removeChild(clonedRock);
      ourDisplayNew.classList.add("imageChosen");
    } else if (choiceGenerator == "scissor") {
      clonedScissor.insertAdjacentElement("afterend", compDisplayNew);
      clonedScissor = clonedScissor.parentElement.removeChild(clonedScissor);
      ourDisplayNew.classList.add("imageChosen");
    } else if (choiceGenerator == "paper") {
      clonedPaper.insertAdjacentElement("beforebegin", compDisplayNew);
      clonedPaper = clonedPaper.parentElement.removeChild(clonedPaper);
      ourDisplayNew.classList.add("imageChosen");
    }
  } else if (EPS == "paper") {
    clonedPaper1.insertAdjacentElement("afterend", ourDisplayNew);
    clonedPaper1 = clonedPaper1.parentElement.removeChild(clonedPaper1);
    ourDisplayNew.classList.add("imageChosen");

    if (choiceGenerator == "rock") {
      clonedRock.insertAdjacentElement("afterend", compDisplayNew);
      clonedRock = clonedRock.parentElement.removeChild(clonedRock);
      ourDisplayNew.classList.add("imageChosen");
    } else if (choiceGenerator == "scissor") {
      clonedScissor.insertAdjacentElement("afterend", compDisplayNew);
      clonedScissor = clonedScissor.parentElement.removeChild(clonedScissor);
      ourDisplayNew.classList.add("imageChosen");
    } else if (choiceGenerator == "paper") {
      clonedPaper.insertAdjacentElement("beforebegin", compDisplayNew);
      clonedPaper = clonedPaper.parentElement.removeChild(clonedPaper);
      ourDisplayNew.classList.add("imageChosen");
    }
  }
  if (incrementor == 9) {
    let HIDDENBOX = document.getElementById("hiddenBox");
    HIDDENBOX.style.visibility = "visible";
    HIDDENBOX = document.getElementById("hiddenBox").firstChild;
    HIDDENBOX.innerHTML = `Stone , Papers, Scissors`;
    let FINALSCORE = document.getElementById("finalScore");
    FINALSCORE.innerHTML = `Score is ${ys}/${cs}`;
    let FINALWINNER = document.getElementById("finalWinner");

    if (ys > cs) {
      ys -= 1;
      overallResult.innerHTML = "CONGRATS!!! you win";
      FINALWINNER.innerHTML = "YOU WIN !!!";
    } else if (cs > ys) {
      cs -= 1;
      overallResult.innerHTML = "OOPS!!! computer won";
      FINALWINNER.innerHTML = "YOU LOSE !!!";
    } else {
      cs -= 1;
      ys -= 1;
      overallResult.innerHTML = "ooo boiii :{ that one's a Tie";
      FINALWINNER.innerHTML = "MATCH TIED !";
    }
    setTimeout(RETRY, 10000);
  } else {
    incrementor += 1;
  }
  console.log(incrementor);
  SCORE(incrementor);
  roundResult.innerHTML = "Each Round winner declared here.";
}

// main game logic

/*
stone and paper => stone paper computer
stone and stone => stone paper none
stone and scissor => stone paper you

scissor and paper => stone paper you
scissor and stone => stone paper computer
scissor and scissor => stone paper none

paper and paper => stone paper none
paper and stone => stone paper computer
paper and scissor => stone paper you
*/

let yourScore = document.getElementById("yourscore");
let ys = Number(yourScore.innerHTML);
console.log(ys);

let compScore = document.getElementById("compscore");
let cs = Number(compScore.innerHTML);

let scoreOverall = document.getElementById("scoreTally");
scoreOverall.value = `${ys}/${cs}`;

function SCORE(incrementor) {
  // console.log(oneToTenResults[incrementor].innerHTML)

  if (oneToTenResults[incrementor].innerHTML == "you") {
    ys += 1;
    yourScore.value = ys;
    scoreOverall.value = `${ys}/${cs}`;
  } else if (oneToTenResults[incrementor].innerHTML == "computer") {
    cs += 1;
    compScore.value = cs;
    scoreOverall.value = `${ys}/${cs}`;
  } else {
    yourScore = yourScore;
    compScore = compScore;
    scoreOverall.value = `${ys}/${cs}`;
  }
}

yourScore.innerHTML = yourScore;

function GETRESULTS() {
  oneToTenYou[incrementor].innerHTML = EPS;
  if (EPS == choiceGenerator) {
    roundResult.innerHTML = "Tie";
    oneToTenComp[incrementor].innerHTML = choiceGenerator;
    oneToTenResults[incrementor].innerHTML = "Tie";
  } else if (
    (EPS == "rock" && choiceGenerator == "paper") ||
    (EPS == "scissor" && choiceGenerator == "rock") ||
    (EPS == "paper" && choiceGenerator == "scissor")
  ) {
    roundResult.innerHTML = "computer won the round :(";
    // oneToTenYou[incrementor].innerHTML = EPS
    // oneToTenComp[incrementor].innerHTML = choiceGenerator
    oneToTenResults[incrementor].innerHTML = "computer";
  } else if (
    (EPS == "paper" && choiceGenerator == "rock") ||
    (EPS == "rock" && choiceGenerator == "scissor") ||
    (EPS == "scissor" && choiceGenerator == "paper")
  ) {
    roundResult.innerHTML = "you won the round :)";
    // oneToTenYou[incrementor].innerHTML = EPS
    oneToTenResults[incrementor].innerHTML = "you";
  }
  oneToTenComp[incrementor].innerHTML = choiceGenerator;
  SCORE(incrementor);
  setTimeout(NEXTROUND, wait);
}
