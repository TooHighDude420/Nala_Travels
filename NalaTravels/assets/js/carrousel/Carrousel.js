class Carroussel {
    cardList = [];
    size = 0;
    index = 0;
    activeCards = [];

    constructor(data, size) {
        for (var i = 0; i < data.length; i++) {
            this.cardList.push(new Card(data[i].Title, data[i].Img, i));
        }

        this.size = size;
        this.activeCards = new Array(size);

        for (var i = 0; i < size; i++) {
            this.activeCards[i] = this.cardList.at(i);
            this.index++;
        }
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
