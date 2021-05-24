/*$("button").click(function() {
    $.ajax(
        'test2.php', {
            success: function(data) {
                alert(data);
            },
            error: function() {
                alert('Error Code');
                alert('Error Message');
            }
        });
})*/

$.ajax(
    'execution.php', {
        success: function() {
            $("#test2").load("Execution.html #marque option");
            $("#marque").load("/Execution.html #projects li");
            $("#test").add("<option id='test'>coucou</option>").appendTo("#marque");
        },
        error: function() {
            alert('Error Code');
            alert('Error Message');
        }
    });