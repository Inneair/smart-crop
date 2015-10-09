<?php

namespace src;

use Imagine\Image\Box;
use Imagine\Image\ImagineInterface;
use Imagine\Image\Point;

class Crop
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
    public static function cropImageBasic()
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
                $size = $imageCrop->getSize();

                // Resize operation
                $ratios = array(200 / $size->getWidth(), 200 / $size->getHeight());
                $ratio = max($ratios);
                $imageCrop->resize($size->scale($ratio));

                $imageCrop->crop(new Point(round(($size->getWidth() - 200) / 2), round(($size->getHeight() - 200) / 2)), new Box(200, 200));
                $imageCrop->save('tmp/' . $drivers .'/basic/square/' . $image);
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
                $size = $imageCrop->getSize();

                // Resize operation
                $ratios = array(600 / $size->getWidth(), 200 / $size->getHeight());
                $ratio = max($ratios);
                $imageCrop->resize($size->scale($ratio));

                $imageCrop->crop(new Point(round(($size->getWidth() - 600) / 2), round(($size->getHeight() - 200) / 2)), new Box(600, 200));
                $imageCrop->save('tmp/' . $drivers .'/basic/horizontale/' . $image);
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
                $size = $imageCrop->getSize();

                // Resize operation
                $ratios = array(200 / $size->getWidth(), 600 / $size->getHeight());
                $ratio = max($ratios);
                $imageCrop->resize($size->scale($ratio));

                $imageCrop->crop(new Point(round(($size->getWidth() - 200) / 2), round(($size->getHeight() - 600) / 2)), new Box(600, 200));
                $imageCrop->save('tmp/' . $drivers .'/basic/verticale/' . $image);
            }
        }
    }
}
