<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
// c пом. ф-ции __construct ограничим с пом. middleware выполнение (ВСЕХ МЕТОДОВ) в контроллере
// до 10 методов в минуту
    public function __construct()
    {
        $this->middleware('throttle:10');
    }



    public function __invoke(Request $request)
    {
//        actions

//        response
//        return  response('test', 200, [],);

//                return  response('test', 200, [
//                    'foo' => 'bar',
//                ] );

//        return ['foo'=>'bar'];

        return response()->json(['foo'=>'bar']);

    }
}
