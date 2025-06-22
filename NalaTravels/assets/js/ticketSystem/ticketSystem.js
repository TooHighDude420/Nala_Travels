const addBtn = document.getElementById("add");
const root = document.getElementById("root");
const defData = document.getElementById("def");

const colArray = [
    "[#D9ED92]",
    "[#B5E48C]",
    "[#99D98C]",
    "[#76CB93]",
    "[#52B69A]"
];

addBtn.onclick = function () {
    const ticket = document.createElement("book-ticket");

    ticket.setAttribute("data", defData.data);
    ticket.setAttribute("color", colArray[randomInt(0, 4)]);
    ticket.setAttribute("des", defData.des);
    ticket.setAttribute("dep", defData.dep);
    
    ticket.classList = "w-[80%]";

    root.append(ticket);
}

function randomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}