
@extends('layouts.main')
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,viewport-fit=cover" />
<link rel="alternate" href="#" hreflang="en-us" />
<title>Bruch Near Me - Menu With Price</title>
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

<meta name="description" content="All menus and locations of best Brunch restaurants including Waffle House, IHOP, Perkins Restaurant & Bakery, and so on." />
<meta name="keywords" content="brunch near me, bagels, pancakes, breakfast, " />
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



<div class="content " >
    <div class="main">
        <div class="bread-crumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/"><i itemprop="name">Menu With Price</i></a>
                    <meta itemprop="position" content="1">
            </span>
            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="/brunch-near-me" itemprop="item"><i itemprop="name">Brunch Near Me</i></a>
                    <meta itemprop="position" content="2">
            </span> 
        </div>
        <h1 style="color: blue;">Brunch Near Me</h1>
        
</div>
<div class="brand-info brand classify-food-intro main1" >
    
    <a href="#" class="brand-logo clf-logo"><img src="{{ asset('user/front_end/images/food_near_me/brunch-near-me.png')}}" alt="Pizza near me"></a>
        <p> 
            In whichever country, the need to loosen up and indulge oneself in the busy daily life can always reflect on food culture. English writer Guy Beringer once wrote, "Brunch is cheerful, sociable and inciting. It is talk-compelling. It puts you in a good temper, it makes you satisfied with yourself and your fellow beings, it sweeps away the worries and cobwebs of the week." As he put, brunch is not only about a full tummy, but also a way of socialization, of spending time with the beloved ones, and of improving the quality of life. If you'd like to have an easy weekend, gathering some friends and having a brunch is surely a good option.
        </p> 
</div>
</div>
</div>



