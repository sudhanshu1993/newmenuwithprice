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


    
<div class="content "  style="width:70%">
    <div class="main">
        <div class="bread-crumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/"><i itemprop="name">Menu With Price</i></a>
                    <meta itemprop="position" content="1">
            </span>
            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="/contact" itemprop="item"><i itemprop="name">Contact Us</i></a>
                <meta itemprop="position" content="2">
            </span> 
        </div>
        <h1 style="color: blue;">Contact Us</h1>
            <div class="about">
                <p>
                    If you have any questions or advises about our website, please contact us at <a href="#" class="__cf_email__" data-cfemail="65161015150a17112508000b10120c110d15170c06004b060a084b">[email&#160;protected]</a> We appreciate your valuable voice.</p><br><p>Your email will be promptly replied, and your questions will be addressed in time.</p><br><p>Please note:</p><br><p>The trademarks or logos displayed on the website is not affiliated with us. They are the sole property of their respective merchants. Any questions about the logo as well as trademarks, please contact the merchant directly.
                </p>
                <h4>
                    How to Unsubscribe from Menu with Price
                </h4>
                <p>
                    We are sorry to see you go but happy to help you for one last time.
                </p>
                <h5>
                    For Google Chrome on Android Users:
                </h5>
                <ol>
                    <li>
                        On your Android phone or tablet, open Chrome.
                    </li>
                    <li>
                        Go to any webpage of Menu with Price, e.g. 
                            <a href="/">
                                xyz.com
                            </a>.
                    </li>
                    <li>
                        Left to the URL, click the lock (icon).
                    </li>
                    <li>
                        Click <b>Site settings</b>.
                    </li>
                    <li>
                        Click <b>Notifications</b>.
                    </li>
                    <li>
                        Unselect <b>Show notifications</b>.
                    </li>
                </ol>
                <h5>For Google Chrome on PC Users:</h5>
                <ol>
                    <li>
                        On your laptop, open Chrome.
                    </li>
                    <li>
                        Go to any webpage of Menu with Price, e.g. 
                            <a href="/">
                                xyz.com
                            </a>.
                    </li>
                    <li>
                        Left to the URL, click the lock (icon).
                    </li>
                    <li>
                        Right to 
                            <b>
                                Notifications
                            </b>, change 
                            <b>
                                Allow
                            </b> to 
                            <b>
                                Block
                            </b>.
                    </li> 
                </ol>
            </div>
    </div>
</div>