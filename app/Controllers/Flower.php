<?php

namespace App\Controllers;

class Flower extends BaseController
{
    public function flower(): string
    {
        return view('index');
    }
}
