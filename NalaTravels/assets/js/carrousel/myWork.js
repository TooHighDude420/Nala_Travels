class CarrMain {
    carro;

    leftCardTotal;
    centerCardTotal;
    rightCardTotal;

    testArray;

    constructor(leftIDS, centerIDS, rightIDS) {
        this.leftCardTotal = {
            Ent: document.getElementById(leftIDS[0]),
            Title: document.getElementById(leftIDS[1]),
            Image: document.getElementById(leftIDS[2]),
            Header: document.getElementById(leftIDS[3]),
            Price: document.getElementById(leftIDS[4]),
            Action: document.getElementById(leftIDS[5]),
            Color: "bg-[#76C893]"
        }

        this.centerCardTotal = {
            Ent: document.getElementById(centerIDS[0]),
            Title: document.getElementById(centerIDS[1]),
            Image: document.getElementById(centerIDS[2]),
            Header: document.getElementById(centerIDS[3]),
            Price: document.getElementById(centerIDS[4]),
            Action: document.getElementById(centerIDS[5]),
            Color: "bg-[#52B69A]"
        }

        this.rightCardTotal = {
            Ent: document.getElementById(rightIDS[0]),
            Title: document.getElementById(rightIDS[1]),
            Image: document.getElementById(rightIDS[2]),
            Header: document.getElementById(rightIDS[3]),
            Price: document.getElementById(rightIDS[4]),
            Action: document.getElementById(rightIDS[5]),
            Color: "bg-[#99D98C]"
        }
    }

    //herimplementeren als de database staat
    grabData(url) {
        var global = this;

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var testArray = this.response;
                testArray = JSON.parse(testArray);
                global.go(testArray);
            }
        };

        xhttp.open("GET", url);
        xhttp.send();

    }

    go(result) {
        this.carro = new Carroussel(result, 3);
        this.setCards();
    }

    nextCard() {
        this.carro.nextCard();
        this.leftCardTotal.Header.classList.remove(this.leftCardTotal.Color);
        this.centerCardTotal.Header.classList.remove(this.centerCardTotal.Color);
        this.rightCardTotal.Header.classList.remove(this.rightCardTotal.Color);
        this.carro.nextColor(this.leftCardTotal, this.centerCardTotal, this.rightCardTotal);
        this.setCards();
    }

    prevCard() {
        this.carro.prevCard();
        this.leftCardTotal.Header.classList.remove(this.leftCardTotal.Color);
        this.centerCardTotal.Header.classList.remove(this.centerCardTotal.Color);
        this.rightCardTotal.Header.classList.remove(this.rightCardTotal.Color);
        this.carro.prevColor(this.leftCardTotal, this.centerCardTotal, this.rightCardTotal);
        this.setCards();
    }

    setCards() {
        this.leftCardTotal.Title.textContent = this.carro.getActiveCards()[0].title;
        this.leftCardTotal.Image.src = this.carro.getActiveCards()[0].img;
        this.leftCardTotal.Image.alt = this.carro.getActiveCards()[0].alt;
        this.leftCardTotal.Price.textContent = "€" + this.carro.getActiveCards()[0].price + " p.p";
        this.leftCardTotal.Action.action = this.carro.getActiveCards()[0].actionLink;
        this.leftCardTotal.Header.classList.add(this.leftCardTotal.Color);
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
        this.centerCardTotal.Price.textContent = "€" + this.carro.getActiveCards()[1].price + " p.p";
        this.centerCardTotal.Action.action = this.carro.getActiveCards()[1].actionLink;
        this.centerCardTotal.Header.classList.add(this.centerCardTotal.Color);
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
        this.rightCardTotal.Price.textContent = "€" + this.carro.getActiveCards()[2].price + " p.p";
        this.leftCardTotal.Action.action = this.carro.getActiveCards()[2].actionLink;
        this.rightCardTotal.Header.classList.add(this.rightCardTotal.Color);
        this.rightCardTotal.Ent.onclick = function () {
            setModalContent([
                this.carro.getActiveCards()[2].title,
                this.carro.getActiveCards()[2].img,
                this.carro.getActiveCards()[2].long_disc
            ]);
        }
    }
}