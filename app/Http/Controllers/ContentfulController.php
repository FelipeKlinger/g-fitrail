<?php

namespace App\Http\Controllers;
use Contentful\Delivery\Client;

use Illuminate\Http\Request;

class ContentfulController extends Controller
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function headers() // header es el content type en Contentful
    {
    
        $entry = $this->client->getEntry('40iIE44KVD7zRfy6fkbkxm');

        return view('homepage.index', compact('entry'));
    }
}
