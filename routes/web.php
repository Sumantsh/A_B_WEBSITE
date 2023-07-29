<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Dotenv\Store\File\Reader;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

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




// Route::get("/singleproduct/{listing}", [ProductController::class, 'show']);




Route::get("/add", function() {
    $jsonFile = file_get_contents(storage_path("json/product.json"));
    $data = json_decode($jsonFile, true);


    foreach ($data as $item) {
        Product::create([
            'prd_name' => $item['prd_name'],
            'prd_dis' => $item['prd_dis'],
            "prd_image" => $item['prd_image'],
            'prd_min_price' => $item['prd_min_price'],
            "prd_max_price" => $item['prd_max_price']
        ]);
    }

    echo "Okay";
})


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

?>