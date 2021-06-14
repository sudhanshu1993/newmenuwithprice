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
            <a href="/term" itemprop="item"><i itemprop="name">Terms of Use</i></a> 
                <meta itemprop="position" content="2">
        </span> 
    </div>
    <h1>Terms of Use</h1>
    <div class="about">
        <p>
            Welcome to xyz.com. To better browse this website, you must read carefully all the flowing items and should accept and agree to be bound by the terms and provisions of the agreement. Or any issues caused by disobeying them, we are not in charge of it. One thing needs to be explicitly mentioned here is that in the terms ‘The Company’ or ‘us’ or ‘we’ or 'our' refers to our company – xyz.com, the owner of the website. The term ‘you' and 'your' refers to the user or viewer of our website who accept the Company's terms and conditions.</p><br><p>1. Our site and its components are offered for informational purposes only. We shall not guarantee the accuracy, usefulness or availability of any information provided on our website or any third parties and we are also not liable for any errors or omissions in that information. Any harms caused by using or downloading the information users should be responsible for that.</p><br><p>2. Users are not qualified to any modifications of the terms conditions and notices here. All the services should be used only for lawful use by individuals or organizations with the legal capacity and authority.</p><br><p>3. The content on the website is licensed to us, including but not limited to, the design, layout, look, appearances and graphics. All these intellectual property is protected, and any infringement through reproduction or redistribution will be severely dealt with according to law.</p><br><p>4. All trademarks or logos cited and used under “the Brands” are not affiliated with our website and also not our property. They are the sole property of their respective owners.</p><br><p>5. We are committed to protecting users’ privacy, and not to selling, sharing, or renting the personal information to any third party or for other unauthorized purposes. Our company usually does not collect personal information. Any users’ record by searching the site is regarded as confidential and will not be divulged to any third party, other than if legally required to do so to the appropriate authorities.</p><br><p>6. We are not responsible for the protection of users’ privacy on condition that users reveal personal information to the links on our website. The links on this site intend to offer other details to users. All the content on those linked sites is not related to our company.</p><br><p>7. We reserve the right to change or modify these conditions and items from time to time and the right to explain any changes in our services. Any changes will be announced in time.</p><br><p>Further information on our website, specific brand or a mall, you can write to us, or contact the merchant directly. We make every effort to provide better services for all the users.
        </p>
    </div>
</div>
</div>
