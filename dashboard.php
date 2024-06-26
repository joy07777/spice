<?php 
session_start();

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit;
}

include("header.php");

$page_title= "Dashboard";
?>
<!DOCTYPE html> 
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Admin Dashboard</title>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css">
  <style>
    .profile-link {
      color: white; /* Set the color to white */
      text-decoration: none; /* Remove the underline */
    }

    .search-container {
      display: flex;
      align-items: center;
    }

    .search-input {
      border: none;
      border-bottom: 1px solid #ccc;
      padding: 10px; /* Increased padding */
      margin-left: 5px;
      background-color: #2c3e50; /* Match the background color of the dashboard */
      color: white;
      width: 450px;
    }

    .search-input::placeholder {
      color: white; /* Set placeholder text color to white */
    }
  </style>
</head>
<body>
  <div class="grid-container">

    <header class="header">
      <div class="menu-icon" onclick="openSidebar()">
        <span class="material-icons-outlined">menu</span>
      </div>
      <div class="header-left">
        <div class="search-container">
          <span class="material-icons-outlined">search</span>
          <input type="text" class="search-input" placeholder="Search...">
        </div>
      </div>
      <div class="header-right">
        <a href="profile.php" class="profile-link"> <span class="material-icons-outlined">account_circle</span>
        </a>
      </div>
    </header>

    <aside id="sidebar" class="hidden">
      <div class="sidebar-title">
        <div class="sidebar-brand">
          <span class="material-icons-outlined">shopping_cart</span> JOY'S CLOTHING STORE
        </div>
        <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
      </div>

      <ul class="sidebar-list">
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">dashboard</span> Dashboard
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="product.php"> <span class="material-icons-outlined">inventory_2</span> Products
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="category.php">
            <span class="material-icons-outlined">category</span> Categories
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="customer.php">
            <span class="material-icons-outlined">groups</span> Customers
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="inventory.php">
            <span class="material-icons-outlined">fact_check</span> Inventory
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="reports.php">
            <span class="material-icons-outlined">poll</span> Reports
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" onclick="confirmLogout()">
              <span class="material-icons-outlined">logout</span> Log Out
            </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2>DASHBOARD</h2>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <h3>PRODUCTS</h3>
              <span class="material-icons-outlined">inventory_2</span>
            </div>
            <h1>249</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>CATEGORIES</h3>
              <span class="material-icons-outlined">category</span>
            </div>
            <h1>25</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>CUSTOMERS</h3>
              <span class="material-icons-outlined">groups</span>
            </div>
            <h1>1500</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>ALERTS</h3>
              <span class="material-icons-outlined">notification_important</span>
            </div>
            <h1>56</h1>
          </div>

        </div>

        <div class="charts">

          <div class="charts-card">
            <h2 class="chart-title">Top 5 Products</h2>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <h2 class="chart-title">Purchase and Sales Orders</h2>
            <div id="area-chart"></div>
          </div>

        </div>
      </main>
      <!-- End Main -->

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
    <script>
     function confirmLogout() {
        var logoutConfirmed = confirm("Are you sure you want to log out?");
        if (logoutConfirmed) { 
        window.location.href = "logout.php";
        }
    } 
    </script>
  </body>
</html>
