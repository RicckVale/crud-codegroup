<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Cliente;

class testClient extends TestCase 
{
    public function testDeletaCliente()
    {
        $c = new Cliente();
        $c->id = "1";
        $this->assertTrue($c->deletaCliente());
    }
}