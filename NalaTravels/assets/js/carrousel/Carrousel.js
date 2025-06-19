class Carroussel {
    cardList = [];
    size = 0;
    index = 0;
    activeCards = [];

    constructor(data, size) {
        var colors = [
            "bg-[#76C893]",
            "bg-[#52B69A]",
            "bg-[#99D98C]"
        ]

        console.log(data);



        for (var i = 0; i < data.length; i++) {
            var dataEnc = JSON.stringify(data[i]);
            console.log(dataEnc);

            if (data[i].CountryName != undefined) {
                this.cardList.push(new Card(data[i].CountryName, data[i].ImageLoc, i, colors[Math.floor(Math.random() * 2)], data[i].price, data[i].departure, data[i].destination, dataEnc));
            } else {
                this.cardList.push(new Card(data[i].dealName, data[i].ImageLoc, i, colors[Math.floor(Math.random() * 2)], data[i].price));
            }
        }

        this.size = size;
        this.activeCards = new Array(size);

        for (var i = 0; i < size; i++) {
            this.activeCards[i] = this.cardList.at(i);
            this.index++;
        }
    }

    nextColor(leftCard, centerCard, rightCard) {
        leftCard.Header.classList.add(this.activeCards[0].color);
        leftCard.Color = this.activeCards[0].color;
        centerCard.Header.classList.add(this.activeCards[1].color);
        centerCard.Color = this.activeCards[1].color;
        rightCard.Header.classList.add(this.activeCards[2].color);
        rightCard.Color = this.activeCards[2].color;
    }

    prevColor(leftCard, centerCard, rightCard) {
        leftCard.Header.classList.add(this.activeCards[2].color);
        leftCard.Color = this.activeCards[2].color;
        centerCard.Header.classList.add(this.activeCards[1].color);
        leftCard.Color = this.activeCards[1].color;
        rightCard.Header.classList.add(this.activeCards[0].color);
        leftCard.Color = this.activeCards[0].color;
    }

    getActiveCards() {
        return this.activeCards;
    }

    setActiveCards(newCards) {
        this.activeCards = newCards;
    }

    nextCard() {
        this.activeCards[0] = this.activeCards[1];
        this.activeCards[1] = this.activeCards[2]
        this.activeCards[2] = this.cardList.at(this.index);
        this.addToIndex();
    }

    prevCard() {
        this.activeCards[2] = this.activeCards[1];
        this.activeCards[1] = this.activeCards[0];
        this.removeFromIndex();
        this.activeCards[0] = this.cardList.at(this.index - 3);
    }

    addToIndex() {
        if (this.index < (this.cardList.length - 1)) {
            this.index++;
        } else {
            this.index = 0;
        }
    }

    removeFromIndex() {
        if (this.index > 0) {
            this.index--;
        } else {
            this.index = this.cardList.length - 1;
        }
    }

}
