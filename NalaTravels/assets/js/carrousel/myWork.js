class CarrMain {
    carro;
    xhttp;

    leftCardTotal;
    centerCardTotal;
    rightCardTotal;

    constructor(leftIDS, centerIDS, rightIDS) {
        this.leftCardTotal = {
            Ent: document.getElementById(leftIDS[0]),
            Title: document.getElementById(leftIDS[1]),
            Image: document.getElementById(leftIDS[2])
        }

        this.centerCardTotal = {
            Ent: document.getElementById(centerIDS[0]),
            Title: document.getElementById(centerIDS[1]),
            Image: document.getElementById(centerIDS[2])
        }

        this.rightCardTotal = {
            Ent: document.getElementById(rightIDS[0]),
            Title: document.getElementById(rightIDS[1]),
            Image: document.getElementById(rightIDS[2])
        }
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

    go(testArray) {
        this.carro = new Carroussel(testArray, 3);
        this.setCards();
    }

    nextCard() {
        this.carro.nextCard();
        this.setCards();
    }

    prevCard() {
        this.carro.prevCard();
        this.setCards();
    }

    setCards() {
        this.leftCardTotal.Title.textContent = this.carro.getActiveCards()[0].title;
        this.leftCardTotal.Image.src = this.carro.getActiveCards()[0].img;
        this.leftCardTotal.Image.alt = this.carro.getActiveCards()[0].alt;
        this.leftCardTotal.Ent.onclick = function () {
            setModalContent([
                this.carro.getActiveCards()[0].title,
                this.carro.getActiveCards()[0].img,
                this.carro.getActiveCards()[0].long_disc
            ]);
        }


        this.centerCardTotal.Title.textContent = this.carro.getActiveCards()[1].title;
        this.centerCardTotal.Image.src = this.carro.getActiveCards()[1].img;
        this.centerCardTotal.Image.alt = this.carro.getActiveCards()[1].alt;
        this.centerCardTotal.Ent.onclick = function () {
            setModalContent([
                this.carro.getActiveCards()[1].title,
                this.carro.getActiveCards()[1].img,
                this.carro.getActiveCards()[1].long_disc
            ]);
        }

        this.rightCardTotal.Title.textContent = this.carro.getActiveCards()[2].title;
        this.rightCardTotal.Image.src = this.carro.getActiveCards()[2].img;
        this.rightCardTotal.Image.alt = this.carro.getActiveCards()[2].alt;
        this.rightCardTotal.Ent.onclick = function () {
            setModalContent([
                this.carro.getActiveCards()[2].title,
                this.carro.getActiveCards()[2].img,
                this.carro.getActiveCards()[2].long_disc
            ]);
        }
    }
}



