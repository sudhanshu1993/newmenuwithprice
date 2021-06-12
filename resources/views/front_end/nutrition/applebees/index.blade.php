@extends('layouts.main')

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,viewport-fit=cover" />
<link rel="alternate" href="#" hreflang="en-us" />
<title>Pizza Hut Nutrition Facts| Pizza Hut Menu Calories Calculator</title>
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

<meta name="description" content="Find Out Pizza Hut Nutrition Facts which includes Fat, Protein, Carbs, Sugars, Calories Calculator. How Many Calories 1 Slice of Pizza Hut Nutrition Value." />
<meta name="keywords" content="Pizza Hut Nutrition Facts, Pizza Hut Nutrition Calculator, Pizza Hut Menu Nutrition, Pizza Hut Nutrition Value, Pizza Hut Calories" /> 
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

            @foreach ($b as $key => $value)

            @if($loop->last)
            <h1 style="color:blue;">{{ $value }} Calories Facts</h1>
            @endif
              
            @endforeach
            <div class="star_div">
                <div class="rating">
                    <form method="POST">
                        <input type="submit" id="starScore1" name="score" value="1" class="score"><label for="starScore1"
                            class="star star1"></label>
                        <input type="submit" id="starScore2" name="score" value="2" class="score"><label for="starScore2"
                            class="star star2"></label>
                        <input type="submit" id="starScore3" name="score" value="3" class="score"><label for="starScore3"
                            class="star star3"></label>
                        <input type="submit" id="starScore4" name="score" value="4" class="score"><label for="starScore4"
                            class="star star4"></label>
                        <input type="submit" id="starScore5" name="score" value="5" class="score"><label for="starScore5"
                            class="star star5"></label>
                    </form>
                </div>
                <div class="score_star">
                    <span style="width:52%"></span>
                </div>
                <span class="score_span">
                    <span>2.6</span> based on
                    <span>1,466</span> votes
                </span>
            </div>

            
            <div class="brand">
                <a class="brand-logo" href="#"><img
                        src="{{ asset('https://cdn.menuwithprice.com/Images/brand_logo/' . $id . '.png') }}"
                        alt="{{$id}}"></a>
               </div>
               <div class="choose">
                <h2 style="color:blue;">Select Your State for
                @foreach($b as $key => $value) 
                @if($loop->last)
                    <?php echo rtrim($value,'Nutrition') ?>
	            @endif
                @endforeach
                </h2>
                <input type="checkbox" style="background-color:blue;">
                <label class="label ">
                    <span class="more">More</span>
                    <span class="less">Less</span>
                    <span class="more-less"></span>
                </label>
                <div class="choose-list choose-state">
                    @foreach ($datastate as $keys => $values)
                        <a
                            href="{{ Str::after($keys, 'https://www.menuwithprice.com') }}">{{ $values }}</a>
                    @endforeach
                </div>
                        </div>
            

            

                <div class="nutri-agen food-detail-peice">
                    <h2 style="color:blue;">
                        @foreach ($b as $key => $value)

                        @if($loop->last)
                        <h1 style="color:blue;">{{ $value }} Calories Facts</h1>
                        @endif
                          
                        @endforeach
                    </h2>

                    <table >
                        <tbody>
                            {{-- <tr>
                                <th>Food</th>
                                <th class="tdblock">Calories</th>
                                <th class="td">Protein (g)</th>
                                <th class="td">Fat (g)</th>
                                <th class="more"> </th>
                            </tr>
                            <tr>
                                <td style="border:1px solid black;">
                                    <a href="applebees/2949-add-american-cheese/">
                                        <p style="color:blue;">Add American Cheese</p>
                                        <span>1 serving</span>
                                    </a>
                                </td>
                                <td class="tdblock" style="border:1px solid black;">150</td>
                                <td class="td" style="border:1px solid black;">8</td>
                                <td class="td" style="border:1px solid black;">12</td>
                                <td class="more" style="border:1px solid black;"><a
                                        href="https://www.menuwithprice.com/nutrition/applebees/2949-add-american-cheese/"><b>></b></a>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid black;">
                                    <a
                                        href="https://www.menuwithprice.com/nutrition/applebees/3299-blue-ribbon-brownie-bite/">
                                        <p style="color:blue;">Blue Ribbon Brownie Bite</p>
                                        <span>1 serving</span>
                                    </a>
                                </td>
                                <td class="tdblock">380</td>
                                <td class="td" style="border:1px solid black;">5</td>
                                <td class="td" style="border:1px solid black;">18</td>
                                <td class="more"><a
                                        href="https://www.menuwithprice.com/nutrition/applebees/3299-blue-ribbon-brownie-bite/"><b>></b></a>
                                </td>
                            </tr> --}}
                            @foreach ($datam as $key => $value)
                                {!! str_replace('https://www.menuwithprice.com', ' ', $value) !!}
                            @endforeach

                        </tbody>
                    </table>



                    <div class="ads ads-bottom">
                        <div>



                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

