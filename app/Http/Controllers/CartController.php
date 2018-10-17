<?php

namespace App\Http\Controllers;

use App\Food;
use Cart;
use App\Order;
//use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function getajax(Request $request){
        $food = Food::whereId($request->id)->firstOrFail();

        Cart::add(['id'=>$food->id,'name'=>$food->name,'qty'=>'1','price'=>$food->price
            ,'options'=>['img'=>$food->image]
        ]);
        return Cart::count();

    }
    public function index()
    {
        $cart=Cart::content();


        return view('cart.index',['data'=>$cart]);
    }

    /**
     * @param $id
     */
    public function addItem($id){
        $food=Food::find($id);
        Cart::add(['id'=>$food->id,'name'=>$food->name,'qty'=>'1','price'=>$food->price
        ,'options'=>['img'=>$food->image]
        ]);
        return back();
    }
    public function updatebutton()
    {

     return back();
    }
    public function update(Request $request)
    {
        $qty=$request->newQty;
        $rowId=$request->rowID;
        Cart::update($rowId,$qty);
       echo 'updated successfully';

    }

    public function removeItem($id)
    {
        Cart::remove($id);
        return back();
    }

    public function checkout()
    {
        if(Auth::user()){
            $foodorders=Order::creatOrder();

             return view('cart.buying',compact('foodorders'));
            }
        else {
           return redirect('/login');
        }
    }


}
