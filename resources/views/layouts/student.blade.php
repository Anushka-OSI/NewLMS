<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
        integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    /* Form Styling */
    .form-container {
        width: 50%;
        background: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        margin-top: 80px;
        margin-bottom: 50px;
        margin-left: 25%;
        transition: all 0.3s ease;
    }

    .form-container:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .form-container h2 {
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: 600;
        color: #333;
        text-align: center;
    }

    .form-container .form-group {
        margin-bottom: 20px;
    }

    .form-container label {
        font-size: 14px;
        font-weight: 500;
        color: #444;
    }

    .form-container .form-control {
        border-radius: 8px;
        padding: 12px 15px;
        font-size: 14px;
        border: 1px solid #ddd;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .form-container .form-control:focus {
        border-color: #ff6b6b;
        box-shadow: 0 0 8px rgba(255, 107, 107, 0.4);
    }

    /* Input Submit Button Styling */
    .form-container input[type="submit"] {
        background-color: #ff6b6b;
        color: #fff;
        border: none;
        padding: 14px;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
        margin-top: 20px;
    }

    .form-container input[type="submit"]:hover {
        background-color: #e75a5a;
    }

    /* Title and Logo Styling */
    .page-title {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-bottom: 20px;
    }

    .page-title h1 {
        font-size: 28px;
        margin-left: 10px;
        color: #333;
        font-weight: 600;
    }

    .page-title img {
        width: 50px;
        height: auto;
    }

    /* Sidebar Link Styling */
    #sidebar .components li a {
        text-decoration: none;
        /* Removes underline */
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
        .sidebar {
            width: 200px;
        }

        .header-bar {
            left: 200px;
            width: calc(100% - 200px);
        }

        .form-container {
            margin-left: 200px;
            width: 90%;
        }

        .page-title h1 {
            font-size: 22px;
        }
    }
</style>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" style="position: fixed; top: 0; left: 0; height: 100%; width: 250px; overflow-y: auto;">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-3"
                    style="background-image: url({{ asset('Images/petcLogo.png') }});">
                </a>
                <ul class="list-unstyled components mb-3">
                    <li><a href="/studentDash"><i class="bi bi-house-door"></i>Dashboard</a></li>
                    <li><a href="/studentDashCourses"><i class="bi bi-book"></i>Courses</a></li>
                    <li><a href="/studentDashNotice"><i class="bi bi-pencil"></i>Notice</a></li>
                    <li><a href="#"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
                </ul>

                <div class="footer">
                    <p>PETC 2024 | by ChathuminiKKG</p>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="content" class="p-4 p-md-5" style="margin-left: 260px;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto ">
                            <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>

                            <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Content Section -->
            @yield('content')
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
