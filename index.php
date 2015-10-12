<?php

use src\Crop;
use src\CropBalanced;
use src\CropEntropy;

require 'src/CropEntropy.php';
require 'src/CropBalanced.php';
require 'src/Crop.php';

CropEntropy::cropImageEntropy();
CropBalanced::cropImageBalanced();
Crop::cropImageCenter();

require 'views/view.php';
