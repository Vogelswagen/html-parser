<?php

declare(strict_types=1);

namespace App\Domain\Actions;

use App\Domain\Repositories\TagsCalculator;
use App\Domain\Repositories\CalculationResult;
use App\Domain\Resources\CountTagsResponse;
use App\Services\Html\IHtmlReceiver;

class CountTagsAction
{
    public function run(string $url): string
    {
        $htmlDataDTO = app(IHtmlReceiver::class)->getHtml($url);

        $tagsCountResult = app(TagsCalculator::class)->calculate($htmlDataDTO->getParts());

        $tagsList = app(CalculationResult::class)->prepare($tagsCountResult);

        return json_encode( CountTagsResponse::format($url, $tagsList) );
    }
}
