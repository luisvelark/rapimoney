let btn = document.getElementById("btn-gana");
let modal = document.getElementById("page-modal");
let cerrar = document.getElementsByClassName("modal-close")[0];

btn.addEventListener("click", () => {
  modal.style.display = "block";
  console.log("clik modal");
});

cerrar.addEventListener("click", () => {
  modal.style.display = "none";
  console.log("modal close");
});

window.addEventListener("click", (e) => {
  if (e.target.className == "modal-background") {
    modal.style.display = "none";
  }
});
