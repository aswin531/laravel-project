<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['name', 'phone_number', 'address'];
    protected $table = 'addresses';

    public static function searchByName($keyword)
    {
        return self::where('name', 'like', "%$keyword%")->get();
    }

}
