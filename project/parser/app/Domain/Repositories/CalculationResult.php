<?php

declare(strict_types=1);

namespace App\Domain\Repositories;

class CalculationResult
{
    public function prepare($tagsCountResult): array
    {
        $tagsList = [];

        foreach($tagsCountResult as $htmlTag) {
            $tagsList[ $htmlTag->getName() ] = $htmlTag->getQuantity();
        }

        return $tagsList;
    }
}
