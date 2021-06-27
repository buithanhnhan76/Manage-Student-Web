function closeDivInform() {
    document.getElementById("div-inform-success").style.display = "none";
    document.getElementById("div-inform-danger").style.display = "none";
};

function choseClass(valueClass) {
    document.getElementById("class").innerHTML = valueClass;
};

function choseSubject(valueSubject) {
    document.getElementById("subject").innerHTML = valueSubject;
};

function choseTerm(valueTerm) {
    document.getElementById("term").innerHTML = valueTerm.toUpperCase();
};

showTable = () => {
    alert("table click");
}