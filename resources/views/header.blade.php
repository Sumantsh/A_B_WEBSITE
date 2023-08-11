<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="//unpkg.com/alpinejs" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/mediaquery.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/swiperstyle.css')}}">
    <title>Document</title>
</head>

<body>
  <header id="header">
    <div id="topsecwrapper">
    <div id="topsec">

        <div class="first">
            <h2 class="time">24/7 Customer Support </h2>

            <div class="call leftsec">
                <i class="fa-solid fa-phone" ></i>
                <a href="tel:1886962118">+1886962118</a>
            </div>
            <div class="order leftsec">
                <i class="fa-solid fa-cart-plus"></i>
                <a href="#">orders@edlifecare.com</a>
            </div>
            <div class="msg leftsec">
                <i class="fa-solid fa-envelope"></i>
                <a href="#">contact@edlifecare.com</a>
            </div>
        </div>


        <div class="scnd" >
          <a href="/"> <img src="{{ asset ('/img/logo.png')}}"  alt=""> </a>

          <div id="menubar">
            <i class="fa-solid fa-align-justify menuline" ></i>
            <i class="fa-regular fa-rectangle-xmark closemenu" ></i>
          </div>

        </div>

        <div class="third">
            <img src="{{ asset ('/img/visa.png')}}" width="45%" alt="">
            <div id="cart">
                <a href="">view plus</a>
                <a href="">track order</a>
                <a href="">contact us</a>
            </div>
        </div>

    </div>

  </div>


    <div id="serchbar">
      <div id="wrapper">
      <input type="text" name="search" id="search" placeholder="Search Products..."><span><button id="searchbtn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button></span>
    </div>
    </div>

    <nav id="nav">
        <div id="menu">

            <div class="navlink">
            <a href="{{url('about')}}">About us</a>
            <a href="{{url('delivery')}}">Delivery Proof</a>
            <a href="{{url('sample')}}">Free Sample</a>
            <a href="{{url('shipping')}}">Shipping</a>
            <a href="{{url('policies')}}">Policies</a>
            <a href="{{url('fq')}}">F&Q</a>
            </div>

            <div id="search_bar">
                <input class="search" type="text" placeholder="search">
                <p>GO</p>
            </div>
    </nav>

    <nav id="nav2">
      <div class="navlink2">
      <a href="{{url('about')}}">About us</a>
        <a href="fq.html">F&Q</a>
        <a href="sample.html">Free Sample</a>
        <a href="policies.html">Policies</a>
        <a href="shipping.html">Shipping</a>
        <a href="delivery.html">Delivery Proof</a>
        <a href="delivery.html">Cart</a>
        <a href="delivery.html">track Order</a>
        <a href="contact.html">Contact us</a>
        
        </div>
    </nav>

    </header>
