<?php

declare(strict_types=1);

namespace App\Services\Html;

use App\Domain\DTO\HtmlDataDTO;

interface IHtmlReceiver
{
    public function getHtml(string $url): HtmlDataDTO;
}
