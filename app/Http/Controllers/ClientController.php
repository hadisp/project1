<?php

namespace App\Http\Controllers;

use App\FoodType;
use App\Food;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getajax(Request $request){
        $foodtype = Foodtype::whereId($request->id)->firstOrFail();
        $foods=$foodtype->foods;
        return view('menu.index',compact('foods'));
    }
    public function getcart(Request $request){
        if(Cart::get($request->id)){

        }
//        Session::put('cart',[$request->id,$count]);//create session get->get session
    }
    public function index()
    {
        $foodtypes=FoodType::all();
        $foods=Food::all();
        return view('home',compact('foodtypes','foods'));
    }
    public function menu()
    {
        $foodtypes=FoodType::all();
        $foods=Food::all();
        return view('menu.show',compact('foodtypes','foods'));
    }

    public function food(Food $food)
    {
        $comments=Comment::get();
        return view('menu.food',compact('food','comments'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
