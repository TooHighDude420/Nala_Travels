class Card {

    title = "";
    img = "";
    alt = "";
    index = 0;

    constructor(title, img, index) {
        this.title = title;
        this.alt = img;
        this.img = "assets/img/cards/" + img + ".png";
        this.index = index;
    }

    toString() {
        return this.title + "\n" + this.disc + "\n" + this.img + "\n" + this.index;
    }
}