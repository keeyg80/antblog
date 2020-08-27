<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MyWeb</title>
        
        <!-- CSS only -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


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

        @yield('content')

        
    </body>
    <footer>
        <!-- Footer -->
        <div class="mt-5 pt-3 pb-3 footer">
                <div class="container">
                        <div class="row">
                        <div class="col-lg-5 col-xs-12 about-company">
                        <h2>Success Design</h2>
                        <p class="pr-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
                        
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
    </footer>
</html>
