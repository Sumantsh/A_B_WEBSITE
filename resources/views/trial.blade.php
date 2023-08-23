<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Trial</title>
</head>
<body>
    <div x-data="{
        show: false,
        cartData: [],
        getCartData() {
            return new Promise((resolve, reject) => {
                resolve();
            })
            {{-- this.cartData = ['apple', 'banana', 'guava', 'grapes']; --}}
        },
        resolve() {
            setTimeOut(() => {
                console.log('hello');
            }, 3000)
        }
    }">

    <button @click="async function() {
        console.log(await getCartData());
        show = true
    }">Add</button>

    <button @click="show = !show">Show</button>

    <div x-show="show">
        <template x-for="item in cartData">
            <span x-text="item"></span>
        </template>
    </div>

</div>
</body>
</html>