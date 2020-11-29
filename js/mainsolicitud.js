$("#adicional").click(function(event) {
    $(".container-fluid").load('soli_archivos.php');
    $(buscar_datos_adicionales());
});
$(buscar_datos());

function buscar_datos(consulta) {
  $.ajax({
    url:'../pages/solicitudes2.php',
    type:'POST',
    dataType:'html',
    data:{consulta: consulta},

  })
  .done(function(respuesta){
    $("#datos").html(respuesta);
  })
  .fail(function () {
    console.log("error");

  })
}

$(document).on('keyup','#caja_busqueda',function(){
  var valor=$(this).val();
  if (valor!=="") {
  buscar_datos(valor);
}else{
  buscar_datos()
}
});

function buscar_datos_adicionales(consulta2) {
    $.ajax({
            url: '../pages/subirbusq.php',
            type: 'POST',
            dataType: 'html',
            data: { consulta2: consulta2 },

        })
        .done(function(respuesta) {
            $("#datos2").html(respuesta);
        })
        .fail(function() {
            console.log("error");
        })
}

$(document).on('keyup', '#caja_busqueda_subir', function() {
    var valor = $(this).val();
    if (valor != "") {
        buscar_datos_adicionales(valor);
    } else {
        buscar_datos_adicionales()
    }
});