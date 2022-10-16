<?php

declare(strict_types=1);

namespace App\Domain\Entities;

class HtmlTag
{
    private string $tagName;

    private int $quantity;

    public function __construct(string $tagName) {
        $this->tagName = $tagName;
        $this->quantity = 0;
    }

    public function getName(): string
    {
        return $this->tagName;
    }

    public function plusOne(): void
    {
        $this->quantity = $this->quantity + 1;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}
