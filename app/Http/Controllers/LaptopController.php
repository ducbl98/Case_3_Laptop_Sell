<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LaptopController extends Controller
{
    public function index()
    {
        $laptops = Laptop::all();
        return view('layouts.index', compact('laptops'));
    }

    public function create(){
        return view('layouts.create');
    }


    public function show($id)
    {
//        $productKey = 'product_' . $id;
//
//        if (!Session::has($productKey)) {
//            Laptop::where('id', $id)->increment('view_count');
//            Session::put($productKey, 1);
//        }else{
//            Laptop::where('id', $id)->increment('view_count');
//        }
//
//        $product = Laptop::findOrFail($id);
//
//        // Trả về view
//        return view('layouts.show', compact('product'));
//    }
    }
}
