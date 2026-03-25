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

    public function tips() // tips es el content type en Contentful
    {
        // Obtener entradas del content type "tip"
        $query = new \Contentful\Delivery\Query();
        $query->setContentType('tip');


        $entries = $this->client->getEntries($query);

        return view('tips.index', [
            'tips' => $entries
        ]);
    }
}
