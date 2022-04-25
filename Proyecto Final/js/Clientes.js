$(document).ready(function () {
    $.ajax({
      type: "POST",
      url: "php/MantenimientoClientes.php",
      data: { MostrarClientes: "MostrarClientes" },
      success: function (response) {
        $("#BodyClientes").html(response);
      },
      error: function (err) {
        alert("Se presentó un error al consulta los datos" + err);
      },
    });
  });