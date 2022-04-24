$(document).ready(function () {
    $.ajax({
      type: "POST",
      url: "php/MantenimientoUsuarios.php",
      data: { MostrarUsuarios: "MostrarUsuarios" },
      success: function (response) {
        $("#BodyUsuarios").html(response);
      },
      error: function (err) {
        alert("Se presentó un error al consulta los datos" + err);
      },
    });
  });