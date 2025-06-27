function deleteBooking(id) {
    postAjax("./assets/php/ajax/deleteBooking.php",
        [id],
        ["id"],
        callback
    );
}

function callback(res){
    location.reload();
}