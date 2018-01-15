<?php

namespace App;

use App\{ Brand, Manufacturer };

use Illuminate\Database\Eloquent\Model;

class Stock extends Model {
    public function brand () {
        return $this->belongsTo(Brand::class);
    }

    public function manufacturer () {
        return $this->belongsTo(Manufacturer::class);
    }
}
