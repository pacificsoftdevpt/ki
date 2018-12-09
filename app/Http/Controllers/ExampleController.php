<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Test;

class ExampleController extends Controller
{
    public function savedata(Request $request)
    {
        $test = new Test;
        $test->data = json_encode($request->all());
        $test->save();
        return response()->json(['success' => true]);
    }

    public function getdata(Request $request)
    {
        $tests = Test::all();
        return response()->json(['success' => true, 'data' => $tests]);
    }
}
