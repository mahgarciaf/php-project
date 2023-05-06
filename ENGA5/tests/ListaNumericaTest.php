<?php

use PHPUnit\Framework\TestCase;
use ENGA5\ListaNumerica;

class ListaNumericaTest extends TestCase{

    public function testQuantidadeDeValoresVazio(){
        $lnq = new ListaNumerica;
        $lnq->setValores([]);

        $this->assertEquals('Invalido', $lnq->verificaQuantidade());
    }

};


?>