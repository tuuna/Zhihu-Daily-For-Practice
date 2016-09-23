<!DOCTYPE HTML>
<html>
<head>
    <title>DETAIL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <script type="applijewelleryion/x-javascript">
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }

    </script>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <!-- <link href='http://fonts.useso.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'> -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css'/>
    <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
<!--start-main-->
<div class="header-bottom">
    <div class="container">
        <div class="logo">
            <h1><a href="{{url('/')}}">ZHIHU</a></h1>
            <p><label class="of"></label>zhihudaily just for fun <label class="on"></label></p>
        </div>
    </div>
</div>
<!-- banner -->

<div class="banner-1">

</div>

<!-- technology-left -->
<div class="technology">
    <div class="container">
        <div class="col-md-9 technology-left">
            <div class="agileinfo">

                <h2 class="w3">{{$title}}</h2>
                <div class="single">
                    <img src="//images.weserv.nl/?url=<?php echo explode('http://',$images)[1];?>" class="img-responsive" alt="">
                    <div class="b-bottom">
                        <h5 class="top">{{$author}}</h5>
                        <p class="sub"><?php echo html_entity_decode($contents);?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
