<?php

namespace src;

use Imagine\Image\Box;
use Imagine\Image\ImagineInterface;
use Imagine\Image\Point;
use InvalidArgumentException;

class Crop
{
    /**
     * The Imagine implementation used to process images.
     * @var ImagineInterface
     */
    private static $imagineImpl = null;

    private static $drivers = array('Gd', 'Imagick', 'Gmagick');

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
    public static function cropImageCenter()
    {
        $images = scandir('img/');
        static::CropCarre($images);
        static::CropVerticale($images);
        static::CropHorizontale($images);
    }

    /**
     * @param $images
     */
    private static function CropCarre($images)
    {
        foreach (static::$drivers as $driver) {
            if (extension_loaded($driver)) {
                $imagine = static::getImagine($driver);
                $isCropped = scandir('tmp/' . $driver .'/basic/square/');
                foreach ($images as $image) {
                    if (strstr($image, '.jpg') && in_array($image, $isCropped)) {
                        $imageCrop = $imagine->open('img/' . $image);
                        $size = $imageCrop->getSize();

                        $ratios = array(200 / $size->getWidth(), 200 / $size->getHeight());
                        $ratio = max($ratios);
                        $imageCrop->resize($size->scale($ratio));

                        $size = $imageCrop->getSize();
                        $startingPoint = new Point(round($size->getWidth() / 2), round($size->getHeight() / 2));
                        $imageCrop->crop($startingPoint, new Box(200, 200));
                        $imageCrop->save('tmp/' . $driver . '/basic/square/' . $image);
                    }
                }
            }
        }
    }

    /**
     * @param $images
     */
    private static function CropHorizontale($images)
    {
        foreach (static::$drivers as $driver) {
            if (extension_loaded($driver)) {
                $imagine = static::getImagine($driver);
                $isCropped = scandir('tmp/' . $driver .'/basic/horizontal/');
                foreach ($images as $image) {
                    if (strstr($image, '.jpg') && in_array($image, $isCropped)) {
                        $imageCrop = $imagine->open('img/' . $image);
                        $size = $imageCrop->getSize();

                        $ratios = array(600 / $size->getWidth(), 200 / $size->getHeight());
                        $ratio = max($ratios);
                        $imageCrop->resize($size->scale($ratio));

                        $size = $imageCrop->getSize();
                        $startingPoint = new Point(round($size->getWidth() / 2), round($size->getHeight() / 2));
                        $imageCrop->crop($startingPoint, new Box(600, 200));
                        $imageCrop->save('tmp/' . $driver . '/basic/horizontal/' . $image);
                    }
                }
            }
        }
    }

    /**
     * @param $images
     */
    private static function CropVerticale($images)
    {
        foreach (static::$drivers as $driver) {
            if (extension_loaded($driver)) {
                $imagine = static::getImagine($driver);
                $isCropped = scandir('tmp/' . $driver .'/basic/vertical/');
                foreach ($images as $image) {
                    if (strstr($image, '.jpg') && in_array($image, $isCropped)) {
                        $imageCrop = $imagine->open('img/' . $image);
                        $size = $imageCrop->getSize();

                        $ratios = array(200 / $size->getWidth(), 600 / $size->getHeight());
                        $ratio = max($ratios);
                        $imageCrop->resize($size->scale($ratio));

                        $size = $imageCrop->getSize();
                        $startingPoint = new Point(round($size->getWidth() / 2), round($size->getHeight() / 2));
                        $imageCrop->crop($startingPoint, new Box(200, 600));
                        $imageCrop->save('tmp/' . $driver . '/basic/vertical/' . $image);
                    }
                }
            }
        }
    }
}
