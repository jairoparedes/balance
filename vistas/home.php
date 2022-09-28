<html lang="en">

<head>
  <meta charset="utf-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Dashboard Template for Bootstrap</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

  <!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="dist/css/dashboard.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="assets/js/vendor/popper.min.js"></script>
  <script src="dist/js/bootstrap.min.js"></script>

  <!-- html2canvas -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>


  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  <script type="text/javascript" src="vistas/funciones.js"></script>
  <script>
    feather.replace()
  </script>



  <style type="text/css">
    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    @keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    .chartjs-render-monitor {
      -webkit-animation: chartjs-render-animation 0.001s;
      animation: chartjs-render-animation 0.001s;
    }
  </style>
  <style type="text/css">
    @font-face {
      font-family: Roboto;
      src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf");
    }
  </style>
  <script>
    function balance1() {
      a = document.getElementById("a").value;
      b = document.getElementById("b").value;
      c = document.getElementById("c").value;
      d = document.getElementById("d").value;
      e = document.getElementById("e").value;
      f = document.getElementById("f").value;
      g = document.getElementById("g").value;
      h = document.getElementById("h").value;
      fecha = document.getElementById("fecha").value;

      vent2 = window.open('https://eydsalacrisis9.cl/situacion-covid19/mantenedor/contenidos/contenido_reporte_comunicaciones/balance1.php?fecha=MIERCOLES%2008%20JUNIO&a=' + e + '&b=' + f + '&c=' + g + '&d=' + h + '', "ventana1", "width=1920,height=300,scrollbars=NO");
    }

    function balance() {
      a = document.getElementById("a").value;
      b = document.getElementById("b").value;
      c = document.getElementById("c").value;
      d = document.getElementById("d").value;
      e = document.getElementById("e").value;
      f = document.getElementById("f").value;
      g = document.getElementById("g").value;
      h = document.getElementById("h").value;
      fecha = document.getElementById("fecha").value;

      vent1 = window.open('https://eydsalacrisis9.cl/situacion-covid19/mantenedor/contenidos/contenido_reporte_comunicaciones/balance.php?fecha=MIERCOLES%2008%20JUNIO&a=' + a + '&b=' + b + '&c=' + c + '&d=' + d + '', "ventana1", "width=1920,height=300,scrollbars=NO");
    }
  </script>
</head>

<body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">BALANCE REGIONAL</a>
    <!--<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#" onclick="location.href='includes/logout.php';">Cerrar Sesion</a>
      </li>
    </ul>
  </nav>
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Balance <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
  <div class="container-fluid">
    <div class="row">
      

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
          <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
          </div>
          <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
          </div>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Balance regional</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button class="btn btn-sm btn-outline-secondary" onclick="balance()">Grafica 1</button>
              <button class="btn btn-sm btn-outline-secondary" onclick="balance1()">Grafica 2</button>
            </div>
          </div>
        </div>
        <div class="h-100 bg-grey">
          <?php
          header('Content-Type: text/html; charset=UTF-8');
          setlocale(LC_ALL, "es_ES");
          $fecha = utf8_encode(strtoupper(strftime("%A %d %B")));

          //Salida: viernes 05 de Septiembre del 2016
          ?>

          <p id="fecha" value="<?php echo $fecha; ?>"><?php echo $fecha; ?></p>
          <div class="principal bg-white">
            <div class="container px-4" id="contenido">
              <style>
                .toolbar {
                  display: grid;
                  grid-template-columns: repeat(auto-fit, minmax(20px, 40px));
                  background-color: rgb(231, 231, 231);
                  color: rgb(0, 0, 0);
                  grid-gap: 1rem;
                  padding: 1rem;
                  justify-content: center;
                  align-items: center;
                }

                .tool-items {
                  background-color: rgb(27, 26, 26);
                  padding-top: .6rem;
                  padding-bottom: .6rem;
                  cursor: pointer;
                  color: #ffff;
                }

                .tool-items:hover {
                  box-shadow: none;
                  background-color: #6b5e5e;

                }



                .center {
                  display: flex;
                  justify-content: center;
                  flex-wrap: wrap;
                }


                .editor {
                  width: 100%;
                  height: 100vh;
                  margin: 1rem;
                  padding: 1rem;
                  font-size: 1.2rem;
                  box-shadow: 0 .1rem .4rem black;
                  border: 1px solid black;
                  overflow-y: auto;
                }

                .getcontent {
                  white-space: pre;
                  width: 80vw;
                  background-color: rgb(255, 255, 255);
                  overflow: auto;
                  padding: 1rem;
                  display: none;
                  margin-top: 1rem;
                  box-shadow: .1rem .1rem .5rem rgb(255, 255, 255);
                  border: 1px solid rgb(0, 0, 0);
                }



                .btn1 {
                  padding: .5rem;
                  background-color: #7e1111;
                  margin-right: 1rem;
                  color: #fffffc;
                  letter-spacing: .1rem;
                  font-size: 1rem;
                  border-radius: .2rem;
                  cursor: pointer;
                  outline: none;
                  box-shadow: 0 .4rem .4rem black;
                  transition: all .3s;
                }

                .btn1:hover {
                  background-color: #7e1111d0;
                  box-shadow: 0 .1rem .1rem black;
                }

                label {
                  margin-left: 0.04rem;
                  padding-left: .7rem
                }
              </style>




              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">CASOS NUEVOS </label>
                    <input type="text" class="form-control" id="a">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">CASOS ACTIVOS </label>
                    <input type="text" class="form-control" id="b">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">CASOS TOTALES ACUMULADOS </label>
                    <input type="text" class="form-control" id="c">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">EXÁMENES PCR PROCESADOS LAS ÚLTIMAS 24 HORAS </label>
                    <input type="text" class="form-control" id="d">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">FALLECIDOS </label>
                    <input type="text" class="form-control" id="e">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">HOSPITALIZADOS </label>
                    <input type="text" class="form-control" id="f">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">UCI </label>
                    <input type="text" class="form-control" id="g">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">UTI </label>
                    <input type="text" class="form-control" id="h">
                  </div>
                </div>
              </form>
              <!-- ################################################################################# -->
              <!-- ################################################################################# -->
              <!-- ################################################################################# -->
              <!-- Editar inmunizaciones_por_comuna.csv -->
              <!-- ################################################################################# -->
              <!-- ################################################################################# -->
              <!-- ################################################################################# 
              <div class="row gx-5 py-5">
                <div style="width: 100%; justify-content: right;display: -webkit-inline-box;">
                  <div style="width: 50%;">
                    <p>CASOS NUEVOS: </p>
                  </div>
                  <div class="center" style="width: 50%;">
                    <input id="a"></input>
                  </div>
                </div>
                <div style="width: 100%; justify-content: right;display: -webkit-inline-box;">
                  <div style="width: 50%;">
                    <p>CASOS ACTIVOS: </p>
                  </div>
                  <div class="center" style="width: 50%;">
                    <input id="b"></input>
                  </div>
                </div>
                <div style="width: 100%; justify-content: right;display: -webkit-inline-box;">
                  <div style="width: 50%;">
                    <p>CASOS TOTALES ACUMULADOS: </p>
                  </div>
                  <div class="center" style="width: 50%;">
                    <input id="c"></input>
                  </div>
                </div>
                <div style="width: 100%; justify-content: right;display: -webkit-inline-box;">
                  <div style="width: 50%;">
                    <p>EXÁMENES PCR PROCESADOS LAS ÚLTIMAS 24 HORAS: </p>
                  </div>
                  <div class="center" style="width: 50%;">
                    <input id="d"></input>
                  </div>
                </div>
                <div style="width: 100%; justify-content: right;display: -webkit-inline-box;">
                  <div style="width: 50%;">
                    <p>FALLECIDOS: </p>
                  </div>
                  <div class="center" style="width: 50%;">
                    <input id="e"></input>
                  </div>
                </div>
                <div style="width: 100%; justify-content: right;display: -webkit-inline-box;">
                  <div style="width: 50%;">
                    <p>HOSPITALIZADOS: </p>
                  </div>
                  <div class="center" style="width: 50%;">
                    <input id="f"></input>
                  </div>
                </div>
                <div style="width: 100%; justify-content: right;display: -webkit-inline-box;">
                  <div style="width: 50%;">
                    <p>UCI: </p>
                  </div>
                  <div class="center" style="width: 50%;">
                    <input id="g"></input>
                  </div>
                </div>
                <div style="width: 100%; justify-content: right;display: -webkit-inline-box;">
                  <div style="width: 50%;">
                    <p>UTI: </p>
                  </div>
                  <div class="center" style="width: 50%;">
                    <input id="h"></input>
                  </div>
                </div>

              </div>-->
              <!-- ################################################################################# -->
              <!-- ################################################################################# -->
              <!-- ################################################################################# -->
              <!-- Editar inmunizaciones_por_comuna.csv -->
              <!-- ################################################################################# -->
              <!-- ################################################################################# -->
              <!-- ################################################################################# -->
              <div class="row gx-5 py-5">
                <div>
                  <h3>balance1.csv</h3>
                </div>

                <div style="width: 100%; justify-content: right;" class="center">
                  <textarea class="editor" id="textArea8" style="height: 290px;"></textarea>
                </div>

                <div style="width: 100%; justify-content: right;" class="center">
                  <button type="button" class="btn btn-primary" onclick="guardarCSV('textArea8','../../situacion-covid19/mantenedor/datos/medidas_sanitarias/balance1.csv');">Guardar</button>
                </div>
                <script>
                  $(document).ready(function() {
                    $('#textArea8').load('../situacion-covid19/mantenedor/datos/medidas_sanitarias/balance1.csv');
                  });
                </script>
              </div>
              <!-- ################################################################################# -->
              <!-- ################################################################################# -->
              <!-- ################################################################################# -->
              <!-- Editar inmunizaciones_por_comuna.csv -->
              <!-- ################################################################################# -->
              <!-- ################################################################################# -->
              <!-- ################################################################################# -->
              <div class="row gx-5 py-5">
                <div>
                  <h3>balance2.csv</h3>
                </div>

                <div style="width: 100%; justify-content: right;" class="center">
                  <textarea class="editor" id="textArea9" style="height: 290px;"></textarea>
                </div>

                <div style="width: 100%; justify-content: right;" class="center">
                  <button type="button" class="btn btn-primary" onclick="guardarCSV('textArea9','../../situacion-covid19/mantenedor/datos/medidas_sanitarias/balance2.csv');">Guardar</button>
                </div>
                <script>
                  $(document).ready(function() {
                    $('#textArea9').load('../situacion-covid19/mantenedor/datos/medidas_sanitarias/balance2.csv');
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script> -->




</body>

</html>