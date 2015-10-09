<?php

use src\Crop;
use src\CropBalanced;
use src\CropEntropy;

function cropImage()
{
    $basic = new Crop();
    $entropy = new CropEntropy();
    $balanced = new CropBalanced();

    $basic->cropImageBasic();
    $entropy->cropImageEntropy();
    $balanced->cropImageBalanced();
}