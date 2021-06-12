<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Goutte\Client;

class ScrapperController extends Controller
{
    private $results1 = array();
    private $results12 = array();
    private $results = array();
    private $citys= array();
    private $cities= array();
    public function restaurant()
    {
        $client = new Client();
        $url = 'https://www.menuwithprice.com/restaurant-near-me/';
        $page = $client->request('GET', $url);

    
        $page->filter('.menu-list')->eq(0)->filter('li > a')->each(function ($item) {
            $this->results[$item->attr('href')] = $item->filter('a')->text();
        });
        $data = $this->results;
        $page->filter('.menu-list')->eq(1)->filter('li > a')->each(function ($item) {
            $this->results12[$item->attr('href')] = $item->filter('a')->text();
        });
        $data1 = $this->results12;
        
        return view('front_end.restaurant-near-me.index', compact('data','data1'));
        //dd($data);
    }
    public function location($id)
    {
        
   
        $client = new Client();
       
         $url = 'https://www.menuwithprice.com/location/'.$id;
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
        
       return view('front_end/location/alabama/index', compact('data','city','cat'));
      //dd($cat);
       
    }
    public function locationcity($id,$id1)
    {
        
   
        $client = new Client();
       
         $url = 'https://www.menuwithprice.com/location/'.$id.'/'.$id1;
         $page = $client->request('GET', $url);
         $page->filter('.bread-crumbs > span > a')->each(function ($item) {
            $this->cities[$item->attr('href')] = $item->filter('a')->text();
            });
            $cityi = $this->cities;
   
         $page->filter('.menu-list')->filter('li > a')->each(function ($item) {
         $this->results[$item->attr('href')] = $item->filter('a')->text();
         });
         $data = $this->results;

         $page->filter('.category')->each(function ($item) {
            $this->results1[$item->html()] = $item->html();
        });
        $cat = $this->results1;
        
       return view('front_end/location/alabama/birmingham/index', compact('data','cityi','cat'));
        //dd($data);
       //print_r($data);
    }
    
    public function locationcitycat($id,$id1,$id2)
    {
        
   
        $client = new Client();
       
         $url = 'https://www.menuwithprice.com/location/'.$id.'/'.$id1.'/'.$id2;
         $page = $client->request('GET', $url);
         $page->filter('.bread-crumbs > span')->each(function ($item) {
            $this->cities[$item->attr('href')] = $item->filter('a')->text();
            });
            $cityi = $this->cities;
   
         $page->filter('.menu-list')->filter('li > a')->each(function ($item) {
         $this->results[$item->attr('href')] = $item->filter('a')->text();
         });
         $data = $this->results;

         $page->filter('.category')->each(function ($item) {
            $this->results1[$item->html()] = $item->html();
        });
        $cat = $this->results1;
        
       return view('front_end/location/alabama/birmingham/index', compact('data','cityi','cat'));
        //dd($data);
       //print_r($data);
    }

}
