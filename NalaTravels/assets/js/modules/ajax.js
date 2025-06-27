const xhttp = new XMLHttpRequest();

function postAjax(link, data = [], name = [], callback) {
    if (data.length != name.length){
        throw new Error("name and data are not of the same lenght");
    }

    xhttp.open("POST", link, true);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            callback(this.responseText);
        }
    };

    let formData = new FormData();

    for (let i = 0; i < data.length; i++){
        formData.append(name[i], data[i]);
    }

    xhttp.send(formData);
}


