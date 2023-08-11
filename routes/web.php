<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("", [ProductController::class, 'index']);

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('service', function () {
    return view('service');
});

Route::get('delivery', function () {
    return view('delivery');
});

Route::get('shipping', function () {
    return view('shipping');
});

Route::get('/sample', function () {
    return view('sample');
});

Route::get('/policies', function () {
    return view('policies');
});

Route::get('/fq', function () {
    return view('fq');
});

Route::get('singleproduct/{id}', function($id)  {
    return view('singleproduct', [
        'product' => Product::find($id)
    ]);
});

Route::get('/featch', function () {
    $post = DB::table('products')->get();
    dd($post);
    return view('New.fetachdata');
});


Route::get("/checkout", [ProductController::class, 'checkout']);


Route::get("/add", function() {
    $jsonFile = file_get_contents(storage_path("json/product.json"));
    $data = json_decode($jsonFile, true);


    foreach ($data as $item) {
        Product::create([
            'prd_name' => $item['prd_name'],
            'prd_dis' => $item['prd_dis'],
            "prd_image" => $item['prd_image'],
            'prd_min_price' => $item['prd_min_price'],
            "prd_max_price" => $item['prd_max_price'],
            "prd_about" => $item['prd_about'],
            "prd_qty" => $item['prd_qty'],
            "prd_mg" => $item['prd_mg'],
            "prd_details" => $item['prd_details']
        ]);
    }

    echo "Okay";
});

Route::post("/add-to-cart", function(Request $request) {
    $formdata = $request->json()->all();
    $formDataFromSession = $request->session()->get('formdata', []);
    $formDataFromSession[] = $formdata;

    $request->session()->put('formdata', $formDataFromSession);
    return response()->json(["msg" => "Product added to the cart", "data" => $formDataFromSession], 201);
});

Route::post("/remove-product/{id}", function() {
    
});

    
?>