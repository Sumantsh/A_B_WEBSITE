<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\SampleProducts;
use Illuminate\Http\Request;
use Livewire\Component;

class Cart extends Component
{
    public $isOpen = false;
    public $products = [];
    protected $listeners = ['updateComponent' => 'updateComponentFunc', 'emptyCart' => 'emptyCartFunc'];

    public function updateComponentFunc() {
        if($this->isOpen === false) {
            $this->isOpen = !$this->isOpen;
        }
        $this->products = session()->get('cartdata', []);
    }

    public function emptyCartFunc() {
        $this->products = [];
    }

    public function toggleCart()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function addToCart(Request $request) {
        $cartdata = $request->json()->all();
        $product = [];
        if($cartdata['sample']) {
            $product = SampleProducts::find($cartdata['prodID']);
        } else {
            $product = Product::find($cartdata['prodID']);
        }
        $prdImage = $product['prd_image'];
        $prdName = $product['prd_name'];
        session()->push("cartdata", [
            'UID' => $cartdata['UID'],
            'prodID' => $cartdata['prodID'],
            'mg' => $cartdata['mg'],
            'pills' => $cartdata['pills'],
            'qty' => $cartdata['qty'],
            'price' => $cartdata['price'],
            'prd_name' => $prdName,
            'prd_image' => $prdImage
        ]);
        return response()->json(["msg" => "Product added to the cart"], 201);
    }

    public function remove($UID) {
        $cart = session()->get('cartdata', []);
        $index = array_search($UID, array_column($cart, 'UID'));

        if ($index !== false) {
            array_splice($cart, $index, 1);
            session()->put('cartdata', $cart);
            $this->products = $cart; // Update the local data
        }
    }

    public function mount(Request $request) {
        $this->products = $request->session()->get('cartdata', []);
    }

    public function emptyCart() {
        session()->forget('cartdata');
        $this->emit('emptyCart');
    }

    public function render()
    {
        return view('livewire.cart', [
            'products' => $this->products
        ]);
    }
}
