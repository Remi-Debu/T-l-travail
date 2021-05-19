//Ex 1
const buttonCheck = document.getElementById("buttonCheck");
const buttonUncheck = document.getElementById("buttonUncheck");

buttonCheck.addEventListener("click", function() {
    checkOrUncheckAll(true);
});

buttonUncheck.addEventListener("click", () => checkOrUncheckAll(false));

function checkOrUncheckAll(bool) {
    const checkboxes = document.querySelectorAll("input[type='checkbox']");

    for (let i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = bool;
    }
}

//Ex 2
const buttonRemoveBr = document.getElementById("buttonRemoveBr");

buttonRemoveBr.addEventListener("click", () => {
    removeBrAll();
});

function removeBrAll() {
    const br = document.getElementsByTagName("br");
    console.log(br);

    while (br[0]) {
        br[0].remove();
    }
}

//Ex 3
const cells = table.getElementsByTagName('td');

for (let i = 0; i < cells.length; i++) {
    cells[i].addEventListener("click", (e) => {
        if (e.target.firstChild.nodeType == Node.TEXT_NODE) {
            saveTextValue = cells[i].innerHTML;

            const input = document.createElement("input");
            input.type = "text";
            input.value = saveTextValue;

            cells[i].innerHTML = "";
            cells[i].appendChild(input);

            input.focus();

            input.onblur = function() {
                if (input.value != "") {
                    input.parentNode.innerHTML = input.value;
                } else {
                    input.parentNode.innerHTML = saveTextValue;
                }
            };
        }
    });

}