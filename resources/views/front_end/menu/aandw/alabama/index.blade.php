@extends('layouts.main')
@foreach($city as $key => $value)
    @if($loop->iteration=='3')
    <?php $name= Str::remove('Prices', $value) ?>
    
    @endif
	@endforeach
    @foreach($city as $key => $value)
    @if($loop->last)
	<?php $name1= Str::remove('Prices', $value) ?>
    @endif

	@endforeach
    
    
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,viewport-fit=cover" />
<link rel="alternate" href="#" hreflang="en-us" />
<title>{{$name}} Locations in {{$name1}} </title>
<link href="{{ asset('user/front_end/images/Menu (2).png')}}" rel="shortcut icon">
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

<meta name="description" content="Find out {{$name}} Near me Alabama, Track your {{$name}} locations in Alabama. Nearest {{$name}} Store in Alabama along with {{$name}} menu Alabama." />
<meta name="keywords" content="{{$name}} Near me Alabama, {{$name}} locations in alabama, {{$name}} Alabama, {{$name}} menu Alabama, {{$name}} Store Alabama" /> 
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
                <img src="{{ asset('user/front_end/images/Menu (2).png')}}"
                    alt="Menu With Price">
            </a>
           
        </div>
    <div class="menu" style="background-color: gray;">
        <div class="menu_width">
            <a class="logo" href="/">
                <img src="{{ asset('user/front_end/images/Menu (2).png')}}" alt="Menu With Price">
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
    

<div class="content" >
    <div class="main main1">
    
    <div class="bread-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    @foreach ($city as $key => $value)
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{{
                    Str::after($key,'https://www.menuwithprice.com') }}"><i itemprop="name">{{$value}}</i></a>
                <meta itemprop="position" content="{{$loop->iteration}}">
            </span>
           
                @endforeach
    
    </div>
    
    <div>
    <h1 style="color:blue;">
    
    @foreach($city as $key => $value)
    @if($loop->iteration=='3')
	{{  Str::remove('Prices', $value)}}
    @endif
	@endforeach Menu with Prices in 
    @foreach($city as $key => $value)
    @if($loop->last)
	{{  Str::remove('Prices', $value)}}
    @endif

	@endforeach
    
    </h1>
    </div>
    
    <div class="state">
    <h2 style="color:blue;">Select Your City in @foreach($city as $key => $value)
    @if($loop->last)
	{{  Str::remove('Prices', $value)}}
    @endif

	@endforeach
     For 
    @foreach($city as $key => $value)
    @if($loop->iteration=='3')
	{{  Str::remove('Prices', $value)}}
    @endif
    @endforeach
    Restaurant
    </h2>
    <ul class="menu-list category-menu">
	@foreach($data as $key => $value)
	<li><a href="{{
		Str::after($key,'https://www.menuwithprice.com') }}" style="text-align: center;font-size:12.5px;font-family:Arial, Helvetica, sans-serif;">{{ $value }}</a></li>
	@endforeach
    </ul>

    </div>
    
    <div class="ads"><div style="text-align:center;">
    <style type="text/css">
    .mwp_ads_2 { width: 100%; height: 250px; }
    @media (min-width:336px) { .mwp_ads_2 { width: 100%; height: 280px; } }
    @media (min-width:768px) { .mwp_ads_2 { width: 100%; height: 100px; } }
    </style>
    
    <ins class="adsbygoogle mwp_ads_2" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="4099935279"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="b81e52f195acc81a725ffdd9-text/javascript"></script>
    <script type="b81e52f195acc81a725ffdd9-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    
    <div class="ads"><div>
    <style type="text/css">
    .mwp_ads_3 { width: 100%; height: 250px; }
    @media (min-width:336px) { .mwp_ads_3 { width: 100%; height: 280px; } }
    @media (min-width:768px) { .mwp_ads_3 { width: 100%; height: 100px; } }
    </style>
    
    <ins class="adsbygoogle mwp_ads_3" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="1006868077"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="b81e52f195acc81a725ffdd9-text/javascript"></script>
    <script type="b81e52f195acc81a725ffdd9-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    
    </div>
    </div>