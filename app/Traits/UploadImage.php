<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Nette\Utils\Image;

trait UploadImage
{


    /**
     * @param $request
     * @param $model
     * @param $name
     * @return string
     */

    public function UploadImage($request, $model, $name)
    {

        $image = $request->file($name);
        $image_name = time() . '.' . $image->extension();
        Storage::putFileAs('public/' . $model . '/', $image, $image_name);
        return $image_name;

    }

    public function DeleteImage($logo)
    {

        Storage::disk('public')->delete('/company/'.$logo);

    }
}
