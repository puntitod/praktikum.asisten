<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | To-Do-List'
        ];
        return view('todolist/index',$data);
    }
}