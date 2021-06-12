@extends('layouts.main')

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,viewport-fit=cover" />
<link rel="alternate" href="#" hreflang="en-us" />
<title>Add American Cheese Nutrition Facts & Calories Calculator</title>
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

<meta name="description" content="Check Add American Cheese Nutrition Facts which includes Add American Cheese Fat, Protein, Carbs, Calories. How Many Calories 1 Slice of Add American Cheese" />
<meta name="keywords" content="Add American Cheese Nutrition Facts,  Add American Cheese Calories, Add American Cheese Nutrition Value, Add American Cheese Carbs Fat value" /> 
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
                @foreach ($b as $key => $value)
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{{
                    Str::after($key,'https://www.menuwithprice.com') }}"><i itemprop="name">{{$value}}</i></a>
                <meta itemprop="position" content="{{$loop->iteration}}">
            </span>
           
                @endforeach
            </div>
            
	<h1 style="color:blue;">
    @foreach ($b as $key => $value)

            @if($loop->last)
<?php echo rtrim($value,'Facts') ?>
      Calories Facts</h1>
            @endif
                          
            @endforeach
            
            <div class="brand">
				<a class="brand-logo" href="#"><img
					src="{{ asset('https://cdn.menuwithprice.com/Images/brand_logo/' . $id . '.png') }}"
					alt="{{$id}}"></a>
                <div class="nutition_list">
                    <label>@foreach ($nu as $key => $value)

                     
                        
                       {!!$value!!}
                        
                      
                          
                        @endforeach </label>
                </div>
            </div>

            

			<div class="store_facts">
                <div class="nutrition">
                        @foreach ($data as $key => $value)
                            {!! $value !!}
                        @endforeach
                </div>
                &nbsp;
                <div class="store_calories">
                    <div class="source">
                        <div class="source_tit">Source of Calories</div>
                        <div id="piechart" style="width: 100%; height: 314px;margin-top:8%">
                        </div>
                        <div class="nutition">* Powered by <img src="{{asset('user/front_end/images/nutritionix_logo_250px.png')}}"
                                alt="source of calories"></div>
                    </div>
                </div>
            </div>
			
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type=" text/javascript">
                    </script>
                    <script>
                        @foreach ($charts as $key => $value)
                            {!! $value !!}
                        @endforeach

                    </script>


            
            <h2 style="color:blue;">Related food from Applebee's</h2>
            <ul class="menu-list state_list_food">
				@foreach($datam as $key => $value)
				<li><a href="{{
					Str::after($key,'https://www.menuwithprice.com') }}" style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">{{ $value }}</a></li>
				@endforeach
				{{--
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2953/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">12
                        oz. Ribeye Steak without sides</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2957/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">9
                        oz. House Sirloin Steak without sides</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2966/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">4-Cheese
                        Mac & Cheese with Honey Pepper Chicken Tenders</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2975/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Add
                        Cheddar Cheese</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2977/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">7
                        oz. House Sirloin Steak without sides</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2980/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">12
                        oz. New York Strip Steak without sides</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2982/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Add
                        Bacon</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2993/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Add
                        Swiss Cheese</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/2996/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Appetizer
                        Crosscut Ribs Sauce, Honey BBQ</a></li>
                <li><a href="https://www.menuwithprice.com/nutrition/applebees/3004/"
                        style="border:1px solid blue;text-align: center;font-size:18px;font-family:Arial, Helvetica, sans-serif;">American
                        BLT Sandwich without sides</a></li> --}}
            </ul>

        </div>

    </div>



