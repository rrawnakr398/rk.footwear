<?php include('session.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Redesign</title>
  <link rel="stylesheet" href="styles/dashboard.css">
  <script src="https://kit.fontawesome.com/bcb12795fd.js" crossorigin="anonymous"></script>

</head>
<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <nav class="sidebar">
      <div class="logo"><center><img src="imgs/logo.jpeg"></center></div>
      <div class="brand">RK FOOTWEAR OPC</div>
      <ul class="menu">
        <li><a href="#" class="active"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="process/party_list.php"><i class="fa fa-users"></i> Parties</a></li>
        <li><a href="#"><i class="fa fa-box"></i> Items</a></li>
        <li><a href="#"><i class="fa fa-shopping-cart"></i> Sale</a></li>
        <li><a href="#"><i class="fa fa-receipt"></i> Purchase & Expense</a></li>
        <li><a href="#"><i class="fa fa-chart-line"></i> Reports</a></li>
        <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
        <li><a href="#"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </nav>
    <!-- Main Content -->
    <div class="main-content">
      <header class="header">
        <input type="text" placeholder="Search Transactions">
        <button class="btn add-sale">+ Add Sale</button>
        <button class="btn add-purchase">+ Add Purchase</button>
      </header>

      <section class="stats">
        <div class="stat-card">
          <h3>Total Receivable</h3>
          <p class="amount">৳ 28,47,850</p>
          <p class="details">From 13 Parties</p>
        </div>
        <div class="stat-card">
          <h3>Total Payable</h3>
          <p class="amount">৳ 15,86,890</p>
          <p class="details">From 2 Parties</p>
        </div>
      </section>

      <section class="charts">
        <div class="chart">
          <h3>Total Sale</h3>
          <p class="amount">৳ 29,30,440</p>
          <p class="details">40% more than last month</p>
          <canvas id="salesChart"></canvas>
        </div>
        <div class="empty-state">
          <h3>It Looks So Empty in Here!</h3>
          <p>Add one of our widgets to get started and view your business operations.</p>
        </div>
      </section>
    </div>
  </div>
</body>
</html>
