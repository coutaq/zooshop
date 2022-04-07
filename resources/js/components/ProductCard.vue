<script setup>

const props = defineProps({
    product: {},
});
let product = JSON.parse(props.product)
console.log(product)
</script>
<template>
   
    <div
        class="rounded-lg shadow-lg bg-white max-w-sm hover:shadow-2xl hover:scale-105 duration-300"
    >
            <img
                class="rounded-t-lg"
                :src="product.image"
            
            />
        <div class="p-6">
            <h5 class="text-gray-600 text-md font-light">{{product.subcategory.category.title}}</h5>
            <h5 class="text-gray-900 text-xl font-medium mb-2">{{product.title}}</h5>
            <p class="text-emerald-700 text-xl my-2">
                {{product.price}} руб.
            </p>
        </div>
        <div class="flex justify-between items-center p-6">
            <a href="#" class="text-blue-600 text-lg font-bold">Узнать больше</a>
            <button
                type="button"
                class="inline-block px-6 py-2.5 bg-amber-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-amber-700 hover:shadow-lg focus:bg-amber-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-amber-800 active:shadow-lg transition duration-150 ease-in-out"
            ><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
        </div>
    </div>
</template>