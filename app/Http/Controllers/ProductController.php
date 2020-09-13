<?php

namespace App\Http\Controllers;

use App\Helpers\UploadPaths;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
<<<<<<< HEAD

{ public function  productCreateView(){
    return view('Product.create');

}

public function productIndex(){
    $products=Product::with(['user'])->where('deleted_at','=',null)->get();
    return view('users.index',compact('products'));
}


public function productCreate(Request $request)
{
    $name=$request->get('name');
    $price=$request->get('price');
    $filePhotoUrl=$request->file('photo');
    $user=User::find(1);


    if(isset($filePhotoUrl)){
$productPhotoName=uniqid('product_').'.'.$filePhotoUrl->getClientOriginalExtension();
    $filePhotoUrl->move(UploadPaths::getUploadPath('product_photos'),$productPhotoName);
    }

    Product::create([
        'name'=>$name,
        'price'=>$price,
        'photo'=>$productPhotoName,
        'is_approve'=>false,
        'created_by'=>$user->id,
        'updated_by'=>$user->id,
    ]);



    return 'başarıyla tamamlandı';
}
=======
{
    public function productCreateView()
    {
        return view('product.create');
    }

    public function productCreate(Request $request)
    {
        $name = $request->get('name');
        $price = $request->get('price');
        $filePhotoUrl = $request->file('photo');
        $user = User::find(1);

        if (isset($filePhotoUrl)) {
            $productPhotoName = uniqid('product_'). '.' . $filePhotoUrl->getClientOriginalExtension();
            $filePhotoUrl->move(UploadPaths::getUploadPath('product_photos'), $productPhotoName);
        }

        Product::create([
           'name' => $name,
           'price' => $price,
           'photo' => $productPhotoName,
           'is_approve' => false,
           'created_by' => $user->id,
           'updated_by' => $user->id
        ]);

        return back();
    }
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
}
