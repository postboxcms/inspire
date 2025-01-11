<?php

namespace PostboxCMS\Inspire\Console\Concerns;
use GuzzleHttp\Client;

trait QuoteService
{
    protected $client;
    protected $apiUrl;

    public function getQuote()
    {
        $this->client = new Client();
        $this->apiUrl = config('inspire.base_url') . config('inspire.api_endpoint');

        try {
            $response = $this->client->get($this->apiUrl);
            $data = json_decode($response->getBody(), true);
            $res = $data[0];
            return ['quote' => $res['q'], 'author' => $res['a']];
        } catch (\Exception $e) {
            return 'CMS Error: ' . $e->getMessage();
        }
    }

    public static function generateQuote()
    {
        $client = new Client();
        $apiUrl = config('inspire.base_url') . config('inspire.api_endpoint');

        try {
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody(), true);
            $res = $data[0];
            return ['quote' => $res['q'], 'author' => $res['a']];
        } catch (\Exception $e) {
            return 'CMS Error: ' . $e->getMessage();
        }
    }
}