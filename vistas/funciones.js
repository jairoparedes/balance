function guardarCSV(textdiv, ruta) {
  var text = document.getElementById(textdiv).value;
  var texto = text.replace(/[\t]/g, ";");
  alert(texto);
  $.ajax({
    type: "POST",
    url: "vistas/guardarCSV.php",
    data: {
      nombre: texto,
      url: ruta,
    },
    success: function (datos) {
      console.log(datos);
      alert(datos);
    },
  });
}