<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Cuisine extends Controller
{
    private $results = array();

    public function restaurant()
    {
        $client = new Client();
        $url = 'https://www.menuwithprice.com/cuisine/';
        $page = $client->request('GET', $url);

    
        $page->filter('.menu-list')->filter('li > a')->each(function ($item) {
            $this->results[$item->attr('href')] = $item->filter('a')->text();
        });
        $data = $this->results;
        return view('front_end.cuisine.index', compact('data'));
    }
}
