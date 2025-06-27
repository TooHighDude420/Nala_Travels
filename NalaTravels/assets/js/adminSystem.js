function deleteTrip(id) {
    postAjax("./assets/php/ajax/deleteTrip.php", [id], ["id"], callback);
}

function callback(res) {
    location.reload();
}

function editTrip(id) {
    var transformer = new transform(
        ["price"],
        ["alltrips", "alledit"],
        "assets/php/ajax/updateTrip.php",
        id
    );

    transformer.transform();
}

function deleteBooking(id) {
    postAjax(
        "./assets/php/ajax/deleteBooking.php",
        [id],
        ["id"],
        callback
    );
}