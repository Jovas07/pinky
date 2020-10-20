<?php
if(isset($_POST["formulario"])){
    $name = $_POST['fname'];
    $lname = $_POST['lname'];
    $visitor_mail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_subject = "Nuevo mensaje del formulario de la página";
    $email_body = "Nombre de usuario: $name \n\n";
    $email_body .= "Apellido de Usuario: $lname \n\n";
    $email_body .= "Asusnto: $subject \n\n";
    $email_body .= "Mensaje: $message \n\n";

    $to = "contacto.pinkymx@gmail.com";
    $header = "De ".$visitor_mail;


    $mail=@mail($to, $email_subject, $email_body, $header);

    if($mail) header("location: index.html");
    else{
        echo "console.log('error')";
    }
   exit();
}

?>