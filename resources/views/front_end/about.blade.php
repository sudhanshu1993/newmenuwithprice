@extends('layouts.main')
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,viewport-fit=cover" />
<link rel="alternate" href="#" hreflang="en-us" />
<title>Best Restaurants Near Me Open Now and Locations</title>
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

<meta name="description" content="Best Restaurants Open Now Near Me [Find NearBy Best Restaurants in all Cuisine. Also Check Menus, Nutrition Value of Particular Restaurants in United States" />
<meta name="keywords" content="Restaurants Near Me, Restaurants Locations Near Me, All Restaurant's Near Me,  Best Restaurants Open Now Near Me, Lunch Near Me, Dinner Near Me" /> 
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


     
<div class="content container"  style="width:70%">
    <div class="main">
        <div class="bread-crumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/"><i itemprop="name">Menu With Price</i></a>
                    <meta itemprop="position" content="1">
            </span>
            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="/about" itemprop="item"><i itemprop="name">About Us</i></a>
                <meta itemprop="position" content="2">
            </span> 
        </div>
        <h1 style="color: blue;">About Us</h1>
        <div class="about">
            <p>
                # is devoted to providing users with detailed and specific menus and prices information and to helping users enjoy the easy life. Over 170,000 restaurant brands and their around 600,000 more stores across the United States and also a variety of UK restaurants are indexed with information including the latest menu with prices, nutrition information, store hours and locations and more..</p><br><p>Our Features</p><br><p># is designed to offer you great user experience with the following wonderful features:</p><br><p>1. Accurate and up-to-date information. All the menus, prices and other information are collected from the restaurant brands' official websites regularly to ensure the accuracy and timeliness.</p><br><p>2. Detailed and comprehensive coverage. For now, we have already indexed over 200 restaurant brands and their 180,000 more stores across the United States. And we still work on more brands and stores for users' convenience.</p><br><p>3. Interesting and helpful articles. We have unique articles about fast food brands and menus sharing you a way to a healthy and easy life.</p><br><p>4. Multi-device web design. Besides desktop and laptop, you can also access # via iPhone, iPad, Android and other mobile devices.</p><br><p>Disclaimer</p><br><p>The trademarks and logos of all the restaurant brands displayed on the website are the property of their respective owners. # is not affiliated or associated with any of them. Menus and prices may vary because of store location. For the most accurate information, please contact the restaurant store directly.
            </p> 
        </div>
    </div>
</div>
