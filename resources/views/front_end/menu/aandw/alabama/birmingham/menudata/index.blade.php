@extends('layouts.main')
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,viewport-fit=cover" />
<link rel="alternate" href="#" hreflang="en-us" />
<title>KFC Prices in Albertville [Open & Closed Hours], AL 35950</title>
<link href="{{ asset('user/front_end/images/favicon.ico')}}" rel="shortcut icon">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72×72-precomposed.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114×114-precomposed.png">
<link rel="preload" href="{{ asset('user/front_end/css/style.css?v-0203')}}" as="style">
<!-- CSS only -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('user/front_end/css/style.css?v-0203')}}" />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="manifest" href="{{ asset('user/front_end/js/manifest.json')}}">
<link rel="canonical" href="#" />

<meta name="description" content="Check KFC Hours Albertville, KFC Open hours Albertville AL 35950, KFC Closing hours Albertville, KFC Holiday hours Albertville, KFC Prices Albertville AL 35950" />
<meta name="keywords" content="KFC Hours Albertville, KFC Open hours Albertville, KFC Closing hours Albertville, KFC Holiday hours Albertville, KFC Prices Albertville AL 35950" /> 
</head>
<body id="index-body">
  
    <div class="header" style="background-color:gray;">
        <input type="checkbox" class="menu-mobile" id="mn-mbl">
        <label for="mn-mbl" class="body_btn"></label>
        <label class="mnmbl-label" for="mn-mbl"><span></span><span></span><span></span></label>
        <div class="hd-bar">
            <input type="checkbox" id="search-btn">
            <label class="search-body-label" for="search-btn"></label>
           
            <a class="logo" href="/">
                <img src="{{ asset('user/front_end/images/logo.png')}}"
                    alt="Menu With Price">
            </a>
           
        </div>
    <div class="menu" style="background-color: gray;">
        <div class="menu_width">
            <a class="logo" href="/">
                <img src="{{ asset('user/front_end/images/logo.png')}}" alt="Menu With Price">
            </a>
            <ul class="m-list">
                <li class="ml-home">
                    <a href="/" class="active" style="background-color: gray;">
                        home
                    </a>
                </li>
                <li>
                    <a href="/menu-and-price" style="background-color: gray;">
                        all menus
                    </a>
                </li>
                <li>
                    <a href="/restaurant-near-me" style="background-color: gray;">
                        food near me
                    </a>
                </li>
                <li>
                    <a href="/cuisine" style="background-color: gray;">
                        Cuisine
                    </a>
                </li>
                <li>
                    <a href="/nutrition" style="background-color: gray;">
                        Nutrition
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
    

<div class="content container" style="width:70%"> 
    <div class="main">
    
    <div class="bread-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    @foreach ($city as $key => $value)
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{{
                    Str::after($key,'https://www.menuwithprice.com') }}"><i itemprop="name">{{$value}}</i></a>
                <meta itemprop="position" content="{{$loop->iteration}}">
            </span>
           
                @endforeach
    
     
    </div>
    
    <h1 style="color:blue;"><span style="color:blue;">@foreach ($titles as $key => $value)
    <?php  $num=substr($value,-5);

    ?>
                                {!! $value !!}
                            @endforeach
</span> Prices in Birmingham, AL 35235</h1>
    
    
    
    <div class="brand brct-detail">
    <a class="brand-logo" href="#"><img
                        src="{{ asset('https://cdn.menuwithprice.com/Images/brand_logo/' . $id . '.png') }}"
                        alt="{{$id}}"></a>
    <div class="brdt-list">
    @foreach ($datam as $key => $value)
                                {!! str_replace('https://www.menuwithprice.com', ' ', $value) !!}
                            @endforeach

    </div>
    </div>
    
    
    <div class="hours" >
    @foreach($city as $key => $value)
    @if($loop->iteration=='3')
	<?php $s= Str::remove('Prices', $value) ?>
    @endif
	@endforeach
    <?php  $text= '<h2>'.$s.'Hours | '.$s.'Opening & Closing Hours.</h2>';
    
 
    ?>
    @foreach ($datam1 as $key => $value)
                                {!! str_replace('<h2>Hours of Operation</h2>', $text, $value) !!}
                            @endforeach
                            

    </div>
    
    </div>
    
    <div class="prices food-detail-peice">
    @foreach($city as $key => $value)
    @if($loop->iteration=='5')
 	<?php $s1= $value; ?>
    @endif
	@endforeach
    <?php $text1='<h2>'.$s.'Menu with Prices in '.$s1.', AL '. $num.'</h2>'; 
    ?>
    @foreach ($datam12 as $key => $value)
                                {!! str_replace('<h2>Restaurant Menu</h2>', $text1, $value) !!}
                            @endforeach
 
    </div>
    
    </div>
    </div> 
    
    </div>