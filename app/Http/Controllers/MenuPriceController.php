<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Goutte\Client;

class MenuPriceController extends Controller
{
    private $results = array();
    private $citys= array();
    private $menu= array();
   private $brands= array();
   private $list= array();
   private $listprice= array();
   private $title = array();
   public function menuprices()
   {
       $client = new Client();
       
       $url = 'https://www.menuwithprice.com/menu-and-price/';
       $page = $client->request('GET', $url);

   
       $page->filter('.menu-list')->filter('li > a')->each(function ($item) {
           $this->results[$item->attr('href')] = $item->filter('a')->text();
       });
       $data = $this->results;
       $page->filter('.pageGo')->each(function ($item) {
           $this->menu[$item->html()]=$item->html();
            });
            $pages=$this->menu;
       return view('front_end.menu-and-price.index', compact('data','pages'));
       
   }
    public function menua($id)
    {
        $client = new Client();
        
        $url = 'https://www.menuwithprice.com/menu-and-price/'.$id;
        $page = $client->request('GET', $url);

    
        $page->filter('.menu-list')->filter('li > a')->each(function ($item) {
            $this->results[$item->attr('href')] = $item->filter('a')->text();
        });
        $page->filter('.pageGo')->each(function ($item) {
            $this->menu[$item->html()]=$item->html();
             });
             $pages=$this->menu;
        $data = $this->results;
       return view('front_end.menu-and-price.index', compact('data','pages'));
       // dd($pages);
    }
    public function menuap($id,$id1,$id2)
    {
        $client = new Client();
        
        $url = 'https://www.menuwithprice.com/menu-and-price/'.$id.'/'.$id1.'/'.$id2;
        $page = $client->request('GET', $url);

    
        $page->filter('.menu-list')->filter('li > a')->each(function ($item) {
            $this->results[$item->attr('href')] = $item->filter('a')->text();
        });
        $data = $this->results;
        $page->filter('.pageGo')->each(function ($item) {
            $this->menu[$item->html()]=$item->html();
             });
             $pages=$this->menu;
        $data = $this->results;
        return view('front_end.menu-and-price.index', compact('data','pages'));
        
        
    }
    public function menupricescities($id)
    {
        $client = new Client();
        $url = 'https://www.menuwithprice.com/menu/'.$id;
        $page = $client->request('GET', $url);
        
        $page->filter('.bread-crumbs > span > a')->each(function ($item) {
            $this->citys[$item->attr('href')] = $item->filter('a')->text();
            });
            $city = $this->citys;
   
    
        $page->filter('.choose-list')->filter('a')->each(function ($item) {
            $this->results[$item->attr('href')] = $item->filter('a')->text();
        });
        $data = $this->results;
        $page->filter('.prc-table')->each(function ($item) {
            $this->menu[$item->html()]=$item->html();
             });

             $datam = $this->menu;
        return view('front_end.menu.aandw.index', compact('data','id','city','datam'));
        //dd($data);
    
    }
    public function menupricessecondlast($id,$id1)
    {
        $client = new Client();
        $url = 'https://www.menuwithprice.com/menu/'.$id.'/'.$id1;
        $page = $client->request('GET', $url);
        $page->filter('.bread-crumbs > span > a')->each(function ($item) {
            $this->citys[$item->attr('href')] = $item->filter('a')->text();
            });
            $city = $this->citys;
   
    
        $page->filter('.state-list')->filter('a')->each(function ($item) {
            $this->results[$item->attr('href')] = $item->filter('a')->text();
        });
        $data = $this->results;
        return view('front_end.menu.aandw.alabama.index', compact('data','city'));
        //dd($data);
    }
    public function menupricelast($id,$id1,$id2)
    {
        $client = new Client();
        $url = 'https://www.menuwithprice.com/menu/'.$id.'/'.$id1.'/'.$id2;
        $page = $client->request('GET', $url);
        $page->filter('.bread-crumbs > span > a')->each(function ($item) {
            $this->citys[$item->attr('href')] = $item->filter('a')->text();
            });
            $city = $this->citys;
   
    
        $page->filter('.brand-in-city')->filter('a')->each(function ($item) {
            $this->results[$item->attr('href')] = $item->filter('a')->text();
        });
        
        $data = $this->results;

        $page->filter('.brand-info')->each(function ($item) {
            $this->menu[$item->text()] = $item->text();
        });
        
        $datam = $this->menu;
       
        $page->filter('.stores-list')->each(function ($item) {
            $this->list[$item->html()]=$item->html();
             });

             $datam1 = $this->list;
        
        
        
        return view('front_end.menu.aandw.alabama.birmingham.index', compact('data','city','datam','datam1'));
        //dd($datam1);
    }
    public function menupricelast1($id,$id1,$id2,$id3)
    {
        $client = new Client();
        $url = 'https://www.menuwithprice.com/menu/'.$id.'/'.$id1.'/'.$id2.'/'.$id3;
        $page = $client->request('GET', $url);
        $page->filter('.bread-crumbs > span > a')->each(function ($item) {
            $this->citys[$item->attr('href')] = $item->filter('a')->text();
            });
            $city = $this->citys;
   
            $page->filter('.hours')->each(function ($item) {
                $this->list[$item->html()]=$item->html();
                 });
    
                 $datam1 = $this->list;
                 $page->filter('.prices')->each(function ($item) {
                    $this->listprice[$item->html()]=$item->html();
                     });
        
                     $datam12 = $this->listprice;
                
        
        $data = $this->results;

        $page->filter('.brdt-list')->each(function ($item) {
            $this->menu[$item->html()] = $item->html();
        });
        
        $datam = $this->menu;
       
        $page->filter('.main > h1')->each(function ($item) {
            $this->title[$item->html()] = $item->html();
        });
        
        $titles = $this->title;
       
        
        
        return view('front_end.menu.aandw.alabama.birmingham.menudata.index', compact('data','id','city','datam','datam1','datam12','titles'));
        //dd($titles);
    }
}
