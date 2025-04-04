<?php

namespace Rhidja\Twig\Filter;

class RotFilter
{
    public static function rot13Filter(string $string): string
    {
        return str_rot13($string);
    }
}
