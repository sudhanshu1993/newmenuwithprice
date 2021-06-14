@extends('layouts.main')
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,viewport-fit=cover" />
<link rel="alternate" href="#" hreflang="en-us" />
<title>Menu With Price</title>
<link href="{{ asset('user/front_end/images/favicon.ico')}}" rel="shortcut icon">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72×72-precomposed.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114×114-precomposed.png">
<link rel="preload" href="{{ asset('user/front_end/css/style.css?v-0203')}}" as="style">

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


<div class="index-top " >
    <div class="slide container" style="width:70%"> 
        <ul class="s-list">
            <li class="s-list-pic1">
                <a href="#">
                    <img src="{{ asset('user/front_end/images/banner-cov.png')}}" alt="Seriously, Refrigerating These 12 Foods Will Do Harm To Your Health">
                </a>
            </li>
            <li class="s-list-pic2">
                <a href="#">
                    <img src="{{ asset('user/front_end/images/slider1.jpg')}}" alt="Can I Use Expired Spices?">
                        <span>
                            Can I Use Expired Spices?
                        </span>
                </a>
            </li>
            <li class="s-list-pic3">
                <a href="#">
                    <img src="{{ asset('user/front_end/images/slider2.jpg')}}" alt="Why You Should Eat More Cranberries and Easy Recipes">
                        <span>
                            Why You Should Eat More Cranberries and Easy Recipes
                        </span>
                </a>
            </li>
            <li class="s-list-pic4">
                <a href="#">
                    <img src="{{ asset('user/front_end/images/slider3.jpg')}}" alt="Reasons to Indulge in Dark Chocolate">
                        <span>
                            Reasons to Indulge in Dark Chocolate
                        </span>
                </a>
            </li>
        </ul>
    </div>

    <div class="menu-price container" id="menu-price" style="width:70%">
        <h2 ><span>Menu Price</span></h2>
        <ul class="mp-logo">
            <li><a href=" menu/chick-fil-a/"><img src=" {{ asset('user/front_end/images/brandlogo/chick-fil-a.png')}}" alt="Chick-fil-A menu"></a></li>
            <li><a href=" menu/steak-n-shake/"><img src=" {{ asset('user/front_end/images/brandlogo/steak-n-shake.png')}}" alt="Steak 'n Shake menu"></a></li>
            <li><a href=" menu/golden-corral/"><img src=" {{ asset('user/front_end/images/brandlogo/golden-corral.png')}}" alt="Golden Corral menu"></a></li>
            <li><a href=" menu/kfc/"><img src=" {{ asset('user/front_end/images/brandlogo/kfc.png')}}" alt="KFC menu"></a></li>
            <li><a href=" menu/pizza-hut/"><img src=" {{ asset('user/front_end/images/brandlogo/pizza-hut.png')}}" alt="Pizza Hut menu"></a></li>
            <li><a href=" menu/wendys/"><img src=" {{ asset('user/front_end/images/brandlogo/wendys.png')}}" alt="Wendy's menu"></a></li>
            <li><a href=" menu/little-caesars-pizza/"><img src=" {{ asset('user/front_end/images/brandlogo/little-caesars-pizza.png')}}" alt="Little Caesars Pizza menu"></a></li>
            <li><a href=" menu/mcdonalds/"><img src=" {{ asset('user/front_end/images/brandlogo/mcdonalds.png')}}" alt="McDonald's menu"></a></li>
            <li><a href=" menu/jack-in-the-box/"><img src=" {{ asset('user/front_end/images/brandlogo/jack-in-the-box.png')}}" alt="Jack in the Box menu"></a></li>
            <li><a href=" menu/arbys/"><img src=" {{ asset('user/front_end/images/brandlogo/arbys.png')}}" alt="Arby's menu"></a></li>
            <li><a href=" menu/chipotle-mexican-grill/"><img src=" {{ asset('user/front_end/images/brandlogo/chipotle-mexican-grill.png')}}" alt="Chipotle Mexican Grill menu"></a></li>
            <li><a href=" menu/long-john-silvers/"><img src=" {{ asset('user/front_end/images/brandlogo/long-john-silvers.png')}}" alt="Long John Silver's menu"></a></li>
            <li><a href=" menu/jimmy-johns/"><img src=" {{ asset('user/front_end/images/brandlogo/jimmy-johns.png')}}" alt="Jimmy John's menu"></a></li>
            <li><a href=" menu/del-taco/"><img src=" {{ asset('user/front_end/images/brandlogo/del-taco.png')}}" alt="Del Taco menu"></a></li>
            <li><a href=" menu/raising-canes/"><img src=" {{ asset('user/front_end/images/brandlogo/raising-canes.png')}}" alt="Raising Cane's menu"></a></li>
            <li><a href=" menu/carls-jr/"><img src=" {{ asset('user/front_end/images/brandlogo/carls-jr.png')}}" alt="Carl's Jr. menu"></a></li>
            <li><a href=" menu/el-pollo-loco/"><img src=" {{ asset('user/front_end/images/brandlogo/el-pollo-loco.png')}}" alt="El Pollo Loco menu"></a></li>
            <li><a href=" menu/hardees/"><img src=" {{ asset('user/front_end/images/brandlogo/hardees.png')}}" alt="Hardee's menu"></a></li>
            <li><a href=" menu/waffle-house/"><img src=" {{ asset('user/front_end/images/brandlogo/waffle-house.png')}}" alt="Waffle House menu"></a></li>
            <li><a href=" menu/popeyes-louisiana-kitchen/"><img src=" {{ asset('user/front_end/images/brandlogo/popeyes-louisiana-kitchen.png')}}" alt="Popeyes Louisiana Kitchen menu"></a></li>
            <li><a href=" menu/sheetz/"><img src=" {{ asset('user/front_end/images/brandlogo/sheetz.png')}}" alt="Sheetz menu"></a></li>
            <li><a href=" menu/whataburger/"><img src=" {{ asset('user/front_end/images/brandlogo/whataburger.png')}}" alt="Whataburger menu"></a></li>
            <li><a href=" menu/jersey-mikes-subs/"><img src=" {{ asset('user/front_end/images/brandlogo/jersey-mikes-subs.png')}}" alt="Jersey Mike's Subs menu"></a></li>
            <li><a href=" menu/ihop/"><img src=" {{ asset('user/front_end/images/brandlogo/ihop.png')}}" alt="IHOP menu"></a></li>
            <li><a href=" menu/starbucks/"><img src=" {{ asset('user/front_end/images/brandlogo/starbucks.png')}}" alt="Starbucks Coffee menu"></a></li>
            <li><a href=" menu/bojangles/"><img src=" {{ asset('user/front_end/images/brandlogo/bojangles.png')}}" alt="Bojangles' menu"></a></li>
            <li><a href=" menu/applebees/"><img src=" {{ asset('user/front_end/images/brandlogo/applebees.png')}}" alt="Applebee's menu"></a></li>
            <li><a href=" menu/panera-bread/"><img src=" {{ asset('user/front_end/images/brandlogo/panera-bread.png')}}" alt="Panera Bread menu"></a></li>
            <li><a href=" menu/noodles-and-company/"><img src=" {{ asset('user/front_end/images/brandlogo/noodles-and-company.png')}}" alt="Noodles and Company menu"></a></li>
            <li><a href=" menu/american-deli/"><img src=" {{ asset('user/front_end/images/brandlogo/american-deli.png')}}" alt="American Deli menu"></a></li>
        </ul>
    </div>
</div>
<div class="container" style="width:70%">
  <ul class="cards " >
    <li class="cards_item">
      <div class="card">
      <a href="/donuts-near-me">
        <div class="card_image"><img src="{{ asset('user/front_end/images/food_near_me/donuts-near-me.png')}}"></div>
        <div class="card_content">
          <h2 class="card_title">Donuts Near Me</h2>
          
        </div>
        </a>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
      <a href="/brunch-near-me">        
        <div class="card_image"><img src="{{ asset('user/front_end/images/food_near_me/brunch-near-me.png')}}"></div>
        <div class="card_content">
          <h2 class="card_title">Brunch Near Me</h2>
        </div>
        </a>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <a href="/burgers-near-me">
        <div class="card_image"><img src="{{ asset('user/front_end/images/food_near_me/burgers-near-me.png')}}"></div>
        <div class="card_content">
          <h2 class="card_title">Burger Near Me</h2>
        </div>
        </a>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
      <a href="/pizza-near-me">
            
        <div class="card_image"><img src="{{ asset('user/front_end/images/food_near_me/pizza-near-me.png')}}"></div>
        <div class="card_content">
          <h2 class="card_title">Pizza Near Me</h2>
        </div>
        </a>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
      <a href="/seafood-near-me">
              
        <div class="card_image"><img src="{{ asset('user/front_end/images/food_near_me/seafood-near-me.png')}}"></div>
        <div class="card_content">
          <h2 class="card_title">Seafood Near Me</h2>
          
        </div>
        </a>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
      <a href="/mexican-near-me">
            
        <div class="card_image"><img src="{{ asset('user/front_end/images/food_near_me/mexican-near-me.png')}}"></div>
        <div class="card_content">
          <h2 class="card_title">Mexican Near Me</h2>
          
        </div>
</a>
      </div>
    </li>
  </ul>
</div>

<!-- <div class="menu-price food-cl-list">
    <ul class="h-hours " style="width:70%">
        <li>
            <a href="/donuts-near-me">
                <span>
                    <img src="{{ asset('user/front_end/images/food_near_me/donuts-near-me.png')}}" alt="Donuts near me">
                </span>
                <h3>
                    Donuts Near Me
                </h3>
            </a>
        </li>
        <li>
            <a href="/brunch-near-me">
                <span>
                    <img src="{{ asset('user/front_end/images/food_near_me/brunch-near-me.png')}}" alt="Brunch near me">
                </span>
                <h3>
                    Brunch Near Me
                </h3>
            </a>
        </li>
        <li>
            <a href="/burgers-near-me">
                <span>
                    <img src="{{ asset('user/front_end/images/food_near_me/burgers-near-me.png')}}" alt="Burger near me">
                </span>
                <h3>
                    Burger Near Me
                </h3>
            </a>
        </li>
        <li>
            <a href="/pizza-near-me">
                <span>
                    <img src="{{ asset('user/front_end/images/food_near_me/pizza-near-me.png')}}" alt="Pizza near me">
                </span>
                <h3>
                    Pizza Near Me
                </h3>
            </a>
        </li>
        <li>
            <a href="/seafood-near-me">
                <span>
                    <img src="{{ asset('user/front_end/images/food_near_me/seafood-near-me.png')}}" alt="Seafood near me">
                </span>
                <h3>
                    Seafood Near Me
                </h3>
            </a>
        </li>
        <li>
            <a href="/mexican-near-me">
                <span>
                    <img src="{{ asset('user/front_end/images/food_near_me/mexican-near-me.png')}}" alt="Mexican near me">
                </span>
                <h3>
                    Mexican Near Me
                </h3>
            </a>
        </li>
    </ul>
</div> -->

