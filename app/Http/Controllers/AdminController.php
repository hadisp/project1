<?php

namespace App\Http\Controllers;

use App\FoodType;
use App\Food;
use Illuminate\Http\Request;
use App\Comment;
class AdminController extends Controller
{
    public function index()
    {
        
    }

    public function admin()
    {
        return view('admin.show');
    }
    public function menu()
    {
        return view('admin.menu');
    }
    public function comment()
    {
//        $comments=Comment::withTrashed()
//            ->leftJoin('foods', 'foods.id', '=', 'comments.food_id')
//            ->get();
        $comments=Comment::withTrashed()->get();
        $food=new Food();
        return view('admin.comment',compact('comments','food'));
    }
    public function indexfood()
    {
        return view('admin.indexfood');
    }
    public function createfood()
    {
        $foodtypes=FoodType::all();
        return view('admin.createfood',compact('foodtypes'));
    }
    public function storefood(Request $request)
    {
        $food=new Food();
        $foodtype = FoodType::where('name',$request->input('foodtype'))->firstOrFail();
        $food->name=$request->input('name');
        $food->description=$request->input('description');
        $food->price=$request->input('price');
        $food->sign=$request->input('sign');
        $image=$request->file('file')->store('file');
        $path='file/'.pathinfo($image)['basename'];
        $food->image=$path;
        $foodtype->foods()->save($food);
        session()->flash('msg' , 'stored successfully! ');
        return back();
    }


    public function createfoodtype()
    {
        return view('admin.createfoodtype');
    }
    public function storefoodtype(Request $request,FoodType $foodtype)
    {
        $foodtype->name=$request->input('name');
        $foodtype->save();
        session()->flash('msg' , 'stored successfully! ');
        return back();
    }

    public function undeletecomment($comment)
    {
       Comment::whereId($comment)->restore();
        session()->flash('msg' , 'undeleted successfully! ');
        return back();

    }

    public function foodlist()
    {
        $foods=Food::all();
        $foodtypes=FoodType::all();
        return view('admin.foodlist',compact('foods','foodtypes'));
    }
    public function editfood($food_id)
    {
        $foodtypes=FoodType::all();
        $food=Food::find($food_id);
        return view('admin.editfood',compact('food','foodtypes'));

    }
    public function editfoodtype($foodtype_id)
    {
        $foodtype=FoodType::find($foodtype_id);
        return view('admin.editfoodtype',compact('foodtype'));
    }
    public function updatefood(Request $request,$food_id)
    {
        $food=Food::find($food_id);
        $foodtype=FoodType::where('id',$food->type_id)->firstOrFail();;
        $food->name=$request->input('name');
        $food->description=$request->input('description');
        $food->price=$request->input('price');
        $food->sign=$request->input('sign');
        $image=$request->file('file')->store('file');
        $path='file/'.pathinfo($image)['basename'];
        $food->image=$path;
        $foodtype->foods()->save($food);
        session()->flash('msg' , 'edited successfully! ');
        return back();
    }

    public function updatefoodtype(Request $request,$foodtype_id)
    {
        $foodtype=FoodType::find($foodtype_id);
        $foodtype->name=$request->input('name');
        $foodtype->save();
        session()->flash('msg' , 'edited successfully! ');
        return back();
    }

    public function deletefood($food)
    {
        Food::find($food)->delete();
        session()->flash('msg' , 'غذا با موفقیت حذف شد! ');
        return back();

    }
    public function deletefoodtype($foodtype)
    {
        FoodType::find($foodtype)->delete();
        session()->flash('msg' , 'دسته با موفقیت حذف شد! ');
        return back();

    }


    public function foodtypelist()
    {
        $foodtypes=FoodType::all();
        return view('admin.foodtypelist',compact('foodtypes'));
    }

    public function enforcedeletecomment($comment)
    {
        Comment::whereId($comment)->forceDelete();
        session()->flash('msg' , 'deleted successfully! ');
        return back();
    }
    public function deletecomment($comment)
    {
        Comment::whereId($comment)->Delete();
        session()->flash('msg' , 'deleted successfully! ');
        return back();
    }

    public function adminr()
    {
        return view('admin');
    }
}
