$(document).ready(function(){
    $("#creer").click (function(event){
        event.preventDefault();
        appelAjax();
    });

    function appelAjax() {
        $.get("boncoin.php", function (data) {
                console.log(typeof data);
                console.log(data);
                var result = $.parseJSON(data);
                console.log(result);
                // table
                var ouvertureTbale = "<table>";
                var contentTable = " ";
                var femerTbale = "</table>";

                $.each(result, function (indice, objet) {
                    contentTable += "<tr>";
                    contentTable += "<td>"+  objet.id_invoice + "</td>";
                    contentTable += "<td>"+  objet.first_name + "</td>";
                    contentTable += "<td>"+  objet.last_name+ "</td>";
                    contentTable += "<td>"+  objet.address + "</td>";
                    contentTable += "<td>"+  objet.postal_code + "</td>";
                    contentTable += "<td>"+  objet.city + "</td>";
                    contentTable += "<td>"+  "<a href='"+ "facture.php?id_invoice="+ objet.id_invoice + "'>Telecharger</a>" + "</td>";
                    contentTable += "</tr>";
                });
                var table = ouvertureTbale + contentTable + femerTbale;
                $("#resultat").html(table);
        });
     }
});
