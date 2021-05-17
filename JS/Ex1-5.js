//Ex 1
function valeurAbsolue(valeur) {
    const valeurAbsolue = Math.abs(valeur);
    return console.log(valeurAbsolue);
}

valeurAbsolue(-15);

//Ex 2
function entierComparaison(a, b) {
    if (a == b) {
        return console.log("Ces 2 nombres sont égaux");
    } else {
        return console.log("Ces 2 nombres sont inégaux");
    }
}

entierComparaison(10, "10");

//Ex 3
function paireImpaire(nombre) {
    const reste = nombre % 2;
    if (reste == 0) {
        var message = console.log("Ce nombre est pair");
    } else if (reste == 1) {
        var message = console.log("Ce nombre est impair");
    } else {
        var message = console.log("Nombre incorrect");
    }
    return message;
}

paireImpaire(4);

//Ex 4
function factorielle(nombre) {
    if (nombre <= 1) {
        return 1;
    } else {
        return factorielle(nombre - 1) * nombre;
    }
}

const result = factorielle(5);
console.log(result);

//Ex 5
function AffichertableMultiplication() {
    var valeur;
    for (let index = 1; index <= 10; index++) {
        console.log("Table de : " + index);
        for (let index2 = 1; index2 <= 10; index2++) {
            valeur = index * index2;
            console.log(index + " x " + index2 + " = " + valeur);
        }

    }
}

AffichertableMultiplication();