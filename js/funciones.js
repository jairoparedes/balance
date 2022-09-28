function guardarpositividad() {
  var fecha = document.getElementById("fechapositividad").value;
  var publico = document.getElementById("publico").value;
  var privado = document.getElementById("privado").value;
  var total = document.getElementById("total").value;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bodytablepositividad").innerHTML =
        this.responseText;
    }
  };
  xmlhttp.open(
    "GET",
    "../controlador/guardarpositividad.php?fecha=" +
      fecha +
      "&publico=" +
      publico +
      "&privado=" +
      privado +
      "&total=" +
      total,
    true
  );
  xmlhttp.send();
}
function guardarDefuncioncsv() {
  var text = document.getElementById("textArea1").value;
  var texto = text.replace(/[\t]/g, ";");
  alert(texto);
  $.ajax({
    type: "POST",
    url: "../controlador/guardarDefuncioncsv.php",
    data: {
      nombre: texto,
    },
    success: function (datos) {
      console.log(datos);
      alert(datos);
    },
  });
}
function guardarJSON(textdiv, url) {
  var text = document.getElementById(textdiv).value;
  var texto = text.replace(/,/g, ".");
  texto = texto.replace(/[\t]/g, ";");
  alert(texto);
  $.ajax({
    type: "POST",
    url: "../controlador/guardarJSON.php",
    data: {
      nombre: texto,
      url: url,
    },
    success: function (datos) {
      console.log(datos);
      alert(datos);
    },
  });
}
function editarpositividad(index) {
  var fecha = document.getElementById("fechapositividad" + index).value;
  var publico = document.getElementById("publico" + index).value;
  var privado = document.getElementById("privado" + index).value;
  var total = document.getElementById("total" + index).value;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bodytablepositividad").innerHTML =
        this.responseText;
    }
  };
  xmlhttp.open(
    "GET",
    "../controlador/editarpositividad.php?index=" +
      index +
      "&fecha=" +
      fecha +
      "&publico=" +
      publico +
      "&privado=" +
      privado +
      "&total=" +
      total,
    true
  );
  xmlhttp.send();
}
function editarepidemica(index) {
  var SE = document.getElementById("SE" + index).value;
  var CONFIRMADA = document.getElementById("CONFIRMADA" + index).value;
  var PROBABLE = document.getElementById("PROBABLE" + index).value;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bodytableepidemica").innerHTML =
        this.responseText;
    }
  };
  xmlhttp.open(
    "GET",
    "../controlador/editarepidemica.php?index=" +
      index +
      "&SE=" +
      SE +
      "&CONFIRMADA=" +
      CONFIRMADA +
      "&PROBABLE=" +
      PROBABLE,
    true
  );
  xmlhttp.send();
}
function editarconfirmados(index) {
  alert("Editar confirmados");
  var FECHA = document.getElementById("FECHACONFIRMADOS" + index).value;
  var SINTOMATICOS = document.getElementById("SINTOMATICOS" + index).value;
  var ASINTOMATICOS = document.getElementById("ASINTOMATICOS" + index).value;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bodytableconfirmados").innerHTML =
        this.responseText;
    }
  };
  xmlhttp.open(
    "GET",
    "../controlador/editarconfirmados.php?index=" +
      index +
      "&FECHA=" +
      FECHA +
      "&SINTOMATICOS=" +
      SINTOMATICOS +
      "&ASINTOMATICOS=" +
      ASINTOMATICOS,
    true
  );
  xmlhttp.send();
}
function editarincidencia(index) {
  var FECHAINCIDENCIA = document.getElementById(
    "FECHAINCIDENCIA" + index
  ).value;
  var INC = document.getElementById("INC" + index).value;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bodytableincidencia").innerHTML =
        this.responseText;
    }
  };
  xmlhttp.open(
    "GET",
    "../controlador/editarincidencia.php?index=" +
      index +
      "&FECHAINCIDENCIA=" +
      FECHAINCIDENCIA +
      "&INC=" +
      INC,
    true
  );
  xmlhttp.send();
}
function editarhospitalizados(index) {
  var FECHAHOSPITALIZADOS = document.getElementById(
    "FECHAHOSPITALIZADOS" + index
  ).value;
  var HOSPITALIZADOS = document.getElementById("HOSPITALIZADOS" + index).value;
  var UCI = document.getElementById("UCI" + index).value;
  var UTI = document.getElementById("UTI" + index).value;
  var BASICAMEDIA = document.getElementById("BASICAMEDIA" + index).value;

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bodytablehospitalizados").innerHTML =
        this.responseText;
    }
  };
  xmlhttp.open(
    "GET",
    "../controlador/editarhospitalizados.php?index=" +
      index +
      "&FECHAHOSPITALIZADOS=" +
      FECHAHOSPITALIZADOS +
      "&HOSPITALIZADOS=" +
      HOSPITALIZADOS +
      "&UCI=" +
      UCI +
      "&UTI=" +
      UTI +
      "&BASICAMEDIA=" +
      BASICAMEDIA,
    true
  );
  xmlhttp.send();
}
function editarhospitalizacionesSE(index) {
  var FECHA = document.getElementById("SEHOSPITALIZADOS" + index).value;
  var HOSPITALIZADOS = document.getElementById(
    "HOSPITALIZADOSSE" + index
  ).value;

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bodytablehospitalizadosse").innerHTML =
        this.responseText;
    }
  };
  xmlhttp.open(
    "GET",
    "../controlador/editarhospitalizacionesSE.php?index=" +
      index +
      "&SE=" +
      FECHA +
      "&HOSPITALIZADOS=" +
      HOSPITALIZADOS,
    true
  );
  xmlhttp.send();
}
function editaruciSE(index) {
  var FECHA = document.getElementById("SEUCI" + index).value;
  var UCI = document.getElementById("UCISE" + index).value;

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bodytableucise").innerHTML = this.responseText;
    }
  };
  xmlhttp.open(
    "GET",
    "../controlador/editaruciSE.php?index=" +
      index +
      "&SE=" +
      FECHA +
      "&UCI=" +
      UCI,
    true
  );
  xmlhttp.send();
}
function editarutiSE(index) {
  var FECHA = document.getElementById("SEUTI" + index).value;
  var UTI = document.getElementById("UTISE" + index).value;

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bodytableutise").innerHTML = this.responseText;
    }
  };
  xmlhttp.open(
    "GET",
    "../controlador/editarutiSE.php?index=" +
      index +
      "&SE=" +
      FECHA +
      "&UTI=" +
      UTI,
    true
  );
  xmlhttp.send();
}
function editarvmSE(index) {
  var FECHA = document.getElementById("SEVM" + index).value;
  var VM = document.getElementById("VMSE" + index).value;

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bodytablevmse").innerHTML = this.responseText;
    }
  };
  xmlhttp.open(
    "GET",
    "../controlador/editarvmSE.php?index=" +
      index +
      "&SE=" +
      FECHA +
      "&VM=" +
      VM,
    true
  );
  xmlhttp.send();
}
function editardef(index) {
  var FECHADEF = document.getElementById("FECHADEF" + index).value;
  var CONFIRMADODEF = document.getElementById("CONFIRMADODEF" + index).value;
  var SOSPECHADEF = document.getElementById("SOSPECHADEF" + index).value;

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bodytabledef").innerHTML = this.responseText;
    }
  };
  xmlhttp.open(
    "GET",
    "../controlador/editardefunciones.php?index=" +
      index +
      "&FECHADEF=" +
      FECHADEF +
      "&CONFIRMADODEF=" +
      CONFIRMADODEF +
      "&SOSPECHADEF=" +
      SOSPECHADEF,
    true
  );
  xmlhttp.send();
}
function guardarAnalisislocal(str) {
  var text = $("#textArea").html();
  var url = "../controlador/guardarAnalisislocal.php";
  $.ajax({
    type: "POST",
    url: "../controlador/guardarAnalisislocal.php",
    data: {
      nombre: text,
    },
    success: function (datos) {
      console.log(datos);
      alert("Datos Guardados");
      $(".editor").load(
        "../contenidos/contenido_situacion_regional/contenido_analisis_local.php"
      );
    },
  });
}
function guardarMedidas(str, ruta) {
  var text = document
    .getElementById(str)
    .getElementsByClassName("ql-editor")[0].innerHTML;
  $.ajax({
    type: "POST",
    url: "../../mantenedor/controlador/guardarMedidas.php",
    data: {
      datos: text,
      url: ruta,
    },
    success: function (datos) {
      if (datos === "Guardado Exitosamente") {
        alert("Guardado Exitosamente");
      }
    },
  });
}
var btn = document.querySelector(".sai");
var getText = document.querySelector(".getText");
var content = document.querySelector(".getcontent");
var editorContent = document.querySelector(".editor");

btn.addEventListener("click", function () {
  var s = editorContent.innerHTML;
  content.style.display = "block";
  content.textContent = s;
});

getText.addEventListener("click", function () {
  const old = editorContent.textContent;
  content.style.display = "block";
  content.textContent = old;
});

function link() {
  var url = prompt("Enter the URL");
  document.execCommand("createLink", false, url);
}

function copy() {
  document.execCommand("copy", false, "");
}

function changeColor() {
  var color = prompt("Enter your color in hex ex:#f1f233");
  document.execCommand("foreColor", false, color);
}

function getImage() {
  var file = document.querySelector("input[type=file]").files[0];

  var reader = new FileReader();

  let dataURI;

  reader.addEventListener(
    "load",
    function () {
      dataURI = reader.result;

      const img = document.createElement("img");
      img.src = dataURI;
      editorContent.appendChild(img);
    },
    false
  );

  if (file) {
    console.log("s");
    reader.readAsDataURL(file);
  }
}

function printMe() {
  if (confirm("Check your Content before print")) {
    const body = document.body;
    let s = body.innerHTML;
    body.textContent = editorContent.innerHTML;

    document.execCommandShowHelp;
    body.style.whiteSpace = "pre";
    window.print();
    location.reload();
  }
}
function insertHTML() {
  document.execCommand(
    "insertHTML",
    false,
    "<div style='text-align: -webkit-center; align-content: center; align-items: center; align-self: center; width: 100%;'>[Pega Aqui]</div>"
  );
}
function insertHTMLtitle() {
  document.execCommand(
    "insertHTML",
    false,
    "<div><div style='box-sizing: inherit; color: rgb(51, 51, 51); font-size: 15px; display: flex; border: 1px solid deepskyblue; margin-bottom: 0.5em; margin-top: 1em;'><div style='box-sizing: inherit; background: blue; padding: 0.2em; width: 25.5px;'></div><div style='box-sizing: inherit; background: red; padding: 0.2em; width: 38.25px;'></div><div style='box-sizing: inherit; background: papayawhip; padding: 0.2em; width: 1211.5px;'><h3 style='box-sizing: inherit; line-height: 1.1; color: inherit; font-size: 24px;'>TITULO</h3></div></div></div>"
  );
}
$("table tbody tr").click(function () {
  var total = $(this).find("td:last-child").text();
});
function guardarDefuncioncsv() {
  var text = document.getElementById("textArea1").value;
  var texto = text.replace(/[\t]/g, ";");
  alert(texto);
  $.ajax({
    type: "POST",
    url: "../controlador/guardarDefuncioncsv.php",
    data: {
      nombre: texto,
    },
    success: function (datos) {
      console.log(datos);
      alert(datos);
    },
  });
}
function guardarCSV(textdiv, url) {
  var text = document.getElementById(textdiv).value;
  var texto = text.replace(/[\t]/g, ";");
  alert(texto);
  $.ajax({
    type: "POST",
    url: "../controlador/guardarCSV.php",
    data: {
      nombre: texto,
      url: url,
    },
    success: function (datos) {
      console.log(datos);
      alert(datos);
    },
  });
}