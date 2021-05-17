//Ex 1
let body = document.body;

let elDivTP1 = document.createElement("divTP1");

let text1 = document.createTextNode("Le ");
elDivTP1.appendChild(text1);

body.appendChild(elDivTP1);

let elStrong = document.createElement("Strong");
elStrong.textContent = "World Wild Web Consortium";
elDivTP1.appendChild(elStrong);

let text2 = document.createTextNode(", abrégé par le sigle ");
elDivTP1.appendChild(text2);

let elStrong2 = document.createElement("Strong");
elStrong2.textContent = "W3C";
elDivTP1.appendChild(elStrong2);

let text3 = document.createTextNode(", est un ");
elDivTP1.appendChild(text3);

let elA = document.createElement("a");
elA.href = "https://fr.wikipedia.org/wiki/Organisme_de_normalisation";
elA.title = "Organisme de normalisation";
elA.textContent = "organisme de standardisation ";
elDivTP1.appendChild(elA);

let text4 = document.createTextNode(" à but non-lucratif chargé de promouvoir la compatibilité des technologies du ");
elDivTP1.appendChild(text4);

let elA2 = document.createElement("a");
elA2.href = "https://fr.wikipedia.org/wiki/Word_Wide_Web";
elA2.title = "Word Wide Web";
elA2.textContent = "Word Wide Web";
elDivTP1.appendChild(elA2);

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