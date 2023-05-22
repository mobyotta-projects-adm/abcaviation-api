<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Business extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];


    public static  function getUniqueUrl()
    {

        do {
            $url = Str::random(10);
        } while (self::where('url', $url)->count() > 0);

        return $url;
    }
}
