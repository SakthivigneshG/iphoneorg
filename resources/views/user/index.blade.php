<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone-Apple (IN)</title>
    <!-- boostrap -->
    <link rel="icon" type="image/x-icon" href="/images/lllogo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=FAMILY_NAME:wght@WEIGHT_OR_RANGE&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <!-- navbar -->
    <nav class="frnav navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="light">
        <div class="fnav container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/prlogo.png" height="28px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="ncon navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="Store" href="#">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/mac') }}">Mac</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/ipad') }}">ipad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">iphone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/watch') }}">Watch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/airpods') }}">Airpods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Tv">Tv & Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Entertainment">Entertainment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Accessories">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Support">Support</a>
                    </li>
                </ul>
                <div class="nicon">
                    <ul class="nuicon">
                        <li><i class='bx bx-search bx-sm'></i></li>
                        <li><i class='bx bx-cart bx-sm'></i></li>
                        @if (Route::has('login'))
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                       

                                    <input type="submit" value="logout">
                                </form>
                            @else
                                <li class="btlist"> <a href="{{ route('login') }}">
                                        <i class='bx bx-user bx-sm'></i>

                                </li>
                            @endauth
                            @endif

                    </ul>
                </div>
                
            </div>
        </div>
    </nav>

    <!-- navbar end -->

    <!-- caros -->
    <div class="carousel-inner caro">
        <div class="caro1 carousel-item active">
            <video src="images/iphone vid.mp4" class=" vid object-fit-scale" autoplay loop muted></video>

        </div>
    </div>
    </div>


    <!-- end caros -->

    <!-- card -->
    <section class="cardproducts">
        <div class=" con container-lg">
            <div class="card card1">

                <img src="images/card1.jpg" class="card-img-top" alt="...">
                <div class="top-left">
                    <h2>Apple Intelligence</h2>
                    <p>AI-opening possibilities.1</p>
                </div>

            </div>
            <div class="card card2">
                <img src="images/card2.jpg" class="card-img-top" alt="...">
                <div class="top-left">
                    <h2>Cutting-Edge Cameras</h2>
                    <p>Picture your best<br> photos and videos.</p>
                </div>
            </div>
            <div class="card card3">
                <img src="images/card3.jpg" class="card-img-top" alt="...">
                <div class="top-left">
                    <h2>Chip and Battery Life</h2>
                    <p>Fast that Lasts</p>
                </div>
            </div>
            <div class="card card4">
                <img src="images/card4a.jpg" class="card-img-top" alt="...">
                <div class="top-left">
                    <h2>Customize Your Iphone</h2>
                    <p>Make it you.<br> Through and through.</p>
                </div>
            </div>

        </div>

        <!-- end card -->

        <!-- products -->

        <div class=" con1 container-lg">
            <div class="heading">
                <h1>Explore the line-up.</h1><br>
            </div>
            <div class="products">
                <div class="card pcard1">
                    <img src="images/P001.png" class="card-img-top pimg1" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">iPhone 16Pro</h5>
                        <p class="card-text">The ultimate iPhone.</p>
                        <p class="card-text">From ₹119900.00* <br>or ₹9825.00/mo. for 12 mo.‡</p>
                        <div class="logo1">
                            <img src="images/plogo1.png" width="50px">

                        </div>
                        <div class="logop">
                            <p>Apple Intelligence1</p>

                        </div>
                        <div class="apro">
                            <img src="images/A18.png" width="50px"><br>
                        </div>
                        <div class="aprop">
                            <p>A16 Bionic chip with 5-core GPU</p>

                        </div>
                        <div class="camera">
                            <img src="images/camera.png" width="50px">
                        </div>
                        <div class="camerap">
                            <p>Camera Control</p>
                        </div>
                        <div class="camp">
                            <img src="images/camp1.png" width="50px">
                        </div>
                        <div class="camppara">
                            <p>Pro camera system</p>
                            <p>Our most advanced 48MP Fusion camera</p>
                            <p>5x Telephoto camera</p>
                            <p>48MP Ultra Wide camera</p>
                            <p>Visual intelligence, to learn about your surroundings11</p>
                        </div>
                        
                        
                        <div class="chargep">
                            <p>Up to 33 hours video playback3</p>
                        </div>

                         
                        <input type="button" class="btn btn-success"><a href="{{url('/cart')}}">Add to Cart</a></button>
                            
                        
                        
                    </div>
                </div>

                <div class="card pcard2">
                    <img src="images/P002.png" class="card-img-top pimg2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">iPhone 16</h5>
                        <p class="card-text">A total powerhouse.</p>
                        <p class="card-text">From ₹119900.00* <br>or ₹9825.00/mo. for 12 mo.‡</p>
                        <div class="logo2">
                            <img src="images/plogo1.png" width="50px">

                        </div>
                        <div class="logop">
                            <p>Apple Intelligence1</p>

                        </div>
                        <div class="apro">
                            <img src="images/a18p.png" width="50px"><br>
                        </div>
                        <div class="aprop">
                            <p>A16 Bionic chip with 5-core GPU</p>

                        </div>
                        <div class="camera">
                            <img src="images/camera.png" width="50px">
                        </div>
                        <div class="camerap">
                            <p>Camera Control</p>
                        </div>
                        <div class="camp">
                            <img src="images/camp2.png" width="50px">
                        </div>
                        <div class="camppara">
                            <p>Advanced dual-camera system</p>
                            <p>48MP Fusion camera</p>
                            <p>2x Telephoto</p>
                            <p>12MP Ultra Wide camera</p>
                            <p>Visual intelligence, to learn about your surroundings11</p>
                        </div>
                        <div class="charge2">
                            <img src="images/charge.png " width="50px">

                        </div>
                        <div class="chargep">
                            <p>Up to 27 hours video playback3</p>
                        </div>
                    </div>
                </div>

                <div class="card pcard3">
                    <img src="images/P003.png" class="card-img-top pimg3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">iPhone 16e</h5>
                        <p class="card-text">Latest iPhone. Greatest price.</p>
                        <p class="card-text">From ₹119900.00* <br>or ₹9825.00/mo. for 12 mo.‡</p>
                        <div class="logo3">
                            <img src="images/plogo1.png" width="50px">
                        </div>
                        <div class="logop">
                            <p>Apple Intelligence1</p>

                        </div>
                        <div class="apro">
                            <img src="images/a18p.png" width="50px"><br>
                        </div>
                        <div class="aprop">
                            <p>A16 Bionic chip with 5-core GPU</p>

                        </div>

                        <div class="camp3">
                            <img src="images/camp3.png" width="50px">
                        </div>
                        <div class="camppara">
                            <p>2‑in‑1 camera system</p>
                            <p>48MP Fusion camera</p>
                            <p>2x Telephoto</p>
                            <p>-</p>
                            <p>Visual intelligence, to learn about your surroundings11</p>
                        </div>
                        <div class="charge3">
                            <img src="images/charge.png " width="50px">
                        </div>
                        <div class="chargep">
                            <p>Up to 26 hours video playback3</p>
                        </div>

                    </div>
                </div>

                <div class="card pcard4">


                    <img src="images/P004.png" class="card-img-top pimg4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">iPhone 15</h5>
                        <p class="card-text">The ultimate iPhone.</p>
                        <p class="card-text">From ₹119900.00* <br>or ₹9825.00/mo. for 12 mo.‡</p>


                        <div class="aprop1">
                            <img src="images/a16p.png" width="50px"><br>
                        </div>
                        <div class="apropp">
                            <p>A16 Bionic chip with 5-core GPU</p>
                        </div>
                        <div class="camp4">
                            <img src="images/camp2.png" width="50px">
                        </div>
                        <div class="camppara">
                            <p>Dual-camera system</p>
                            <p>48MP Main camera</p>
                            <p>2x Telephoto</p>
                            <p>Ultra Wide camera</p>
                            <p>-</p>
                        </div>
                        <div class="charge4">
                            <img src="images/charge.png " width="50px">
                        </div>
                        <div class="chargep">
                            <p>Up to 26 hours video playback3</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- closer -->

            <div class="closer">
                <h2>Why Apple is the best<br> place to buy iPhone.</h2>
            </div>
            <div class="closercard">
                <div class="card closercard" style="width: 18rem;">
                    <div class="card-body closerc">
                        <img src="images/closer1.png" width="50px">

                        <h5 class="card-title">Save with Apple<br>Trade in.</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>

                    </div>
                </div>
                <div class="card closercard" style="width: 18rem;">
                    <div class="card-body closerc">
                        <img src="images/closer2.png" width="50px">

                        <h5 class="card-title">Monthly payments<br> options Available</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>

                    </div>
                </div>
                <div class="card closercard" style="width: 18rem;">
                    <div class="card-body closerc">
                        <img src="images/closer3.png" width="50px">

                        <h5 class="card-title">Get flexible delivery and easy pickup</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>

                    </div>
                </div>
                <div class="card closercard" style="width: 18rem;">
                    <div class="card-body closerc">
                        <img src="images/closer1.png" width="50px">
                        <h5 class="card-title">Shop one-to-one with a specilaist</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- essentials -->
    <div class="essen">
        <h2>iPhone essentials.</h2>
    </div>
    <div class="esscard">
        <div class="card cardes1">
            <div class="card-body">
                <h5 class=" car card-title">iPhone accessories</h5>
                <p class="pcar card-text">Explore colourful cases, USB‑C power adapters, MagSafe accessories and more..
                </p>
                <a href="#" class="card-link">Shop iPhone Accessories</a>
                <img src="images/ess1.jpg">
            </div>
        </div>
        <div class="card cardes2">
            <div class="card-body">
                <h5 class="car1 card-title">Airtag</h5>
                <p class="pcar1 card-text">Attach one to your keys. Put another in your backpack. If they’re misplaced,
                    just use the Find My app</p>
                <a href="#" class="card-link">Buy</a>
                <img src="images/ess2.jpg">
            </div>
        </div>
    </div>

    <!-- footer -->

    <div class=" foo container-fluid">
        <h2>iPhone</h2><br>

        <div class="footer">

            <div class="col footer1">
                <h4 class="foos">Explore iPhone</h4>

                <h1 class="fooh">iPhone 16 Pro</h1>
                <h1 class="fooh">iPhone 16</h1>
                <h1 class="fooh">iPhone 16e</h1>
                <h1 class="fooh">iPhone 16</h1>
            </div>
            <div class="col footer1">
                <h4 class="foos">Shop iPhone</h4>
                <h1 class="foot">Shop iPhone</h1>
                <h1 class="foot">iPhone Accessories</h1>
                <h1 class="foot">Apple Trade In</h1>
                <h1 class="foot">Ways to Buy</h1>

            </div>
            <div class="col footer1">
                <h4 class="foos">More from iPhone</h4>
                <h1 class="foor">iPhone Support</h1>
                <h1 class="foor">Apple care+ iPhones/h1>
                    <h1 class="foor">ios 18</h1>
                    <h1 class="foor">Apple Inteeligence</h1>
                    <h1 class="foor">Apps by Apple </h1>
                    <h1 class="foor">Iphone Privacy</h1>
                    <h1 class="foor">icloud+</h1>
                    <h1 class="foor">Wallet</h1>
                    <h1 class="foor">Sri</h1>
            </div>
        </div>
        <div class="coyright">
            <p>Copyright © 2025 Apple Inc. All rights reserved.</p>
        </div>

    </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"
        integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous">
    </script>
</body>

</html>
