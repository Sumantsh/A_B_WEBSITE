const mgSelect = document.querySelector("#pillsmg");
const pillSelect = document.querySelector("#pillsquantity");
const addToCartBtn = document.querySelector("#addtocart");
const addToCartSample = document.querySelector("#addtocartsample");
const qty = document.querySelector("#showvalue");
const priceMin = document.querySelector("#productpricemin");

var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

const increaseQtyFieldBtn = document.querySelector("#plus");
const decreaseQtyFieldBtn = document.querySelector("#minus");

if(window.location.pathname === "/singleproduct") {
    mgSelect.addEventListener("click", updateButtonState);
    pillSelect.addEventListener("click", updateButtonState);

    function updateButtonState() {
        if (Number(mgSelect.options[mgSelect.selectedIndex].value) !== 0 && Number(pillSelect.options[pillSelect.selectedIndex].value) !== 0) {
            addToCartBtn.removeAttribute("disabled");
        } else {
            addToCartBtn.setAttribute("disabled", "");
        }
    }

    addToCartBtn.addEventListener("click", async (e) => {
        e.preventDefault();
        const productID = addToCartBtn.dataset.productid;
        const mgValue = mgSelect.options[mgSelect.selectedIndex].value;
        const pillValue = pillSelect.options[pillSelect.selectedIndex].value;
        const price = priceMin.textContent;
    
        const data = {
            UID: uid(),
            prodID: productID,
            mg: mgValue,
            pills: pillValue,
            qty: Number(qty.textContent),
            price: price
        }
    
        const response = await fetch("/add-to-cart", {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF_TOKEN': csrfToken
            },
            redirect: "follow"
        });
        const json = await response.json();
        if(json.msg == "Product added to the cart") {
            Livewire.emit('updateComponent');
        }
    });


    increaseQtyFieldBtn.addEventListener("click", updateQtyField);
    decreaseQtyFieldBtn.addEventListener("click", updateQtyField);

    function updateQtyField(e) {
        if(Number(e.target.value) === -1 && Number(qty.textContent) > 0) {
            qty.textContent = Number(qty.textContent) - 1;
        } 
        if(Number(e.target.value) === 1) {
            qty.textContent = Number(qty.textContent) + 1;
        }
    }
    updateButtonState();
}






const uid = () => {
    return Date.now().toString(36) + Math.floor(Math.pow(10, 12) + Math.random() * 9*Math.pow(10, 12)).toString(36);
}


if(window.location.pathname === "/sample") {
    addToCartSample.addEventListener("click", async (e) => {
        e.preventDefault();
        const data = {
            UID: uid(),
            prodID: addToCartSample.dataset.productid,
            mg: 1,
            pills: 1,
            qty: 1,
            price: addToCartSample.dataset.productprice
        }
    
        const response = await fetch("/add-to-cart", {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF_TOKEN': csrfToken
            },
            redirect: "follow"
        });
        const json = await response.json();
        if(json.msg == "Product added to the cart") {
            Livewire.emit('updateComponent');
        }
    });
}


document.addEventListener('livewire:load', function () {
    let hookExecutionCount = 0;
    Livewire.hook('element.initialized', (el, component) => {
        if(hookExecutionCount < 1) {
            const checkoutBtn = el.querySelector(".checkout");
            if(checkoutBtn) {
                checkoutBtn.addEventListener("click", (e) => payment(e));
            }
            hookExecutionCount++;
        }
    });
});


async function payment(event) {
    event.preventDefault();
    let formdata = [];

    const response = await fetch("/get-cart-data");
    const json = await response.json();
    const cartData = json.data;

    cartData.forEach((ele, index) => {
        const data = {
            x_fre: ele.prodID, // product ID
            asgf:  ele.mg,  // mg
            hg_e3: ele.pills, //pills,
            jaq_r: ele.qty,
            price: ele.price
        }
        formdata = [...formdata, data];
    });

    fetch("http://127.0.0.1:3000/redirect").then(async (response) => {
        console.log(await response.json());
        window.location.href = `http://127.0.0.1:3000/pay?bsahd=${encodeURIComponent(JSON.stringify(formdata))}`;
    }).catch(err => console.log(err));
}