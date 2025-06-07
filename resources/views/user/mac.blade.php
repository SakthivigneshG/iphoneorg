<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mac- Apple (IN)</title>
    <link rel="icon" type="image/x-icon" href="/images/lllogo.png">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
            <video src="images/store/mac.mp4" class=" vid object-fit-scale" autoplay loop muted></video>

        </div>
    </div>
    </div>


    <!-- end caros -->

    <!-- card -->
    <section class="cardproducts">
        <div class=" con container-lg">
            <div class="card card1">

                <img src="images/store/es2.jpg" class="card-img-top" alt="...">
                <div class="top-left">
                    <h2>Apple Intelligence</h2>
                    <p>AI-opening possibilities.1</p>
                </div>

            </div>
            <div class="card card2">
                <img src="images/store/es5.jpg" class="card-img-top " alt="... ">
                <div class="top-left ">
                    <h2>Cutting-Edge Cameras</h2>
                    <p>Picture your best<br> photos and videos.</p>
                </div>
            </div>
            <div class="card card3 ">
                <img src="images/card1.jpg " class="card-img-top " alt="... ">
                <div class="top-left ">
                    <h2>Chip and Battery Life</h2>
                    <p>Fast that Lasts</p>
                </div>
            </div>
            <div class="card card4 ">
                <img src="images/card2.jpg" class="card-img-top " alt="... ">
                <div class="top-left ">
                    <h2>Customize Your Iphone</h2>
                    <p>Make it you.<br> Through and through.</p>
                </div>
            </div>

        </div>

        <!-- end card -->

        <!-- products -->

        <div class=" con1 container-lg ">
            <div class="heading ">
                <h1>Explore the line-up.</h1><br>
            </div>
            <div class="products ">
                <div class="card pcard1 ">
                    <img src="images/store/mac1.png " class="card-img-top pimg1 " alt="... ">
                    <div class="card-body ">
                        <h5 class="card-title ">MacBook Air 13” and 15”</h5>
                        <p class="card-text ">M4 chip</p>
                        <p class="card-text ">Strikingly thin and fast so you can work, play or create anywhere. From
                            ₹99900.00*</p>
                        <div class="logo1 ">
                            <img src="images/plogo1.png " width="50px ">

                        </div>
                        <div class="logop ">
                            <p>Apple Intelligence1</p>

                        </div>
                        <div class="apro ">
                            <img src="images/A18.png " width="50px "><br>
                        </div>
                        <div class="aprop ">
                            <p>A16 Bionic chip with 5-core GPU</p>

                        </div>
                        <div class="camera ">
                            <img src="images/camera.png " width="50px ">
                        </div>
                        <div class="camerap ">
                            <p>Camera Control</p>
                        </div>

                        <div class="camppara ">
                            <h3>4 ports</h3>
                            <p>2x Thunderbolt 4 (USB‑C),</p>
                            <p>headphone jack, MagSafe</p>

                        </div>
                        <div class="charge ">
                            <img src="images/charge.png " width="50px ">
                        </div>
                        <div class="chargep ">
                            <p>Up to 33 hours video playback3</p>
                        </div>
                        <button class="addcart">
                            <div class="default-btn">
                                <svg viewBox="0 0 24 24" width="20" height="20" stroke="#ffffff"
                                    stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    class="cart-icon">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <a href="{{ url('/cart') }}"> <span>Add to Cart</span></a>
                            </div>
                            <div class="hover-btn">
                                <svg viewBox="0 0 320 512" width="12.5" height="20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z"
                                        fill="#ffffff"></path>
                                </svg>
                                <span>1,899.25</span>
                            </div>
                        </button>
                    </div>
                </div>

                <div class="card pcard2 ">
                    <img src="images/store/mac2.png " class="card-img-top pimg2 " alt="... ">
                    <div class="card-body ">
                        <h5 class="card-title ">MacBook Pro 14” and 16”</h5>
                        <p class="card-text ">M4, M4 Pro or M4 </p>
                        <p class="card-text ">The most advanced Mac laptops for demanding workflows. From ₹169900.00*
                        </p>
                        <div class="logo2 ">
                            <img src="images/plogo1.png " width="50px ">

                        </div>
                        <div class="logop ">
                            <p>Apple Intelligence1</p>

                        </div>
                        <div class="apro ">
                            <img src="images/a18p.png " width="50px "><br>
                        </div>
                        <div class="aprop ">
                            <p>A16 Bionic chip with 5-core GPU</p>

                        </div>
                        <div class="camera ">
                            <img src="images/camera.png " width="50px ">
                        </div>
                        <div class="camerap ">
                            <p>Camera Control</p>
                        </div>

                        <div class="camppara ">
                            <h3>7 ports</h3>
                            <p>3x Thunderbolt 4 (USB‑C) or</p>
                            <p>3x Thunderbolt 5 (USB‑C), HDMI,</p>

                        </div>
                        <div class="charge2 ">
                            <img src="images/charge.png " width="50px ">

                        </div>
                        <div class="chargep ">
                            <p>Up to 27 hours video playback3</p>
                        </div>
                        <!-- From Uiverse.io by dldrs -->
                        <button class="addcart">
                            <div class="default-btn">
                                <svg viewBox="0 0 24 24" width="20" height="20" stroke="#ffffff"
                                    stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    class="cart-icon">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <a href="{{ url('/cart') }}"> <span>Add to Cart</span></a>
                            </div>
                            <div class="hover-btn">
                                <svg viewBox="0 0 320 512" width="12.5" height="20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z"
                                        fill="#ffffff"></path>
                                </svg>
                                <span>1,899.25</span>
                            </div>
                        </button>

                    </div>
                </div>


            </div>

            <!-- closer -->

            <div class="closer ">
                <h2>Why Apple is the best<br> place to buy Macbook.</h2>
            </div>
            <div class="closercard ">
                <div class="card closercard " style="width: 18rem; ">
                    <div class="card-body closerc ">
                        <img src="images/closer1.png " width="50px ">

                        <h5 class="card-title ">Save with Apple<br>Trade in.</h5>
                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>

                    </div>
                </div>
                <div class="card closercard " style="width: 18rem; ">
                    <div class="card-body closerc ">
                        <img src="images/closer2.png " width="50px ">

                        <h5 class="card-title ">Monthly payments<br> options Available</h5>
                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>

                    </div>
                </div>
                <div class="card closercard " style="width: 18rem; ">
                    <div class="card-body closerc ">
                        <img src="images/closer3.png " width="50px ">

                        <h5 class="card-title ">Get flexible delivery and easy pickup</h5>
                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>

                    </div>
                </div>
                <div class="card closercard " style="width: 18rem; ">
                    <div class="card-body closerc ">
                        <img src="images/closer1.png " width="50px ">
                        <h5 class="card-title ">Shop one-to-one with a specilaist</h5>
                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- essentials -->
    <div class="essen ">
        <h2>iPhone essentials.</h2>
    </div>
    <div class="esscard ">
        <div class="card cardes1 ">
            <div class="card-body ">
                <h5 class=" car card-title ">Mac Accessories</h5>
                <p class="pcar card-text ">Explore colourful cases, USB‑C power adapters, MagSafe accessories and
                    more..</p>
                <a href="# " class="card-link ">Shop Mac Accessories</a>
                <img src="images/store/maca.jpg">
            </div>
        </div>
        <div class="card cardes2 ">
            <div class="card-body ">
                <h5 class="car1 card-title ">Studio Display</h5>
                <p class="pcar1 card-text ">Attach one to your keys. Put another in your backpack. If they’re
                    misplaced, just use the Find My app</p>
                <a href="# " class="card-link ">Buy</a>
                <img src="images/store/macb.jpg">
            </div>
        </div>
    </div>

    <!-- footer -->

    <div class=" foo container-fluid ">
        <h2>iPhone</h2><br>

        <div class="footer ">

            <div class="col footer1 ">
                <h4 class="foos ">Explore Mac</h4>

                <h1 class="fooh ">Macbook Air</h1>
                <h1 class="fooh ">Macbook Pro</h1>
                <h1 class="fooh ">Macbook Mini</h1>
                <h1 class="fooh ">Macbook Studio</h1>
            </div>
            <div class="col footer1 ">
                <h4 class="foos ">Shop Mac</h4>
                <h1 class="foot "> Shop Mac</h1>
                <h1 class="foot ">Mac Accessories</h1>
                <h1 class="foot ">Way to buy</h1>

                <h1 class="foot ">Ways to Buy</h1>

            </div>
            <div class="col footer1 ">
                <h4 class="foos ">More from Mac</h4>
                <h1 class="foor ">Mac Support</h1>
                <h1 class="foor ">Apple care+ Mac/h1>
                    <h1 class="foor ">mac os sequoia</h1>
                    <h1 class="foor ">Apple Inteeligence</h1>
                    <h1 class="foor ">Apps by Apple </h1>
                    <h1 class="foor ">icloud+</h1>
                    <h1 class="foor ">Wallet</h1>
                    <h1 class="foor ">Education</h1>
            </div>
        </div>
        <div class="coyright ">
            <p>Copyright © 2025 Apple Inc. All rights reserved.</p>
        </div>

    </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js "
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js "
        integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+ " crossorigin="anonymous ">
    </script>
</body>

</html>
