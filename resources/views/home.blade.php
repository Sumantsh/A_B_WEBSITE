@include('header')
<section id="section">

    <div class="swiper-container">

        <div class="container cardslider swiper" id="cardslider">

            <div class="swiper-wrapper">

                <div class="slider swiper-slide slider1 ">
                    <img src="{{ asset('img/slider/one.jpg') }}" width="100%" alt="">
                </div>

                <div class="slider swiper-slide slider2 ">
                    <img src="{{ asset('img/slider/three.jpg') }}" width="100%" alt="">
                </div>

                <div class="slider swiper-slide slider3 ">
                    <img src="{{ asset('/img/slider/two (1).jpg') }}" width="100%" alt="">
                </div>

            </div>



            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination" style="bottom: 10px; color: black;"></div>

        </div>
    </div>



    <div id="afterslider">
        <div id="productwrapper">
            <div id="leftsideoffer">
                <div>
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <img src="{{ asset('/img/Screenshot_2022-10-02_at_11.52.57_PM-removebg-preview.png') }}"
                            width="80%" alt="">
                        <div
                            style="width: 50%; height: 1px; margin: 2% 0px; background-color: rgb(0, 0, 0); text-align: center;">
                        </div>

                        <div class="TESTIMONIALS">

                            <h2>TESTIMONIALS</h2>
                            <div class="testomonials_wrapper">
                                <div class="review">
                                    <li>
                                        Highest quality at a lowest price I would consider sane. You know how to win clientsRa
                                    </li>
                                </div>
                                <div class="client">
                                    <p>Richard 28year</p>
                                </div>
                                <div class="review">
                                    <li>
                                        Highest quality at a lowest price I would consider sane. You know how to win clientsRa
                                    </li>
                                </div>
                                <div class="client">
                                    <p>Richard 28year</p>
                                </div>
                                <div class="review">
                                    <li>
                                        Highest quality at a lowest price I would consider sane. You know how to win clientsRa
                                    </li>
                                </div>
                                <div class="client">
                                    <p>Richard 28year</p>
                                </div>
                                <div class="review">
                                    <li>
                                        Highest quality at a lowest price I would consider sane. You know how to win clientsRa
                                    </li>
                                </div>
                                <div class="client">
                                    <p>Richard 28year</p>
                                </div>
                                <div class="review">
                                    <li>
                                        Highest quality at a lowest price I would consider sane. You know how to win clientsRa
                                    </li>
                                </div>
                                <div class="client">
                                    <p>Richard 28year</p>
                                </div>
                                <div class="review">
                                    <li>
                                        Highest quality at a lowest price I would consider sane. You know how to win clientsRa
                                    </li>
                                </div>
                                <div class="client">
                                    <p>Richard 28year</p>
                                </div>
                                <div class="review">
                                    <li>
                                        Highest quality at a lowest price I would consider sane. You know how to win clientsRa
                                    </li>
                                </div>
                                <div class="client">
                                    <p>Richard 28year</p>
                                </div>
                                <div class="review">
                                    <li>
                                        Highest quality at a lowest price I would consider sane. You know how to win clientsRa
                                    </li>
                                </div>
                                <div class="client">
                                    <p>Richard 28year</p>
                                </div>
                                <div class="review">
                                    <li>
                                        Highest quality at a lowest price I would consider sane. You know how to win clientsRa
                                    </li>
                                </div>
                                <div class="client">
                                    <p>Richard 28year</p>
                                </div>
                                <div class="review">
                                    <li>
                                        Highest quality at a lowest price I would consider sane. You know how to win clientsRa
                                    </li>
                                </div>
                                <div class="client">
                                    <p>Richard 28year</p>
                                </div>
                            </div>

                        </div>

                        <div
                        style="width: 50%; height: 1px; margin: 4% 0px; background-color: rgb(0, 0, 0); text-align: center;">
                    </div>

                        <div class="conatctus">
                            <a class="contact" href="contact">
                                <img src="{{asset ('img/contact.png')}}" alt="">
                            </a>
                        </div>

                        <div
                            style="width: 50%; height: 1px; margin: 7% 0px; background-color: rgb(0, 0, 0); text-align: center;">
                        </div>

                        <img src="{{ asset('img/s-l400.jpeg') }}" width="70%" alt="">
                        <div
                            style="width: 50%; height: 1px; margin: 10% 0px; background-color: rgb(0, 0, 0); text-align: center;">
                        </div>
                        <img src="{{ asset('img/247.png') }}" width="30%" alt="">
                        <div
                            style="width: 50%; height: 1px; margin: 10% 0px; background-color: rgb(0, 0, 0); text-align: center;">
                        </div>
                        <p style="font-family: robotsan;">login/register</p>
                    </div>


                    <form style="margin-top: 4%; background:red;width:80%:margin:">
                        <div>
                            <label style="font-size: 14px;  font-family: sans-serif;  font-weight: 400;" for="username">
                                Username or Email Address
                            </label>
                            <input type="text" name="Username"
                                style="width: 95%; height: 40px; border: none; outline: 1px solid black; margin-bottom: 3%;">
                        </div>

                        <div>
                            <label for="password" style="font-size: 14px; font-family: sans-serif; font-weight: 400;">
                                Password
                            </label>
                            <input type="password" name="password"
                                style="width: 95%; height: 40px; border: none; outline: 1px solid black;margin-bottom: 3%;">
                        </div>

                        <div>
                            <input type="checkbox" name="Remember" id="Remember"> <span
                                style="font-size: 12px;">Remember Me</span>
                        </div>

                        <div>
                            <button type="submit"
                                style="border: none; background: #0042AF; margin-top: 2%; text-transform: uppercase; font-size: 12px; font-weight: 600; padding: 8px 12px; width: 25%; color: white;">Log
                                in</button>
                        </div>

                        <div>
                            <a href="#" id="lost" style="color:rgba(0 0 0 /.7); font-size: 12px;">Lost your
                                password?<a><a href="" style="display: inline;">|Register</a>
                        </div>
                    </form>

                    <div
                        style="width: 50%; height: 1px; margin: 10% 0px; background-color: rgb(0, 0, 0); text-align: center;">
                    </div>

                    <a href="index.html" style="width: 90%;">
                        <img src="{{ asset('img/cropped-EDLifecare-logo.png') }}" width="90%" alt="">
                    </a>
                </div>

            </div>

            <div id="rightsideproduct">

                @foreach ($products as $product)
                
              
                    <div class="productcard">
                        <div class="productimg">
                            <img src="{{ asset ($product->prd_image) }}" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            {{-- <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p> --}}
                                <p>{{$product->prd_dis}}</p>
                        </div>

                        <div class="productname">{{$product->prd_name}}</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>${{$product->prd_min_price}} - ${{$product->prd_max_price}}</p>
                        </div>


                      

                       

                        <a href="/singleproduct?id={{$product->id}}" id="buybutton">Select options</a>

                    </div>
                @endforeach
                


                {{-- <div class="row row1">

                    <div id="productcard">

                        <div class="productimg">
                            <img src="{{ asset('img/products/Viagra.jpg') }}" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Viagra</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$43.44 - $343.70</p>
                        </div>

                        <a href="productspage" id="buybutton">Select options</a>



                    </div>


                    <div id="productcard">

                        <div class="productimg">
                            <img src="{{ asset('img/products/Viagra-–-professional.jpg') }}" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Viagra – professional </div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$52.6 - $162.40</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                    

                </div> --}}



                {{-- <div class="row row2">

                    <div id="productcard">
                        <div class="productimg">
                            <img src="{{ asset('img/products/Viagra-With-Dapoxetine.jpg') }}" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Viagra With Dapoxetine</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$122.64 - $905.80</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Levitra.jpg" width="60%" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Levitra</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$59.80 - $425.40</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Cialis-Super-Active.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Cialis Super Active</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$65.50 - $335.70</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                </div> --}}

                {{-- <div class="row row3">

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Cialis-With-Dapoxetine.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Cialis With Dapoxetine</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$96.40 - $420.40</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Viagra-Super-Active.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Viagra Super Active</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$54.70 - $465.90</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Sildalist.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Sildalist</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$49.50 - $385.70</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                </div> --}}

                {{-- <div class="row row4">

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Brand-Viagra.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Brand Viagra</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$90.00 - $649.80</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Viagra-Soft-Tabs.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Viagra Soft Tabs</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$59.00 - $68.00</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Brand-Cialis.jpg " alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Brand Cialis</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$115.00 - $699.40</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                </div> --}}


                {{-- <div class="row row5">

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Suhagra.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Suhagra</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$55.10 - $175.50</p>
                        </div>

                        <a href="Productspage.html" id="buybutton" id="buybutton"> Select options</a>
                    </div>

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Cialis-Professional.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Cialis Professional</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$65.00 - $615.00</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Viagra-Plus.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Viagra Plus</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$65.10 - $240.40</p>
                        </div>

                        <a href="Productview" id="buybutton"> Select options</a>
                    </div>

                </div> --}}

                {{-- <div class="row row6">

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Viagra-With-Fluoxetine.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Viagra With Fluoxetine</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$65.40 - $385.00</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Cialis-Soft-Tabs.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Cialis Soft Tabs</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$45.20 - $365.40</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Cialis-Oral-Jelly.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Cialis Oral Jelly</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$66.00</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>
                </div> --}}

                {{-- <div class="row row7">

                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Levitra-Professional.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Levitra Professional</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$105.20 - $462.50</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>


                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Levitra-With-Dapoxetine.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Levitra With Dapoxetine</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$220.30 - $1099.10</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>


                    <div id="productcard">
                        <div class="productimg">
                            <img src="/static/img/products/Cialis-Oral-Jelly-orange.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Cialis Oral Jelly (orange)</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$70.60 - $348.50</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>

                </div> --}}

                {{-- <div class="row row8">

                    <div id="productcard" style="margin-bottom: 2%">
                        <div class="productimg">
                            <img src="/static/img/products/Levitra-Oral-Jelly.jpg" alt="">
                            <div class="sale">SALE!</div>
                        </div>

                        <div class="discription">
                            <p> <span> Brand Viagra,</span> <span>Viagra,</span> <span>Viagra – professional,</span>
                                <span>Viagra Plus</span></p>
                        </div>

                        <div class="productname">Levitra Oral Jelly</div>

                        <div class="price"
                            style="margin-top: 10%; color: #57BF6D; font-size: 18px; font-family: robotsan; ">
                            <p>$128.40 - $492.40</p>
                        </div>

                        <a href="Productspage.html" id="buybutton"> Select options</a>
                    </div>
                </div> --}}

            </div>
        </div>

    </div>



</section>

@include('footer')
