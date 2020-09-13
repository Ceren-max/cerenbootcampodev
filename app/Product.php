<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
<<<<<<< HEAD
        'name', 'photo', 'price','is_approve', 'created_by', 'updated_by', 'deleted_by'
=======
        'name', 'photo', 'price', 'is_approve', 'created_by', 'updated_by', 'deleted_by'
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
    ];

    public function user()
    {
        return $this->hasMany('App\User','id','created_by');//ıd created_by a denk geliyor eşleştirip çek demek bu komut
    }

}
