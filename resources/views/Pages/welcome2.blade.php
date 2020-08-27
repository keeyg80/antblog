@extends('layouts.app')

@section('content')


        <!-- Styles -->
        <style>

            

            


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
       
        </style>

        
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

        </div>
        
@endsection
