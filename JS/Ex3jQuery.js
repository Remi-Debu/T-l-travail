function editCell(indiceColonne, indiceLigne, text) {
    $("#myTable")
        .find("tr:eq(" + indiceLigne + ")")
        .find("td:eq(" + indiceColonne + ")")
        .text(text);
}

$("input").on("keypress", function(e) {
    if (e.which == 13) {
        var inputVal1 = $("#input1").val();
        var inputVal2 = $("#input2").val();
        var inputVal3 = $("#input3").val();
        alert("Vous avez saisi: " + inputVal3);
        editCell(inputVal1, inputVal2, inputVal3);
    }
})