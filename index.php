<?php

use src\Crop;
use src\CropBalanced;
use src\CropEntropy;

require 'vendor/autoload.php';

require 'src/CropEntropy.php';
require 'src/CropBalanced.php';
require 'src/Crop.php';

Crop::cropImageCenter();
CropEntropy::cropImageEntropy();
CropBalanced::cropImageBalanced();

require 'views/view.php';
