<?php

namespace Rhidja\Twig\Filter;

class RotFilter
{
    public static function rot13Filter(string $string): string
    {
        return str_rot13($string);
    }

    public function rot13Filter2(string $string): string
    {
        return str_rot13($string);
    }
}
