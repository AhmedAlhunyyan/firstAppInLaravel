<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewController extends Controller
{

    public function __construct()
    {
        $this -> middleware('auth') -> except('anyName');
    }
    public function firstName(){
        return 'ahmed';
    }

    public function lastName(){
        return 'ali';
    }

    public function anyName(){
        return 'any';
    }
}
