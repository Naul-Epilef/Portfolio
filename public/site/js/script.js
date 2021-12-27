const btnOpenMenu = document.getElementById("OpenMenu");
const header = document.getElementById("header");

const navHeaderAnchors = document.querySelector(".HeaderAnchors");

btnOpenMenu.addEventListener("click", () => {
    navHeaderAnchors.classList.toggle("ToggleMobileMode");
    header.classList.toggle("header");
});
