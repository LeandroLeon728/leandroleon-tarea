<?php

 class Ctriangulo{
    private $base; // atributos
    private $altura;
    function Ctriangulo(){
        // es la funcion del constructor 
        $this->base = 0; // atributos
        $this->altura = 0;
        
    }
    public function get_formulario(){ // metodos POST - GET - PUT - DELETE
        $html = '
                <form name= "transporte" action="" method="POST"> 
                    <table aling = "center" border = "1">
                        <tr>
                            <td colspan="2">TRIANGULO</td>
                        </tr>
                        <tr>
                            <td>base</td>
                            <td><input type="text" name="base" size=4></td>
                        </tr>
                        <tr>
                            <td>altura</td>
                            <td><input type="text" name="altura" size=4></td>
                        </tr>
                        <tr aling = "center">
                            <td aling = "center" colspan= "2" ><center><input type="submit" name="guardar" value="Resolver"></center></td>
                        </tr>
                    </table>
                </form>';
        return $html;
    }
  
    public function perimetro($base,$altura){ // método perimetro 
        $perimetro = ($base*2)+($altura*2);
        return $perimetro;
    }
    
    
}