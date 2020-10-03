<?php

class DatosController
{
    public function index()
    {
        echo "Controlador de Usuario, accion index";    
    }

    public function guardar()
    {
        require_once "views/contact.php";
    }

    public function save()
    {
        echo "<main>";
       
            if(isset($_POST))
            {
                var_dump($_POST);
            }
        echo "</main>";
    }
}