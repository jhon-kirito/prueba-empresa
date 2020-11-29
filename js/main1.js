$(buscar_datos());
$(buscar_datos_subir());

function buscar_datos(consulta) {
    $.ajax({
            url: '../pages/clientesver.php',
            type: 'POST',
            dataType: 'html',
            data: { consulta: consulta },
        })
        .done(function(respuesta) {
            $("#datos").html(respuesta);
        })
        .fail(function() {
            console.log("error");

        })
}
$(document).on('keyup', '#caja_busqueda', function() {
    var valor = $(this).val();
    if (valor != "") {
        buscar_datos(valor);
    } else {
        buscar_datos()
    }
});

function buscar_datos_subir(consulta2) {
    $.ajax({
            url: '../pages/subirbusq.php',
            type: 'POST',
            dataType: 'html',
            data: { consulta2: consulta2 },
        })
        .done(function(respuesta2) {
            $("#datos_subir").html(respuesta2);
        })
        .fail(function() {
            console.log("error");
        })
}

$(document).on('keyup', '#caja_busqueda_subir', function() {
    var valor = $(this).val();
    if (valor != "") {
        buscar_datos_subir(valor);
    } else {
        buscar_datos_subir()
    }
});