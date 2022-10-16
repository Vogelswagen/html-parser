<?php

declare(strict_types=1);

namespace App\Domain\DTO;

class HtmlDataDTO
{
    private array $parts;

    public function __construct($parts) {
        $this->parts = $parts;
    }

    public function getParts(): array
    {
        return $this->parts;
    }
}
