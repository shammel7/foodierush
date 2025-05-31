<?php session_start(); ?>
<link rel="stylesheet" href="style.css">
<div class="container">
  <h2>Your Cart</h2>
  <?php
  $total = 0;
  foreach ($_SESSION['cart'] as $item) {
    echo $item['name'] . " - ₱" . $item['price'] . "<br>";
    $total += $item['price'];
  }
  ?>
  <p><strong>Total: ₱<?= $total ?></strong></p>
  <form action="thankyou.php" method="POST">
    <label>Choose Payment Method:</label><br>
    <select name="payment" required>
      <option value="">Select</option>
      <option value="Cash on Delivery">Cash on Delivery</option>
      <option value="GCash">GCash</option>
      <option value="PayPal">PayPal</option>
      <option value="Credit Card">Credit Card</option>
    </select><br>
    <button type="submit">Check Out</button>
  </form>
</div>
