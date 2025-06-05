<?php

namespace Rhidja\Twig\Function;

enum Status: string
{
    case Draft = 'draft';
    case Published = 'published';
    case Pending = 'pending';

    public static function values(): array
    {
        return [
            self::Draft,
            self::Published,
            self::Pending,
        ];
    }
}
