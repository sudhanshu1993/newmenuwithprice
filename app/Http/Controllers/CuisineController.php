<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Goutte\Client;


class CuisineController extends Controller
{
    private $results = array();
    private $results1 = array();
    private $citys= array();

    public function cuisins()
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
    public function cuisinscity($id)
    {
        $client = new Client();
        $url = 'https://www.menuwithprice.com/cuisine/'.$id;
        $page = $client->request('GET', $url);
        $page->filter('.bread-crumbs > span > a')->each(function ($item) {
            $this->citys[$item->attr('href')] = $item->filter('a')->text();
            });
            $city = $this->citys;
        $page->filter('.menu-list')->filter('li > a')->each(function ($item) {
            $this->results[$item->attr('href')] = $item->filter('a')->text();
        });
        $data = $this->results;
        $page->filter('.category')->each(function ($item) {
            $this->results1[$item->html()] = $item->html();
        });
        $cat = $this->results1;
        return view('front_end.cuisine.afghan.index', compact('data','city','cat'));
        //dd($cat);
    }
    
    public function cuisinsmenu($id,$id1)
    {
        $client = new Client();
        $url = 'https://www.menuwithprice.com/cuisine/'.$id.'/'.$id1;
        $page = $client->request('GET', $url);
        $page->filter('.bread-crumbs > span')->each(function ($item) {
            $this->citys[$item->attr('href')] = $item->filter('a')->text();
            });
            $city = $this->citys;
        $page->filter('.menu-list')->filter('li > a')->each(function ($item) {
            $this->results[$item->attr('href')] = $item->filter('a')->text();
        });
        $data = $this->results;

        $page->filter('.category')->each(function ($item) {
            $this->results1[$item->html()] = $item->html();
        });
        $cat = $this->results1;
        
        return view('front_end.cuisine.afghan.index', compact('data','city','cat'));
        //dd($cat);
    }
    
    
    
}
