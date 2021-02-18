<?php

use PHPUnit\Framework\TestCase;

class SegurancaBaladaTest extends TestCase
{
    public function testPessoaPodeEntrarNaBalada()
    {
        $segurancaBalada = new SegurancaBalada();
        $pessoa = $this->createStub(Pessoa::class);
        $pessoa->method('idade')->willReturn(19);

        $podeEntrar = $segurancaBalada->deixaEntrar($pessoa);

        $this->assertSame($podeEntrar, true);
    }
}
