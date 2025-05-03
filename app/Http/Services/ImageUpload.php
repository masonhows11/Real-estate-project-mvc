<?php

namespace App\Http\Services;

use Intervention\Image\ImageManager;

class ImageUpload
{

    public static function uploadAndFitImage(mixed $file, string $path, string $image_name, int $width, int $height)
    {


        $path = trim('\/') . "/";
        $image_name = trim('\/') . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);

        if (!is_dir($path))
        {
            if (!mkdir($path, 0777, true))
            {
                die("image upload : failed create directory");
            };
        }
        is_writable($path);

            $manager  = new ImageManager(array('driver' => 'GD'));
            $image = $manager->make($file['tmp_name'])->fit($width,$height);
            $image->save($path.$image_name);
            return '/'.$path.$image_name;


    }
}