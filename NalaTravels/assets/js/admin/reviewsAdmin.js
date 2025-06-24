const xhttp = new XMLHttpRequest();

function validate(revID) {
    xhttp.open("POST", "./assets/php/ajax/valReview.php", true);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            go(this.responseText);
        }
    };

    let formData = new FormData();
    formData.append("holder", revID);

    xhttp.send(formData);
}

function deleteRev(revID) {
    xhttp.open("POST", "./assets/php/ajax/deleteRev.php", true);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            go(this.responseText);
        }
    };

    let formData = new FormData();
    formData.append("holder", revID);

    xhttp.send(formData);
}

function go(response) {
    console.log(response);
    location.reload();
}