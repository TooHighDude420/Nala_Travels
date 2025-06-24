class ticket extends HTMLElement {
    static get observedAttributes() {
        return ["data", "fName", "lName", "dep", "des", "color", "index", "userID"];
    }

    constructor() {
        super();
        this.form = null;
        this.fNameInput = null;
        this.lNameInput = null;
        this.depInput = null;
        this.desInput = null;
    }

    setAttributes() {
        this.data = this.getAttribute("data");
        this.fName = this.getAttribute("fName");
        this.lName = this.getAttribute("lName");
        this.dep = this.getAttribute("dep");
        this.des = this.getAttribute("des");
        this.color = this.getAttribute("color");
        this.index = this.getAttribute("index");
        this.userID = this.getAttribute("userID");
    }

    attributeChangedCallback(name, oldValue, newValue) {
        this.setAttributes();

        if (this.form) this.form.action = `assets/php/bookFlight.php?data=${this.data}`;
        if (this.fNameInput) this.fNameInput.value = this.fName || "";
        if (this.lNameInput) this.lNameInput.value = this.lName || "";
        if (this.depInput) this.depInput.value = this.dep || "";
        if (this.desInput) this.desInput.value = this.des || "";
    }

    connectedCallback() {
        this.setAttributes();

        const formHolder = document.createElement("div");
        this.form = document.createElement("form");
        this.form.name = `form${this.index}`
        this.form.id = `form${this.index}`

        const idHolder = document.createElement("input");
        idHolder.type = "hidden";
        idHolder.id = "idHolder";
        idHolder.value = `${this.userID}`;
        idHolder.name = "idHolder";


        const fNameLabel = document.createElement("label");
        this.fNameInput = document.createElement("input");

        const lNameLabel = document.createElement("label");
        this.lNameInput = document.createElement("input");

        const depLabel = document.createElement("label");
        this.depInput = document.createElement("input");

        const desLabel = document.createElement("label");
        this.desInput = document.createElement("input");

        formHolder.classList = `bg-${this.color} h-[22vh] w-full rounded-[10px]`;
        this.form.method = "post";

        fNameLabel.for = "firstName";
        fNameLabel.classList = "ml-[15px]";
        fNameLabel.textContent = "Voornaam:";

        this.fNameInput.placeholder = "Voornaam";
        this.fNameInput.type = "text";
        this.fNameInput.name = "fName";
        this.fNameInput.value = this.fName || "";
        this.fNameInput.id = "fName";
        this.fNameInput.classList = "text-gray-600 w-[25%] rounded-[8px]";

        lNameLabel.for = "lastName";
        lNameLabel.textContent = "Achternaam:";

        this.lNameInput.placeholder = "Achternaam";
        this.lNameInput.type = "text";
        this.lNameInput.name = "lName";
        this.lNameInput.value = this.lName || "";
        this.lNameInput.id = "lName";
        this.lNameInput.classList = "text-gray-600 w-[25%] rounded-[8px]";

        depLabel.for = "departure";
        depLabel.classList = "ml-[15px]";
        depLabel.textContent = "Vertrek";

        this.depInput.type = "text";
        this.depInput.name = "departure";
        this.depInput.id = "departure";
        this.depInput.value = this.dep || "";
        this.depInput.disabled = true;
        this.depInput.classList = "w-[10%] mt-[20px] rounded-[8px] mr-[200px]";

        desLabel.for = "destination";
        desLabel.textContent = "Bestemming";

        this.desInput.type = "text";
        this.desInput.name = "destination";
        this.desInput.id = "destination";
        this.desInput.value = this.des || "";
        this.desInput.disabled = true;
        this.desInput.classList = "w-[10%] mt-[20px] rounded-[8px] mr-[200px]";

        this.append(formHolder);
        formHolder.append(this.form);
        this.form.append(fNameLabel, this.fNameInput, lNameLabel, this.lNameInput, depLabel, this.depInput, desLabel, this.desInput, idHolder);

        this.attributeChangedCallback(); // trigger eerste rendering
    }
}

customElements.define("book-ticket", ticket);
