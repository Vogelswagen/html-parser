<?php

declare(strict_types=1);

namespace App\Domain\Repositories;

use App\Domain\Entities\HtmlTag;

class TagsCalculator
{
    private array $tagsList;

    public function calculate(array $arrHtmlData): array
    {
        foreach($arrHtmlData as $htmlPart) {
            $this->findTags($htmlPart);
        }

        return $this->tagsList;
    }

    private function findTags($htmlPart): void
    {
        $pattern = '/<\s?[a-zA-Z\d]+\s?>?/';

        preg_match_all($pattern, $htmlPart, $matchesTags, PREG_PATTERN_ORDER);

        foreach($matchesTags[0] as $matchesTag) {
            $this->storeTags( $this->takeTagName($matchesTag) );
        }
    }

    private function takeTagName(string $matchesTag): string
    {
        return str_replace(['<', '>', ' '], '', $matchesTag);
    }

    private function storeTags(string $tagName): void
    {
        if(isset($this->tagsList[$tagName])) {
            $this->tagsList[$tagName]->plusOne();
        } else {
            $this->tagsList[$tagName] = new HtmlTag($tagName);
        }
    }
}
