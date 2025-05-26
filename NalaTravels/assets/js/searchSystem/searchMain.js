const staysButton = document.getElementById("verblijven");
const flightsButton = document.getElementById("vluchten");
const combiButton = document.getElementById("verblijfVlucht");
const excrsionButton = document.getElementById("excursie");

function staysActive() {
    if (staysButton.classList.contains("active")) {
        staysButton.classList.remove("active");
    } else {
        flightsButton.classList.remove("active");
        combiButton.classList.remove("active");
        excrsionButton.classList.remove("active");
        staysButton.classList.add("active");
    }
}

function flightsActive() {
    if (flightsButton.classList.contains("active")) {
        flightsButton.classList.remove("active");
    } else {
        staysButton.classList.remove("active");
        combiButton.classList.remove("active");
        excrsionButton.classList.remove("active");
        flightsButton.classList.add("active");
    }
}

function combiActive() {
    if (combiButton.classList.contains("active")) {
        combiButton.classList.remove("active");
    } else {
        staysButton.classList.remove("active");
        flightsButton.classList.remove("active");
        excrsionButton.classList.remove("active");
        combiButton.classList.add("active");
    }
}

function excursionActive() {
    if (excrsionButton.classList.contains("active")) {
        excrsionButton.classList.remove("active");
    } else {
        staysButton.classList.remove("active");
        flightsButton.classList.remove("active");
        combiButton.classList.remove("active");
        excrsionButton.classList.add("active");
    }
}