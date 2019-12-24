<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table='packages';

    protected $fillable = [
        'title', 'features','price','detail','image','status','package_type'
    ];
}
