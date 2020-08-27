<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebDesign</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            .jumbotronbackground{
            background-image: url("img/home-bg.jpg");
            min-height: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            }

            .nav-link {
            font-weight: bold;
            
            }
            .footer{
            background: #152F4F;
            color:white;
            
            .links{
            ul {list-style-type: none;}
            li a{
            color: white;
            transition: color .2s;
            &:hover{
                    text-decoration:none;
                    color:#4180CB;
                    }
            }
            }  
            .about-company{
            i{font-size: 25px;}
            a{
            color:white;
            transition: color .2s;
            &:hover{color:#4180CB}
            }
            } 
            .location{
            i{font-size: 18px;}
            }
            .copyright p{border-top:1px solid rgba(255,255,255,.1);} 
            }
       
        </style>

         <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <!-- Custom styles for this template -->
        <!-- <link href="css/clean-blog.min.css" rel="stylesheet"> -->

    </head>
    
    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/">{{config('app.name','Design Works')}}</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/login">Login</a>
                        </li>
                        </ul>
                    </div>
            </div>
        </nav>
       
        <!-- Page Header -->
        <header class="jumbotron jumbotronbackground" >
        
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center text-center mt-5">    
                        <div class="row">
                            <h1>Success your Design</h1><br/>
                        </div>        
                        
                    </div>
                    <div class="col-12 d-flex justify-content-center text-center mt-5">                         
                        <div class="row">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolore maiores adipisci cum quidem. Corrupti error impedit, quo pariatur hic in excepturi, enim voluptate commodi eligendi doloremque animi dolores libero?</p>               
                        </div>
                        
                    </div>
                </div>
            </div>
        </header>

        <div class="flex-top position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                Featured Jobs
                </div>
                

                <div class="container">
                    <div class="row mb-2">
                        <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Hire</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Design a logo for Hardware Store</a>
                            </h3>
                            <div class="mb-1 text-muted">RM 100 </div>
                            <p class="card-text mb-auto"; style="text-align:left" >I need a logo for my new Hardware store.</p>
                            <a href="#">Continue reading</a>
                            </div>
                            
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success">Work</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Web Designer</a>
                            </h3>
                            <div class="mb-1 text-muted">Exp: 5 yrs</div>
                            <p class="card-text mb-auto"; style="text-align:left" >I Developed and designed a few websites including xxx company website. 
                            Experience in Illustrator, After Effects, Photoshop </p>
                            <a href="#">Continue reading</a>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                </div>

            </div>

            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                class="fas fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-primary">Button</a>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-primary">Button</a>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-primary">Button</a>
                    </div>
                </div>
                </div>
                
                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-primary">Button</a>
                    </div>
                </div>
                </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-primary">Button</a>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-primary">Button</a>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-primary">Button</a>
                    </div>
                </div>
                </div>
                
                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-primary">Button</a>
                    </div>
                </div>
                </div>

            </div>
            <!--/.Second slide-->

            

            </div>
            <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->
            
        </div>

    
    
        <!-- Footer -->
        <div class="mt-5 pt-3 pb-3 footer">
                <div class="container">
                        <div class="row">
                        <div class="col-lg-5 col-xs-12 about-company">
                        <h2>Success Design</h2>
                        <p class="pr-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
                        <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
                        </div>
                        <div class="col-lg-3 col-xs-12 links">
                        <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                                <ul class="m-0 p-0 text-left">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Fusce scelerisque</a></li>
                                <li><a href="#">Sed faucibus</a></li>
                                <li><a href="#">Mauris efficitur nulla</a></li>
                                </ul>
                        </div>
                        <div class="col-lg-4 col-xs-12 location">
                        <h4 class="mt-lg-0 mt-sm-4">Location</h4>
                        <p>123, Jalan Tunku Abdul Rahman, Taman Tunku Abdul Rahman</p>
                        <p class="mb-0"><i class="fa fa-phone mr-3"></i>+(60) 12-3456789</p>
                        <p><i class="fa fa-envelope-o mr-3"></i>info@test.com</p>
                        </div>
                        </div>
                        <div class="row mt-5">
                        <div class="col copyright">
                        <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
                        </div>
                        </div>
                </div>
        </div>
        
    </body>

</html>
