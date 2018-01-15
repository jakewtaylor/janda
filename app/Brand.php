<?php

namespace App;

use App\Stock;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {
    protected $fillable = ['name'];

    public function stock () {
        return $this->hasMany(Stock::class);
    }
}
