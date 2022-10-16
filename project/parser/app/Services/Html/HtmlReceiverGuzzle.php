<?php

declare(strict_types=1);

namespace App\Services\Html;

use App\Domain\DTO\HtmlDataDTO;
use \Psr\Http\Message\StreamInterface;
use GuzzleHttp\Client;

class HtmlReceiverGuzzle implements IHtmlReceiver
{
    private Client $client;

    public function __construct() {
        $this->client = new Client();
    }

    public function getHtml(string $url): HtmlDataDTO
    {
        $response = $this->client->request('GET', $url);

        if($response->getStatusCode() !== 200) {
            throw new \Exception('Веб-страница недоступна');
        }

        $htmlParts = $this->toArray($response->getBody());

        return new HtmlDataDTO($htmlParts);
    }

    private function toArray(StreamInterface $body): array
    {
        $arrBody = [];

        while (!$body->eof()) {
            $arrBody[] = $body->read(1024);
        }

        return $arrBody;
    }
}
