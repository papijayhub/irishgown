<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/serviceso.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" /> --}}
    <!-- CSS only -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.44.1/css/bootstrap.min.css">
</head>
<body>
    @include('home.header')
    <div class="serviceso">
        <h1>Our Service</h1>
        <div class="contento">
            <div class="scards">

                <div class="scard">
                    <div class="sbox">
                        <i class="fas fa-chart-line"></i>
                        <h3>Digital Marketing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <a href="#">Learn More</a>
                        </div>
                    </div>

                <div class="scard">
                    <div class="sbox">
                        <i class="fas fa-code"></i>
                        <h3>Web Development</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <a href="#">Learn More</a>
                        </div>
                    </div>

                <div class="scard">
                    <div class="sbox">
                        <i class="fas fa-paint-brush"></i>
                        <h3>Web Development</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <a href="#">Learn More</a>
                        </div>
                    </div>

            </div>
        </div>
        <div class="pangbuton">
            
            <div class="collapse" id="colapo">
                lorem ipsum dolor sanctum dyos color
            </div>
            <button class="btn btn-primary" data-toggle="collapse" data-target="#colapo">Collapsekie</button>
        </div>





        
    </div>
</body>
</html>