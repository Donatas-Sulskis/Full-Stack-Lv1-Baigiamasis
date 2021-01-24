"use strict";

const acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    const panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

const toggleButton = document.getElementsByClassName("toggle-button")[0];

const navLinks = document.getElementsByClassName("nav-links")[0];

toggleButton.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});
