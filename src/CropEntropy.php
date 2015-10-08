<?php

use Imagine\Image\Box;
use Imagine\Image\ImagineInterface;

class CropEntropy
{
    const IMG = 'img/';
    const TMP = 'tmp/';

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
        if (static::$imagineImpl === null) {
            $className = 'Imagine\\' . $driver . '\Imagine';

            static::$imagineImpl = new $className();
        }

        return static::$imagineImpl;
    }

    /**
     * Crop an Image
     *
     * @throws InvalidArgumentException
     */
    public static function cropImageEntropy()
    {
        $images = scandir(IMG);
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
                $imageCrop->save(TMP . $drivers .'/Entropy/square/' . $image);
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
                $imageCrop->save(TMP . $drivers .'/Entropy/horizontale/' . $image);
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
                $imageCrop->save(TMP . $drivers .'/Entropy/verticale/' . $image);
            }
        }
    }
}