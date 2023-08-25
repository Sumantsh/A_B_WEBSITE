@include('header')

<section id="section">

    <div id="productdevider">
        <div class="productimg">
            <img src="{{ asset ($product->prd_image) }}" alt="">
            <div id="sale2" class="sale">SALE!</div>
            <i class="fa-solid fa-magnifying-glass" id="search"></i>
        </div>

        <div id="productinfo">
            <div class="productname">
                <h2 style="font-size: 24px; font-weight: 600; font-family: 'Poppins', sans-serif; letter-spacing: 1px; color:#333;">
                    {{$product->prd_name}}</h2>
                <i class="fa-solid fa-chevron-right"></i>
            </div>

            <div class="price">
                <p style="font-size: 30px; font-family: 'Poppins', sans-serif; font-weight: 600;  margin: 4% 0px; color:#57bf6d; ">
                    <span>$ <span id="productpricemin">{{$product->prd_min_price}}</span></span>  <span id="productpricemax">– $  {{$product->prd_max_price}}</span></p>
                <p style="font-size: 14px ;  font-family: 'Poppins', sans-serif: #5f5f5f; margin-bottom: 4%;">{{ $product->prd_about }}</p>
            </div>

            <div id="option">

                @php
                    $pills = explode("*", $product->prd_qty);
                    $mg = explode("*", $product->prd_mg);
                @endphp
        
                <div class="quantity">
                    <p>Quantity</p>
                    <select name="quantity" id="pillsquantity">
                        <option value="0">Choose an option</option>
                        @foreach ($pills as $item)
                            <option value="{{ $item }}">{{ $item }}pills</option>
                        @endforeach
                    </select>
                </div>

                <div class="mg">
                    <p>MG</p>
                    <select name="mg" id="pillsmg">
                        <option value="0">Choose an option</option>
                        @foreach ($mg as $item)
                            <option value="{{ $item }}">{{ $item }}mg</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div id="addcart">
                <div class="addition">
                    <button id="minus" value="-1">-</button>
                    <div id="showvalue" step="1" inputmode="numeric">1</div>
                    <button id="plus" value="1" step="1">+</button>
                </div>

                <div class="cart">
                    <button style="cursor: pointer" type="button" name="cart_btn" data-productID="{{ $product->id }}"  id="addtocart" wire:click="toggleCart">ADD TO CART</button>
                </div>
            </div>


        </div>

        <div class="blank"></div>

    </div>

    <!-- cartwindow -->
    <livewire:cart />

    <div id="productdis">

        <div class="leftoption">
            <p id="discription">DESCRIPTION </p>
            <p id="additional">ADDITIONAL INFORMATION</p>
            <p id="review">REVIEWS</p>
        </div>

        <div class="rightdis">
            <div>
            @php
                print_r($product->prd_details);
            @endphp 
                <center><img src="{{ asset('img/pack.png')}}"></center>
            </div>

        </div>

        <div id="blank2"></div>

    </div>

</section>

@include('footer')
