<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AddressController extends Controller
{
    public function getAjax(){


        return Response::json(
            array(
                'status' => 'success',
                'msg' => 'hi'
            ));
    }

    public function foo()
    {

        return view('address.foo');
    }
}
