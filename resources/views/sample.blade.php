@include('header')

    <section id="samplesection" style="margin:5% 0px;  width: 100%; display: flex; flex-direction: column; justify-content: flex-start; ">


      <h2 style="padding:10px; color: #0042AF; font-family: open, sans-serif; font-size: 40px; margin-left:5%; border-bottom: 1px solid rgba(0 0 0 /.4);">FREE SAMPLES</h2>

      <div id="rightsideproduct" style="width: 80%; margin-left: 5%; display: flex; flex-direction: column; flex-wrap: wrap; justify-content: space-around; padding: 5px 7px; border-radius: 4px;" >
        <div class="row row1">
        
          @foreach($products as $product)
            <div id="productcard" >
            <div class="productimg" style="width:100%; display: grid; place-items: center; position: relative; " >
              <img src="{{asset( $product['prd_image'] )}}" width="60%" alt="">
              <div class="sale" style="position: absolute; font-family: sans-serif; font-size: 12px; color: white; font-weight: 600; width: 20%; background: #65CF9F; padding: 5px; text-align: center; top: 10%; left: 15%; border-radius: 8px;">SALE!</div>
            </div>

            <div class="discription" style="width:100%; text-align: center; line-height: 1; color: rgba(0 0 0 /.4); margin-top: 8%; font-size: 12px; font-family: sans-serif; font-style: italic; " >
              <p> {{$product['prd_dis']}}</p>
            </div>

            <div class="productname" style="margin-top: 2%; font-size: 14px; font-weight: 500;  font-family: open, sans-serif;">{{$product['prd_name']}}</div>

            <div class="price" style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
              <p>${{$product['prd_min_price']}}</p>
            </div>

            <button data-productID="{{ $product->id }}" data-productPrice="{{ $product['prd_min_price'] }}"  id="addtocartsample" wire:click="toggleCart" >Add to Cart</button>
            </div>
          @endforeach
        </div>
    </section>

    <livewire:cart />

@include('footer')