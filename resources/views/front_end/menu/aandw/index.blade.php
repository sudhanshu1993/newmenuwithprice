
@extends('layouts.main')
@foreach($city as $key => $value)
                @if($loop->last)
                    <?php 
                     
                    $name=$value
                    ?>
	            @endif
	        @endforeach
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,viewport-fit=cover" />
<link rel="alternate" href="#" hreflang="en-us" />
<title>{{$name}}  Prices | {{$name}} with Prices [Meals)</title>
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

<meta name="description" content="Check {{$name}} Prices with {{$name}} Meals. Also, Check {{$name}} deals along with {{$name}} with Prices PDF Format & {{$name}} Near Me Location." />
<meta name="keywords" content="{{$name}} Meals, {{$name}} pdf, {{$name}} near me, {{$name}} deals, {{$name}} with prices, {{$name}} and prices, {{$name}}, {{$name}} prices" /> 
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
    <div class="main  tab-main">
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
        <span style="color:blue;">
            @foreach($city as $key => $value)
                @if($loop->last)
                    <?php echo rtrim($value,'Prices') ?>
	            @endif
	        @endforeach 
        </span>  
        Prices and Locations Near Me
    </h1>
    </div>
    <div class="brand" >
        <a class="brand-logo" href="#">
            <img src="{{ asset('https://cdn.menuwithprice.com/Images/brand_logo/' . $id . '.png') }}"
                        alt="{{$id}}">
        </a>
    </div>
    <div class="choose" >
        <h2 style="color:blue;">
            Select Your State for
                @foreach($city as $key => $value)
                    @if($loop->last)
                        <?php echo rtrim($value,'Menu') ?>
	                @endif
	            @endforeach
        </h2>
        <input type="checkbox">
            <label class="label" style="background-color:blue;">
                <span class="more" >More</span>
                    <span class="less" >Less</span>
                        <span class="more-less"></span>
            </label>
            <div class="choose-list choose-state">
                @foreach($data as $key => $value)
                    <a href="{{Str::after($key,'https://www.menuwithprice.com') }}">{{ $value }}</a>
	            @endforeach
            </div>
    </div>
    <div class="prices-menu main3" >
        <div class="menu-tab">
            <div class="menu-tab-l">
                <h2 style="color:blue;"> @foreach($city as $key => $value)
                    @if($loop->last)
                        <?php echo rtrim($value,'Prices') ?>
	                @endif
	                @endforeach  with Prices</h2>
            </div>
        </div>
    </div>
        <div class="price md-price" >
            <table class="prc-table" >
                @foreach ($datam as $key => $value)
                                {!! str_replace('https://www.menuwithprice.com', ' ', $value) !!}
                            @endforeach
            </table> 
        </div>
    </div>
                    </div>