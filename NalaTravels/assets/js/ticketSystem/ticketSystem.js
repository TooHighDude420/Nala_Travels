const addBtn = document.getElementById("add");

const root = document.getElementById("root");

var template = `
    <div class='flex justify-center gap-x-[50px]'>
        <div class='bg-[#D9ED92] h-[22vh] w-[40%] rounded-[10px]'>
            <form action='assets/php/bookFlight.php?data=$dataEnc' method='post' class='mt-5'>
                <label for='firstName' class='ml-[15px]'>Voornaam:</label>
                <input placeholder=' Voornaam' value=' $fName' type='text' name='fName' id='fName'
                    class='text-gray-600 w-[25%] rounded-[8px]'>

                <label for='lastName'>Achternaam:</label>
                <input placeholder=' Achternaam' value=' $lName' type='text' name='lName' id='lName'
                    class='text-gray-600 mt-3 w-[25%] rounded-[8px]'>


                <label for='Departure' class='ml-[15px]'>Vertrek</label>
                <input value=' $dep' type='text' name='departure' id='fName' disabled
                    class='w-[10%] mt-[20px] rounded-[8px] mr-[200px]'>

                <label for='Destination'>Besteming</label>
                <input value=' $des' type='text' name='destination' id='fName' disabled class='w-[10%] rounded-[8px]'>
            </form>
        </div>
`;

addBtn.onclick = function(){
    const holder = document.createElement("div");
    const formHolder = document.createElement("div");
    const form = document.createElement("form");
    const fNameLabel = document.createElement("label");
    const fNameInput = document.createElement("input");
    const lNameLabel = document.createElement("label");
    holder.classList = "flex justify-center gap-x-[50px]";
    formHolder.classList = "bg-[#D9ED92] h-[22vh] w-[40%] rounded-[10px]";
    form.action = "assets/php/bookFlight.php?data=$dataEnc";
    form.method = "post";
    form.classList = "mt-5";
    fNameLabel.for = "firstName";
    fNameLabel.classList = "ml-[15px]";
    fNameLabel.textContent = "Voornaam:";
    fNameInput.placeholder = " Voornaam:";
    fNameInput.value = "$fname"
    fNameInput.type = "text";
    fNameInput.name = "fName";
    fNameInput.id = "fName";
    fNameInput.classList = "text-gray-600 w-[25%] rounded-[8px]";
    lNameLabel.for = "lastName";
    lNameLabel.textContent = "Achternaam:";
    root.append(holder);
    holder.append(formHolder);
    formHolder.append(form);
    form.append(fNameLabel);
    form.append(fNameInput);
    form.append(lNameLabel);

}