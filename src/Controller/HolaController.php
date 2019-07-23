<?php
namespace App\Controller;
 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
 
# El nombre de la clase debe coincidir con el nombre del archivo .php 
class HolaController
{
    public function hola()
    {
        return new Response(
            '<html><body>Hola mundo desde <strong>Symfony</strong></body></html>'
        );
    }
    /**
     * @Route("/anotaciones", name="probar_anotaciones")
     */
    public function anotaciones(){
        return new Response(
            '<html><body>Ahora usamos las anotaciones</body></html>'
        );
    }
}