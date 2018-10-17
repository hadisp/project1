<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Food;
use Cart;
use App\user;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $fillable=['total'];

    public  function orderCols()
    {
        return $this->belongsToMany(Food::class);
    }
    public static function creatOrder()
    {
        $user=Auth::user();
        $order=$user->orders()->create([
            'total'=>Cart::total()
        ]);
        foreach (Cart::content() as $cData) {
            $order->orderCols()->attach($cData->id, [
                'total' =>$cData->qty*$cData->price,
                'qty' => $cData->qty,
            ]);
        }
        Cart::destroy();
        $foodorders = DB::table('food_order')
                ->join('foods', 'food_order.food_id', '=', 'foods.id')
                ->join('orders', 'food_order.order_id', '=', 'orders.id')
                ->where('orders.id','=',$order->id)
                ->select('name', 'food_order.total','qty','orders.total')
                ->get();
        return $foodorders;

    }

    public function user()

    {
        return $this->belongsTo(User::class);
    }


}
