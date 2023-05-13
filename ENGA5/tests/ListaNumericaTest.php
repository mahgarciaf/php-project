<?php

use PHPUnit\Framework\TestCase;
use ENGA5\ListaNumerica;

class ListaNumericaTest extends TestCase{

    public function testQuantidadeValores($vet, $expected) {
        $ln = new ListaNumerica;
        $ln->setValores($vet);

        $this->assertRquals($expeted, $ln->verificaQuantidade());
    }

    public function casosdeTestes(): array{
        return[
            'Quantidade vazia' => [[], 'Inválido'],
            'Quantidade menor do que 4' => [[55555, 66666, 77777], 'Invalido']
    ];
    }

};


?>