<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    public static function getData()
    {
        $path = storage_path() . "/json/home.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path, true)); 

        return $json;
    }
}
