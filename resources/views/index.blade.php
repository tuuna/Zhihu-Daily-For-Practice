<!DOCTYPE HTML>
<html>
<head>
    <title>ZhIHU FOR PRACTICE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <script type="applijewelleryion/x-javascript">
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <!-- <link href='http://fonts.useso.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'> -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- animation-effect -->
    <link href="css/animate.min.css" rel="stylesheet">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
</head>
<body>
<!--start-main-->
<div class="header-bottom">
    <div class="container">
        <div class="logo">
            <h1><a href="#">ZHIHU</a></h1>
            <p><label class="of"></label>zhihudaily just for fun <label class="on"></label></p>
        </div>
    </div>
</div>
<!-- banner -->

{{--<div class="banner">
    <div class="container">
        <h2>Contrary to popular belief, Lorem Ipsum simply</h2>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make Lorem Ipsum has been the industry's standard dummy text ever since
            the 1500s</p>
        <a href="singlepage.html">READ MORE</a>
    </div>
</div>--}}
<div class="services w3l wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
    <div class="container">
        <div class="grid_3 grid_5">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab"
                                                              data-toggle="tab" aria-controls="expeditions"
                                                              aria-expanded="true">FASHION</a></li>
                    <li role="presentation" class=""><a href="#safari" role="tab" id="safari-tab" data-toggle="tab"
                                                        aria-controls="safari">TRAVEL</a></li>
                    <li role="presentation" class=""><a href="#trekking" role="tab" id="trekking-tab" data-toggle="tab"
                                                        aria-controls="trekking">MUSIC</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade" id="expeditions" aria-labelledby="expeditions-tab">

                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="images/m4.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="images/f4.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="images/f3.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="clearfix"></div>
                    </div>


                    <div role="tabpanel" class="tab-pane fade" id="safari" aria-labelledby="safari-tab">
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="images/t1.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="images/t2.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="images/t3.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade active in" id="trekking" aria-labelledby="trekking-tab">

                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="images/m2.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="images/m1.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="images/m3.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- technology-left -->
<div class="technology">
    <div class="container">
        <div class="col-md-9 technology-left">
            <div class="tech-no">
                <!-- technology-top -->

                <div class="tc-ch wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                    @foreach($datas as $key => $data)
                        <div class="tch-img">
                            <a href="{{url('detail/'.$data['id'])}}"><img src="//images.weserv.nl/?url=<?php echo explode('http://',$data['image'])[1];?>" class="img-responsive"></a>
                        </div>
                        <input type="hidden" value="{{$data['id']}}"/>
                        <h3><a href="{{url('detail/'.$data['id'])}}">{{$data['title']}}</a></h3>
                        <h6>BY <a href="{{url('detail/'.$data['id'])}}">
                                @if(!empty($authors[$key]))
                                    <?php echo explode(',', $authors[$key])[0];?>
                                @else
                                    知乎用户
                                @endif
                            </a>
                            {{$date}}</h6>
                        <br>
                        <div>
                            <?php echo $contents[$key].'...';?>
                        </div>
                        <div class="bht1">
                            <a href="{{url('detail/'.$data['id'])}}">Continue Reading</a>
                        </div>
                        <div class="soci">
                            <ul>
                                <li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    @endforeach
                </div>

</body>
</html>
