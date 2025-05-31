<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $_SESSION['email'] = $_POST['email'];
}
?>
<link rel="stylesheet" href="style.css">
<div class="container">
  <h2>Welcome to FoodieRush</h2>
  <form action="menu.php">
    <button type="submit">OK</button>
  </form>
</div>
