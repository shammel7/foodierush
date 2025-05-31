<?php session_start(); ?>

  <!-- Navigation Bar -->
  <div class="navbar">
    <div class="menu-dropdown">
      <button onclick="toggleCategories()">Menu</button>
      <div id="categoryList" class="category-dropdown-content">
        <!-- These should match your PHP categories exactly -->
        <a href="#Coffee">Coffee</a>
        <a href="#Dessert">Dessert</a>
        <a href="#Meals">Meals</a>
        <a href="#Juice">Juice</a>
        <a href="#Milktea">Milktea</a>
      </div>
    </div>
    <a href="cart.php">Cart</a>
    <a href="#">Settings</a>
    <a href="#">Orders</a>
  </div>

<?php
// Define the foods array with 'id' for each item
$foods = [
    "Coffee" => [
        ['id' => 'coffee1', 'name' => 'Macchiato', 'price' => 50, 'img' => 'assets/images/coffee/macchiato.png'],
        ['id' => 'coffee2', 'name' => 'Mocha', 'price' => 60, 'img' => 'assets/images/coffee/mocha.png'],
        ['id' => 'coffee3', 'name' => 'Cappuccino', 'price' => 55, 'img' => 'assets/images/coffee/cappuccino.png'],
        ['id' => 'coffee4', 'name' => 'Espresso', 'price' => 40, 'img' => 'assets/images/coffee/espresso.png'],
        ['id' => 'coffee5', 'name' => 'Americano', 'price' => 45, 'img' => 'assets/images/coffee/americano.png'],
        ['id' => 'coffee6', 'name' => 'Latte', 'price' => 50, 'img' => 'assets/images/coffee/latte.png'],
        ['id' => 'coffee7', 'name' => 'Iced coffee', 'price' => 60, 'img' => 'assets/images/coffee/icedcoffee.png'],
    ],
    "Dessert" => [
        "Cakes" => [
            ['id' => 'cake1', 'name' => 'Black Forest Cake', 'price' => 120, 'img' => 'assets/images/dessert/cakes/black-forest.png'],
            ['id' => 'cake2', 'name' => 'Red velvet cake', 'price' => 130, 'img' => 'assets/images/dessert/cakes/red-velvet.png'],
            ['id' => 'cake3', 'name' => 'Chocolate cake', 'price' => 110, 'img' => 'assets/images/dessert/cakes/chocolate.png'],
            ['id' => 'cake4', 'name' => 'Vanilla', 'price' => 100, 'img' => 'assets/images/dessert/cakes/vanilla.png'],
            ['id' => 'cake5', 'name' => 'Strawberry cake', 'price' => 115, 'img' => 'assets/images/dessert/cakes/strawberry.png'],
            ['id' => 'cake6', 'name' => 'Blueberry cake', 'price' => 120, 'img' => 'assets/images/dessert/cakes/blueberry.png'],
            ['id' => 'cake7', 'name' => 'Raspberry cake', 'price' => 125, 'img' => 'assets/images/dessert/cakes/raspberry.png'],
        ],
        "Cookies" => [
            ['id' => 'cookie1', 'name' => 'Chocolate Chip cookies', 'price' => 25, 'img' => 'assets/images/dessert/cookies/chocolate-chip.png'],
            ['id' => 'cookie2', 'name' => 'Peanut Butter cookies', 'price' => 20, 'img' => 'assets/images/dessert/cookies/peanut-butter.png'],
            ['id' => 'cookie3', 'name' => 'Butter cookies', 'price' => 20, 'img' => 'assets/images/dessert/cookies/butter.png'],
            ['id' => 'cookie4', 'name' => 'Oatmeal raisin cookies', 'price' => 22, 'img' => 'assets/images/dessert/cookies/oatmeal-raisin.png'],
            ['id' => 'cookie5', 'name' => 'Macarons', 'price' => 30, 'img' => 'assets/images/dessert/cookies/macarons.png'],
        ],
    ],
    "Meals" => [
        ['id' => 'meal1', 'name' => 'Pancit sisig', 'price' => 70, 'img' => 'assets/images/meals/pancit-sisig.png'],
        ['id' => 'meal2', 'name' => 'Lechon', 'price' => 150, 'img' => 'assets/images/meals/lechon.png'],
        ['id' => 'meal3', 'name' => 'Chicken Fillet', 'price' => 80, 'img' => 'assets/images/meals/chicken-fillet.png'],
        ['id' => 'meal4', 'name' => 'Lumpiang Shanghai', 'price' => 60, 'img' => 'assets/images/meals/lumpiang-shanghai.png'],
        ['id' => 'meal5', 'name' => 'Pork Adobo', 'price' => 85, 'img' => 'assets/images/meals/pork-adobo.png'],
        ['id' => 'meal6', 'name' => 'Chicken Adobo', 'price' => 85, 'img' => 'assets/images/meals/chicken-adobo.png'],
        ['id' => 'meal7', 'name' => 'Fried Chicken', 'price' => 75, 'img' => 'assets/images/meals/fried-chicken.png'],
        ['id' => 'meal8', 'name' => 'Palabok', 'price' => 70, 'img' => 'assets/images/meals/palabok.png'],
        ['id' => 'meal9', 'name' => 'Crispy Pata', 'price' => 140, 'img' => 'assets/images/meals/crispy-pata.png'],
        ['id' => 'meal10', 'name' => 'Chicken Curry', 'price' => 95, 'img' => 'assets/images/meals/chicken-curry.png'],
        ['id' => 'meal11', 'name' => 'Kare-kare', 'price' => 100, 'img' => 'assets/images/meals/kare-kare.png'],
    ],
    "Juice" => [
        ['id' => 'juice1', 'name' => 'Orange juice', 'price' => 35, 'img' => 'assets/images/juice/orange-juice.png'],
        ['id' => 'juice2', 'name' => 'Apple juice', 'price' => 35, 'img' => 'assets/images/juice/apple-juice.png'],
        ['id' => 'juice3', 'name' => 'Grape Juice', 'price' => 35, 'img' => 'assets/images/juice/grape-juice.png'],
        ['id' => 'juice4', 'name' => 'Pineapple Juice', 'price' => 35, 'img' => 'assets/images/juice/pineapple-juice.png'],
        ['id' => 'juice5', 'name' => 'Strawberry Juice', 'price' => 35, 'img' => 'assets/images/juice/strawberry-juice.png'],
        ['id' => 'juice6', 'name' => 'Mango Juice', 'price' => 35, 'img' => 'assets/images/juice/mango-juice.png'],
        ['id' => 'juice7', 'name' => 'Blueberry juice', 'price' => 35, 'img' => 'assets/images/juice/blueberry-juice.png'],
        ['id' => 'juice8', 'name' => 'Pomegranate juice', 'price' => 35, 'img' => 'assets/images/juice/pomegranate-juice.png'],
    ],
    "Milktea" => [
        ['id' => 'milktea1', 'name' => 'Chocolate Milk Tea', 'price' => 50, 'img' => 'assets/images/milktea/chocolate-milktea.png'],
        ['id' => 'milktea2', 'name' => 'Matcha Milk Tea', 'price' => 55, 'img' => 'assets/images/milktea/matcha-milktea.png'],
        ['id' => 'milktea3', 'name' => 'Taro Milk Tea', 'price' => 55, 'img' => 'assets/images/milktea/taro-milktea.png'],
        ['id' => 'milktea4', 'name' => 'Cookies & Cream Milk Tea', 'price' => 60, 'img' => 'assets/images/milktea/cookiescream-milktea.png'],
        ['id' => 'milktea6', 'name' => 'Strawberry Milk Tea', 'price' => 55, 'img' => 'assets/images/milktea/strawberry-milktea.png'],
        ['id' => 'milktea7', 'name' => 'Mango Milk Tea', 'price' => 55, 'img' => 'assets/images/milktea/mango-milktea.png'],
    ],
];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['food_id'];
    foreach ($foods as $category => $items) {
        if (is_array($items)) {
            // For categories with nested arrays (like Cakes, Cookies)
            if (isset($items['name'])) {
                // single items, unlikely
                continue;
            }
            foreach ($items as $subCategory => $subItems) {
                foreach ($subItems as $item) {
                    if ($item['id'] == $id) {
                        $_SESSION['cart'][] = $item;
                    }
                }
            }
        } else {
            // For flat categories
            foreach ($items as $item) {
                if ($item['id'] == $id) {
                    $_SESSION['cart'][] = $item;
                }
            }
        }
    }
}
?>

<div class="container">
<h2>Menu</h2>
<?php foreach ($foods as $category => $items): ?>
  <!-- Add id attribute for anchor links -->
  <h3 class="category-title" id="<?= htmlspecialchars($category) ?>"><?= htmlspecialchars($category) ?></h3>
  <div class="menu-grid">
    <?php
    // Handle nested categories like Cakes, Cookies
    if (isset($items[0]['name'])) {
        // Items directly
        foreach ($items as $food) {
            ?>
            <div class="menu-item">
              <form method="POST">
                <input type="hidden" name="food_id" value="<?= $food['id'] ?>">
                <img src="<?= $food['img'] ?>" alt="<?= htmlspecialchars($food['name']) ?>" width="100" height="100" /><br>
                <strong><?= htmlspecialchars($food['name']) ?></strong><br>
                ₱<?= $food['price'] ?><br>
                <button type="submit">Add to Cart</button>
              </form>
            </div>
            <?php
        }
    } else {
        // Nested categories like Cakes, Cookies
        foreach ($items as $subCategory => $subItems) {
            foreach ($subItems as $food) {
                ?>
                <div class="menu-item">
                  <form method="POST">
                    <input type="hidden" name="food_id" value="<?= $food['id'] ?>">
                    <img src="<?= $food['img'] ?>" alt="<?= htmlspecialchars($food['name']) ?>" width="100" height="100" /><br>
                    <strong><?= htmlspecialchars($food['name']) ?></strong><br>
                    ₱<?= $food['price'] ?><br>
                    <button type="submit">Add to Cart</button>
                  </form>
                </div>
                <?php
            }
        }
    }
    ?>
  </div>
<?php endforeach; ?>
<a href="cart.php"><button>Go to Cart</button></a>
</div>

<script>
function toggleCategories() {
  var dropdown = document.getElementById("categoryList");
  dropdown.classList.toggle("show");
}

// Close dropdown if clicked outside
window.onclick = function(event) {
  if (!event.target.matches('.menu-dropdown button')) {
    var dropdowns = document.getElementsByClassName("category-dropdown-content");
    for (let i = 0; i < dropdowns.length; i++) {
      let openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>
