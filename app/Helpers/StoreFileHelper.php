<?php

namespace App\Helpers;

class StoreFileHelper
{
    public static function storeLogos($name, $extension)
    {
        return env('FILE_UPLOAD_IMG_BASE', 'img/') . 'logos/' . $name . '.' . $extension;
    }

    public static function storeIco($name, $extension)
    {
        return env('FILE_UPLOAD_ICO_BASE', 'ico/') . $name . '.' . $extension;
    }

    public static function storeHeroImage($name, $extension)
    {
        return env('FILE_UPLOAD_IMG_BASE', 'img/') . 'hero/' . $name . '.' . $extension;
    }

    public static function storeHighlightImage($name, $extension)
    {
        return env('FILE_UPLOAD_IMG_BASE', 'img/') . 'highlight/' . $name . '.' . $extension;
    }

    public static function storeReviewImage($name, $extension)
    {
        return env('FILE_UPLOAD_IMG_BASE', 'img/') . 'review/' . $name . '.' . $extension;
    }

    public static function storeFeatureImage($name, $extension)
    {
        return env('FILE_UPLOAD_IMG_BASE', 'img/') . 'feature/' . $name . '.' . $extension;
    }

    public static function storeBlogImage($name, $extension)
    {
        return env('FILE_UPLOAD_IMG_BASE', 'img/') . 'blog/' . $name . '.' . $extension;
    }

    public static function storeSbuImage($name)
    {
        return env('FILE_UPLOAD_ASSETS_BASE', 'assets/') . 'img/sbu/' . $name;
    }

    public static function storeCompanyLicenseDocument()
    {
        return env('FILE_UPLOAD_DOCS_BASE', 'company-licenses');
    }
}
