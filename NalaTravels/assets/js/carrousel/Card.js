class Card {

    title = "";
    img = "";
    alt = "";
    index = 0;
    color = ""

    constructor(title, img, index, color) {
        this.title = title;
        this.alt = img;
        this.img = "assets/img/cards/" + img + ".png";
        this.index = index;
        this.color = color;
    }

    toString() {
        return this.title + "\n" + this.disc + "\n" + this.img + "\n" + this.index;
    }
}