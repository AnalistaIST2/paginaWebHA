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
        <div class="titleLogin"><span>Iniciar sesión</span></div>
        <form class="formLogin" action="../plataformas/MRPS/Controladores/controllerLogin.php" method="post">
          <div class="rowLogin">
            <i class="fas fa-user"></i>
            <input type="text" aria-label="Usuario" id="user" name="user" required placeholder="Usuario">
          </div>
          <div class="rowLogin">
            <i class="fas fa-lock"></i>
            <input type="password" aria-label="Contraseña" id="password" name="password" required placeholder="Contraseña">
          </div>
          <div class="rowLogin boton">
            <input type="submit" value="Iniciar sesión">
          </div>
          <div class="registerLink">
            <p style="font-size: 18px;">¿No tienes una cuenta? </p><a href="registroMRPS.php">Solicitar acceso</a>
          </div>
        </form>
      </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </main>
  <!-- Footer-->
  <?php
  include 'footer.php';
  ?>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="../assets/js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="../assets/js/scripts.js"></script>
</body>

</html>