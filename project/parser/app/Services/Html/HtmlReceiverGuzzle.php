<?php

declare(strict_types=1);

namespace App\Services\Html;

use GuzzleHttp\Client;

class HtmlReceiverGuzzle implements IHtmlReceiver
{
    private Client $client;

    public function __construct() {
        $this->client = new Client();
    }

    public function getHtml(string $url)
    {
        $response = $this->client->request('GET', $url);

        if($response->getStatusCode() !== 200) {
            throw new \Exception('Веб-страница недоступна');
        }

        return $response->getBody();
    }
}
