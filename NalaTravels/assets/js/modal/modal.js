const modal = document.getElementById("modalTot");
const closeBtn = document.getElementById("modalClose");
const title = document.getElementById("modalTitle");
const image = document.getElementById("modalImage").children[0];
const text = document.getElementById("modalText");

var modalTotal = {
    ent: modal,
    closeBtn: closeBtn,
    modalTitle: title,
    modalImage: image,
    modalContent: text
}

function hideModal(){
    modalTotal.ent.style.display = "none";
}

modalTotal.closeBtn.addEventListener("click", hideModal);



function setModalContent(values){
    modalTotal.ent.style.display = "flex";
    modalTotal.modalTitle.textContent = values[0];
    modalTotal.modalImage.src = values[1];
    modalTotal.modalContent.innerHTML = values[2];
}