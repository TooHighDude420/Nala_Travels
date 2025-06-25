class Card {

    title = "";
    img = "";
    alt = "";
    index = 0;
    color = ""
    price = 0;
    destination = "";
    departure = "";
    actionLink = "./assets/php/checkLogin.php?data="
    disc = "";

    constructor(title, img, index, color, price, destination, departure, actionLink, disc) {
        this.title = title;
        this.alt = img;
        this.img = "assets/img/cards/" + img;
        this.index = index;
        this.color = color;
        this.price = price;
        this.destination = destination;
        this.departure = departure;
        this.actionLink += actionLink;
        this.disc = disc;
    }

    toString() {
        return this.title + "\n" + this.disc + "\n" + this.img + "\n" + this.index;
    }
}