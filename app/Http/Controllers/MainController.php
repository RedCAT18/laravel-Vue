<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;
use App\User;
use App\Userinfo;


class MainController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $data['user'] = \Auth::user();
        $data['userinfo'] = Userinfo::find($data['user']->id);

        return view('main', $data);
    }
}
