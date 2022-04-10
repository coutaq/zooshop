<script setup>
import { defineProps } from 'vue'
import { ref } from 'vue'

const isActive = ref(false)
console.log(isActive.value)
const toggle = () => {
    isActive.value = !isActive.value;
}
const props = defineProps(['user'])
</script>
<template>
    <div class="relative my-auto user-select-none" @click="toggle">
        <div class="duration-300 ease-in-out h-6 cursor-pointer" :class="{ 'text-blue-700': isActive, 'rotate-0':!isActive }">
       
       <i class="fas fa-user"></i>
       <span class="text-lg ml-2 user-select-none" onselectstart="return false">{{user.name}}</span>
           
        </div>
        <div
            class="absolute bg-slate-50 shadow-xl left-[-1rem] top-8"
            :class="{ block: isActive, hidden: !isActive }"
        >
            <div class="flex flex-col text-xl">
                <a class="nav-link hover:bg-slate-200 p-4 px-6" href="/login">Профиль</a>

                <a class="nav-link hover:bg-slate-200 p-4 px-6" href="/register">Заказы</a>
                 <a class="nav-link hover:bg-slate-200 p-4 px-6"  href="/logout">Корзина</a>
<hr/>
<button form="logout-form" type='submit' class="nav-link hover:bg-slate-200 p-4 px-6">Выход</button>
<!-- <a class="" href="/logout">Выход</a> -->
              
            </div>
        </div>
    </div>
</template>