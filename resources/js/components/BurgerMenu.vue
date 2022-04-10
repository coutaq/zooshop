<script setup>
import { ref } from 'vue'

const isActive = ref(false)
console.log(isActive.value)
const toggle = () => {
    isActive.value = !isActive.value;
}
</script>
<template>
    <div class="relative my-auto user-select-none" @click="toggle" >
        <div class="duration-300 ease-in-out" :class="{ 'rotate-90': isActive, 'rotate-0':!isActive }">
            <i class="fas fa-bars h-6"></i>
        </div>
        <div
            class="absolute bg-white shadow-lg left-[-8rem] lg:left-[-3rem]"
            :class="{ block: isActive, hidden: !isActive }"
        >
            <div class="flex flex-col text-xl">
                <a class="nav-link hover:bg-slate-200 p-4" href="/login">Вход</a>

                <a class="nav-link hover:bg-slate-200 p-4" href="/register">Регистрация</a>

              
            </div>
        </div>
    </div>
</template>