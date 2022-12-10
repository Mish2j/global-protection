<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    public static function getJson($path)
    {
        $path = storage_path() . $path; //
        $json = json_decode(file_get_contents($path, true)); 
        return $json;
    }

    public static function getHomePageData() {
        $pagePath = "/json/home.json";
        $homePage = Pages::getJson($pagePath);
        return $homePage;
    }

    public static function getProductPageData() {
        $pagePath = "/json/product.json";
        $productPage = Pages::getJson($pagePath);
        return $productPage;
    }

    public static function getCatalogPageData() {
        $pagePath = "/json/catalog.json";
        $catalogPage = Pages::getJson($pagePath);
        return $catalogPage;
    }

    public static function get404PageData() {}
}



