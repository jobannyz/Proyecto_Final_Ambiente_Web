$(document).ready(function () {
    $.ajax({
      type: "POST",
      url: "php/MantenimientoProveedores.php",
      data: { MostrarProveedores: "MostrarProveedores" },
      success: function (response) {
        $("#BodyProveedores").html(response);
      },
      error: function (err) {
        alert("Se presentó un error al consulta los datos" + err);
      },
    });
  });