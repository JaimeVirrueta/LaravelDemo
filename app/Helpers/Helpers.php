<?php

use App\Clases\NumeroALetras;

/**
 * Helper que me devuelve un texto a partir de un número
 * @param  number  $number         número a convertir
 * @param  string  $moneda         nombre de la moneda a usar, por defecto se considera soles
 * @param  string  $centimos       nombre de la fracción de la moneda, por defecto se considera centimos
 * @param  boolean $forzarCentimos indicar si debe mostrarse el texto de centimos
 * @return string                  texto ya convertido
 */
function numbers_to_text($number, $moneda = 'soles', $centimos = 'centimos', $forzarCentimos = false)
{
    return NumeroALetras::convertir($number, $moneda, $centimos,$forzarCentimos );
}