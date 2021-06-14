@extends('layouts.main')
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,viewport-fit=cover" />
<link rel="alternate" href="#" hreflang="en-us" />
<title>All Menus Food Nutrition Facts & Calculator</title>
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

<meta name="description" content="Check out All Restaurants Nutrition Facts, Fast Food Nutrition Calculator. Also, Menu Nutrition Facts, Menu Nutrition Value, Fast Food Menu Nutrition Calories" />
<meta name="keywords" content="Restaurants Nutrition Facts, Fast Food Nutrition Calculator, Menu Nutrition Facts, Menu Nutrition Value, Fast Food Menu Nutrition Calories" /> 
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

<div class="content " style="width:70%" >
	<div class="main">

<div class="bread-crumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
<a itemprop="item" href=".. "><i itemprop="name">Menu With Price</i></a>
<meta itemprop="position" content="1">
</span>
<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
<a href="/nutrition" itemprop="item"><i itemprop="name">Nutrition</i></a>
<meta itemprop="position" content="2">
</span> </div>

<h1 style="color:blue;">Food Nutrition Value Calculator</h1>

<div class="category">
<a href="{{url('nutrition')}}" class="active"  style="background-color:blue;">Popular Brands</a>
<a href="{{url('nutrition/a')}}"  style="background-color:blue;">A</a><a href="{{url('nutrition/b')}} "  style="background-color:blue;">B</a><a href="{{url('nutrition/c')}}"  style="background-color:blue;">C</a><a href="{{url('nutrition/d')}}"  style="background-color:blue;">D</a><a href="{{url('nutrition/e')}}"  style="background-color:blue;">E</a><a href="{{url('nutrition/f')}}"  style="background-color:blue;">F</a><a href="{{url('nutrition/g')}}"  style="background-color:blue;">G</a><a href="{{url('nutrition/h')}}"  style="background-color:blue;">H</a><a href="{{url('nutrition/i')}}"  style="background-color:blue;">I</a><a href="{{url('nutrition/j')}}"  style="background-color:blue;">J</a><a href="{{url('nutrition/k')}} "  style="background-color:blue;">K</a><a href="{{url('nutrition/l')}}"  style="background-color:blue;">L</a><a href="{{url('nutrition/m')}}"  style="background-color:blue;">M</a><a href="{{url('nutrition/n')}}"  style="background-color:blue;">N</a><a href="{{url('nutrition/o')}} "  style="background-color:blue;">O</a><a href="{{url('nutrition/p')}}"  style="background-color:blue;">P</a><a href="{{url('nutrition/q')}}"  style="background-color:blue;">Q</a><a href="{{url('nutrition/r')}}"  style="background-color:blue;">R</a><a href="{{url('nutrition/s')}}"  style="background-color:blue;">S</a><a href="{{url('nutrition/t')}} "  style="background-color:blue;">T</a><a href="{{url('nutrition/u')}}"  style="background-color:blue;">U</a><a href="{{url('nutrition/v')}}"  style="background-color:blue;">V</a><a href="{{url('nutrition/w')}}"  style="background-color:blue;">W</a><a href="{{url('nutrition/y')}} "  style="background-color:blue;">Y</a><a href="{{url('nutrition/z')}}"  style="background-color:blue;">Z</a><a href="{{url('nutrition/1')}}"  style="background-color:blue;">#</a> </div>


<ul class="menu-list category-menu">
	@foreach($data as $key => $value)
	<li><a href="{{
		Str::after($key,'https://www.menuwithprice.com') }}" style="text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">{{ $value }}</a></li>
	@endforeach
</ul>




</div>
</div>
