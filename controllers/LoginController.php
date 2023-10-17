<?php

namespace Controllers;

use MVC\Router;

class LoginController{
    //login
    public static function login(Router $router){
        if($_SERVER['REQUEST_METHOD']==='POST'){

        }

        //Render a la vista 
        $router->render('auth/login',[
            //hacer un title dinamico 
            'titulo'=>' Iniciar Sesion'
        ]);
    }

    //logout
    public static function logoun(){
        echo "Desde Login";

        
    }

    //crear cuenta
    public static function crear(Router $router){
        if($_SERVER['REQUEST_METHOD']==='POST'){

        }
        //Render a la vista 
        $router->render('auth/crear',[
            //hacer un title dinamico 
            'titulo'=>' Crea tu cuenta en UpTask'
        ]);
    }

    //Olvide cuenta
    public static function olvide(){
        echo "Desde olvide";

        if($_SERVER['REQUEST_METHOD']==='POST'){

        }
    }

    //Restablecer cuenta
    public static function restablecer(){
        echo "Desde restablecer";

        if($_SERVER['REQUEST_METHOD']==='POST'){

        }
    }

    //Mensaje
    public static function mensaje(){
        echo "Desde mensaje";
    }

    //Confirmar cuenta
    public static function confirmar(){
        echo "Desde confirmar";
    }

}

?>