<?php
include ("includes/class.triangulo"); 
$truangulo = new Ctriangulo(); // 
print_r($triangulo->get_formulario()); 

if(isset($_POST[guardar])){
    echo "el area del truangulo es igual a ". $triangulo->area($_POST['base'], $_POST['altura']);
}
