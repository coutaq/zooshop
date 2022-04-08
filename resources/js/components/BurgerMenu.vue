<script setup>
import {ref} from 'vue'

const isActive = ref(false)
console.log(isActive.value)
const toggle = ()=>{
isActive.value = !isActive.value;
}
</script>
<template>
<div class="" @click="toggle">
Hover me
</div>
<div :class="{block:isActive, hidden:!isActive}">
iadhlkshdlashdj
</div>
</template>