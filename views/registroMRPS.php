<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" href="../assets/css/font.css">
  <link rel="stylesheet" href="../assets/css/estiloredes.css">
  <title>H&A IST</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="../assets/css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/styleLogin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style type="text/css">
    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>

</head>

<body class="d-flex flex-column h-100" style="text-align: justify;">
  <div class="social-bar">
    <a href="https://www.facebook.com/ha.consultingltda" class="icon icon-facebook" target="_blank"></a>
    <a href="https://twitter.com/haconsultingltd" class="icon icon-twitter" target="_blank"></a>
    <a href="https://www.instagram.com/hya_consulting/" class="icon icon-instagram" target="_blank"></a>
    <a href="https://www.linkedin.com/company/h&a-consulting-colombia" class="icon icon-linkedin2" target="_blank"></a>
    <a href="https://api.whatsapp.com/send/?phone=573208335304&text&app_absent=0" class="icon icon-whatsapp" target="_blank"></a>
    <a href="https://www.youtube.com/channel/UCKYYVYQOZOGgSbZ2734k57A/videos?view_as=subscriber" class="icon icon-youtube" target="_blank"></a>
  </div>
  <main class="flex-shrink-0">
    <!-- Navigation-->
    <?php
    include 'navbar.php';
    ?>
    <div class="containerLogin">
      <div class="wrapperLogin">
        <div class="titleLogin"><span>Solicitud de acceso</span></div>
        <form class="formLogin" onsubmit="return validarTodo();" action="procesoMRPS.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-6">
              <div class="rowLogin">
                <i class="fas fa-id-card"></i>
                <input type="number" aria-label="Número de identificación" id="numeroIdentificacion" name="numeroIdentificacion" placeholder="Número de identificación" required>
              </div>
            </div>
            <div class="col-6">
              <div class="rowLogin">
                <i class="fas fa-signature"></i>
                <input type="text" aria-label="Nombres" id="nombre" name="nombre" placeholder="Nombres" required>
              </div>
            </div>
            <div class="col-6">
              <div class="rowLogin">
                <i class="fas fa-file-signature"></i>
                <input type="text" aria-label="Apellidos" id="apellido" name="apellido" placeholder="Apellidos" required>
              </div>
            </div>
            <div class="col-6">
              <div class="rowLogin">
                <i class="fas fa-mobile"></i>
                <input type="number" aria-label="Número celular" id="numeroCelular" name="numeroCelular" placeholder="Número telefónico" required>
              </div>
            </div>
            <div class="col-6">
              <div class="rowLogin">
                <i class="fas fa-at"></i>
                <input type="text" id="correo" name="correo" placeholder="Correo electrónico" required>
              </div>
            </div>
            <div class="col-6">
              <div class="rowLogin">
                <i class="fas fa-user-tie"></i>
                <input type="text" aria-label="Profesión" id="profesion" name="profesion" placeholder="Profesión" required>
              </div>
            </div>
            <div class="col-6">
              <div class="rowLogin">
                <i class="fas fa-certificate"></i>
                <input type="text" aria-label="Especalización" id="especializacion" name="especializacion" placeholder="Especialización" required>
              </div>
            </div>
            <div class="col-6">
              <div class="rowLogin">
                <i class="fas fa-id-badge"></i>
                <input type="number" aria-label="No. de licencia de SST" id="numeroLicencia" name="numeroLicencia" placeholder="Número de licencia de SST" required>
              </div>
            </div>
            <div class="col-6">
              <div class="rowLogin">
                <center>
                  <p style="font-size: 18px;">Fecha de vencimiento de Licencia SST</p>
                </center>
                <i class="fas fa-calendar-week"></i>
                <input type="date" id="fechaVencimiento" name="fechaVencimiento" required>
              </div>
              <br><br>
            </div>
            <div class="col-6">
              <div class="rowLogin">
                <center>
                  <p style="font-size: 18px;">Licencia de SST</p>
                </center>
                <i class="fas fa-file-pdf"></i>
                <input type="file" id="fileLicencia" name="fileLicencia" accept=".pdf" size="1" required>
              </div>
            </div>
            <div class="col-6">
              <div class="rowLogin">
                <center>
                  <p style="font-size: 18px; color: transparent;">.</p>
                </center>
                <i class="fas fa-address-card"></i>
                <input type="number" aria-label="No. de tarjeta profesional" id="tarjetaProfesional" name="tarjetaProfesional" placeholder="No. de Tarjeta profesional" required>
              </div>
              <br><br>
            </div>
            <div class="col-6">
              <div class="rowLogin">
                <center>
                  <p style="font-size: 18px;">Tarjeta profesional</p>
                </center>
                <i class="fas fa-file-pdf"></i>
                <input type="file" id="fileTarjeta" name="fileTarjeta" accept=".pdf" size="1" required>
              </div>
            </div>
            <div class="col-6">
              <div class="rowLogin">
                <i class="fas fa-building"></i>
                <input type="text" aria-label="Empresa" id="empresa" name="empresa" placeholder="Nombre de la empresa" required>
              </div>
            </div>
            <div class="col-6">
              <div class="rowLogin">
                <i class="fas fa-id-card-alt"></i>
                <input type="text" id="cargo" name="cargo" placeholder="Cargo" required>
              </div>
            </div>
          </div>
          <center>
            <div class="g-recaptcha" data-sitekey="6LeCnHIeAAAAAHjH6yHZhVi864ObD5xsVRfOzQfU"></div>
            <br>
          </center>
          <div class="rowLogin boton">
            <input type="submit" value="Enviar solicitud">
          </div>
          <div class="registerLink">
            <p style="font-size: 18px;">¿Ya tienes una cuenta? </p><a href="loginMRPS.php">Iniciar sesión</a>
          </div>
        </form>
      </div>
    </div>
  </main>
  <!-- Footer-->
  <?php include 'footer.php' ?>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="../assets/js/scripts.js"></script>
</body>

</html>