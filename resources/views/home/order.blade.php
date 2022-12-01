<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/crown gold.svg" type="">
      <title>Irish Gown Rentals</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

      <style type="text/css">

        .center
        {
            margin: auto;
            width: 70%;
            padding: 30px;
            text-align: center;
        }

        table,th,td
        {
            border: 1px solid black;
        }

        .th_des

        {
            padding: 10px;
            background-color: skyblue;
            font-size: 20px;
            font-weight: bold;
        }

      </style>

   </head>
   <body>


         <!-- header section strats -->
        @include('home.header')

        <div class="center d-flex justify-content-center">

            <table >

                <tr>

                    <th class="th_des">Product Title</th>

                    <th class="th_des">Quantity</th>

                    <th class="th_des">Price</th>

                    <th class="th_des">Payment Status</th>

                    <th class="th_des">Delivery Status</th>

                    <th class="th_des">Image</th>

                    <th class="th_des">Cancel Order</th>

                </tr>

                @foreach($order as $order)

                <tr>

                    <td>{{ $order->product_title }}</td>

                    <td>{{ $order->quantity }}</td>

                    <td>{{ $order->price }}</td>

                    <td>{{ $order->payment_status }}</td>

                    <td>{{ $order->delivery_status }}</td>

                    <td>

                        <img height="100" width="180" src="product/{{$order->image}}" alt="">

                    </td>

                    <td>

                        @if($order->delivery_status=='processing')

                        <a href="{{url('cancel_order',$order->id)}}" onclick="return confirm('Are you sure you want to cancel this order?')" class="btn btn-danger">Cancel Order</a>

                        @else

                        <p class="text-info">not allowed</p>

                        @endif

                    </td>
                    

                </tr>

                @endforeach

            </table>

        </div>



       


      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
   @include('home.footer')
</html>




