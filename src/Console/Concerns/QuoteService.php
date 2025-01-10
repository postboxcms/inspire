<?php

namespace PostboxCMS\Inspire\Console\Concerns;
use GuzzleHttp\Client;

trait QuoteService
{
    protected $client;

    public function getQuote()
    {
        $this->client = new Client();

        try {
            $response = $this->client->get('https://zenquotes.io/api/random');
            $data = json_decode($response->getBody(), true);
            $res = $data[0];
            return ['quote' => $res['q'], 'author' => $res['a']];
        } catch (\Exception $e) {
            return 'CMS Error: ' . $e->getMessage();
        }
    }
}