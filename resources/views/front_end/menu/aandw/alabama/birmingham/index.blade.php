@extends('layouts.main')
@foreach($city as $key => $value)
	@if($loop->iteration=='3')
                    
	
    <?php $name= Str::remove('Prices', $value) ?>
    
    @endif

    @endforeach
    @foreach($city as $key => $value)
	@if($loop->iteration=='5')
              
    <?php  $name1=$value?>
    @endif

    @endforeach
    @foreach($city as $key => $value)
	@if($loop->iteration=='4')
                    
	<?php  $name2=$value?>
    @endif

    @endforeach
    
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,viewport-fit=cover" />
<link rel="alternate" href="#" hreflang="en-us" />
<title>{{$name}} Menu and Location Near Me {{$name1}}</title>
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

<meta name="description" content="{{$name}} Menu and Prices in {{$name1}}, Also Check {{$name}} Location Near Me {{$name1}}, {{$name2}}. {{$name}} Store Restaurant in {{$name1}}." />
<meta name="keywords" content="{{$name}} Near me {{$name1}}, {{$name}} locations in {{$name1}}, {{$name}} {{$name1}} {{$name2}}, {{$name}} menu {{$name1}}, {{$name}} Store {{$name1}}" /> 
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
    
    <h1 style="color:blue;">@foreach($city as $key => $value)
	@if($loop->iteration=='3')
                    
	{{  Str::remove('Prices', $value)}}
	<span>
Menu Prices and Location Near me in</span>
    @endif

    @endforeach
    @foreach($city as $key => $value)
	@if($loop->iteration=='5')
                    
	{{$value}}
    @endif

    @endforeach
    <span>,</span>
    @foreach($city as $key => $value)
	@if($loop->iteration=='4')
                    
	{{$value}}
    @endif

    @endforeach
    
    </h1>
    
    <div class="brand-in-city">
    <table class="stores-list">
    @foreach ($datam1 as $key => $value)
                                {!! str_replace('https://www.menuwithprice.com', ' ', $value) !!}
                            @endforeach

    </table>
    </div>
    
    
    <!-- <div class="brand brand-center">
    <h2 style="color:blue;">Find @foreach($city as $key => $value)
    @if($loop->iteration=='3')
	{{  Str::remove('Prices', $value)}}
    @endif
	@endforeach near me in
    @foreach($city as $key => $value)
	@if($loop->iteration=='5')
                    
	{{$value}}
    @endif

    @endforeach
    ?
     </h2>
    <p class="brand-info">@foreach($datam as $key => $value)
	{{$value}}
    @endforeach
    </p>
    </div> -->
    <div class="ads ads-bottom"><div>
    <style type="text/css">
    .mwp_ads_3 { width: 100%; height: 250px; }
    @media (min-width:336px) { .mwp_ads_3 { width: 100%; height: 280px; } }
    @media (min-width:768px) { .mwp_ads_3 { width: 100%; height: 100px; } }
    </style>
    
    <ins class="adsbygoogle mwp_ads_3" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="1006868077"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="a55d29ddd9a5de5c38fa9d4e-text/javascript"></script>
    <script type="a55d29ddd9a5de5c38fa9d4e-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    </div>
    </div>
    </div>