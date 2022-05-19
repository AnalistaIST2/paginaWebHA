<?php
include("../../library/Mailer/src/PHPMailer.php");
include("../../library/Mailer/src/SMTP.php");
include("../../library/Mailer/src/Exception.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    $mail->CharSet = 'UTF-8';
    $fromEmail = "info@haconsultingeu.com";
    $password = "hpZs(8VGFf-v";
    $fromName = "PQRS H&A Consulting";
    $host = "mail.haconsultingeu.com";
    $port = "25";
    $SMTPAuth = "login";
    $SMTPSecure = "tls";

    $nombre = $_POST['nombre'];
    $area = $_POST['area'];
    $tipoSolicitud = $_POST['tipoSolicitud'];
    $empresa = $_POST['empresa'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $direccion = $_POST['direccion'];
    $cargo = $_POST['cargo'];
    $recepcion = $_POST['recepcion'];
    $otro = $_POST['otro'];
    $observaciones = $_POST['observaciones'];
    $informacion = $_POST['informacion'];

    if ($nombre == "") {
        echo "<script>";
        echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/PQR/';";
        echo "alert('El nombre no puede estar vacío')";
        echo "</script>";
    }

    if ($area == "") {
        echo "<script>";
        echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/PQR/';";
        echo "alert('El área no puede estar vacía')";
        echo "</script>";
    }

    if ($tipoSolicitud == "") {
        echo "<script>";
        echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/PQR/';";
        echo "alert('El tipo de solicitud no puede estar vacío')";
        echo "</script>";
    }

    if ($empresa == "") {
        echo "<script>";
        echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/PQR/';";
        echo "alert('La empresa no puede estar vacía')";
        echo "</script>";
    }

    if ($email == "") {
        echo "<script>";
        echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/PQR/';";
        echo "alert('El correo no puede estar vacío')";
        echo "</script>";
    }

    if ($numero == "") {
        echo "<script>";
        echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/PQR/';";
        echo "alert('El número de contacto no puede estar vacío')";
        echo "</script>";
    }

    if ($direccion == "") {
        echo "<script>";
        echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/PQR/';";
        echo "alert('La dirección no puede estar vacío')";
        echo "</script>";
    }

    if ($cargo == "") {
        echo "<script>";
        echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/PQR/';";
        echo "alert('El cargo no puede estar vacío')";
        echo "</script>";
    }

    if ($recepcion == "") {
        echo "<script>";
        echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/PQR/';";
        echo "alert('La recepción no puede estar vacío')";
        echo "</script>";
    }

    if (isset($otro)) {
        if ($otro == "") {
            echo "<script>";
            echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/PQR/';";
            echo "alert('Por favor, especifique el tipo de recepción.')";
            echo "</script>";
        }
    } else {
        $otro == "";
    }

    if ($observaciones == "") {
        echo "<script>";
        echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/PQR/';";
        echo "alert('Las observaciones no puede estar vacío')";
        echo "</script>";
    }

    if ($informacion == "") {
        echo "<script>";
        echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/PQR/';";
        echo "alert('El información no puede estar vacío')";
        echo "</script>";
    }

    $nombreFile = $_FILES['file']['name'];

    $ruta = "../../documents/";
    opendir($ruta);
    $rutaArchivo = $ruta . $nombreFile;
    copy($_FILES['file']['tmp_name'], $rutaArchivo);

    $mail->isSMTP();

    //Se establecen valores
    $mail->SMTPDebug = 1;
    $mail->Host = $host;
    $mail->Port = $port;
    $mail->SMTPAuth = $SMTPAuth;
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Username = $fromEmail;
    $mail->Password = $password;
    $correos = array("soporteist2@haltda.com.co", "soporteist@haltda.com.co");

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
    if (is_array($correos)) {
        foreach ($correos as $key => $value) {
            $mail->addAddress($value);
        }
    } else {
        $mail->addAddress($correos);
    }

    $mail->IsHTML(true);
    $mail->Subject = "PQRS H&A Consulting LTDA";
    $mail->Body = "<p>wenas</p>";

    //Se adjuntan archivos
    $mail->AddAttachment($rutaArchivo);

    if (!$mail->send()) {
        echo "<script>";
        echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/H&A/';";
        echo "alert('¡Ups! Parece que algo malo ocurrió.')";
        echo "</script>";
        die();
    }

    echo "<script>";
    echo "location.href='http://localhost/paginaWeb/AnalistaIST2.github.io/views/H&A/';";
    echo "alert('¡Gracias por comunicarte con nosotros! Te contactaremos pronto.')";
    echo "</script>";
} catch (\Exception $e) {
    echo $e;
}
