const maxWidth = 85,
    minWidth = 30,
    maxExp = 85,
    minExp = 30;

const backgroundLoads = document.getElementsByClassName("BackgroundLoad");
const arr = [...backgroundLoads];
const welcomeHTML = document.querySelector(".Welcome");

let root = document.documentElement;

let transitionTime =
    getComputedStyle(root).getPropertyValue("--transition-time");

transitionTime = convertTransitionTime(transitionTime);
console.log(welcomeHTML);
typeWriter(welcomeHTML);

arr.forEach((backgroundLoad) => {
    const widthPercent =
        Math.floor(Math.random() * (maxWidth - minWidth + 1)) + minWidth;

    const expPercent =
        Math.floor(Math.random() * (maxExp - minExp + 1)) + minExp;

    const load = backgroundLoad.children[0];

    load.animate([{ width: "0%" }, { width: widthPercent + "%" }], {
        duration: transitionTime,
        // iterations: Infinity,
    });

    load.style.width = widthPercent + "%";

    const span = load.children[0];
    const i = load.children[1];

    span.innerHTML = widthPercent + "% / ";

    span.animate([{ fontSize: "0px" }, { fontSize: 16 + "px" }], {
        duration: transitionTime,
        // iterations: Infinity,
    });

    i.animate([{ fontSize: "0px" }, { fontSize: 16 + "px" }], {
        duration: transitionTime,
        // iterations: Infinity,
    });
});

function convertTransitionTime(tt) {
    tt = tt.split("s")[0];
    tt = tt * 1000;
    return tt;
}

function typeWriter(element) {
    const textArr = element.innerHTML.split("");
    element.innerHTML = "";
    textArr.forEach((letter, i) => {
        setTimeout(() => (element.innerHTML += letter), 75 * i);
    });
}
