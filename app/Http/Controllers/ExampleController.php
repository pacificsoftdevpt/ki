<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function test(Request $request)
    {
        echo '<pre>'; var_dump($request->all()); echo '</pre>'; die();
    }
}
