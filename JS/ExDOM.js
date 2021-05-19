//Ex 1
let body = document.body;

let divTP1 = document.createElement("divTP1");
body.appendChild(divTP1);

let text1 = document.createTextNode("Le ");
divTP1.appendChild(text1);

let elStrong = document.createElement("Strong");
elStrong.textContent = "World Wild Web Consortium";
divTP1.appendChild(elStrong);

let text2 = document.createTextNode(", abrégé par le sigle ");
divTP1.appendChild(text2);

let elStrong2 = document.createElement("Strong");
elStrong2.textContent = "W3C";
divTP1.appendChild(elStrong2);

let text3 = document.createTextNode(", est un ");
divTP1.appendChild(text3);

const link1 = createLinkElement("https://fr.wikipedia.org/wiki/Organisme_de_normalisation", "Organisme de normalisation", "organisme de standardisation ", divTP1);

let text4 = document.createTextNode(" à but non-lucratif chargé de promouvoir la compatibilité des technologies du ");
divTP1.appendChild(text4);

const link2 = createLinkElement("https://fr.wikipedia.org/wiki/Word_Wide_Web", "Word Wide Web", "Word Wide Web", divTP1);

function createLinkElement(href, title, textContent, parent) {
    const link = document.createElement("a");
    link.href = href;
    link.title = title;
    link.textContent = textContent;
    divTP1.appendChild(link);
}

//Ex 2
let elDivTP2 = document.createElement("divTP2");
body.appendChild(elDivTP2);

let elForm = document.createElement("form");
elForm.enctype = "multipart/form-data";
elForm.method = "post";
elForm.action = "upload.php";
elDivTP2.appendChild(elForm);

let elFieldset = document.createElement("fieldset");
elDivTP2.appendChild(elFieldset);

let elLegend = document.createElement("legend");
elLegend.textContent = "Uploader une image";
elFieldset.appendChild(elLegend);

let elDiv = document.createElement("div");
elDiv.style = "text-align: center";
elFieldset.appendChild(elDiv);

let elLabel = document.createElement("label");
elLabel.for = "inputUpload";
elLabel.textContent = "Image à uploader :";
elDiv.appendChild(elLabel);

let elInput = document.createElement("input");
elInput.type = "file";
elInput.name = "inputUpload";
elInput.id = "inputUpload";
elDiv.appendChild(elInput);

const elBr = document.createElement("br");
elDiv.appendChild(elBr);
const elBr2 = document.createElement("br");
elDiv.appendChild(elBr2);

let elInput2 = document.createElement("input");
elInput2.type = "submit";
elInput2.value = "Envoyer";
elDiv.appendChild(elInput2);