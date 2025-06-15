class Card {

    title = "";
    img = "";
    alt = "";
    index = 0;
    color = ""
    price = 0;

    constructor(title, img, index, color, price) {
        this.title = title;
        this.alt = img;
        this.img = "assets/img/cards/" + img;
        this.index = index;
        this.color = color;
        this.price = price;
    }

    toString() {
        return this.title + "\n" + this.disc + "\n" + this.img + "\n" + this.index;
    }
}