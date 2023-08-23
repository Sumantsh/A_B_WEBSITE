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

Route::get('singleproduct', function(Request $request)  {
    $id = $request->query('id');
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

Route::get("/get-product/{id}", [ProductController::class, 'show']);

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

Route::post("/add-to-cart", function(Request $request) {
    $cartdata = $request->json()->all();
    $cartDataFromSession = $request->session()->get('cartdata', []);
    $cartDataFromSession[] = $cartdata;

    $request->session()->put('cartdata', $cartDataFromSession);
    return response()->json(["msg" => "Product added to the cart", "data" => $cartDataFromSession], 201);
});

Route::get("/remove-product", function(Request $request) {
        $productId = $request->query('id');
        
        $products = $request->session()->get('cartdata', []);
            
        $filteredProducts = array_filter($products, function ($product) use ($productId) {
            return $product['UID'] !== $productId;
        });
        
        $request->session()->put('cartdata', $filteredProducts);
        return response()->json(['msg' => "product removed", "data" => $filteredProducts], 201);
});

Route::get("/trial", function() {
    return view('trial');
});


?>