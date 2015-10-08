 <?php
$basic = new Crop();
$balanced = new CropBalanced();
$entropy = new CropEntropy();

$basic->cropImageBasic();
$balanced->cropImageBalanced();
$entropy->cropImageEntropy();
?>

 <!-- buttons for difference Balanced -->
 <h1>buttons for difference Balanced</h1>
 <button style="cursor:pointer; font-weight:700;" type="button">
    <a href="views/squareBalanced.php">Crop square with all drivers</a>
 </button>

 <button style="cursor:pointer; font-weight:700;" type="button">
    <a href="views/horizontalBalanced.php">Crop horizontal with all drivers</a>
 </button>

 <button style="cursor:pointer; font-weight:700;" type="button">
     <a href="views/verticalBalanced.php">Crop vertical with all drivers</a>
 </button>

 <!-- buttons for difference Entropy -->
 <h1>buttons for difference Entropy</h1>
 <button style="cursor:pointer; font-weight:700;" type="button">
     <a href="views/squareEntropy.php">Crop square with all drivers</a>
 </button>

 <button style="cursor:pointer; font-weight:700;" type="button">
     <a href="views/horizontalEntropy.php">Crop horizontal with all drivers</a>
 </button>

 <button style="cursor:pointer; font-weight:700;" type="button">
     <a href="views/verticalEntropy.php">Crop vertical with all drivers</a>
 </button>

 <!-- buttons for difference With Gd only -->
 <h1>buttons for difference With Gd only</h1>
 <button style="cursor:pointer; font-weight:700;" type="button">
     <a href="views/squareGd.php">Crop square with Gd</a>
 </button>

 <button style="cursor:pointer; font-weight:700;" type="button">
     <a href="views/horizontalGd.php">Crop horizontal with Gd</a>
 </button>

 <button style="cursor:pointer; font-weight:700;" type="button">
     <a href="views/verticalGd.php">Crop vertical with Gd</a>
 </button>

 <!-- buttons for difference With Gmagick only -->
 <h1>buttons for difference With Gmagick only</h1>
 <button style="cursor:pointer; font-weight:700;" type="button">
     <a href="views/squareGmagick.php">Crop square with Gmagick</a>
 </button>

 <button style="cursor:pointer; font-weight:700;" type="button">
     <a href="views/horizontalGmagick.php">Crop horizontal with Gmagick</a>
 </button>

 <button style="cursor:pointer; font-weight:700;" type="button">
     <a href="views/verticalGmagick.php">Crop vertical with Gmagick</a>
 </button>

 <!-- buttons for difference With Imagick only -->
 <h1>buttons for difference With Imagick only</h1>
 <button style="cursor:pointer; font-weight:700;" type="button">
     <a href="views/squareImagick.php">Crop square with Imagick</a>
 </button>

 <button style="cursor:pointer; font-weight:700;" type="button">
     <a href="views/horizontalImagick.php">Crop horizontal with Imagick</a>
 </button>

 <button style="cursor:pointer; font-weight:700;" type="button">
     <a href="views/verticalImagick.php">Crop vertical with Imagick</a>
 </button>