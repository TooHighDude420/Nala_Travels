const addBtn = document.getElementById("add");
const root = document.getElementById("root");
const defData = document.getElementById("def");

var index = 1;

const colArray = [
  "[#D9ED92]",
  "[#B5E48C]",
  "[#99D98C]",
  "[#76CB93]",
  "[#52B69A]"
];

if (addBtn != null) {
  addBtn.onclick = function () {
    const ticket = document.createElement("book-ticket");

    ticket.setAttribute("index", index);
    ticket.setAttribute("data", defData.data);
    ticket.setAttribute("color", colArray[randomInt(0, 4)]);
    ticket.setAttribute("des", defData.des);
    ticket.setAttribute("dep", defData.dep);
    ticket.setAttribute("userID", defData.userID);


    ticket.classList = "w-[80%]";

    root.append(ticket);

    index++;
  }
}

function randomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function collect() {
  var safeGuard = 100;
  let index = 0;
  const forms = [];

  while (document.getElementById(`form${index}`)) {
    const formData = new FormData(document.getElementById(`form${index}`));
    const formEntries = {};
    for (let [key, value] of formData.entries()) {
      formEntries[key] = value;
    }
    formEntries["des"] = defData.des;
    formEntries["dep"] = defData.dep;
    forms.push(formEntries); // Push per formulier als object
    index++;
  }

  const json = JSON.stringify(forms);

  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "./assets/php/test.php", true);
  xhttp.setRequestHeader("Content-Type", "application/json");

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      go(this.responseText);
    }
  };

  xhttp.send(json);
}

function go(response) {
  window.location.href = "index.php?page=dashboard";
}