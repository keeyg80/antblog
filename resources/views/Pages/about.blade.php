<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
        

        
</head>
<body>
        <header>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
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
        </header>
        
        

        <div id="carouselExampleIndicators" class="mt-5 carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
        <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                        <div class="img" style="height:300px;background-color:#7F8C8D"><img class="d-block img-fluid"  >
                                <div class="container mt-5">
                                        <h1>Example 1.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                        </div>
                </div>

                <div class="carousel-item">
                        <div class="img" style="height:300px;background-color:#F5B041"><img class="d-block img-fluid"  >
                                <div class="container mt-5">
                                        <h1>Example 2.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                        </div>
                </div>

                <div class="carousel-item">
                        <div class="img" style="height:300px;background-color:#5DADE2"><img class="d-block img-fluid"  >
                                <div class="container mt-5">
                                        <h1>Example 3.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                        </div>
                </div>
        </div>

        
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
        </div>
        
        <div class="content">
                
        <div class="container flex-top position-ref full-height">
                <div class="row">
                        <div class="col-xl-4 d-flex justify-content-left text-left mt-5">
                                <div class="img"><img src="img/Company_logo.png" ></div>
                        </div>
                        <div class="col-xl-8 d-flex justify-content-left text-left mt-5">    
                                <div class="row ">
                                        <h1>Company Overview</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolore maiores adipisci cum quidem. Corrupti error impedit, quo pariatur hic in excepturi, enim voluptate commodi eligendi doloremque animi dolores libero?</p>               
                                </div>
                        </div>
                                               
                        
                        
                        
                </div>
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