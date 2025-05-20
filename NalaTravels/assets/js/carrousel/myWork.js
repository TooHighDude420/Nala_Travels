var testArray = [
    {
        Title: "Spanje",
        Img: "Spanje"
    },
    
    {
        Title: "Servië",
        Img: "Servie"
    },
    
    {
        Title: "Indonesië",
        Img: "Indonesie"
    }
];
var carro;
var xhttp;

// making the cards into objects
const leftCardTotal = {
    Ent: document.getElementById("leftCardEnt"),
    Title: document.getElementById("leftTitle"),
    Image: document.getElementById("leftImage")
}

const centerCardTotal = {
    Ent: document.getElementById("centerCardEnt"),
    Title: document.getElementById("centerTitle"),
    Image: document.getElementById("centerImage")
}

const rightCardTotal = {
    Ent: document.getElementById("rightCardEnt"),
    Title: document.getElementById("rightTitle"),
    Image: document.getElementById("rightImage")
}

//herimplementeren als de database staat
// xhttp = new XMLHttpRequest();
// xhttp.onreadystatechange = function () {
//     if (this.readyState == 4 && this.status == 200) {
//         testArray = this.response;
//         testArray = JSON.parse(testArray);
//         go();
//     }
// };

// xhttp.open("GET", "../Port_upd/ajax/getProjects.php");
// xhttp.send();

// functie go van maken wanner de database staat
//function go()
carro = new Carroussel(testArray, 3);
setCards()


function nextCard() {
    carro.nextCard();
    setCards();
}

function prevCard() {
    carro.prevCard();
    setCards();
}

function setCards() {
    leftCardTotal.Title.textContent = carro.getActiveCards()[0].title;
    leftCardTotal.Image.src = carro.getActiveCards()[0].img;
    leftCardTotal.Image.alt = carro.getActiveCards()[0].alt;
    leftCardTotal.Ent.onclick = function () {
        setModalContent([
            carro.getActiveCards()[0].title,
            carro.getActiveCards()[0].img,
            carro.getActiveCards()[0].long_disc
        ]);
    }


    centerCardTotal.Title.textContent = carro.getActiveCards()[1].title;
    centerCardTotal.Image.src = carro.getActiveCards()[1].img;
    centerCardTotal.Image.alt = carro.getActiveCards()[1].alt;
    centerCardTotal.Ent.onclick = function () {
        setModalContent([
            carro.getActiveCards()[1].title,
            carro.getActiveCards()[1].img,
            carro.getActiveCards()[1].long_disc
        ]);
    }

    rightCardTotal.Title.textContent = carro.getActiveCards()[2].title;
    rightCardTotal.Image.src = carro.getActiveCards()[2].img;
    rightCardTotal.Image.alt = carro.getActiveCards()[2].alt;
    rightCardTotal.Ent.onclick = function () {
        setModalContent([
            carro.getActiveCards()[2].title,
            carro.getActiveCards()[2].img,
            carro.getActiveCards()[2].long_disc
        ]);
    }
}

