@extends('index')
@section('body')
{{-- @dump(Auth::user()) --}}
    <div class="">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 slider-img" src="{{ asset('images/logo.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Heading</h5>
                    <p>Details</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 slider-img" src="{{ asset('images/logo.jpg') }}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Heading</h5>
                    <p>Details</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 slider-img" src="{{ asset('images/logo.jpg') }}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Heading</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, quia minima fugit assumenda accusantium deserunt nostrum voluptas laborum, saepe alias voluptatibus placeat et facilis quos ratione quas doloremque? Ut, nisi?</p>
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
    </div>

    <div class="container footer">       
      <div class="d-flex justify-content-between">
        <div class="p-1">            
        </div>

        <div class="p-1">
          <form class="form-inline my-2 my-lg-0">
            <div class="d-flex align-items-center small">
              <input type="text" class="form-control py-4" placeholder="Search..." style="padding-left: 38px;"/>
              <button class="btn btn-dark"><i class="bi bi-search"></i></button>
            </div>
          </form>
        </div>
        
        <div class="p-1">              
        </div>          
      </div>
        
      <div class="row">
        <div class="col-md-2">
          <span class="main-head">New Arrivals &nbsp;</span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="flex">
            <div>
              <img class="product-img" src="{{ asset('images/logo.jpg') }}" alt="First slide">
            </div>
            <div class="div-2">
              <div class="product-name">Product Name</div>
              <div class="product-des">Product Details Here</div>
              <div class="product-price">$ 1000</div>
              <button class="btn btn-dark" onclick="addToCart()">Add to Cart</button>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="flex">
            <div>
              <img class="product-img" src="{{ asset('images/logo.jpg') }}" alt="First slide">
            </div>
            <div class="div-2">
              <div class="product-name">Product Name</div>
              <div class="product-des">Product Details Here</div>
              <div class="product-price">$ 1000</div>
              <button class="btn btn-dark">Add to Cart</button>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="flex">
            <div>
              <img class="product-img" src="{{ asset('images/logo.jpg') }}" alt="First slide">
            </div>
            <div class="div-2">
              <div class="product-name">Product Name</div>
              <div class="product-des">Product Details Here</div>
              <div class="product-price">$ 1000</div>
              <button class="btn btn-dark">Add to Cart</button>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="flex">
            <div>
              <img class="product-img" src="{{ asset('images/logo.jpg') }}" alt="First slide">
            </div>
            <div class="div-2">
              <div class="product-name">Product Name</div>
              <div class="product-des">Product Details Here</div>
              <div class="product-price">$ 1000</div>
              <button class="btn btn-dark">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="flex">
            <div>
              <img class="product-img" src="{{ asset('images/logo.jpg') }}" alt="First slide">
            </div>
            <div class="div-2">
              <div class="product-name">Product Name</div>
              <div class="product-des">Product Details Here</div>
              <div class="product-price">$ 1000</div>
              <button class="btn btn-dark">Add to Cart</button>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="flex">
            <div>
              <img class="product-img" src="{{ asset('images/logo.jpg') }}" alt="First slide">
            </div>
            <div class="div-2">
              <div class="product-name">Product Name</div>
              <div class="product-des">Product Details Here</div>
              <div class="product-price">$ 1000</div>
              <button class="btn btn-dark">Add to Cart</button>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="flex">
            <div>
              <img class="product-img" src="{{ asset('images/logo.jpg') }}" alt="First slide">
            </div>
            <div class="div-2">
              <div class="product-name">Product Name</div>
              <div class="product-des">Product Details Here</div>
              <div class="product-price">$ 1000</div>
              <button class="btn btn-dark">Add to Cart</button>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="flex">
            <div>
              <img class="product-img" src="{{ asset('images/logo.jpg') }}" alt="First slide">
            </div>
            <div class="div-2">
              <div class="product-name">Product Name</div>
              <div class="product-des">Product Details Here</div>
              <div class="product-price">$ 1000</div>
              <button class="btn btn-dark">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>

    </div>

  <script src="{{asset('js/index.js')}}"></script>
@endsection
