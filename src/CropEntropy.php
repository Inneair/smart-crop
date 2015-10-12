<?php

namespace src;

use Imagine\Image\Box;
use Imagine\Image\ImagineInterface;
use InvalidArgumentException;

class CropEntropy
{
    /**
     * The Imagine implementation used to process images.
     * @var ImagineInterface
     */
    private static $imagineImpl = null;

    /**
     * @param $driver
     * @return ImagineInterface
     */
    public static function getImagine($driver)
    {
        $className = 'Imagine\\' . $driver . '\Imagine';
        static::$imagineImpl = new $className();

        return static::$imagineImpl;
    }

    /**
     * Crop an Image
     *
     * @throws InvalidArgumentException
     */
    public static function cropImageEntropy()
    {
        $images = scandir('img/');
        static::CropCarre($images);
        static::CropHorizontale($images);
        static::CropVerticale($images);
    }

    /**
     * @param $images
     */
    private function CropCarre($images)
    {
        $drivers = array('Imagick', 'Gmagick', 'Gd');
        foreach ($drivers as $driver) {
            $imagine = static::getImagine($driver);
            foreach ($images as $image) {
                $imageCrop = $imagine->open($image);

                $imageCrop->resizeAndCropEntropy(new Box(200, 200));
                $imageCrop->save('tmp/' . $driver .'/Entropy/square/' . $image);
            }
        }
    }

    /**
     * @param $images
     */
    private function CropHorizontale($images)
    {
        $drivers = array('Imagick', 'Gmagick', 'Gd');
        foreach ($drivers as $driver) {
            $imagine = static::getImagine($driver);
            foreach ($images as $image) {
                $imageCrop = $imagine->open($image);

                $imageCrop->resizeAndCropEntropy(new Box(600, 200));
                $imageCrop->save('tmp/' . $driver .'/Entropy/horizontal/' . $image);
            }
        }
    }

    /**
     * @param $images
     */
    private function CropVerticale($images)
    {
        $drivers = array('Imagick', 'Gmagick', 'Gd');
        foreach ($drivers as $driver) {
            $imagine = static::getImagine($driver);
            foreach ($images as $image) {
                $imageCrop = $imagine->open($image);

                $imageCrop->resizeAndCropEntropy(new Box(600, 200));
                $imageCrop->save('tmp/' . $driver .'/Entropy/vertical/' . $image);
            }
        }
    }
}
