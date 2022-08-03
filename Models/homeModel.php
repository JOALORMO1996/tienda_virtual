<?php 

class homeModel{
  public function __construct(){
     //   echo "mensaje desde el modelo";
    }

    public function getCarrito($params){
       return "Datos del carrito No.".$params; 
    }
}

 ?>