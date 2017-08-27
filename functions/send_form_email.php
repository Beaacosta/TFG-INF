<?php 
  
  //importante que donde pone nombre email y mensaje pongas lo que tengas en los atributos name de tu formulario en el index.php

  if($_SESSION['msg'] == 'ok'||$_SESSION['msg'] == 'error'||is_null($_SESSION['msg'])){
      session_start();
      $_SESSION['msg'] = 'no_msg';
  }

  if(!$_POST['nombre']||!$_POST['email']||!$_POST['mensaje']){
    session_start();
    $_SESSION['msg'] = 'error';
  }
  else{
   if(isset($_POST['email'])){
    $email_to="belen@doma2.com"; //Aqui tienes que poner el email al que quieres que te llegue el correo.
    $email_subject = "Contacto desde el sitio web";

      if(!isset($_POST['nombre'])||!isset($_POST['email'])||!isset($_POST['mensaje'])){
      }

    $email_message = "Detalles del formulario de contacto: --------------------";
    $email_message .= "Nombre: ".$_POST['nombre']." -------------------- ";
    $email_message .= "Email: ".$_POST['email']." -------------------- ";
    $email_message .= "Mensaje: ".$_POST['mensaje'];

    $headers = 'From: '.$email_from."\r\n".'Reply-To: '.$email_from."\r\n".'X-Mailer: PHP/'.phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);

    //echo "email enviado con exito";
      session_start();
      $_SESSION['msg'] = 'ok';   
    }
  }

  //Esto simplemente redirige a mi pagina principal
  header('Location: ../contacto.php' );


 ?>

