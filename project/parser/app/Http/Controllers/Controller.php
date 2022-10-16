<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Domain\Actions\CountTagsAction;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function parse_page(): string
    {
        $url = 'https://php.net';

        return app(CountTagsAction::class)->run($url);
    }
}
