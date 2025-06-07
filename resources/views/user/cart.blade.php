
    


    <!DOCTYPE html>
<html lang="en">


 <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Watch - Apple (IN)</title>
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

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Table</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

        <script>
            function toggleTheme() {
                const body = document.body;
                const icon = document.getElementById("theme-icon");

                body.classList.toggle("dark-mode");

                // Change icon based on mode
                if (body.classList.contains("dark-mode")) {
                    icon.classList.remove("bi-moon");
                    icon.classList.add("bi-sun");
                } else {
                    icon.classList.remove("bi-sun");
                    icon.classList.add("bi-moon");
                }
            }



            function deleteUser(index) {
                let confirmDelete = confirm("Are you sure you want to delete this user?");
                if (confirmDelete) {
                    document.getElementById("user-row-" + index).remove();
                }
            }
        </script>

        <style>
            /* Dark Mode Styling */
            .dark-mode {
                background-color: #121212;
                color: white;
            }

            .dark-mode .table {
                background-color: #222;
                color: white;
            }

            .dark-mode .table th,
            .dark-mode .table td {
                border-color: #444;
            }

            .dark-mode .table-dark {
                background-color: #333;
            }

            .dark-mode .btn {
                border-color: white;
            }
        </style>
    </head>
<body>


   

    
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
                        <a class="nav-link" href="mac.html">Mac</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ipad.html">ipad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iphone.html">iphone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="watch.html">Watch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="airpods.html">Airpods</a>
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
               
            </div>
        </div>
    </nav>
        <div class="container mt-4">
            <!-- Dark/Light Mode Toggle Button -->
            <div class="text-end">
                <button class="btn btn-secondary" onclick="toggleTheme()">
                    <i id="theme-icon" class="bi bi-moon"></i>
                </button>
            </div>

            <h2 class="text-center">Checkout</h2>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Intelligence</th>
                            <th>Chip</th>
                            <th>Camera</th>
                            <th>Image</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $carts)
                        <tr id="user-row-1">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$carts->product->name}}</td>
                            <td>{{$carts->product->description}}</td>
                           <td>{{$carts->product->intelligence}}</td>
                            <td>{{$carts->product->chip}}</td>
                             <td>{{$carts->product->camera}}</td>
                             <td>
                                <img src="/images_products/{{$carts->product->image}}" width="60" height="60" >
                             </td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

</body>

</html>
