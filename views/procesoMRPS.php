<?php
if ($_POST['g-recaptcha-response'] == '') {
  echo "<script>";
  echo "location.href='https://haconsultingeu.com/pagina/registroMRPS.php';";
  echo "alert('Tienes que validar el Captcha')";
  echo "</script>";
  } else {
  $obj = new stdClass();
  $obj->secret = "6LfRSNISAAAAACKaHw2e-JvgeG-3src_dRGpL-Ql";
  $obj->response = $_POST['g-recaptcha-response'];
  $obj->remoteip = $_SERVER['REMOTE_ADDR'];
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  
  $options = array(
  'http' => array(
  'header' => "Content-type: application/x-www-form-urlencoded\r\n",
  'method' => 'POST',
  'content' => http_build_query($obj)
  )
  );
  $context = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  
  $validar = json_decode($result);
  
  /* FIN DE CAPTCHA */

include("Mailer/src/PHPMailer.php");
include("Mailer/src/SMTP.php");
include("Mailer/src/Exception.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
  //Credenciales de correo, seguridad y cotejamiento
  $mail->CharSet = 'UTF-8';
  $fromEmail = "info@haconsultingeu.com";
  $password = "hpZs(8VGFf-v";
  $fromName = "MRPS H&A Consulting";
  $host = "mail.haconsultingeu.com";
  $port = "25";
  $SMTPAuth = "login";
  $SMTPSecure = "tls";

  //Se establecen los valores que llegan por medio de POST
  //Se hacen estas validaciones para mayor seguridad
  $nombre = $_POST['nombre'];
  if($nombre == "")
  {
    echo "<script>";
    echo "location.href='https://haconsultingeu.com/pagina/registroMRPS.php';";
    echo "alert('El nombre no puede estar vacío')";
    echo "</script>";
  }

  $apellido = $_POST['apellido'];
  if($apellido == "")
  {
    echo "<script>";
    echo "location.href='https://haconsultingeu.com/pagina/registroMRPS.php';";
    echo "alert('El apellido no puede estar vacío')";
    echo "</script>";
  }

  $numeroIdentificacion = $_POST['numeroIdentificacion'];
  if($numeroIdentificacion == "")
  {
    echo "<script>";
    echo "location.href='https://haconsultingeu.com/pagina/registroMRPS.php';";
    echo "alert('El número de identificación no puede estar vacío')";
    echo "</script>";
  }

  $profesion = $_POST['profesion'];
  if($profesion == "")
  {
    echo "<script>";
    echo "location.href='https://haconsultingeu.com/pagina/registroMRPS.php';";
    echo "alert('La profesión no puede estar vacía')";
    echo "</script>";
  }

  $especializacion = $_POST['especializacion'];
  if($especializacion == "")
  {
    echo "<script>";
    echo "location.href='https://haconsultingeu.com/pagina/registroMRPS.php';";
    echo "alert('La especialización no puede estar vacía')";
    echo "</script>";
  }

  $numeroLicencia = $_POST['numeroLicencia'];
  if($numeroLicencia == "")
  {
    echo "<script>";
    echo "location.href='https://haconsultingeu.com/pagina/registroMRPS.php';";
    echo "alert('El número de licencia no puede estar vacío')";
    echo "</script>";
  }

  $fechaVencimiento = $_POST['fechaVencimiento'];
  if($fechaVencimiento == "")
  {
    echo "<script>";
    echo "location.href='https://haconsultingeu.com/pagina/registroMRPS.php';";
    echo "alert('La fecha de vencimiento no puede estar vacía')";
    echo "</script>";
  }

  $tarjetaProfesional = $_POST['tarjetaProfesional'];
  if($tarjetaProfesional == "")
  {
    echo "<script>";
    echo "location.href='https://haconsultingeu.com/pagina/registroMRPS.php';";
    echo "alert('La tarjeta profesional no puede estar vacía')";
    echo "</script>";
  }

  $empresa = $_POST['empresa'];
  if($empresa == "")
  {
    echo "<script>";
    echo "location.href='https://haconsultingeu.com/pagina/registroMRPS.php';";
    echo "alert('La empresa no puede estar vacía')";
    echo "</script>";
  }

  $cargo = $_POST['cargo'];
  if($cargo == "")
  {
    echo "<script>";
    echo "location.href='https://haconsultingeu.com/pagina/registroMRPS.php';";
    echo "alert('El cargo no puede estar vacío')";
    echo "</script>";
  }

  $numeroCelular = $_POST['numeroCelular'];
  if($numeroCelular == "")
  {
    echo "<script>";
    echo "location.href='https://haconsultingeu.com/pagina/registroMRPS.php';";
    echo "alert('El número de celular no puede estar vacío')";
    echo "</script>";
  }

  $correo = $_POST['correo'];
  if($correo == "")
  {
    echo "<script>";
    echo "location.href='https://haconsultingeu.com/pagina/registroMRPS.php';";
    echo "alert('El correo no puede estar vacío')";
    echo "</script>";
  }

  $fecha = date("d") . " del " . date("m") . " de " . date("Y");

  $nombreArchivoLicencia = $_FILES['fileLicencia']['name'];
  $nombreArchivoTarjeta = $_FILES['fileTarjeta']['name'];

  $nombreArchivoLicenciaFinal = $numeroIdentificacion.$nombreArchivoLicencia;
  $nombreArchivoTarjetaFinal = $numeroIdentificacion.$nombreArchivoTarjeta;

  //Este bloque de código es para guardar los archivos en la carpeta documentos
  $ruta = "../plataformas/MRPS/documentos/";
  opendir($ruta);
  $rutaDestinoLicencia = $ruta.$nombreArchivoLicenciaFinal;
  $rutaDestinoTarjeta = $ruta.$nombreArchivoTarjetaFinal;
  copy($_FILES['fileLicencia']['tmp_name'], $rutaDestinoLicencia);
  copy($_FILES['fileTarjeta']['tmp_name'], $rutaDestinoTarjeta);

  $mail->isSMTP();

  //Se establecen valores
  $mail->SMTPDebug = 0;
  $mail->Host = $host;
  $mail->Port = $port;
  $mail->SMTPAuth = $SMTPAuth;
  $mail->SMTPSecure = $SMTPSecure;
  $mail->Username = $fromEmail;
  $mail->Password = $password;
  $correos = array("osalcedo@haltda.com.co", "hhernandez@haltda.com.co", "soporteist2@haltda.com.co", "soporteist@haltda.com.co");
  //$correos = array("osalcedo@haltda.com.co");

  //Es para la conexión HTTPS, si la conexión en HTTP, comentarlo
  $mail->SMTPOptions = array(
    'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
    )
  );

  $mail->setFrom($fromEmail, $fromName);

  //Si la varaible correos es un array, enviará los correos a todos, sino, no pasa nada, igual lo envía ;)
  if(is_array($correos))
  {
    foreach ($correos as $key => $value) {
      $mail->addAddress($value);
    }
  } else {
    $mail->addAddress($correos);
  }

  $mail->IsHTML(true);
  $mail->Subject = "Solicitud de acceso a MRPS H&A Consulting";
  $mail->Body = "<div>
                    <h2>Cordial saludo.</h2>
                    <h4>Informamos que se ha registrado una nueva solicitud de acceso a la plataforma de MRPS</h4>
                    <h4>La información de contacto es la siguiente:</h4>
                    <h4 style='color: blue;'>- FECHA DE SOLICITUD: </h4>". $fecha ."
                    <h4 style='color: blue;'>- NOMBRE: </h4>". $nombre ." ". $apellido ."
                    <h4 style='color: blue;'>- NÚMERO DE DOCUMENTO: </h4>". $numeroIdentificacion ."
                    <h4 style='color: blue;'>- CORREO ELECTRÓNICO: </h4>". $correo ."
                    <h4 style='color: blue;'>- NÚMERO TELEFÓNICO: </h4>". $numeroCelular ."
                    <h4 style='color: blue;'>- PROFESIÓN: </h4>". $profesion ."
                    <h4 style='color: blue;'>- ESPECIALIZACIÓN: </h4>". $especializacion ."
                    <h4 style='color: blue;'>- NO. DE LICENCIA EN SEGURIDAD Y SALUD EN EL TRABAJO (SST): </h4>". $numeroLicencia ."
                    <h4 style='color: blue;'>- FECHA DE VENCIMIENTO: </h4>". $fechaVencimiento ."
                    <h4 style='color: blue;'>- NO. DE TARJETA PROFESIONAL: </h4>". $tarjetaProfesional ."
                    <h4 style='color: blue;'>- NOMBRE DE LA EMPRESA: </h4>". $empresa ."
                    <h4 style='color: blue;'>- CARGO DE LA PERSONA: </h4>". $cargo ."
                    <br>
                    <h4>Atentamente,</h4>
                    <h5 style='color: #396DD1;'>H&A CONSULTING LTDA</h5>
                    <h5 style='color: #ED6E40;'>Adivising & Doing</h5>
                    <h3 style='color: red; text-align: center;'>ESTE ES UN CORREO INFORMATIVO, POR FAVOR, NO RESPONDA</h3>
                  </div>";

  //Se adjuntan archivos
  $mail->AddAttachment($rutaDestinoLicencia);
  $mail->AddAttachment($rutaDestinoTarjeta);

  if(!$mail->send())
  {
    echo "<script>";
    echo "location.href='https://haconsultingeu.com/pagina/';";
    echo "alert('¡Ups! Parece que algo malo ocurrió.')";
    echo "</script>";
    die();
  }

  echo "<script>";
  echo "location.href='https://haconsultingeu.com/pagina/';";
  echo "alert('¡Gracias por comunicarte con nosotros! Te contactaremos pronto.')";
  echo "</script>";



} catch (\Exception $e) {
  echo $e;
}
}
