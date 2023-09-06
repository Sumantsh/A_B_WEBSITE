@include('header')


  


    <section id="samplesection" >


      <h2 style="padding:10px; color: #0042AF; font-family: open, sans-serif; font-size: 40px; margin-left:5%; border-bottom: 1px solid rgba(0 0 0 /.4);">FREE SAMPLES</h2>

      <div id="rightsideproduct2" style="" >
        <div class="row row1">
        
          @foreach($products as $product)
            <div id="productcard" >

            <div class="productimg_on_sample" style="">
              <img src="{{asset( $product['prd_image'] )}}" width="100%" alt="">
            </div>

            <div class="discription" style="" >
              <p> {{$product['prd_dis']}}</p>
            </div>

            <div class="productname" style="">
              {{$product['prd_name']}}</div>

            <div class="price" style=" ">
              <p>${{$product['prd_min_price']}}</p>
            </div>



            <div class="btn_wrapper">
              <button data-productID="{{ $product->id }}" data-productPrice="{{ $product['prd_min_price'] }}"  id="addtocartsample" wire:click="toggleCart" >Add to Cart</button>
            </div>

            </div>
          @endforeach
        </div>
      </div>
    </section>

    <livewire:cart />

@include('footer')
