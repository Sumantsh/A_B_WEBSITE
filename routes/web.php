<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Cart;
use App\Models\SampleProducts;

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

Route::get('/policies', function () {
    return view('policies');
});

Route::get('/fq', function () {
    return view('fq');
});


Route::get('singleproduct', function(Request $request)  {
    $id = $request->query('id');
    return view('singleproduct', [
        'product' => Product::find($id)
    ]);
});

Route::get("/sample", function() {
    $products = SampleProducts::all();
    return view('sample', [
        'products' => $products
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
            "prd_details" => $item['prd_details'],
            "price_per_pill" => $item['price_per_pill']
        ]);
    }

    echo "Okay";
});


Route::get("/add-sample", function() {
    $jsonFile = file_get_contents(storage_path("json/sample_product.json"));
    $data = json_decode($jsonFile, true);

    foreach ($data as $item) {
        SampleProducts::create([
            'prd_name' => $item['prd_name'],
            'prd_dis' => $item['prd_dis'],
            "prd_image" => $item['prd_image'],
            'prd_min_price' => $item['prd_min_price'],
            "prd_max_price" => $item['prd_max_price'],
            "prd_qty" => $item['prd_qty'],
            "prd_mg" => $item['prd_mg'],
        ]);
    }

    echo "Okay";
});

// Route::get("/get-product/{id}", [ProductController::class, 'show']);

Route::get("/get-cart-data", function(Request $request) {
    $cartData = $request->session()->get('cartdata', []);
    if(count($cartData) > 0) {
        foreach($cartData as &$item) {
            $product = Product::find($item['prodID']);
            $item['prd_name'] = $product->prd_name;
            $item['prd_image'] =  "http://127.0.0.1:8000/" . $product->prd_image;
        }
    }
    return response()->json(["data" => $cartData]);
});


Route::post("/add-to-cart", [Cart::class, 'addToCart']);
?>