<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Food;
class FoodType extends Model
{
    public function foods()
    {
        return $this->hasMany(Food::class, 'type_id');
    }
}
