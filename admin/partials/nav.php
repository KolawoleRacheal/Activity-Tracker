<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:beige;">
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="bx bxs-dashboard"></i>
                </button>
                <div class="sidebar-logo">
                <span><a href="dashboard.php">Rayfit</a></span>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <!-- <i class="bx bxs-smile"></i> -->
                        <span><a href="users.php">Users</a></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class=""></i>
                        <span><a href="">Goals</a></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <!-- <i class="bx bxs-run"></i> -->
                        <span><a href="sleep.php">Sleep</a></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <!-- <i class="bx bxs-nofication"></i> -->
                        <span><a href="exercise.php">Exercise</a></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <!-- <i class="bx bxs-cog"></i> -->
                        <span><a href="meal.php">Meal</a></span>
                    </a>
                </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <!-- <i class="bx bxs-log-out-circle"></i> -->
                    <span><a href="admin.php">Logout</a></span>
                </a>
            </li>
            </ul>    
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">

                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="account.png" class="avatar img-fluid" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded">

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
