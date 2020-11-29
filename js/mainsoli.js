$(buscar_datos());



function buscar_datos(consulta) {
  $.ajax({
    url:'../pages/soli.php',
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
