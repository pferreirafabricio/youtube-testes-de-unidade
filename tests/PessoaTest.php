<?php

use PHPUnit\Framework\TestCase;

class PessoaTest extends TestCase
{
    public function testPessoaVaiTerIdade()
    {
        $pessoa = new Pessoa('Fabrício', new DateTimeImmutable('2001-09-18'));

        $this->assertEquals($pessoa->idade(), 17);
    }
}
