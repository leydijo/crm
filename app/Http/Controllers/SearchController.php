<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewUser;

class SearchController extends Controller
{
    //

    public function search(Request  $request){

        $buscar = NewUser::where("fullname", "like", $request->c."%")->take(5)->get();
        return view("users.index", compact("buscar"));

    }
}
