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

    await fetch("/add-to-cart", {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF_TOKEN': csrfToken
        },
        redirect: "follow"
    });
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

// alpine

async function remove(event, uid) {
    event.target.parentNode.parentNode.style.display = "none";
    const response = await fetch(`/remove-product/${uid}`);
    const json = await response.json();
    return json.data.length;
}

function payment(event, cartData) {
    event.preventDefault();
    let formdata = [];

    cartData.forEach((ele, index) => {
        const data = {
            x_fre: ele.prodID, // product ID
            asgf:  ele.mg,  // mg
            hg_e3: ele.pills, //pills,
            jaq_r: ele.qty
        }
        formdata = [...formdata, data];
    });

    fetch("http://127.0.0.1:3000/redirect").then(async (response) => {
        console.log(await response.json());
        window.location.href = `http://127.0.0.1:3000/pay?bsahd=${encodeURIComponent(JSON.stringify(formdata))}`;
    }).catch(err => console.log(err));
}