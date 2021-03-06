<?php

namespace App;

use App\Stock;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model {
    protected $fillable = ['name'];

    public function stock () {
        return $this->hasMany(Stock::class);
    }
}
