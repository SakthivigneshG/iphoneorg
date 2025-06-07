<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!DOCTYPE html>
    <html lang="en">

    <head>
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

        <div class="container mt-4">
            <!-- Dark/Light Mode Toggle Button -->
            <div class="text-end">
                <button class="btn btn-secondary" onclick="toggleTheme()">
                    <i id="theme-icon" class="bi bi-moon"></i>
                </button>
            </div>

            <h2 class="text-center">Products Management</h2>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Intelligence</th>
                            <th>Chip</th>
                            <th>Camera</th>
                            <th>Actions</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr id="user-row-1">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <img src="/images_products/{{$product->image}}" width="70" height="70" >

                                </td>
                                <td>{{ $product->intelligence }}</td>
                                <td>{{ $product->chip }}</td>
                                <td>{{ $product->camera }}</td>


                                <td>
                                    <a href="{{ url('edit-products') }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ url('delete-products') }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>
                <a href="{{ url('admin/create/mac') }}" class="btn btn-info btn-sm">Create Products</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>
        </div>


        <!-- #region -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
