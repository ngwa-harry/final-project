<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Welcome Admin</title>
        <link href="<?php echo $app_path; ?>admin/dist/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Seller Dashboard</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $app_path; ?>">Home</a>
                </li>
                <?php
                // Check if user is logged in and
                // display appropriate account links
                $account_url = $app_path . 'admin/account';
                $logout_url = $account_url . '?action=logout';
                if (isset($_SESSION['admin'])) :
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?php echo $_SESSION['admin']['firstName']?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?php echo $app_path; ?>admin/account">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo $logout_url; ?>">Logout</a>
                    </div>
                </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $account_url; ?>">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Users</div>
                            <a class="nav-link" href="<?php echo $app_path; ?>admin/product">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Product Manager
                            </a>
                            <a class="nav-link" href="<?php echo $app_path; ?>admin/category">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Category Manager
                            </a>
                            <a class="nav-link" href="<?php echo $app_path; ?>admin/orders">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Order Manager
                            </a>
                            <a class="nav-link" href="<?php echo $app_path; ?>admin/account">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Account Manager
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Name Here
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
