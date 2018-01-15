<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model {
    protected $fillable = [
        'name',
        'phone',
        'line1',
        'line2',
        'city',
        'county',
        'postcode',
    ];
}
