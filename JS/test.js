/*var objXMLHttpRequest = new XMLHttpRequest();
    objXMLHttpRequest.onreadystatechange = function() {
        if (objXMLHttpRequest.readyState === 4) {
            if (objXMLHttpRequest.status === 200) {
                alert(objXMLHttpRequest.responseText);
            } else {
                alert('Error Code: ' + objXMLHttpRequest.status);
                alert('Error Message: ' + objXMLHttpRequest.statusText);
            }
        }
    }
    objXMLHttpRequest.open('GET', 'test2.php?prenom=Rémi');
    objXMLHttpRequest.send();
*/

$("button").click(function() {
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
})