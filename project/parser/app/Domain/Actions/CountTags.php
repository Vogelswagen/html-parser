<?php

declare(strict_types=1);

namespace App\Domain\Actions;

use App\Services\Html\IHtmlReceiver;
use App\Domain\Repositories\TagsCalculator;

class CountTags
{
    public function run()
    {
        return app(IHtmlReceiver::class)->getHtml('https://php.net');
    }
}
