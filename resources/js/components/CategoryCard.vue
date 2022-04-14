<script setup>

const props = defineProps({
    category: {},
});
let category = JSON.parse(props.category)
</script>
<template>
    <a :href="'categories/'+category.id" class="flex col-span-12 lg:col-span-4 justify-start items-center gap-4">
        <span class='font-regular text-2xl'>{{category.title}}</span>
        <img class="w-32 aspect-square ml-auto object-cover" :src="category.image"/>
    </a>
</template>