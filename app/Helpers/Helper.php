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
use App\Models\Page;
use Request;
use Cache;


class Helper {
    public static function saveImage($image, $folder, $name, $oldImage = null) 
    {
        try {

            if(!is_null($oldImage) && Storage::exists('public/'.$oldImage)) Storage::delete('public/'.$oldImage);

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
            // function ($image) {
            //     $image->aspectRatio();
            //     $image->preventUpscale();
            // }
            ->encode();

        Storage::disk('public')->put($folder . '/' . $date . '/' . $filename, $resizedImage->toString());

            return $folder . '/' . $date . '/' . $filename;
        } catch (Exception $e) {
            Log::error('Error saving image: ' . $e->getMessage());
            echo ($e);
            return null;
        }
    }

    public static function image($path = null, $width = null, $height = null, $public_path = false)
    {
        if(is_null($path) || $path == "") return null;
        
        if(Str::startsWith($path, url(''))) $path = trim(str_replace(url(''), '', $path), '/');

        $replace = 'storage';
        $path = trim($path, '/');
        if(Str::startsWith($path, $replace)) $path = trim(substr($path, strlen($replace)), '/');

        $width = intval($width) > 5000 ? 0 : intval($width);
        $height = intval($height) > 5000 ? 0 : intval($height);

        if(($width == 0 || $height == 0) && Storage::exists('public/'.$path)) return $public_path ? public_path('storage/'.$path) : asset('storage/'.$path);
        if(Storage::exists('public/'.$path)) {
            if(Str::lower(pathinfo($path, PATHINFO_EXTENSION)) === "svg") return $public_path ? public_path('storage/'.$path) : asset('storage/'.$path);

            if($width > 0 && $height > 0 && Storage::exists('public/cache/'.$width.'x'.$height.'/'.$path)) return $public_path ? public_path('storage/cache/'.$width.'x'.$height.'/'.$path) : asset('storage/cache/'.$width.'x'.$height.'/'.$path);
            if($width > 0 && $height > 0) {
                try {
                    $manager = new ImageManager(new Driver());

                    $originalImage = $manager->read(Storage::get('public/'.$path));                

                    if($width == 5000 && $height < 5000) Storage::put('public/cache/'.$width.'x'.$height.'/'.$path, $originalImage->resize(null, $height)->encode());
                    else if($height == 5000 && $width < 5000) Storage::put('public/cache/'.$width.'x'.$height.'/'.$path, $originalImage->resize($width, null)->encode());
                    else Storage::put('public/cache/'.$width.'x'.$height.'/'.$path, $originalImage->resize($width,$height)->encode());
                    
                    if(Storage::exists('public/cache/'.$width.'x'.$height.'/'.$path)) return $public_path ? public_path('storage/cache/'.$width.'x'.$height.'/'.$path) : asset('storage/cache/'.$width.'x'.$height.'/'.$path);
                } catch (Exception $e) {}

                return $public_path ? public_path('storage/'.$path) : asset('storage/'.$path);
            }
        }

        return null;
    }
    
    public static function saveFile($file, $folder, $title, $oldFile = null, $withoutDate = false)
    {
        try {
            if (!is_null($oldFile) && Storage::exists('public/' . $oldFile))
                Storage::delete('public/' . $oldFile);

            if ($title === "" || !is_string($title))
                $title = Str::random(40);

            $time = time();
            $date = $withoutDate ? '' : '/' . date('d-m-Y');
            $filename = $time . '_' . Str::limit(Str::slug($title), 100, '') . '.' . $file->getClientOriginalExtension();

            $br = 2;
            while (Storage::exists('public/' . $folder . $date . '/' . $filename)) {
                $filename = $time . '_' . Str::limit(Str::slug($title), 100, '') . '-' . $br . '.' . $file->getClientOriginalExtension();
                $br++;
            }

            $file->storeAs('public/' . $folder . $date, $filename);

            return $folder . $date . '/' . $filename;
        } catch (Exception $e) {
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

    public static function deleteFile($oldFile)
    {
        try {
            if (is_null($oldFile))
                return false;

            if (Storage::exists('public/' . $oldFile))
                Storage::delete('public/' . $oldFile);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public static function renameImage($oldImage, $folder, $title)
    {
        try {
            if($title === "" || !is_string($title)) $title = Str::random(40);

            $time = time();
            $date = date('d-m-Y');
            $filename = $time.'_'.Str::limit(Str::slug($title), 100, '').'.'.pathinfo($oldImage, PATHINFO_EXTENSION);
            $br = 2;
            while(Storage::exists('public/'.$folder.'/'.$date.'/'.$filename)) {
                $filename = $time.'_'.Str::limit(Str::slug($title), 100, '').'-'.$br.'.'.pathinfo($oldImage, PATHINFO_EXTENSION);
                $br++;
            }

            Storage::move('public/'.$oldImage, 'public/'.$folder.'/'.$date.'/'.$filename);

            return $folder.'/'.$date.'/'.$filename;
        } catch (Exception $e) {
            return null;
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
        $models = Menu::where('is_active', 1)->where('parent_id', $id)->orderBy('order', 'ASC')->get(); 
        if ($parent_id) {
            $code .= '<li>
                        <a class="dropdown-item" href="'.Helper::url($link).'">'.$title.'</a>
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

    public static function text($id)
    {
        return Cache::rememberForever('texts-'.$id, function() use ($id) {
            return Page::find($id);
        });
    }

    public static function url($url='')
    {
        $locale = Request::segment(1);
        if($locale == "en")
            return url('en/'.$url);
        else
            return url($url);
    }

    public static function description($id)
    {
        return Cache::rememberForever('meta_description-'.$id, function() use ($id) {
            return Page::where('id', $id)->value('meta_description');
        });
    }

    public static function title($id)
    {
        return Cache::rememberForever('meta_title-'.$id, function() use ($id) {
            return Page::where('id', $id)->value('meta_title');
        });
    }
}