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
    public static function logout(){
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
    public static function olvide(Router $router){
        //echo "Desde olvide";

        if($_SERVER['REQUEST_METHOD']==='POST'){

        }
        //Muestra la vista 
        $router->render('auth/olvide', [
            //pasamos informacion a la vista 
            'titulo' => 'Olvide mi Password'
        ]);
    }

    //Restablecer cuenta
    public static function reestablecer(Router $router){
        // echo "Desde reestablecer";

        if($_SERVER['REQUEST_METHOD']==='POST'){

        }
        //Muestra la vista 
        $router->render('auth/reestablecer', [
            //pasamos informacion a la vista 
            'titulo' => 'Reestablecer Password'
        ]);
    }

    //Mensaje
    public static function mensaje(Router $router){
        // echo "Desde mensaje";
        //Muestra la vista 
        $router->render('auth/mensaje', [
            //pasamos informacion a la vista 
            'titulo' => 'Cuenta Creada Exitosamente'
        ]);
    }

    //Confirmar cuenta
    public static function confirmar(Router $router){
        //echo "Desde confirmar";
         //Muestra la vista 
         $router->render('auth/confirmar', [
            //pasamos informacion a la vista 
            'titulo' => 'Confirma tu cuenta UpTask'
        ]);

    }

}

?>