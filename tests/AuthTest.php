<?php
use PHPUnit\Framework\TestCase;

require_once 'C:\\xampp\\htdocs\\TaskFlow\\app\\data.php';
require_once 'C:\\xampp\\htdocs\\TaskFlow\\app\\controllers\\AuthController.php';


class AuthTest extends TestCase{
    public function testLoginConCredencialesValidas(){
    global $usuarios_bbdd;

    $usuarios_bbdd=[
    'usuario1@taskflow.com' =>[
        'id'=>1,
        'nombre'=> 'Abel',
        'password'=> 'Hola1234'
    ],
    'usuario2@taskflow.com'=>[
        'id'=> 2,
        'nombre'=>'Ana Alumna',
        'password'=>'admin'
    ]

];

        $resultado= handleLogin('usuario1@taskflow.com', 'Hola1234', $usuarios_bbdd);


        $this->assertTrue($resultado);
    }

    public function testLoginConCredencialesInvalidas(){
        global $usuarios_bbdd;

        $resultado= handleLogin('usuario1@taskflow.com', 'pass_erroneo', $usuarios_bbdd);

        $this->assertFalse($resultado);
    }
}
?>