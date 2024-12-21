<?php include('../session.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Redesign</title>
  <link rel="stylesheet" href="../styles/dashboard.css">
  <script src="https://kit.fontawesome.com/bcb12795fd.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <nav class="sidebar">
      <div class="logo"><center><img src="../imgs/logo.jpeg"></center></div>
      <div class="brand">RK FOOTWEAR OPC</div>
      <ul class="menu">
        <li><a href="#" class="active"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-users"></i> Parties</a></li>
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

      <section class="charts">
              <section class="add-party-form">
        <h2>Add a New Party</h2>
        <form action="add_party.php" method="POST">
          <label for="party_name">Party Name:</label>
          <input type="text" id="party_name" name="party_name" required>

          <label for="contact_person">Contact Person:</label>
          <input type="text" id="contact_person" name="contact_person" required>

          <label for="phone">Phone Number:</label>
          <input type="text" id="phone" name="phone" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email">

          <label for="address">Address:</label>
          <textarea id="address" name="address" required></textarea>

          <button type="submit" class="btn">Add Party</button>
        </form>
      </section>
      </section>
    </div>
  </div>
</body>
</html>
