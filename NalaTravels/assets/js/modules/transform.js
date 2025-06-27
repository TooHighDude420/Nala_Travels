class transform {

    toTrans = Array();
    original = Array();
    id;
    editButton;
    tempNodes;
    rowHolder;
    color = '';
    updateAjax;

    constructor(dataToGet = [], elements = [], updateAjax, id) {
        for (let i = 0; i < dataToGet.length; i++) {
            this.toTrans.push(dataToGet[i]);
        }

        this.updateAjax = updateAjax;
        this.id = id;

        this.rowHolder = document.getElementById(elements[0] + id);
        this.editButton = document.getElementById(elements[1] + id);

        this.color = this.rowHolder.classList;
        this.color = this.color[0];
    }

    setOriginal() {
        let getString = "";

        for (let i = 0; i < this.toTrans.length; i++) {
            if (i == this.toTrans.length - 1) {
                getString += `td#${this.toTrans[i]}`;
            } else if (i < this.toTrans.length) {
                getString += `td#${this.toTrans[i]},`;
            }
        }

        this.tempNodes = this.rowHolder.querySelectorAll(getString);

        this.tempNodes.forEach(element => {
            this.original.push(element.innerHTML);
        });

    }

    transform() {
        this.setOriginal();

        this.tempNodes.forEach(element => {
            let i = 0;
            element.innerHTML = `<textarea class='${this.color}' id='text${this.toTrans[i]}'>${this.original[i]}</textarea>`;
            i++;
        });

        this.editButton.textContent = "Confirm";
        this.editButton.onclick = this.accept.bind(this);
    }

    accept() {
        let values = [];

        for (let i = 0; i < this.toTrans.length; i++) {
            values.push(document.querySelector(`textarea#text${this.toTrans[i]}`).value);
        }

        let sendable = [];

        sendable.push(this.id);

        values.forEach(element => {
            sendable.push(element);
        });

        let names = [];

        names.push("id");

        this.toTrans.forEach(element => {
            names.push(element);
        });

        postAjax(
            this.updateAjax,
            sendable,
            names,
            this.test
        );

        location.reload();
    }

    test(response){
        console.log(response);
    }
}