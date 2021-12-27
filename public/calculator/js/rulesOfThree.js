updateResultPlaceholder();

function updateResult() {
    let n1 = document.getElementById("n1");
    let n2 = document.getElementById("n2");
    let n3 = document.getElementById("n3");
    let n4 = document.getElementById("n4");

    let n1v = n1.value;
    let n2v = n2.value;
    let n3v = n3.value;

    if (n1.value > 0 && n2.value > 0 && n3.value > 0) {
        const result = formula(n1v, n2v, n3v);
        n4.value = result;
    } else {
        n4.value = "";
    }
}

function updateResultPlaceholder() {
    const r1 = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
    const r2 = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
    const r3 = Math.floor(Math.random() * (100 - 1 + 1)) + 1;

    document.getElementById("n1").placeholder = r1;
    document.getElementById("n2").placeholder = r2;
    document.getElementById("n3").placeholder = r3;

    const result = formula(r1, r2, r3);
    document.getElementById("n4").placeholder = result;
}

function formula(n1, n2, n3) {
    let m1;
    m1 = n2 * n3;
    return (m1 / n1).toFixed(2);
}
