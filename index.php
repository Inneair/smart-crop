 <?php
$basic = new Crop();
$balanced = new CropBalanced();
$entropy = new CropEntropy();

$basic->cropImageBasic();
$balanced->cropImageBalanced();
$entropy->cropImageEntropy();
?>

<button style="cursor:pointer; font-weight:700;" type="button">
    <a href="views/square.html">Crop square</a>
</button>

<button style="cursor:pointer; font-weight:700;" type="button">
    <a href="views/horizontal.html">Crop horizontal</a>
</button>

<button style="cursor:pointer; font-weight:700;" type="button">
    <a href="views/vertical.html">Crop vertical</a>
</button>
