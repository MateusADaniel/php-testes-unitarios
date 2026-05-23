<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/funcoes.php';

class FuncoesTest extends TestCase
{
    // Teste 1: entrada válida — "arara" é palíndromo
    public function testPalindromo(): void
    {
        $this->assertTrue(ehPalindromo('php'));
    }

    // Teste 2: outro valor válido — "php" NÃO é palíndromo
    public function testNaoPalindromo(): void
    {
        $this->assertFalse(ehPalindromo('mundo'));
    }

    // Teste 3: exceção para string vazia
    public function testExcecaoTextoVazio(): void
    {
        $this->expectException(InvalidArgumentException::class);
        ehPalindromo('');
    }
}
