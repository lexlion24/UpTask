<?php

namespace Model;

class Usuario extends ActiveRecord
{
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'email', 'password', 'token', 'confirmado'];
    //esto se lo pongo porque no se puede crear propiedades dinamicas y cambiamos la propiedad id 
    public $usuarioid;
    public $nombre;
    public $email;
    public $password;
    public $password2;//esto puede traer problemas posteriores
    public $token;
    public $confirmado;
    //las voy a definir como public porque sino no se pude acceder a ellas 
    public function __construct($args = [])
    {
        $this->usuarioid = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->password2 = $args['password2'] ?? '';
        $this->token = $args['token'] ?? '';
        $this->confirmado = $args['confirmado'] ?? '';
    }
    //validacion de nuevas cuentas 
    public function validarNuevaCuenta()
    {
        //si el nombre no esta presente 
        if (!$this->nombre) {
            self::$alertas['error'][] = "El nombre de Usuario es obligatorio";
        }

        if (!$this->email) {
            self::$alertas['error'][] = "El email de Usuario es obligatorio";
        }

        if (!$this->password) {
            self::$alertas['error'][] = "El password de Usuario es obligatorio";
        }
        //strlen funcion que devuelve la longitud de un string 
        if (strlen($this->password) < 6) {
            self::$alertas['error'][] = "El password debe contener al menos 6 caracteres";
        }

        if($this->password !== $this->password2){
            //error es otra clase que se aplicara de forma automatica
            self::$alertas['error'][]="Las password son diferentes";

        }

        return self::$alertas;
    }
}
