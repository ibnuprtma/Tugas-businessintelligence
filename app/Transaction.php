<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $gruarderd= ['id'];

    protected $fillable = [
        'code',
        'name'
    ];
}
