<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      {{-- <base href="/public"> --}}
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{asset('images/crown gold.svg')}}" type="">
      <title>Irish Gowns</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>
      
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         

      <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width:50%; padding:30px;">
         <div>
            <a class="d-flex justify-content-end" style="color: black" href="/"><h2>Back</h2></a>
         </div>
               <div class="img-box" style="padding: 20px;">
                  <img style="height: 600px; margin: auto"class="d-flex justify-content-center" src="/product/{{$product->image}}" alt="">
               </div>
               <div class="detail-box text-center">
                     <h5 class="text-center">
                        {{$product->title}}
                     </h5>
   
                     @if($product->discount_price!=null)
   
                     <h6 style="color:red;" class="text-center">
                        Discount price <br>
                        ₱{{$product->discount_price}}
                     </h6>
   
                     <h6 style="text-decoration: line-through; color: blue;">
                     Price <br>
                        ₱{{$product->price}}
                     </h6>
   
                     @else
   
                     <h6 style="color:blue">
                     Price <br>
                     ₱{{$product->price}}
                     </h6>
   
                     @endif
   
                     <h6>Product Category : {{$product->category}}</h6>
   
                     <h6>Product Details : {{$product->description}}</h6>
   
                     <h6>Available Quantity : {{$product->quantity}}</h6>
   
                     <form action="{{url('add_cart',$product->id)}}" method="Post">
   
                        @csrf
   
                        <div class="row d-flex justify-content-center">
   
                           <div class="col-md-5">
                           <input type="number" name="quantity" value="1" min="1" style="width: 100px">
                           </div>
   
                           <div class="col-md-5">
                           <input type="submit" value="Add Reservation">
                           </div>
   
   
                        </div>
   
                     </form>

               </div>
            </div>
         </div>

      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      
      
      <!-- jQery -->
      <script src="{{asset('home/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{asset('home/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('home/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('home/js/custom.js')}}"></script>
   </body>
</html>