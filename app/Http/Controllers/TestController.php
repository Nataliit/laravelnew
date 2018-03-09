<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $request;
    public function someMethod(Request $request)
    {
        $name = $request->input('name', 'Natali');
        $subname = $request->input('subname', 'Ivaschenko');

        return view('test', [
            'name' => $name,
            'subname' => $subname
        ]);

    }

    public function showPost()
    {
        return view('pages.content', [
        'mainContent' => 'Содержимое',
            'title' => 'Заголовок'
        ]);
    }
}
