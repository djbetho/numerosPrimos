<?php

namespace Tests\Feature\App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class PrimosControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_numeros_primos_entre_dos()
    {
        $valor    = 11;
    
        $service  = new PrimosController();
    
        $response = $service->isPrime($valor);
    
        $this->assertEquals(true,$response); 

 
    }
}
