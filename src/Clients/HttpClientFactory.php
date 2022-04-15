<?php

declare(strict_types=1);

namespace Shopify\Clients;

use GuzzleHttp\Client;

class HttpClientFactory
{
    /**
     * @returns \Psr\Http\Client\ClientInterface|\GuzzleHttp\ClientInterface
     */
    public function client(): Client
    {
        return new Client();
    }
}
