<?php

declare(strict_types=1);

namespace Shopify\Clients;

use GuzzleHttp\Client;

class HttpClientFactory
{
    /**
     * @codeCoverageIgnore This is mocked for tests - and used in the library itself...
     * @returns \Psr\Http\Client\ClientInterface|\GuzzleHttp\ClientInterface
     */
    public function client()
    {
        return new Client();
    }
}
