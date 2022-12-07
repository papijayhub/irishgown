<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <!-- For IE -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- For Resposive Device -->
	   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

      <title>Service</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
      <!-- Main style sheet -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/cssservice/servicesstyle.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('home/cssservice/bootstrap.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('home/cssservice/owl.theme.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('home/cssservice/owl.carousel.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('home/cssservice/font-awesome.min.css.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('home/cssservice/responsive.css')}}">
      {{-- <link rel="stylesheet" type="text/css" href="{{asset('home/cssservice/modalcss.css')}}"> --}}
   </head>
   @include('home.header')
   <body class="home">
      <div class="main-page-wrapper">
         <!-- 
            =============================================
            	Service Section
            ============================================== 
            -->
         <section class="service-style-one">
            <div id="particles-js"></div>
            <div class="container" style="height: 600px;">
               <div class="theme-title text-center">
                  <h2>Our Service</h2>
                  <p>Lorem ipsum dolor sit amet, vix an natum labitur eleifend mel amet</p>
               </div>
               <!-- /.theme-title -->
               <div class="row">
                  <div class="service-slider">
                     <div class="item">
                        <div class="single-service tran3s">
                           <div>
                              <i class="flaticon-charttwo"></i>
                              <span>Feature One</span>
                              <h5><a href="service-details.html" class="tran3s">Financial Advise</a></h5>
                           </div>
                           <p>The kit consists more than hundred of ready to use elements that combine to get the exact prototype want.</p>
                        </div>
                        <!-- /.single-service -->
                     </div>
                     <!-- /.item -->
                     <div class="item">
                        <div class="single-service tran3s">
                           <div>
                              <i class="flaticon-globe"></i>
                              <span>Feature One</span>
                              <h5><a href="service-details.html" class="tran3s">Market Analyzing</a></h5>
                           </div>
                           <p>The kit consists more than hundred of ready to use elements that combine to get the exact prototype want.</p>
                        </div>
                        <!-- /.single-service -->
                     </div>
                     <!-- /.item -->
                     <div class="item">
                        <div class="single-service tran3s">
                           <div>
                              <i class="flaticon-dollar"></i>
                              <span>Feature One</span>
                              <h5><a href="service-details.html" class="tran3s">Investmant Plaing</a></h5>
                           </div>
                           <p>The kit consists more than hundred of ready to use elements that combine to get the exact prototype want.</p>
                        </div>
                        <!-- /.single-service -->
                     </div>
                     <!-- /.item -->
                  </div>
                  <!-- /.service-silder -->

                  <div class="theme-title">
               <a href="service.html" class="theme-button">SEE ALL SERVICEs</a>
                  </div>

               </div>
               <!-- /.row -->
               {{-- <a href="service.html" class="theme-button">SEE ALL SERVICEs</a> --}}
            </div>
            <!-- /.container -->
         </section>
         <!-- /.service-style-one -->
         <script src="{{asset('home/jsservice/jquery.2.2.3.min.js')}}"></script>
         <script src="{{asset('home/jsservice/bootstrap.min.js')}}"></script>
         <script src="{{asset('home/jsservice/owl.carousel.min.js')}}"></script>
         <script src="{{asset('home/jsservice/js.js')}}"></script>

      </div>
      <!-- /.main-page-wrapper -->
   </body>
</html>