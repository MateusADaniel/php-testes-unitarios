<?php

function ehPalindromo(string $texto): bool
{
    if (trim($texto) === '') {
        throw new InvalidArgumentException('O texto não pode ser vazio.');
    }

    $textoLimpo = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $texto));
    return $textoLimpo === strrev($textoLimpo);
}
