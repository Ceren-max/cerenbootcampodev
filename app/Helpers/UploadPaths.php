<?php


namespace App\Helpers;


class UploadPaths
{
<<<<<<< HEAD
public static $uploadPaths=array(
    'product_photos'=>'/uploads/products' ,
    'profile_photos'=>'/uploads/profiles'
);

   public static function getUploadPath($path)
   {
    return public_path().self::$uploadPaths[$path];//self path yolunu vermek içi kullanılır
   }
=======
    public static $uploadPaths = array(
      'product_photos' => '/uploads/products',
      'profile_photos' => '/uploads/profiles'
    );

    public static function getUploadPath($path)
    {
        return public_path().self::$uploadPaths[$path];
    }
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
}
