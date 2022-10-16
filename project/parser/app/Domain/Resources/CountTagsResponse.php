<?php

declare(strict_types=1);

namespace App\Domain\Resources;

class CountTagsResponse
{
    public static function format(string $url, array $tagsList): array
    {
        return [
            'data' => [
                'URL' => $url,
                'tagList' => $tagsList
            ]
        ];
    }
}
