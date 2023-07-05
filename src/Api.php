<?php

declare(strict_types=1);

namespace Abriolon\OssTd;

class Api
{
    public function getRandomNumber(): int
    {
        return rand(0, 100);
    }
}