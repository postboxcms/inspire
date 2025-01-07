<?php

namespace PostboxCMS\Inspire;
use GuzzleHttp\Client;

class Inspire
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getQuote()
    {
        try {
            $response = $this->client->get('https://zenquotes.io/api/random');
            $data = json_decode($response->getBody(), true);
            $res = $data[0];
            return $res['q'] . ' - ' . $res['a'];    
        } catch (\Exception $e) {
            return 'CMS Error: ' . $e->getMessage();
        }
    }
}