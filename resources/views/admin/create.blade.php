<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Contact Form</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
        <script>
            function toggleTheme() {
                const body = document.body;
                body.classList.toggle("dark-mode");
            }
        </script>
        <style>
            /* Dark Mode Styles */
            .dark-mode {
                background-color: #121212;
                color: #fff;
            }

            .dark-mode .form-control {
                background-color: #333;
                color: white;
                border: 1px solid #555;
            }

            .dark-mode .form-control::placeholder {
                color: #bbb;
            }

            .dark-mode .btn-dark {
                background-color: #fff;
                color: #121212;
            }
        </style>
    </head>

    <body>

        <div class="container mt-5">
            <!-- Dark Mode Toggle -->
            <div class="text-end mb-3">
                <button class="btn btn-secondary" onclick="toggleTheme()">
                    <i id="theme-icon" class="bi bi-moon"></i>
                </button>
            </div>

            <!-- Contact Form -->
            <div class="card p-4 shadow">
                <h2 class="text-center">Create Product</h2>
                <form action="{{ url('admin/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control 
                        @if ($errors->has('name')) {{ 'is-invalid' }} @endif"
                            id="name" placeholder="Enter your name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                        @endif
                    </div>


                    <div class="mb-3">
                        <label for="name" class="form-label">Description</label>
                        <input type="text" name="description"
                            class="form-control
                        @if ($errors->has('description')) {{ 'is-invalid' }} @endif
                        "
                            id="name" placeholder="Enter your name" value="{{ old('description') }}">
                        @if ($errors->has('description'))
                            <div class="invalid-feedback">
                                {{ $errors->first('description') }}
                        @endif

                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Image</label>
                        <input type="file" name="image"
                            class="form-control
                        @if ($errors->has('image')) {{ 'is-invalid' }} @endif
                        "
                            id="name" placeholder="Enter your name" value="{{ old('image') }}">
                        @if ($errors->has('image'))
                            <div class="invalid-feedback">
                                {{ $errors->first('image') }}
                        @endif

                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Intelligence</label>
                        <input type="text" name="intelligence"
                            class="form-control
                        @if ($errors->has('intelligence')) {{ 'is-invalid' }} @endif
                        "
                            id="name" placeholder="Enter your name" value="{{ old('intelligence') }}">
                        @if ($errors->has('intelligence'))
                            <div class="invalid-feedback">
                                {{ $errors->first('intelligence') }}
                        @endif

                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Chip</label>
                        <input type="text" name="chip"
                            class="form-control
                        @if ($errors->has('chip')) {{ 'is-invalid' }} @endif
                        "
                            id="name" placeholder="Enter your name" value="{{ old('chip') }}">
                        @if ($errors->has('chip'))
                            <div class="invalid-feedback">
                                {{ $errors->first('chip') }}
                        @endif

                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Camera</label>
                        <input type="text" name="camera"
                            class="form-control
                        @if ($errors->has('camera')) {{ 'is-invalid' }} @endif
                        "
                            id="name" placeholder="Enter your name" value="{{ old('camera') }}">
                        @if ($errors->has('camera'))
                            <div class="invalid-feedback">
                                {{ $errors->first('camera') }}
                        @endif

                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>



</body>

</html>
