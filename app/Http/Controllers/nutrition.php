<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Goutte\Client;
use Illuminate\Http\Request;

class nutrition extends Controller
{
    private $results = array();
    private $state = array();
    private $menu = array();
    private $nutri = array();
    private $chart =array();
    public function index()
    {
        $client = new Client();
       
     $url = 'https://www.menuwithprice.com/nutrition/';
        
        $page = $client->request('GET', $url);

      

        $page->filter('.menu-list')->filter('li > a')->each(function ($item) {
            $this->results[$item->attr('href')] = $item->filter('a')->text();
        });

        $data = $this->results;
       

        return view('front_end/nutrition/index', compact('data'));

        //dd($data);

    }
    public function state($id)
    {
        
   
        $client = new Client();
       
         $url = 'https://www.menuwithprice.com/nutrition/'.$id;
         $page = $client->request('GET', $url);

      if(strlen($id)=='1')
      {
        $page->filter('.menu-list')->filter('li > a')->each(function ($item) {
            $this->results[$item->attr('href')] = $item->filter('a')->text();
        });

        $data = $this->results;
       

        return view('front_end/nutrition/index', compact('data'));
      }
      else{
        

         $page->filter('.bread-crumbs > span >a')->each(function ($item) {
         $this->results[$item->attr('href')] = $item->filter('a')->text();
         });
         $b = $this->results;


         $page->filter('.choose-state')->filter('a')->each(function ($item) {
            $this->state[$item->attr('href')] = $item->filter('a')->text();
            });
            $datastate = $this->state;
        
            $page->filter('tbody')->each(function ($item) {
                $this->menu[$item->html()]=$item->html();
                 });

                 $datam = $this->menu;
        return view('front_end/nutrition/applebees/index', compact('b','datastate','id','datam'));
 
          //dd($th);
      }
    }
    
    public function fact($id,$id1)
    {
        //echo "hello";
        $client = new Client();
       
        $url = 'https://www.menuwithprice.com/nutrition/'.$id.'/'.$id1;
        $page = $client->request('GET', $url);
        $page->filter('.nutrition')->each(function ($item) {
            
            //$this->menu[$item->attr('href')] = $item->filter('a')->text();
            $this->results[$item->html()]=$item->html();
             });
             $data = $this->results;
             $page->filter('script')->eq(8)->each(function ($item) {
                $this->chart[$item->html()]=$item->html();
                 });
             $charts = $this->chart;

             $page->filter('.menu-list')->filter('li > a')->each(function ($item) {
                $this->menu[$item->attr('href')] = $item->filter('a')->text();
            });
            $datam = $this->menu;
            $page->filter('.bread-crumbs > span >a')->each(function ($item) {
                $this->state[$item->attr('href')] = $item->filter('a')->text();
                });
                $b = $this->state;
                $page->filter('.nutition_list')->filter('label')->each(function ($item) {
                    $this->nutri[$item->html()]=$item->html();
                     });
                     $nu = $this->nutri;
        return view('front_end/nutrition/applebees/nf/index',compact('data','datam','id','b','nu','charts'));
       
        //dd($data);

    }
}
