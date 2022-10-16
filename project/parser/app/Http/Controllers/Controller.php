<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Domain\Actions\CountTags;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function parse_page()
    {
        return app(CountTags::class)->run();
    }
}
