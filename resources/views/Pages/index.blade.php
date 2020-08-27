<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>

      <!-- Bootstrap core CSS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      
      <!-- Custom styles for this template -->
      <!-- <link href="carousel.css" rel="stylesheet"> -->
      <script>
          $('#recipeCarousel').carousel({
  interval: 10000
})

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});


        @media (max-width: 768px) {
            .carousel-inner .carousel-item > div {
                display: none;
            }
            .carousel-inner .carousel-item > div:first-child {
                display: block;
            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* display 3 */
        @media (min-width: 768px) {
            
            .carousel-inner .carousel-item-right.active,
            .carousel-inner .carousel-item-next {
              transform: translateX(33.333%);
            }
            
            .carousel-inner .carousel-item-left.active, 
            .carousel-inner .carousel-item-prev {
              transform: translateX(-33.333%);
            }
        }

        .carousel-inner .carousel-item-right,
        .carousel-inner .carousel-item-left{ 
          transform: translateX(0);
        }


      </script>

  </head>
<body>
<div class="container text-center my-3">
  <h2 class="font-weight-light">Bootstrap 4 - Multi Item Carousel</h2>
  <div class="row mx-auto my-auto">
      <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
              <div class="carousel-item active">
                  <div class="col-md-4">
                      <div class="card card-body">
                          <img class="img-fluid" src="http://placehold.it/380?text=1">
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="col-md-4">
                      <div class="card card-body">
                          <img class="img-fluid" src="http://placehold.it/380?text=2">
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="col-md-4">
                      <div class="card card-body">
                          <img class="img-fluid" src="http://placehold.it/380?text=3">
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="col-md-4">
                      <div class="card card-body">
                          <img class="img-fluid" src="http://placehold.it/380?text=4">
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="col-md-4">
                      <div class="card card-body">
                          <img class="img-fluid" src="http://placehold.it/380?text=5">
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="col-md-4">
                      <div class="card card-body">
                          <img class="img-fluid" src="http://placehold.it/380?text=6">
                      </div>
                  </div>
              </div>
          </div>
          <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
  </div>
  <h5 class="mt-2">Advances one slide at a time</h5>
</div>

</body>
</html>