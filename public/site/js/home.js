const maxWidth = 100,
    minWidth = 30,
    maxExp = 100,
    minExp = 30;

const backgroundLoads = document.getElementsByClassName("BackgroundLoad");
const arr = [...backgroundLoads];

let root = document.documentElement;

let transitionTime =
    getComputedStyle(root).getPropertyValue("--transition-time");

transitionTime = convertTransitionTime(transitionTime);

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

    console.log(span);

    console.log(widthPercent);
});

function convertTransitionTime(tt) {
    tt = tt.split("s")[0];
    tt = tt * 1000;
    return tt;
}
