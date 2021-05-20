$("#text").on("mouseover", function() {
    $(this).css({
        color: "red",
        border: "1px solid black"
    });
});

$("#jsstyle").click(function() {
    $(this).css("color", "blue");
});