<?php session_start(); ?>
<link rel="stylesheet" href="style.css">
<div class="container">
  <h2>FoodieRush<h2>
  <form method="POST" action="welcome.php">
    <input type="email" name="email" placeholder="Enter email address" required><br>
    <input type="password" name="password" placeholder="Enter password" required><br>
    <button type="submit">Sign In</button>
  </form>
</div>
