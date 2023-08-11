<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index() {
        return view("home", [
            "products" => Product::all()
        ]); 
    }

    public function show($id) {
        return response()->json(["data", Product::find($id)]);
    } 

    public function checkout(Request $request) {
        $id = $request->query("id");
        $mg = $request->query("mg");
        $qty = $request->query("qty");

        return Redirect::away("http://localhost:4000/pay?id=$id&mg=$mg&qty=$qty");
    }
}
