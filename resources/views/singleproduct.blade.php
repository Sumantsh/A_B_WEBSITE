@include('header')

<section id="section" x-data="{
    cartData: [],
    showCart: false,
    cartItems: 0,
    getCartData() {
        fetch('/get-cart-data')
            .then((response) => response.json())
            .then((json) => {
                this.cartData = json.data;
                this.cartItems = this.cartData.length;
            });
    }
}" x-init="getCartData()">

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
                    <span id="productpricein">$ {{$product->prd_min_price}}</span>  <span id="productpricein">– $  {{$product->prd_max_price}}</span></p>
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
                        @foreach ($pills as $item)
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
                    <button style="cursor: pointer" type="button" name="cart_btn" data-productID="{{ $product->id }}"  id="addtocart" @click="function() {
                        getCartData(); 
                        showCart = true;
                    }">ADD TO CART</button>
                </div>
            </div>


        </div>

        <div class="blank"></div>

    </div>

    <!-- cartwindow -->

    <div id="cartwindow" x-show="showCart">

        <div class="innerwindow">
            <div class="topwrapper">
                <div class="icon" style="position: relative;"><span><img src="{{ asset ('img/icon/bag.svg') }}" width="30px"
                            style="position: relative;" alt=""> <span
                            style="position: absolute; right: 10%; top: 27%; ">1</span> </span></div>

                <div class="heading" style=" width: 55%;  padding: 0px 10px;">
                    <p>Your Cart</p>
                </div>

                <div class="cross" style="width:auto; cursor: pointer; ">
                    <i class="fa-solid fa-xmark"></i>
                </div>

            </div>

            <template x-for="data in cartData">
                <div id="productvalues">
                    <div class="productimg">
                        <img x-bind:src="data.prd_image"  alt="">
                    </div>
    
                    <div class="numberofitems">
                        <p style="font-family: 'Poppins', sans-serif; "><span x-text="data.prd_name"></span> - <span id="mumberofpills" x-text="data.pills"></span><span> pills,</span><br>
                        <span id="pillsmg" x-text="data.mg"></span><span> mg</span> </p>
                        <p><span id="itemsvalues" x-text="data.qty"></span> <span>X</span> <span>$ <span id="productprice">59.80</span>
                        <span>=</span> <span>$</span> <span id="totalprice">59.80</span> </span></p>
                    </div>
    
                    <div class="delete" @click="function() {
                        cartItems = remove($event, data.UID);
                    }">
                        <i class="fa-regular fa-trash-can"></i>
                    </div>
                </div>
            </template>
            

            <div id="checkout" style="background: ">

                <div class="subtotal"> Subtotal: <span style="margin-left: 0%; color: #57BF6D;">$</span> <span style="margin-left: -5px; color: #57BF6D;">86.88</span> 
                </div>
                
            
            <div class="buttonwrapper">
                
                <div class="checkout" @click="payment($event, cartData)">
                    <a href="">CHECKOUT</a>
                </div>
                
                <div class="viewcart">
                    <a href="">VIEW CART</a>
                </div>

                <div class="continushoping">
                    <a href="">CONTINUE SHOPPING</a>
                </div>
                
            </div>
            </div>
        </div>
    </div>

    <div id="carticon2" @click="showCart = !showCart">
        <img src="{{ asset ('img/icon/bagicon.svg') }}" class="bagicon" alt="">
        <div
            style="position: absolute; background: black; border-radius: 50%; width:40px;height:40px; color: white; text-align: center; top: -12px; left: -7px; box-shadow: 2px 2px 4px rgba(0, 0, 0,.4) ; display:flex; justify-content:center; align-items:center; ">
            <span x-text="cartItems"></span></div>
    </div>


    <div id="productdis">

        <div class="leftoption">
            <p id="discription">DESCRIPTION </p>
            <p id="additional">ADDITIONAL INFORMATION</p>
            <p id="review">REVIEWS</p>
        </div>

        <div class="rightdis">
            {{-- <h2 style="font-family: open; color: #333; font-size: 20px; font-weight: 200; ">Description</h2>

            <h2 style="font-family: open,  sans-serif;
            font-size: 16px;">Levitra (Vardenafil)</h2>

            <h2>General information</h2>

            <p>Levitra is a therapy for erectile dysfunction treatment (male impotence). Its active ingredient is
                Vadernafil. Vardenafil belongs to the class of medications called phosphodiesterase type 5 inhibitors.
                The medicine allows increase blood flow into your penis to achieve and maintain erection during sexual
                intercourse.</p>

            <h2>Directions</h2>

            <p>Levitra comes as 20 mg pill. The recommended initial dosage is 10 mg. It should be taken an hour before
                intercourse. If there are no side effects you dosage can be increased up to 20 mg. You shouldn’t take
                more that 1 pill per day. This medication has been shown to be effective within 15 minutes of taking the
                tablet, and lasts up to 10 hours later.</p>
            <h2>Precautions</h2>

            <p>Before starting your treatment with Levitra you should tell your doctor about all the conditions you may
                have and especially about the following: kidney or liver problems, a bleeding disorder, stomach ulcer,
                or retinitis pigmentosa, allergic reaction to any medicine, deformation of the penis such as angulation,
                cavernous fibrosis (Peyronie’s disease), sickle-cell anemia, multiple myeloma, leukemia. Because alcohol
                can make it more difficult to get an erection, do not drink large amounts of alcohol before sexual
                activity.</p>

            <h2>Contraindications</h2>

            <p>It is contraindicated to take Levitra if you have sensitivity to its ingredients, if you had organic
                nitrates treatment or took HIV protease inhibitors such as indinavir and ritonavir, if you are less than
                16 years old.</p>


            <h2>
                Possible side effect
            </h2>

            <p>
                Headache, flushing (hyperemia of the person), dizziness, temporary memory loss, diarrhea, nausea, nasal
                congestion are the common side effects. Levitra is usually well tolerated. If you have any of the
                following rare side effects photosensitivity of skin, hypertension, back pain, watery eyes, hypotension,
                myalgia, priapism, erection that lasts longer than 4 hours, irregular heartbeat, or shortness of breath,
                allergic reaction (e.g., rash, itching), you should consult with you doctor.
            </p>

            <h2>
                Drug interaction
            </h2>

            <p>
                Before starting your trearment with Levitra tell your doctor about all the medicines you are taking,
                especially about erythromycin, ketoconazole (Nizoral), itraconazole (Sporanox), indinavir (Crixivan) and
                ritonavir (Norvir), alpha-blocking drugs (terazosin or Hytrin), anti-arrhythmia medications (amiodarone,
                procainamide, quinidine), clarithromycin. The patients who take organic nitrates can’t use Levitra.
            </p>

            <h2>
                Missed dose
            </h2>

            <p>Levitra is used when it’s needed, so it’s unlikely to miss a dose.</p>

            <h2>Overdose</h2>

            <p>If you think you have overdosed the medicine seek emergency medical help at once. The overdose symptoms
                are sore back, pain in the jaw or arm, blindness, blurred vision, back pain, muscle pain, pain in the
                chest or discomfort, decreased vision.</p>

            <h2>Storage</h2>

            <p>Store at room temperature between 15-30 C (59-86 F) away from children, pets, moisture and sunlight.</p>

            <h2>Note</h2>

            <p>The information presented at the site has a general character. Note please this information cannot be
                used for self-treatment and self diagnosis. You should consult with your doctor or health care adviser
                regarding any specific instructions of your condition. The information is reliable, but we concede it
                could contain mistakes. We are not responsible for any direct, indirect, special or other damage caused
                by use of this information on the site and also for consequences of self-treatment.</p>

            <h2>Packaging info</h2>

            <p>Your order will be packed safely and secure and dispatched within 24 hours.
                This is how your parcel will look like, the images are photographs of real shipments.
                It has the size of a normal protected envelope and it does not disclose its contents.</p>

            <div class="pack">
                <img src="{{ asset ('img/pack.png')}}" alt="">
            </div> --}}


            @php
                print_r($product->prd_details);
            @endphp


        </div>

        <div id="blank2"></div>

    </div>

</section>

@include('footer')
