$(document).ready(function () {
    $.ajax({
      type: "POST",
      url: "php/MantenimientoLocalizaciones.php",
      data: { MostrarLocalizaciones: "MostrarLocalizaciones" },
      success: function (response) {
        $("#BodyLocalizaciones").html(response);
      },
      error: function (err) {
        alert("Se presentó un error al consulta los datos" + err);
      },
    });
  });