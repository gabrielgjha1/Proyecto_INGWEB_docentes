<?php
    require_once ('Models/AdministrativoModel.php');

    class AdministrativoController
    {


        function __construct()
        {

        }
        function mostrar(){
            $mostrar = new AdministrativoModel();
            $datos = $mostrar->listar_datos();
            require_once ("Views/AdministrativoView/listar.php");
        }
    }



?>