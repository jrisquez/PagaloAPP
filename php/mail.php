<?php  
/*
*
*
*/

$Usr = $_POST['Nombre']

$Crr = $_POST['correo']

$Mssg = $_POST['mensaje']

//Titulo
$titulo = "PRUEBA DE TITULO";

//cabecera
$headers = "MIME-Version: 1.0\r\n"; 

$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 

$headers .= "From: Geeky Theory < tu_dirección_email >\r\n";
//Enviamos el mensaje a tu_dirección_email 

$bool = mail("tu_dirección_email",$titulo,$mail,$headers);


if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}

?>