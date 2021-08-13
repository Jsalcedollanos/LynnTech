$("#guardar").click(function(){
    var codigo = $("#codigo").val();
    var nombre = $("#nombre").val();
    var descripcion = $("#descripcion").val();
    var categoria = $("#categoria").val();
    var color = $("#color").val();
    var cantidad = $("#cantidad").val();
    var valor = $("#valor").val();
    var imagen = $("#imagen").val();
    var imagenGrande = $("#imagenGrande").val();
    var token = $("#token").val();
    var route = "http://127.0.0.1:8000/productos/create";

    $.ajax({

        url: route,
        type: 'POST',
        dataType: 'json',
        headers: {'X-CSRF-TOKEN':token},
        data:
            {   
                
                codigo:codigo,
                nombre:nombre,
                descripcion:descripcion,
                categoria:categoria,
                color:color,
                cantidad:cantidad,
                valor:valor,
                imagen:imagen,
                imagenGrande:imagenGrande
            
            }


    });

});
