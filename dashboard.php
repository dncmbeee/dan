<?php 
session_start();

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCreatives</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/blackver.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">DCreatives</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Administrator
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Bookings
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Wedding</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Birthday</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Others</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-sliders pe-2"></i>
                            Settings
                        </a>
                        <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Option 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Option 2</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Option 3</a>
                            </li>
                        </ul>
                    </li>
                    
                   
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="images/gurl2.gif" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Setting</a>
                                <a href="logout.php" class="dropdown-item">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Administrator's Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0 bg-muted illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-0">
                                                <h4>Welcome back, Admin!</h4>
                                                <p class="mb-0">DCreatives Events</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <img src="images/eyes.gif" class="img-fluid illustration-img" 
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2">
                                                ₱ 5,908,090.00
                                            </h4>
                                            <p class="mb-2">
                                                Total Earnings
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me-2">
                                                    +19.0%
                                                </span>
                                                <span class="text-muted">
                                                    Since Last Year
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Table Element -->
                    <div class="card border-0">
                        <div class="card-header">
                            <h4 class="card-title">
                                Employees
                            </h4>
                            <h7 class="card-subtitle text-muted">
                               Track your employees' performance here.
                            </h7>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Employee's ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Kyla</td>
                                        <td>De Guzman</td>
                                        <td>123456</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cris</td>
                                        <td>Khun</td>
                                        <td>654321</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td> Larry the Bird</td>
                                        <td>Adarna</td>
                                        <td>198765</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Mae</td>
                                        <td>Montera</td>
                                        <td>999999</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>DCreatives</strong>
                                </a>
                            </p>
                        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>