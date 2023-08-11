const mgSelect = document.querySelector("#pillsmg");
const pillSelect = document.querySelector("#pillsquantity");
const addToCartBtn = document.querySelector("#addtocart");
const qty = document.querySelector("#showvalue");

// checkout button
const checkoutBtn = document.querySelector(".checkout");


var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

const increaseQtyFieldBtn = document.querySelector("#plus");
const decreaseQtyFieldBtn = document.querySelector("#minus");

mgSelect.addEventListener("click", updateButtonState);
pillSelect.addEventListener("click", updateButtonState);

function updateButtonState() {
    if (Number(mgSelect.options[mgSelect.selectedIndex].value) && Number(pillSelect.options[pillSelect.selectedIndex].value)) {
        addToCartBtn.removeAttribute("disabled");
    } else {
        addToCartBtn.setAttribute("disabled", "");
    }
}

const uid = () => {
    return Date.now().toString(36) + Math.floor(Math.pow(10, 12) + Math.random() * 9*Math.pow(10, 12)).toString(36);
}

updateButtonState();


addToCartBtn.addEventListener("click", async (e) => {
    e.preventDefault();
    const productID = addToCartBtn.dataset.productid;
    const mgValue = mgSelect.options[mgSelect.selectedIndex].value;
    const pillValue = pillSelect.options[pillSelect.selectedIndex].value;

    const data = {
        UID: uid(),
        prodID: productID,
        mg: mgValue,
        pills: pillValue,
        qty: Number(qty.textContent)
    }

    fetch("/add-to-cart", {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF_TOKEN': csrfToken
        },
        redirect: "follow"
    }).then(async (response) => console.log(await response.json())).catch(err => console.error(err));
})

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

checkoutBtn.addEventListener("click", (e) => {
    const formdata = [];

    fetch("http://localhost:3000/redirect", {
        method: "POST",
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF_TOKEN': csrfToken 
        },
        redirect: "follow"
    }).then(async (response) => {
        console.log(await response.json());
        window.location.href = "http://localhost:3000/pay";
    }).catch(err => console.log(err));
})
