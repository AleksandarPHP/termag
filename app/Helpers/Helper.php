<?php

namespace App\Helpers;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Models\Gallery;
use App\Models\Menu;


class Helper {
    public static function saveImage($image, $folder, $name) 
    {
        try {
            if ($name === "" || !is_string($name))
                $name = Str::random(40);

            $time = time();
            $date = date('d-m-Y');
            $filename = $time . '_' . Str::limit(Str::slug($name), 100, '') . '.' . $image->getClientOriginalExtension();
            $br = 2;

            while (Storage::exists('public/' . $folder . '/' . $date . '/' . $filename)) {
                $filename = $time . '_' . Str::limit(Str::slug($name), 100, '') . '-' . $br . '.' . $image->getClientOriginalExtension();
                $br++;
            }

            if (Str::lower($image->getClientOriginalExtension()) === "svg") {
                $image->storeAs('public/' . $folder . '/' . $date, $filename);

                return $folder . '/' . $date . '/' . $filename;
            }


            $manager = new ImageManager(new Driver());

            $resizedImage = $manager->read($image)
            ->resize(null, null)
            ->encode();

        Storage::disk('public')->put($folder . '/' . $date . '/' . $filename, $resizedImage->toString());

            return $folder . '/' . $date . '/' . $filename;
        } catch (Exception $e) {
            Log::error('Error saving image: ' . $e->getMessage());
            echo ($e);
            return null;
        }
    }

    public static function deleteImage($oldImage)
    {
        try {
            if (is_null($oldImage))
                return false;

            if (Storage::exists('public/' . $oldImage))
                Storage::delete('public/' . $oldImage);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public static function galery()
    {
        $query = Gallery::query();
        return $query->get();
    }

    public static function menu($id, $parent_id, $title, $link)
    {
        $code = '';
        $models = Menu::where('is_active', 1)->where('parent_id', $id)->get(); 
    
        if ($parent_id) {
            $code .= '<li>
                        <a class="dropdown-item" href="'.$link.'">'.$title.'</a>
                      </li>';
        } else {
            $code .= '<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">'.$title.'</a>
                        <ul class="dropdown-menu">';
    
            foreach ($models as $model) {
                $code .= self::menu($model->id, $model->parent_id, $model->title, $model->link);
            }
    
            $code .= '</ul>
                      </li>';
        }
    
        return $code;
    }
}