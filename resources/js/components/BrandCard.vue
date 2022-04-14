<script setup>

const props = defineProps({
    brand: {},
});
let brand = JSON.parse(props.brand)
</script>
<template>
    <a :href="'brands/'+brand.id" class="flex col-span-6 lg:col-span-2 justify-start items-center gap-4">
        <span class='text-xl'>{{brand.title}}</span>
    </a>
</template>