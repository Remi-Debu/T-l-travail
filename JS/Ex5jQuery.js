//1ere partie (afficher tout)
$("#colorSelect option").each(function() {
    console.log($(this).val());
})
console.log($("option").length);

//3eme partie (Suppression)
$("#remove-btn").click(function() {
    $("#colorSelect option").remove();
})

/*
var counter = 0;

$("#colorSelect").change(function() {
    $("#colorSelect option:selected").each(function() {
        text = $(this).text();
        console.log(text);

        counter = counter + 1
        console.log(counter);
    });
}).change();
*/