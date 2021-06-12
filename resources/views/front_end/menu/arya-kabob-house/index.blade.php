@extends('layouts.main')
@section('content')
    
<div class="content">
    <div class="main tab-main">
    
    <div class="bread-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="https://www.menuwithprice.com/"><i itemprop="name">Menu With Price</i></a>
    <meta itemprop="position" content="1">
    </span>
    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="https://www.menuwithprice.com/menu-and-price/" itemprop="item"><i itemprop="name">Menu</i></a>
    <meta itemprop="position" content="2">
    </span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="https://www.menuwithprice.com/menu/arya-kabob-house/" itemprop="item"><i itemprop="name">Arya Kabob House Prices</i></a>
    <meta itemprop="position" content="3">
    </span> </div>
    
    <div>
    <h1 style="color:blue;"><span style="color:blue;">Arya Kabob House</span> Prices and Locations Near Me</h1>
    </div>
    
    
    <div class="ads ads-top ads-brand"><div>
    <style type="text/css">
    .mwp_ads_1 { width: 100%; height: 252px; }
    @media (min-width:768px) { .mwp_ads_1 { width: 100%; height: 100px; } }
    </style>
    <ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="8669735678"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="f9b5a6cb17c0531d05b86de3-text/javascript"></script>
    <script type="f9b5a6cb17c0531d05b86de3-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    
    
    
    <div class="choose">
    <h2 style="color:blue;">Choose My State</h2>
    <input type="checkbox">
    <label class="label" style="background-color:blue;">
    <span class="more">More</span>
    <span class="less">Less</span>
    <span class="more-less"></span>
    </label>
    <div class="choose-list choose-state">
    @foreach($data as $key => $value)
	<a href="{{
		Str::after($key,'https://www.menuwithprice.com') }}">{{ $value }}</a>
	@endforeach
    </div>
    </div>
    
    <div class="ads"><div>
    <style type="text/css">
    .mwp_ads_3 { width: 100%; height: 250px; }
    @media (min-width:336px) { .mwp_ads_3 { width: 100%; height: 280px; } }
    @media (min-width:768px) { .mwp_ads_3 { width: 100%; height: 100px; } }
    </style>
    
    <ins class="adsbygoogle mwp_ads_3" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="1006868077"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="f9b5a6cb17c0531d05b86de3-text/javascript"></script>
    <script type="f9b5a6cb17c0531d05b86de3-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    
    </div>
    </div>
@endsection