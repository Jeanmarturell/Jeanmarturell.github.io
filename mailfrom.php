<?php
//Correo Destino
$to= "jeanmarturell@gmail.com";
//Datos del Mail
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$header="Sent From Portfolio Website";
//Funcion Enviar Mail
    function mail(
        string $to ,
        string $email,
        string $header,
        string $massege,
     
        ) :void {}

?>