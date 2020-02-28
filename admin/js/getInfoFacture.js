$(document).ready(function(){
    $("#1").click (function(event){
        event.preventDefault();
        appelAjax();
    });

    function appelAjax() {
        $.get("ajaxTout.php", function (data) {
                console.log(typeof data);
                console.log(data);
                var result = $.parseJSON(data);
                console.log(result);
                $("#resultat").html(data);
        });
     }
});
