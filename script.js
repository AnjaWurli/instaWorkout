const button = document.querySelector("#start_timer");
const setTime = document.querySelector("#input_timer");
const timer = document.querySelector("#time");

function startTimer(e) {
  e.preventDefault();
  let time = setTime.value;
  button.setAttribute("disabled", true);

  timer.removeAttribute("hidden");

  i = 3;
  const intId = setInterval(() => {
    if (i > 0) {
      timer.innerText = "Get ready in: " + i + " s";
      i--;
    } else {
      timer.innerText = time + " s";
      time--;
      if (time < 0) {
        button.removeAttribute("disabled");
        clearInterval(intId);
      }
    }
  }, 1000);
}

button.addEventListener("click", (e) => startTimer(e));
