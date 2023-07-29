@include('header')


<section id="section">

    <div id="productdevider">

        <div class="productimg">



            <img src="/static/img/products/Levitra.jpg" alt="">
            <div id="sale2" class="sale">SALE!</div>
            <i class="fa-solid fa-magnifying-glass" id="search"></i>

        </div>



        <div id="productinfo">

            <div class="productname">
                <h2 style="font-size: 24px; font-weight: 600; font-family: robotsan; letter-spacing: 1px; color:#333;">
                    Levitra</h2>
                <i class="fa-solid fa-chevron-right"></i>
            </div>

            <div class="price">
                <p style="font-size: 30px; font-family: open; font-weight: 600;  margin: 4% 0px; color:#57bf6d; ">$
                    <span id="productpricein">59.80</span> – $ <span id="productpricein"> 425.40 </span></p>
                <p style="font-size: 14px ;  font-family: robotsan; color: #5f5f5f; margin-bottom: 4%;">Levitra is a
                    therapy for erectile dysfunction treatment.</p>
            </div>

            <div id="option">

                <div class="quantity">
                    <p>Quantity</p>
                    <select name="quantity" id="pillsquantity">
                        <option value="">Choose an option</option>
                        <option value="30pills">30pills</option>
                        <option value="60pills">60pills</option>
                        <option value="90pills">90pills</option>
                        <option value="1200pills">120pills</option>
                        <option value="180pills">180pills</option>
                        <option value="2700pills"> 270pills</option>
                        <option value="360pills">360pills</option>
                    </select>
                </div>



                <div class="mg">
                    <p>MG</p>
                    <select name="mg" id="pillsmg">
                        <option value="">Choose an option</option>
                        <option value="10">10mg</option>
                        <option value="20">20mg</option>

                    </select>
                </div>

            </div>

            <div id="addcart">

                <div class="addition">
                    <button id="minus" value="1">-</button>
                    <div id="showvalue" step="1" inputmode="numeric">1</div>
                    <button id="plus" value="1" step="1">+</button>
                </div>

                <div class="cart">
                    <button id="addtocart">ADD TO CART</button>
                </div>
            </div>


        </div>

        <div class="blank">

        </div>

    </div>

    <!-- cartwindow -->

    <div id="cartwindow">
        <div class="innerwindow">

            <div class="topwrapper">

                <div class="icon" style="position: relative;"><span><img src="/static/img/icon/bag.svg" width="30px"
                            style="position: relative;" alt=""> <span
                            style="position: absolute; right: 8%; top: 27%; ">1</span> </span></div>

                <div class="heading" style=" width: 55%;  padding: 0px 10px;">
                    <p>Your Cart</p>
                </div>

                <div class="cross" style="width:auto; cursor: pointer; ">
                    <i class="fa-solid fa-xmark"></i>
                </div>

            </div>


            <div id="productvalues">

                <div class="productimg">
                    <img src="/static/img/products/Levitra.jpg" alt="">
                </div>

                <div class="numberofitems">
                    <p style="font-family: robotsan; ">Levitra - <span id="mumberofpills">30 <span>pills,</span><br>
                            <span id="pillsmg">20 <span>mg</span></span> </span> </p>
                    <p><span id="itemsvalues">1</span> <span>X</span> <span>$ <span id="productprice">59.80</span>
                            <span>=</span> <span>$</span> <span id="totalprice">59.80</span> </span></p>
                </div>

                <div class="delete">
                    <i class="fa-regular fa-trash-can"></i>
                </div>

            </div>

            <div id="checkout">
                <div class="subtotal"> Subtotal: <span style="margin-left: 0%; color: #57BF6D;">$</span> <span
                        style="margin-left: -5px; color: #57BF6D;">86.88</span> </div>
                <div class="checkout">CHECKOUT</div>
                <div class="viewcart">VIEW CART</div>
                <div class="continushoping">CONTINUE SHOPPING</div>
            </div>



        </div>



    </div>

    <div id="carticon2">
        <img src="/static/img/icon/bagicon.svg" width="100%" alt="">
        <div
            style="position: absolute; background: black; border-radius: 50%; padding: 5px 10px; color: white; text-align: center; top: -12px; left: -7px; box-shadow: 2px 2px 4px rgba(0, 0, 0,.4) ; ">
            1</div>
    </div>

    <div id="productdis">

        <div class="leftoption">
            <p id="discription">DESCRIPTION </p>
            <p id="additional">ADDITIONAL INFORMATION</p>
            <p id="review">REVIEWS</p>
        </div>

        <div class="rightdis">
            <h2 style="font-family: open; color: #333; font-size: 20px; font-weight: 200; ">Description</h2>

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
                <img src="/static/img/pack.png" alt="">
            </div>


        </div>

        <div id="blank2"></div>

    </div>

</section>

@include('footer')
