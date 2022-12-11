<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Components extends Model
{
    use HasFactory;

    public static function getData()
    {
        $path = storage_path() . "/json/components.json";
        $json = json_decode(file_get_contents($path, true)); 
        return $json;
    }

    public static function getFooterMenu(){
        $data = Components::getData();
        $footerMenu = $data[1]->contentElement->items;
        return $footerMenu;
    }

    public static function getPrimaryMenu(){
        $data = Components::getData();
        $primaryMenu = $data[0]->contentElement->items;
        return $primaryMenu;
    }
}
