<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EcomController extends Controller
{
    //

    public function index(){
        return view("ecom.index");
    }

    public function product_list(){
        $data['product']=DB::select("SELECT * FROM `products` WHERE status=1");
        return view("ecom.product_list",$data);
    }
}
