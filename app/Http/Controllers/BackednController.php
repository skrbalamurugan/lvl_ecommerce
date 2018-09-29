<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class BackednController extends Controller
{
    public function index(){
        $allproduct = Product::count();
        $men = Product::where('category_id','=','1')->count();
        return view('admin.index',compact('allproduct','men'));
    }
}
